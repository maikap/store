<div id="main-container" class="my-container">
    <div class="left-wrapper">
        <ul>
            <li><a href="<?php echo base_url('my/profile') ?>"><i class="material-icons">person</i>My Profile</a></li>
            <li><a href="<?php echo base_url('my/orders') ?>"><i class="material-icons">local_mall</i>Orders & Returns</a></li>
            <li><a href="<?php echo base_url('my/wallet') ?>"><i class="material-icons">account_balance_wallet</i>Wallet</a></li>
            <li><a href="<?php echo base_url('my/addresses') ?>"><i class="material-icons">location_on</i>Addresses</a></li>
            <li><a href="<?php echo base_url('my/offers') ?>"><i class="material-icons">local_offer</i>My Offers</a></li>
        </ul>
    </div>
    <div class="right-wrapper">
        <div class="right-header">
            <h3>Profile</h3>
        </div>
        <div class="right-content profile-content-wrapper">
            <div class="image-wrapper">
                <img src="<?php echo base_url('public/assets/demo-avatars.jpg') ?>">
                <span class="image-change-button"><i class="material-icons">camera_alt</i></span>
            </div>
            <div class="profile-details">
                <div class="group">
                    <label class="field-icon">Name</label>
                    <input type="text" placeholder="None" name="none" class="tab-input"><span
                            class="tab-input-bar"></span>
                </div>
                <div class="group">
                    <label class="field-icon">Email</label>
                    <input type="text" placeholder="None" name="none" class="tab-input"><span
                            class="tab-input-bar"></span>
                </div>
                <div class="group">
                    <label class="field-icon">Mobile</label>
                    <input type="text" placeholder="None" name="none" class="tab-input"><span
                            class="tab-input-bar"></span>
                </div>
                <div class="small-group left-group">
                    <label class="field-icon">Date of Birth</label>
                    <input type="text" placeholder="None" name="none" class="tab-input"><span
                            class="tab-input-bar"></span>
                </div>
                <div class="small-group right-group">
                    <label class="field-icon">Gender</label>
                    <div class="drop-select sort-select">
                        <ul>
                            <li data-value="">None</li>
                        </ul>
                        <input type="hidden" class="drop-input sort-input" name="sort" value="">
                    </div>
                </div>
                <div class="group">
                    <button class="update-button">Update</button>
                </div>
            </div>
        </div>
    </div>
</div>