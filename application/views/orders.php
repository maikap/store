<div id="main-container">
    <div class="left-wrapper">
        <ul>
            <li><a href="<?php echo base_url('my/profile') ?>"><i class="material-icons">person</i>My Profile</a></li>
            <li><a href="<?php echo base_url('my/orders') ?>"><i class="material-icons">local_mall</i>Orders & Returns</a></li>
            <li><a href="<?php echo base_url('my/wallet') ?>"><i class="material-icons">account_balance_wallet</i>Wallet</a></li>
            <li><a href="<?php echo base_url('my/addresses') ?>"><i class="material-icons">location_on</i>Addresses</a></li>
            <li><a href="<?php echo base_url('my/offers') ?>"><i class="material-icons">local_offer</i>My Offers</a></li>
        </ul>
    </div>
    <div class="right-wrapper order-container">
        <div class="right-header">
            <h3>My Orders</h3>
        </div>
        <div class="right-content">
           <ul>
               <li>
                   <div class="left-elem">
                       <h3>#89714832646392</h3>
                       <label>Placed On: 14 Nov 2017</label>
                       <label>Amount: Rs 4520</label>
                       <label>Quantity: 3</label>
                   </div>
                   <div class="right-elem">
                       <div class="shipment-content">
                           <div class="shipment-header">
                               <h3>Delivered</h3>
                               <label>Shipemnt 1 : 1 items</label>
                               <label>Delivered on:14 Nov 2017</label>
                           </div>
                           <div class="shipment-details">
                               <span class="image-block"><img src="<?php echo base_url('public/assets/demo-image.jpg') ?>"></span>
                           </div>
                       </div>
                   </div>
               </li>
           </ul>
        </div>
    </div>
</div>