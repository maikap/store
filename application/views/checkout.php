<script>
    $(document).ready(function(){
        var quick="<?php echo isset($_GET['quick']) ? $_GET['quick'] : 'false' ?>";
        var $maincontainer=$('#main-container');
        var lastScrollTop = 0;
        var oid="<?php echo isset($_GET['oid']) ? $_GET['oid'] : '' ?> ";
        var type="<?php echo isset($_GET['type']) ? $_GET['type'] : '' ?> ";
        var action="<?php echo isset($_GET['action']) ? $_GET['action'] : '' ?> ";
        var eid="<?php echo isset($_GET['eid']) ? $_GET['eid'] : '' ?> ";
        $(function(){
            fsheight();
            getcustomer(oid);
            if(quick==='true'){
                $('.permission-level-2').val('1');
                $('.permission-level-1').val('1');
                $('.block-header-3').trigger('click');
            }
        });
        $maincontainer.on('scroll',function () {
            $('.right-wrapper').css('top','0px');
        });
        $maincontainer.on('click','.block-header',function(){
            var id=$(this).data('id');
            if($(this).parent().hasClass('active-payment-option') ===false){
                if(id===1){
                    $('.block-content-wrapper .block-permission').val('0');
                    $('.checkout-block').removeClass('active-checkout-block');
                    $(this).parent().addClass('active-checkout-block');
                    $('.block-content-wrapper').stop(0).slideUp('fast');
                    $(this).parent().find('.block-content-wrapper').stop(0).slideDown('fast');
                }
                else if(id===2){
                    $(this).parent().find('.block-permission').val('0');
                    if($('.permission-level-'+parseInt(id-1)).val()==='1'){
                        $('.checkout-block').removeClass('active-checkout-block');
                        $(this).parent().addClass('active-checkout-block');
                        $('.block-content-wrapper').stop(0).slideUp('fast');
                        $(this).parent().find('.block-content-wrapper').stop(0).slideDown('fast');
                    }
                }
                else{
                    if($('.permission-level-'+parseInt(id-1)).val()==='1'){
                        $('.checkout-block').removeClass('active-checkout-block');
                        $(this).parent().addClass('active-checkout-block');
                        $('.block-content-wrapper').stop(0).slideUp('fast');
                        $(this).parent().find('.block-content-wrapper').stop(0).slideDown('fast');
                    }
                }
            }
        })
        $maincontainer.on('click','.payment-option-button',function(){
            var target=$(this).data('target');
            if($(this).hasClass('active-payment-option') ===false){
                $('#paymentForm')[0].reset();
                $('.drop-select').each(function(){
                    $(this).find('li:eq(0)').addClass('selected');
                    $(this).find('ul').trigger('change');
                });

                $('.payment-option-button').removeClass('active-payment-option');
                $(this).addClass('active-payment-option');
                $('.payment-module').stop(0).slideUp('fast');
                $('#'+target+"-module").stop(0).slideDown('fast');
            }
        });
        $maincontainer.on('change','.item-quantity-input',function(){
            var qty=$(this).val();
            var price=$(this).parent().parent().parent().parent().parent().find('.item-price-input').val();
            var tax=$(this).parent().parent().parent().parent().parent().find('.item-tax-input').val();
            var discount=$(this).parent().parent().parent().parent().parent().find('.item-discount-input').val();
            var offer=$(this).parent().parent().parent().parent().parent().find('.offer-discount-input').val();

            $(this).parent().parent().parent().parent().parent().find('.item-price').children('.value').html(number_format(parseFloat((price - offer - discount)*qty).toFixed(2)));
            $(this).parent().parent().parent().parent().parent().find('.item-tax').children('.value').html(number_format(parseFloat(tax*qty).toFixed(2)));
            $(this).parent().parent().parent().parent().parent().find('.item-discount').children('.discount-value').html(number_format(parseFloat(discount*qty).toFixed(2)));
            $(this).parent().parent().parent().parent().parent().find('.item-discount').children('.offer-discount-value').html(number_format(parseFloat(offer*qty).toFixed(2)));
            populateprice();
            $('.item-flag').val('1');
        });
        $maincontainer.on('change','input[name="address"]',function(){
            $('.delivery-flag').val('1');
        });
        $maincontainer.on('click','.update-delivery',function(){
            var container=$(this);
            if($('.delivery-flag').val()==='1'){
                var url="<?php echo base_url('salesorder/updatedelivery?id=')?>"+oid;
                var formdata=$('#deliveryForm').serialize();
                $.ajax({
                    url:url,
                    method:'post',
                    data:formdata,
                    success:function(data){
                        var parsed=$.parseJSON(data);
                        if(parsed.status){
                            checknext(container);
                        }
                        else{
                            showMessage("Some error occured. Couldn't update the delivery address")
                        }
                    },
                    error:function(xhr){
                        alert(xhr.responseText);
                    }
                })
            }
            else{
                checknext(container);
            }
        })
        $maincontainer.on('click','.update-item',function(){
            var container=$(this);
            if($('.item-flag').val()==='1'){
                var url="<?php echo base_url('salesorder/upatesolditem?id=')?>"+oid;
                var formdata=$('#itemForm').serialize();
                $.ajax({
                    url:url,
                    method:'post',
                    data:formdata,
                    success:function(data){
                        var parsed=$.parseJSON(data);
                        if(parsed.status){
                            var strurl=window.location.href;
                            var newurl=replaceUrlParam(strurl,'amount',parsed.amount)
                            window.location.href=newurl;
                        }
                        else{
                            showMessage("Couldn't update item",'error')
                        }
                    },
                    error:function(xhr){
                        alert(xhr.responseText);
                    }
                })
            }
            else{
                checknext(container);
            }
        });
        $maincontainer.on('click','.make-payment',function(){
            var method=$('.active-payment-option').data('target');
            var customer=$('#customer-id').val();
            var url="<?php echo base_url('salesorder/initpayment?id=') ?>"+oid+"&method="+method+"&customer="+customer;
            var formdata=$('#paymentForm').serialize();
            var urlstr=window.location.href.split('?')[1];
            $.ajax({
                url:url,
                method:'post',
                data:formdata+"&"+urlstr,
                success:function(data){
                    var parsed=$.parseJSON(data);
                    if(parsed.status){
                        window.location.href=parsed.url;
                    }
                },
                error:function(xhr){
                    alert(xhr.responseText);
                }
            })
        });
        $maincontainer.on('click','.cancel-button',function(){
            var url="<?php echo base_url('salesorder/resetorder?id=') ?>"+oid;
            $.ajax({
                url:url,
                method:'post',
                success:function(data){
                    var parsed=$.parseJSON(data);
                    if(parsed.status){
                        window.location.href=parsed.url;
                    }
                    else{
                        showMessage('Unexpected error occured');
                    }
                },
                error:function(xhr){
                    alert(xhr.responseText);
                }
            })
        });
    });
    function checknext($this){
        $this.parent().parent().find('.block-permission').val('1');
        var id=parseInt($this.parent().parent().parent().find('.block-header').data('id'))+1;
        $('.block-header-'+id).trigger('click');
    }
    function getcustomer(id){
        var url="<?php echo base_url('salesorder/fetchcustomer?id=') ?>"+id;
        $.ajax({
            url:url,
            method:'post',
            success:function(data){
                var parsed=$.parseJSON(data);
                if(parsed.status){
                    $('.customer-wrapper').empty().append(parsed.customer);
                    fetchaddress(id);
                }
            },
            error:function(xhr){
                alert(xhr.responseText);
            }
        })
    }
    function fetchaddress(oid){
        var id=$('#customer-id').val();
        var url="<?php echo base_url('salesorder/fetchaddresslist?id=') ?>"+id+"&oid="+oid;
        $.ajax({
            url:url,
            method:'post',
            success:function(data){
                var parsed=$.parseJSON(data);
                if(parsed.status){
                    $('.address-wrapper ul').empty().append(parsed.address);
                    fetchitems(oid);
                }
            },
            error:function(xhr){
                alert(xhr.responseText);
            }
        })
    }
    function fetchitems(id){
        var url="<?php echo base_url('salesorder/getsalesproducts?id=') ?>"+id+"&type=checkout";
        $.ajax({
            url:url,
            method:'post',
            success:function(data){
                var parsed=$.parseJSON(data);
                if(parsed.status){
                    $('.item-wrapper').empty().append(parsed.items);
                    $('.item-group').each(function(){
                        dropdownselect($(this).find('.drop-select'));
                    })
                    $('.price-details-wrapper').empty().append(parsed.summary);
                }
            },
            error:function(xhr){
                alert(xhr.responseText);
            }
        })
    }
    function number_format(nStr)
    {
        nStr += '';
        x = nStr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
    }
    function populateprice(){
        var quantity=0;
        var price=0;
        var tax=0;
        var discount=0;
        $('.item-group').each(function(){
            var qty=$(this).find('.item-quantity-input').val()
            var inprice=parseFloat($(this).find('.item-price-input').val()).toFixed(2)
            var intax=parseFloat($(this).find('.item-tax-input').val()).toFixed(2)
            var dis=parseFloat($(this).find('.item-discount-input').val()).toFixed(2);
            var offer=parseFloat($(this).find('.offer-discount-input').val()).toFixed(2);
            quantity+=parseInt(qty);
            price+=parseFloat(inprice*qty);
            tax+=parseFloat(intax*qty);
            discount+=parseFloat(parseFloat(dis*qty) + parseFloat(offer*qty));
        });
        $('.price-details-wrapper').find('.quantity-li').children('.right-elem').html(quantity);
        $('.price-details-wrapper').find('.subtotal-li').children('.right-elem').html('&#8377;<span class="value">'+number_format(parseFloat(price).toFixed(2))+'</span>');
        $('.price-details-wrapper').find('.tax-li').children('.right-elem').html('&#8377;<span class="value">'+number_format(parseFloat(tax).toFixed(2))+'</span>');
        $('.price-details-wrapper').find('.discount-li').children('.right-elem').html('&#8377;<span class="value">'+number_format(parseFloat(discount).toFixed(2))+'</span>');
        calculteprice();
    }
    function calculteprice(){
        var totalamount=0;
        var discountamount=$('.discount-li').children('.right-elem').children('.value').html().replace(',','');
        $('.summery-li').each(function(){
            var amount=$(this).children('.right-elem').children('.value').html().replace(',','');
            totalamount+= parseFloat(amount)
        })
        $('.grand-total').children('.right-elem').html('&#8377;'+number_format(Math.round(totalamount) - Math.round(discountamount*2)))
    }
    function replaceUrlParam(url, paramName, paramValue){
        if(paramValue == null)
            paramValue = '';
        var pattern = new RegExp('\\b('+paramName+'=).*?(&|$)')
        if(url.search(pattern)>=0){
            return url.replace(pattern,'$1' + paramValue + '$2');
        }
        url = url.replace(/\?$/,'');
        return url + (url.indexOf('?')>0 ? '&' : '?') + paramName + '=' + paramValue
    }
