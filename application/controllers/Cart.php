<?php
/**
 * Created by PhpStorm.
 * User: samir
 * Date: 12/7/2017
 * Time: 4:20 PM
 */

class Cart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('cart_model');
        date_default_timezone_set('Asia/Kolkata');

    }
    function index(){
        $this->data = array(
            'title' => "All Items",
            'css'=>array(base_url('public/css/cart.css'),base_url('public/css/main.css'))
        );
        $this->load->view('header.php',$this->data);
        $this->load->view('cart.php');
        $this->load->view('footer.php');
    }
    public function solditems(){
        $id=isset($_GET['id']) ? $_GET['id'] : '';
        $type=isset($_GET['type']) ? $_GET['type'] : '';
        $compid=$_SESSION['company_id'];
        $result=$this->cart_model->getsolditems($compid,$id);
        $customcharge=$this->cart_model->getothercharges($compid,$id);
        $amount_due=$this->cart_model->getvaluebyid($compid,'salesorder','order_id',$id,'amount_due');;
        $items=NULL;
        $summery=NULL;
        $customlabel=NULL;

        $totalamount=0;
        $totaltax=0;
        $subtotal=0;
        $totaldiscount=0;
        $totaloffer=0;
        $quantity=0;
        $displayamount=0;
        if(count($result) > 0){
            $status=true;
            foreach ($result as $row){
                $qty =$row->quantity;
                $images=explode('||',$row->images);
                $image=!empty($images[0]) ? "https://res.cloudinary.com/soppware/image/upload/c_thumb,h_150/v1505425950/". $images[0] : base_url('public/assets/products/box.png') ;

                $retailprice=floatval($row->price);
                $discount=!empty($row->discount) ? floatval($row->discount) : '0' ;
                $offerdiscount=!empty($row->offer_discount) ? floatval($row->offer_discount) : '0' ;
                $tax=floatval($retailprice-$discount-$offerdiscount)*($row->tax_rate/100);
                $displayamount=floatval($retailprice-$discount-$offerdiscount);
                $total_amount=floatval($retailprice-$discount-$offerdiscount+$tax);

                $quantity += $qty;
                $subtotal+=round($retailprice*$qty,2);
                $totaldiscount+=round($discount*$qty,2);
                $totaloffer+=round($offerdiscount*$qty,2);
                $totaltax+=round($tax*$qty,2);
                $totalamount+=round($total_amount*$qty);

                if($discount > 0 && $offerdiscount > 0){
                    $discounlabel=' <label class="item-label item-discount">Inclusive discount &#8377;<span class="discount-value">'.number_format($discount*$qty,2).'</span> & offer discount &#8377;<span class="offer-discount-value">'.number_format($offerdiscount*$qty).'</span>  </label>';
                }
                else if($discount > 0 && $offerdiscount <=0){
                    $discounlabel=' <label class="item-label item-discount">Inclusive discount &#8377;<span class="discount-value">'.number_format($discount*$qty,2).'</span> </label>';
                }
                else if($discount <= 0 && $offerdiscount > 0){
                    $discounlabel=' <label class="item-label item-discount">Inclusive offer discount &#8377;<span class="offer-discount-value">'.number_format($offerdiscount*$qty,2).'</span> </label>';
                }
                else{
                    $discounlabel='';
                }
                $items.=$this->itemlisthtml_checkout($row,$image,$displayamount,$qty,$discounlabel,$tax,$discount,$offerdiscount);
            }
            /*Summery*/
            if(count($customcharge) > 0){
                foreach ($customcharge as $charge){
                    $totalamount +=$charge->amount;
                    $customlabel.='<li class="summery-li">
            <span class="left-elem">'.ucwords($charge->label).'</span>
            <span class="right-elem">&#8377;<span class="value">'.number_format($charge->amount,2).'</span></span>
            </li>';
                }
            }
            $summery.='<li class="quantity-li">
            <span class="left-elem ">Quantity:</span>
            <span class="right-elem"><span class="value">'.$quantity.'</span></span>
            </li>
            <li class="summery-li subtotal-li">
            <span class="left-elem">Subtotal Amount:</span>
            <span class="right-elem">&#8377;<span class="value">'.number_format($subtotal,2).'</span></span>
            </li>
             <li class="summery-li discount-li">
            <span class="left-elem">Total discount:</span>
            <span class="right-elem">&#8377;<span class="value">'.number_format($totaldiscount+$totaloffer,2).'</span></span>
            </li>';
            $summery.='<li class="summery-li tax-li">
            <span class="left-elem">Estimated Tax:</span>
            <span class="right-elem">&#8377;<sapn class="value">'.number_format($totaltax,2).'</span></span>
            </li>';
            $summery.=$customlabel;
            $summery.='<li class="grand-total">
            <span class="left-elem ">Grand Total:</span>
            <span class="right-elem">&#8377;'.number_format(round($totalamount)).'</span>
            </li>';
            if($amount_due > 0 && $type!='checkout'){
                $summery.='<li>
            <span class="left-elem">Amount Paid:</span>
            <span class="right-elem">&#8377;'.number_format(round($totalamount) - round($amount_due)).'</span>
            </li><li class="amount-payable">
            <span class="left-elem">Amount Payable:</span>
            <span class="right-elem">&#8377;'.number_format(round($amount_due)).'</span>
            </li>';
            }
        }
        else{
            $status=false;
        }
        echo json_encode(array('status'=>$status,'items'=>$items,'summary'=>$summery,'totalamount'=>round($totalamount)));
    }
    function itemlisthtml_checkout($row,$image,$total_amount,$qty,$discounlabel,$tax,$discount,$offerdiscount){
        $quantitylabel='';
        for($i=0;$i<20;$i++){
            $quantitylabel.="<li data-value='".($i+1)."'>".($i+1)."</li>";
        }
        $html='<div class="item-bottom-container">
                                        <input type="hidden" class="item-id-input" name="item[]" value="'.$row->variant_id.'">
                                        <input type="hidden" class="item-price-input" name="price[]" value="'.$row->price.'">
                                        <input type="hidden" class="item-price-input" value="'.$total_amount.'">
                                        <input type="hidden" class="item-tax-input" name="tax[]" value="'.$tax.'">
                                        <input type="hidden" class="item-discount-input" name="discount[]" value="'.$discount.'">
                                        <input type="hidden" class="offer-discount-input" name="offer[]" value="'.$offerdiscount.'">

                                        <div class="image-wrapper"><img  src="'.$image.'"></div>
                                        <div class="item-content">
                                            <label class="main-label">'.$row->name.'</label>
                                            <label class="item-label item-id">'.$row->sku_no.'</label>
                                            <label class="item-label item-price">&#8377;<span class="value">'.number_format($total_amount*$qty,2).'</span>
                                                <div class="item-quantity">QTY:
                                                    <div class="drop-select quantity-select">
                                                        <ul>'.$quantitylabel.'</ul>
                                                        <input type="hidden" class="drop-input item-quantity-input" name="quantity[]" value="'.$qty.'">
                                                    </div>
                                                </div></label>
                                            '.$discounlabel.'
                                            <label class="item-label item-tax">'.$row->tax_code.' @ '. $row->tax_rate.'% :  &#8377;<span class="value">'.number_format($tax*$qty).'</span></label>
                                        </div>
                                        <div class="item-action">
                                            <span class="remove-button"><i class="material-icons">close</i></span>
                                        </div>
                                    </div>';
        return $html;
    }
}