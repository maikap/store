<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($title) ? $title : 'Default Title' ; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url().'public/assets/logos/navicon.png'?>"/>
    <meta name="viewport"  content="width=device-width, initial-scale=1.0,user-scalable=no" />
    <script type="text/javascript" src="<?php echo base_url().'public/js/jquery-1.11.1.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'public/js/jquery-ui.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'public/js/dropdown.js'?>"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url().'public/css/index.css'?>">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
</head>
<script type="text/javascript">
    $(document).scroll(function(){
        var top=$(document).scrollTop();
        if(top > 100){
            $('.header').addClass('fixed-header');
            $('.row-2').css('margin-top','-50px');
        }
        else{
            $('.header').removeClass('fixed-header');
            $('.row-2').css('margin-top','5px');
        }
    })
    $(document).ready(function(){

    })
</script>
<body>
<div class="header">
    <span class="hamburger-menu"><i class="material-icons">menu</i></span>
    <a href="<?php echo base_url() ?>" class="logo-wrapper"><img src="<?php echo base_url('public/assets/logos/soppelo-white.png') ?>" alt="Soppelo.com"></a>
    <ul class="header-button-wrapper">
        <li><span class="location-change"><i class="material-icons">my_location</i>South Dum dum, Kolkata</span></li>
        <li><a class="header-button" href="#"><i class="material-icons">local_mall</i></a></li>
        <li>
            <span class="header-button notifications-button"><i class="material-icons">notifications</i><i class="notification-counter"></i></span>
        </li>
        <li>
            <span class="header-button profile-button"><img src="<?php echo base_url('public/assets/demo-avatars.jpg') ?>"></span>
            <ul class="profile-options">
                <li><a href="<?php echo base_url('manage/myaccount') ?>">My Account</a></li>
                <li><a href="<?php echo base_url('manage/myaccount') ?>">Wishlist</a></li>
                <li><a href="<?php echo base_url('manage/myaccount') ?>">Orders</a></li>
                <li><a href="<?php echo base_url('manage/myaccount') ?>">Offers</a></li>
                <li><a href="<?php echo base_url('accounts/logout') ?>">Logout</a></li>
            </ul>
        </li>
    </ul>
</div>
<div class="rows main-rows row-1">
    <div class="search-wrapper">
        <span class="search-icon"><i class="material-icons">search</i></span>
        <input type="text" placeholder="What are you looking for?" class="search-input">
    </div>
</div>
<div class="rows sub-rows row-2">
    <div class="sub-header">
        <h3>Offers</h3>
        <a href="javascript:void(0)" class="view-button">View All</a>
    </div>
    <div class="sub-content">
        <span class="scroll-button scroll-left"><i class="material-icons">keyboard_arrow_left</i></span>
        <span class="scroll-button scroll-right"><i class="material-icons">keyboard_arrow_right</i></span>
        <div class="block-wrapper triple-block">
            <ul>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
</div>
<div class="rows sub-rows row-3">
    <div class="sub-header">
        <h3>Offers</h3>
        <a href="javascript:void(0)" class="view-button">View All</a>
    </div>
    <div class="sub-content">
        <span class="scroll-button scroll-left"><i class="material-icons">keyboard_arrow_left</i></span>
        <span class="scroll-button scroll-right"><i class="material-icons">keyboard_arrow_right</i></span>
        <div class="block-wrapper quarter-block">
            <ul>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>