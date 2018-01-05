<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Preference_html
{
    public function index($r){
        if(isset($r) && !empty($r)){
            $row=$r;
        }
        else{
            $row='';
        }
        ?>
        <li>
            <div class="left-content">
                <label>Please select home page update interval</label>
                <span class="help-button"><i class="icon ion-help"></i></span>
                <div class="help-wrapper">
                    This is needed to calculate the sales statics,items statics etc.
                </div>
            </div>
            <div class="right-content">
                <label class="select-label">
                    <select class="select" name="update_interval">
                        <option value="" <?php echo ($row->value=='1') ? 'selected' : '' ?>></option>
                    </select>
                </label>
            </div>
        </li><hr>
        <li>
            <div class="left-content">
                <label>Please provide minimum product availabilty to mark a product as Cirtical Product</label>
                <span class="help-button"><i class="icon ion-help"></i></span>
                <div class="help-wrapper">
                    This is needed to calculate the sales statics,items statics etc.
                </div>
            </div>
            <div class="right-content">
                <input type="text" id="custom-input" class="inputs" name="min_available" value="<?php echo isset($row->minimum_order) ? $row->minimum_order : '' ; ?>" >
            </div>
        </li>
        <li>
            <div class="left-content">
                <label>Enable discount for every product in the stock</label>
                <span class="help-button"><i class="icon ion-help"></i></span>
                <div class="help-wrapper">
                    This is needed to calculate the sales statics,items statics etc.
                </div>
            </div>
            <div class="right-content">
                <label class="select-label">
                    <select class="select" name="discount_on">
                    </select>
                </label>
            </div>
        </li>
        <li>
            <div class="left-content">
                <label>Enable tax for every product in the stock</label>
                <span class="help-button"><i class="icon ion-help"></i></span>
                <div class="help-wrapper">
                    This is needed to calculate the sales statics,items statics etc.
                </div>
            </div>
            <div class="right-content">
                <label class="select-label">
                    <select class="select" name="tax_on">
                    </select>
                </label>
            </div>
        </li>
        <li>
            <div class="left-content">
                <label>Calculate product availaibilty from Purchase Orders & Returns</label>
                <span class="help-button"><i class="icon ion-help"></i></span>
                <div class="help-wrapper">
                    This is needed to calculate the sales statics,items statics etc.
                </div>
            </div>
            <div class="right-content">
                <label class="select-label">
                    <select class="select" name="product_available">
                    </select>
                </label>
            </div>
        </li>
        <li>
            <div class="left-content">
                <label>Enable composite product</label>
                <span class="help-button"><i class="icon ion-help"></i></span>
                <div class="help-wrapper">
                    This is needed to calculate the sales statics,items statics etc.
                </div>
            </div>
            <div class="right-content">
                <label class="select-label">
                    <select class="select" name="composite">
                    </select>
                </label>
            </div>
        </li><hr>
        <li>
            <div class="left-content">
                <label>Do you want to sell the products online only</label>
                <span class="help-button"><i class="icon ion-help"></i></span>
                <div class="help-wrapper">
                    This is needed to calculate the sales statics,items statics etc.
                </div>
            </div>
            <div class="right-content">
                <label class="select-label">
                    <select class="select" name="sell_online">
                    </select>
                </label>
            </div>
        </li>
        <li>
            <div class="left-content">
                <label>Sales target(quantity) of a product to call as Trending</label>
                <span class="help-button"><i class="icon ion-help"></i></span>
                <div class="help-wrapper">
                    This is needed to calculate the sales statics,items statics etc.
                </div>
            </div>
            <div class="right-content">
                <input type="text" id="custom-input" class="inputs" name="trend_num" value="<?php echo isset($row->minimum_order) ? $row->minimum_order : '' ; ?>" >
            </div>
        </li>
        <li>
            <div class="left-content">
                <label>Maximum quantity of the product a customer can add to cart</label>
                <span class="help-button"><i class="icon ion-help"></i></span>
                <div class="help-wrapper">
                    This is needed to calculate the sales statics,items statics etc.
                </div>
            </div>
            <div class="right-content">
                <input type="text" id="custom-input" class="inputs" name="max_oncart" value="<?php echo isset($row->minimum_order) ? $row->minimum_order : '' ; ?>" >
            </div>
        </li>
        <li>
            <div class="left-content">
                <label>Maximum cart price for the order</label>
                <span class="help-button"><i class="icon ion-help"></i></span>
                <div class="help-wrapper">
                    This is needed to calculate the sales statics,items statics etc.
                </div>
            </div>
            <div class="right-content">
                <input type="text" id="custom-input" class="inputs" name="max_cart_price" value="<?php echo isset($row->minimum_order) ? $row->minimum_order : '' ; ?>" >
            </div>
        </li>
        <li>
            <div class="left-content">
                <label>Is your order tax exclusive or inclusive</label>
                <span class="help-button"><i class="icon ion-help"></i></span>
                <div class="help-wrapper">
                    This is needed to calculate the sales statics,items statics etc.
                </div>
            </div>
            <div class="right-content">
                <label class="select-label">
                    <select class="select" name="tax_type">
                    </select>
                </label>
            </div>
        </li>
        <li>
            <div class="left-content">
                <label>Coupon can be redeemed at the time of checkout</label>
                <span class="help-button"><i class="icon ion-help"></i></span>
                <div class="help-wrapper">
                    This is needed to calculate the sales statics,items statics etc.
                </div>
            </div>
            <div class="right-content">
                <label class="select-label">
                    <select class="select" name="coupon_redeem">
                    </select>
                </label>
            </div>
        </li>
        <li>
            <div class="left-content">
                <label>How you like to delivery the product</label>
                <span class="help-button"><i class="icon ion-help"></i></span>
                <div class="help-wrapper">
                    This is needed to calculate the sales statics,items statics etc.
                </div>
            </div>
            <div class="right-content">
                <label class="select-label">
                    <select class="select" name="product_delivery">
                    </select>
                </label>
            </div>
        </li>
        <li>
            <div class="left-content">
                <label>How you like to send the invoice to the customer</label>
                <span class="help-button"><i class="icon ion-help"></i></span>
                <div class="help-wrapper">
                    This is needed to calculate the sales statics,items statics etc.
                </div>
            </div>
            <div class="right-content">
                <label class="select-label">
                    <select class="select" name="invoice">
                    </select>
                </label>
            </div>
        </li>
        <li>
            <div class="left-content">
                <label>How you like to get the payment from customer</label>
                <span class="help-button"><i class="icon ion-help"></i></span>
                <div class="help-wrapper">
                    This is needed to calculate the sales statics,items statics etc.
                </div>
            </div>
            <div class="right-content">
                <label class="select-label">
                    <select class="select" name="payment_method">
                        <option value=""></option>
                    </select>
                </label><br>
            </div>
        </li>
        <?php
    }

}