<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($title) ? $title : 'Default Title' ; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url().'public/assets/logos/navicon.png'?>"/>
    <meta name="viewport"  content="width=device-width, initial-scale=1.0,user-scalable=no" />
    <script type="text/javascript" src="<?php echo base_url().'public/js/jquery-3.1.1.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'public/js/jquery-ui.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'public/js/header.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'public/js/dropdown.js'?>"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url().'public/css/main.css'?>">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <?php
    if(isset ($css)){
        foreach ($css as $url){
            echo '<link rel="stylesheet" href="'.$url.'" />';
            echo"\n";
        }
    }
    if(isset ($js)){
        foreach ($js as $url){
            echo '<script type="text/javascript" src="'.$url.'"></script>';
            echo"\n";
        }
    }
    ?>
    <script type="text/javascript">
        $(document).mouseup(function (e)
        {
            var container1 = $(".sidebar");
            if (!container1.is(e.target) // if the target of the click isn't the container...
                && container1.has(e.target).length === 0) // ... nor a descendant of the container
            {
                var duration='fast';
                container1.stop(0).hide('slide',{'direction':'left'},duration);
            }

        });
        $(document).on('scroll',function(){
            if($(this).scrollTop() > 100){
                $('.bottom-row').stop(0).hide('fast');
            }
            else{
                $('.bottom-row').stop(0).show('fast');
            }
        });
        $(document).ready(function(){
            $('.hamburger-menu').click(function(){
                var duration='fast';
                $('.sidebar').stop(0).show('slide',{'direction':'left'},duration);
            });
            $('.nav-category').click(function(){
                $('.nav-menu-1').stop(0).slideUp('fast');
                if($('.nav-category').find('.nav-icon-toggle').length > 0){
                    $('.nav-category').find('.material-icons').removeClass('nav-icon-toggle');
                }
                $(this).find('.material-icons').toggleClass('nav-icon-toggle');
                $(this).parent().find('.nav-menu-1').stop(0).slideToggle('fast');
            })
        })
        function fsheight(){
            var height=$('.left-wrapper').innerHeight();
            var viewheight=$(document).innerHeight();
            var top=parseFloat(parseFloat(viewheight) - parseFloat(height) - 10);
            return top;
        }
    </script>
</head>
<body>
<div class="header">
    <div class="top-bar">
        <div class="container">
            <div class="row flex-container">
                <div class="cols col-1 col-sm-flex">
                    <a href="" class="logo-wrapper"><img src="<?php echo base_url('public/assets/logos/soppelo.png') ?>"></a>
                </div>
                <div class="cols col-2 col-sm-flex">
                    <span class="location-select">Kolkata - 700074 <i class="material-icons">expand_more</i></span>
                </div>
                <div class="cols col-3 search-wrapper">
                    <input type="text" class="search-input search-input-nav" placeholder="What are you looking for?">
                    <button class="search-button"><i class="material-icons">search</i></button>
                    <div class="search-result-wrapper">
                        <ul class="search-result">
                            <li><a href="#">Results <span class="sub-label">in category</span></a></li>
                            <li><a href="#">Results <span class="sub-label">in category</span></a></li>
                            <li><a href="#">Results <span class="sub-label">in category</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="cols col-4 pull-right">
                    <div class="header-block">
                        <span class="cart-count popup-count">1</span>
                        <a class="header-button cart-button" href="#"><i class="material-icons">local_mall</i></a>
                    </div>
                    <div class="header-block">
                        <span class="popup-count notification-count">1</span>
                        <span class="header-button notification-button"><i class="material-icons">notifications</i></span>
                        <ul class="toggle-container notification-list">
                            <li><a href="">Notification 1 <span class="sub-label"> Tue, 1:45 PM</span></a></li>
                            <li><a href="">Notification 1 <span class="sub-label"> Tue, 1:45 PM</span></a></li>
                            <li><a href="">Notification 1 <span class="sub-label"> Tue, 1:45 PM</span></a></li>
                        </ul>
                    </div>
                    <div class="header-block">
                        <span class="header-button profile-button"><img src="<?php echo base_url('public/assets/demo-avatars.jpg') ?>"></span>
                        <ul class="toggle-container profile-menu">
                            <li><a href="">Notification 1 <span class="sub-label"> Tue, 1:45 PM</span></a></li>
                            <li><a href="">Notification 1 <span class="sub-label"> Tue, 1:45 PM</span></a></li>
                            <li><a href="">Notification 1 <span class="sub-label"> Tue, 1:45 PM</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!--Bottom Bar -->
    <div class="bottom-bar">
        <div class="container">
            <div class="nav-menu">
                <ul class="nav-bar">
                    <li class="navlinks">
                        <span class="nav-button">Grocessary <i class="material-icons">expand_more</i></span>
                        <div class="menu-container">
                            <ul class="menu-cols">
                                <li class="menu-blocks">
                                    <a href="#" class="mega-menu-title">Mobiles</a>
                                    <ul class="menulinks">
                                        <li><a href="#">Samsung</a></li>
                                        <li><a href="#">Samsung</a></li>
                                        <li><a href="#">Samsung</a></li>
                                        <li><a href="#">Samsung</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Accessories</a>
                                    <ul>
                                        <li><a href="#">Samsung</a></li>
                                        <li><a href="#">Samsung</a></li>
                                        <li><a href="#">Samsung</a></li>
                                        <li><a href="#">Samsung</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="location-search-wrapper" style="display: none">
    <span class="close-location-search"><i class="material-icons">close</i></span>
    <div class="location-search">
        <span class="location-search-icon"><i class="material-icons">search</i></span>
        <span class="location-search-spinner"><img src="<?php echo base_url('public/assets/logos/spinner.svg') ?>"></span>
        <input type="text" class="location-search-input" placeholder="Search a location">
        <span class="location-apply">Apply</span>
    </div>
</div>
<div id="spinner" style="display: none">
    <img src="<?php echo base_url('public/assets/logos/spinner.svg') ?>">
</div>