</script>
<div id="main-container">
    <div class="col-scroll col-wrapper">
        <div class="left-wrapper">
            <div class="checkout-block">
                <div class="block-content customer-wrapper"></div>
            </div>
            <!-- -->
            <div class="checkout-block active-checkout-block">
                <div class="block-header block-header-1" data-id="1">
                    <span class="block-number">1</span>
                    <h3>Delivery</h3>
                </div>
                <div class="block-content-wrapper" style="display: block">
                    <input type="hidden" class="block-permission permission-level-1">
                    <input type="hidden" class="delivery-flag change-flag">
                    <div class="block-content address-wrapper">
                        <form id="deliveryForm" enctype="multipart/form-data" method="post" onsubmit="return false">
                            <ul></ul>
                        </form>
                    </div>
                    <div class="block-action">
                        <span class="continue-button update-delivery">Continue</span>
                        <span class="cancel-button">Cancel</span>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="checkout-block">
                <div class="block-header block-header-2" data-id="2">
                    <span class="block-number">2</span>
                    <h3>Item Summery</h3>
                </div>
                <div class="block-content-wrapper">
                    <input type="hidden" class="block-permission permission-level-2">
                    <input type="hidden" class="item-flag change-flag">
                    <div class="block-content">
                        <form id="itemForm" enctype="multipart/form-data" method="post" onsubmit="return false">
                            <div class="item-wrapper">

                            </div>
                        </form>

                    </div>
                    <div class="block-action">
                        <span class="continue-button update-item">Continue</span>
                        <span class="cancel-button">Cancel</span>
                    </div>
                </div>
            </div>
            <!-- -->
            <div class="checkout-block">
                <div class="block-header block-header-3"  data-id="3">
                    <span class="block-number">3</span>
                    <h3>Payment</h3>
                    <?php
                    $action=isset($_GET['action']) ? $_GET['action'] : 'credit';
                    $amount=isset($_GET["amount"]) ? $_GET["amount"] : "0";
                    if($action=='credit'){
                        echo '<h3 style="color:#13c482;float: right">Amount payable: &#8377;'.$amount.'</h3>';
                    }
                    else{
                        echo '<h3 style="color:#FF5252;float: right">Amount returnable: &#8377;'.$amount.'</h3>';
                    }
                    ?>
                </div>
                <div class="block-content-wrapper">
                    <input type="hidden" class="block-permission permission-level-3">
                    <div class="block-content payment-wrapper">
                        <div class="payment-options">
                            <ul>
                                <li><span class="payment-option-button active-payment-option" data-target="cash">Cash</span></li>
                                <li><span class="payment-option-button" data-target="creditcard">Credit Card</span></li>
                                <li><span class="payment-option-button" data-target="creditcard">Debit Card</span></li>
                                <li><span class="payment-option-button" data-target="netbanking">Net Banking</span></li>
                                <li><span class="payment-option-button" data-target="wallet">Wallet</span></li>
                                <li><span class="payment-option-button" data-target="upi">UPI</span></li>
                                <li><span class="payment-option-button" data-target="cod">COD</span></li>
                                <li><span class="payment-option-button" data-target="emi">EMI</span></li>
                            </ul>
                        </div>
                        <div class="payment-module-wrapper">
                            <div>
                                <form id="paymentForm" method="post" enctype="multipart/form-data" onsubmit="return false">
                                    <input type="hidden" name="amount" id="total-amount">
                                    <input type="hidden" name="transid" id="transaction-id" value="<?php echo substr(str_shuffle(str_repeat('0123456789', mt_rand(1,13))),1,13) ?>">
                                    <div class="payment-module" id="cash-module" style="display: block">
                                        <div>
                                            <div class="group">
                                                <input type="text" placeholder="Amount" name="amountpaid" class="tab-input amount-pay" value="<?php echo isset($_GET['amount']) ? $_GET['amount'] : '0' ?>" style="font-size: 20px"><span
                                                    class="tab-input-bar"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="payment-module" id="creditcard-module">
                                        <div>
                                            <div class="group">
                                                <input type="text" placeholder="Card Number" name="number" class="tab-input"><span
                                                    class="tab-input-bar"></span>
                                            </div>
                                            <div class="group" style="width: 150px">
                                                <div class="drop-select sort-select">
                                                    <ul>
                                                        <li data-value="">Month</li>
                                                        <?php
                                                        for ($m=1; $m<=12; $m++) {
                                                            $month = date('F', mktime(0,0,0,$m, 1, date('Y')));
                                                            echo '<li data-value="'.$month.'">'.$month.'</li>';
                                                        }
                                                        ?>

                                                    </ul>
                                                    <input type="hidden" class="drop-input sort-input" name="month" value="">
                                                </div>
                                            </div>
                                            <div class="group" style="width: 150px;margin: 0 10px ">
                                                <div class="drop-select sort-select">
                                                    <ul>
                                                        <li data-value="">Year</li>
                                                        <?php
                                                        $year=date('Y');
                                                        $yearto=date('Y')+20;
                                                        for ($m=$year; $m<=$yearto; $m++) {
                                                            echo '<li data-value="'.$m.'">'.$m.'</li>';
                                                        }
                                                        ?>
                                                    </ul>
                                                    <input type="hidden" class="drop-input sort-input" name="year" value="">
                                                </div>
                                            </div>
                                            <div class="group" style="width: calc(100% - 320px);">
                                                <input type="text" placeholder="CVV" name="cvv" class="tab-input"><span
                                                    class="tab-input-bar"></span>
                                            </div>
                                            <div class="group">
                                                <input type="text" placeholder="Name on Card" name="name" class="tab-input"><span
                                                    class="tab-input-bar"></span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="block-action" style="text-align: center">
                                    <span class="continue-button make-payment">Make Payment</span>
                                    <span class="cancel-button">Cancel</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- -->
        </div>
        <div class="right-wrapper">
            <h3>Price Details </h3>
            <ul class="price-details-wrapper"></ul>
        </div>
    </div>
</div>