<script>
    $(document).scroll(function(){
        var height=$('.right-wrapper').innerHeight();
        var scroll=$(window).scrollTop();
        var imageheight=$('.image-wrapper').innerHeight();
        var aheight=parseFloat(height)-parseFloat(imageheight) + 130;
        var sheight=parseFloat(scroll) + 120;
        if(sheight > aheight){
            $('.image-wrapper').removeClass('fixed-image-wrapper').css('margin-top',parseFloat(aheight - 130));
        }
        else{
            $('.image-wrapper').addClass('fixed-image-wrapper').css('margin-top','0');
        }
    });
    $(document).ready(function(){
    });
</script>
<div id="main-container">
    <div class="general-container">
        <div class="image-wrapper">
            <div class="thumb-wrapper">
                <span class="image-thumb-scroll scroll-top"><i class="material-icons">keyboard_arrow_up</i></span>
                <ul class="thumb-list">
                    <li><span class="image-thumbs active-thumb"><img src="<?php echo base_url('public/assets/laptop.jpg') ?>"></span></li>
                    <li><span class="image-thumbs"><img src="<?php echo base_url('public/assets/laptop.jpg') ?>"></span></li>
                    <li><span class="image-thumbs"><img src="<?php echo base_url('public/assets/laptop.jpg') ?>"></span></li>
                    <li><span class="image-thumbs"><img src="<?php echo base_url('public/assets/laptop.jpg') ?>"></span></li>
                    <li><span class="image-thumbs"><img src="<?php echo base_url('public/assets/laptop.jpg') ?>"></span></li>
                    <li><span class="image-thumbs"><img src="<?php echo base_url('public/assets/laptop.jpg') ?>"></span></li>
                    <li><span class="image-thumbs"><img src="<?php echo base_url('public/assets/laptop.jpg') ?>"></span></li>
                </ul>
                <span class="image-thumb-scroll scroll-bottom"><i class="material-icons">keyboard_arrow_down</i></span>
            </div>
            <div class="image-viewer">
                <img src="<?php echo base_url('public/assets/laptop.jpg') ?>" >
            </div>
            <div class="magnifier-preview" id="preview" style="display: none"></div>
        </div>
        <!---->
        <div class="right-wrapper">
            <div class="det-wrapper main-rows">
                <div class="row-group">
                    <span class="breadcrumbs"><a href="#">Home</a> &#8250; <a href="#">Clothings</a> &#8250; <a href="#">Men</a></span>
                    <h3 class="item-title info-label">Moto x play 32gb 4Gb ram black </h3>
                    <span class="info-label"><span class="ratings">4.3 <i class="material-icons">star</i> <i class="material-icons"></i></span> <span class="reviews">77 Ratings & 16 Reviews</span></span>
                    <label class="price-label info-label">&#8377; 5400 <span class="sub-label"><strike>&#8377;6000</strike></span><span class="discount-label">(20% OFF)</span></label>

                    <!-- Variant Container-->

                    <div class="variant-container row-container">
                        <h3 class="left-elem">Size</h3>
                        <ul class="right-elem">
                            <li><span class="variant variant-small selected-variant" data-value="red">M</span></li>
                            <li><span class="variant variant-small " data-value="green">L</span></li>
                            <li><span class="variant  variant-small" data-value="yellow">XL</span></li>
                        </ul>
                    </div>

                    <div class="variant-container row-container" >
                        <h3 class="left-elem">Memory</h3>
                        <ul class="right-elem">
                            <li><span class="variant selected-variant" data-value="red">32Gb</span></li>
                            <li><span class="variant" data-value="green">64GB</span></li>
                            <li><span class="variant" data-value="yellow">128GB</span></li>
                        </ul>
                    </div>

                    <!--Offers-->

                    <div class="offers-container row-container">
                        <h3>Offers</h3>
                        <ul class="right-elem">
                            <li><label><i class="material-icons">local_offer</i> Offers 1 have 32dec validy with 500 rs <span class="sub-label">Terms & Condition</span></label></li>
                            <li><label><i class="material-icons">local_offer</i> Offers 1 have 32dec validy with 500 rs</label></li>
                            <li><label><i class="material-icons">local_offer</i> Offers 1 have 32dec validy with 500 rs</label></li>
                        </ul>
                        <span class="view-more-offer link">View More</span>
                    </div>
                </div>

               <!--Buttons Group-->

                <div class="row-group">
                    <div class="button-wrapper">
                        <button class="action-button addcart-button">Add To Cart</button>
                        <button class="action-button buy-button">Buy Now</button>
                    </div>
                </div>
                <div class="row-group">
                    <div class="row-container">
                        <h3>Description</h3>
                        <label class="info-label">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make </label>
                    </div>
                    <div class="row-container feature-container">
                        <div class="left-content">
                            <div>
                                <h3>Features</h3>
                                <ul class="feature-list">
                                    <li>Features 1</li>
                                    <li>Feature 2</li>
                                </ul>
                            </div>

                        </div>
                        <div class="right-content">
                            <div>
                                <h3>Services</h3>
                                <ul class="feature-list">
                                    <li>Features 1</li>
                                    <li>Feature 2</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!--Specification Container -->

            <div class="specification-container main-rows" >
                <div class="row-header">
                    <h3>Specifications</h3>
                    <i class="material-icons">keyboard_arrow_down</i>
                </div>
                <div class="row-content" style="display:none">
                    <ul class="specification-list">
                        <li>
                            <h3>Specification Name</h3>
                            <ul>
                                <li>
                                    <label class="left-elem">What is Lorem Ipsum</label>
                                    <label class="right-elem">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    </label>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h3>Specification Name</h3>
                            <ul>
                                <li>
                                    <label class="left-elem">What is Lorem Ipsum</label>
                                    <label class="right-elem">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    </label>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h3>Specification Name</h3>
                            <ul>
                                <li>
                                    <label class="left-elem">What is Lorem Ipsum</label>
                                    <label class="right-elem">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    </label>
                                </li>
                                <li>
                                    <label class="left-elem">What is Lorem Ipsum</label>
                                    <label class="right-elem">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    </label>
                                </li>
                                <li>
                                    <label class="left-elem">What is Lorem Ipsum</label>
                                    <label class="right-elem">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    </label>
                                </li>
                                <li>
                                    <label class="left-elem">What is Lorem Ipsum</label>
                                    <label class="right-elem">
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    </label>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="view-more"><span class="more-button">View More <i class="material-icons">arrow_forward</i></span></div>
                </div>

            </div>

            <!-- Reviews display container -->

            <div class="review-container main-rows" >
                <div class="row-header">
                    <h3>Ratings & Reviews</h3>
                    <i class="material-icons">keyboard_arrow_down</i>
                </div>
                <div class="row-content" >
                    <div class="review-head">
                        <div class="review-classification blocks">
                            <div>
                                <ul>
                                    <li><span class="rating-number">5<i class="material-icons">star</i></span><span class="rating-bar rating-5"><span class="rating-bar-fill"></span></span><span class="customer-rated">110</span></li>
                                    <li><span class="rating-number">4<i class="material-icons">star</i></span><span class="rating-bar rating-4"><span class="rating-bar-fill"></span></span><span class="customer-rated">110</span></li>
                                    <li><span class="rating-number">3<i class="material-icons">star</i></span><span class="rating-bar rating-3"><span class="rating-bar-fill"></span></span><span class="customer-rated">110</span></li>
                                    <li><span class="rating-number">2<i class="material-icons">star</i></span><span class="rating-bar rating-2"><span class="rating-bar-fill"></span></span><span class="customer-rated">110</span></li>
                                    <li><span class="rating-number">1<i class="material-icons">star</i></span><span class="rating-bar rating-1"><span class="rating-bar-fill"></span></span><span class="customer-rated">110</span></li>
                                </ul>
                            </div>

                        </div>
                        <div class="total-rating blocks">
                            <h3>4.2 <i class="material-icons">star</i></h3>
                        </div>
                        <div class="total-review blocks">
                            <h3>2300 Reviews</h3>
                        </div>
                    </div>
                    <ul class="review-list">
                        <li>
                            <div class="left-elem">
                                <div class="user-image"><img src="<?php echo base_url('public/assets/demo-avatars.jpg') ?>"></div>
                                <h3>Samir Maikap</h3>
                            </div>
                            <div class="right-elem">
                                <div class="right-row-top">
                                    <span class="suctomer-name">Samir Maikap</span> /
                                    <span class="star-rating">4<i class="material-icons">star</i></span> /
                                    <span class="review-time"><?php  echo date('d M Y h:i A') ?></span>
                                </div>
                                <div class="review-details">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                </div>
                            </div>
                      </li>
                        <li>
                            <div class="left-elem">
                                <div class="user-image"><img src="<?php echo base_url('public/assets/demo-avatars.jpg') ?>"></div>
                                <h3>Samir Maikap</h3>
                            </div>
                            <div class="right-elem">
                                <div class="right-row-top">
                                    <span class="suctomer-name">Samir Maikap</span> /
                                    <span class="star-rating">4<i class="material-icons">star</i></span> /
                                    <span class="review-time"><?php  echo date('d M Y h:i A') ?></span>
                                </div>
                                <div class="review-details">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    <span class="read-more">Read More</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="view-more"><span class="more-button">View More</span> </div>
                </div>

            </div>
        </div>
    </div>

    <!--  General container ends here   -->

    <!-- Similar Container starts here   -->

    <div class="similar-container" >
        <div class="sub-header">
            <h3>Similar Items</h3>
        </div>
        <div class="sub-content similar-item-list">
            <span class="scroll-button scroll-left"><i class="material-icons">keyboard_arrow_left</i></span>
            <span class="scroll-button scroll-right"><i class="material-icons">keyboard_arrow_right</i></span>
            <div class="block-wrapper item-list-wrapper">
                <a href="#" class="product-grid">
                    <span class="product-image"><img src="<?php echo base_url('public/assets/note-4.jpeg') ?>"></span>
                    <div class="product-info">
                        <span class="info-label item-name">Samsung Galaxy Tab S3 Red 32GB 4GB RAM</span>
                        <span class="info-label item-price">&#x20a8; 5400 <span class="previous-price">&#x20a8; 4000</span> <span class="discount">(20%OFF)</span></span>
                        <span class="ratings">4.2 <i class="material-icons">star</i></span>
                        <span class="offers">5 offers available</span>
                    </div>
                </a>
                <a href="#" class="product-grid">
                    <span class="product-image"><img src="<?php echo base_url('public/assets/note-4.jpeg') ?>"></span>
                    <div class="product-info">
                        <span class="info-label item-name">Samsung Galaxy Tab S3 Red 32GB 4GB RAM</span>
                        <span class="info-label item-price">&#x20a8; 5400 <span class="previous-price">&#x20a8; 4000</span> <span class="discount">(20%OFF)</span></span>
                        <span class="ratings">4.2 <i class="material-icons">star</i></span>
                        <span class="offers">5 offers available</span>
                    </div>
                </a>
                <a href="#" class="product-grid">
                    <span class="product-image"><img src="<?php echo base_url('public/assets/note-4.jpeg') ?>"></span>
                    <div class="product-info">
                        <span class="info-label item-name">Samsung Galaxy Tab S3 Red 32GB 4GB RAM</span>
                        <span class="info-label item-price">&#x20a8; 5400 <span class="previous-price">&#x20a8; 4000</span> <span class="discount">(20%OFF)</span></span>
                        <span class="ratings">4.2 <i class="material-icons">star</i></span>
                        <span class="offers">5 offers available</span>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!--  Similar Container ends here   -->

</div>