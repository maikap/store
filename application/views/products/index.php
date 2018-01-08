<script>
    var lastScrollTop = 0;
    $(window).scroll(function(){
        var st = $(this).scrollTop();
        var lheight=$('.left-wrapper').innerHeight();
        var rheight=$('.right-wrapper').innerHeight();
        var rowoneheight=$('.row-one').innerHeight();

        var scrolled=parseFloat(st) ;
        var fixheight=parseFloat(rheight) - parseFloat(lheight) + 5;

        if (st > lastScrollTop){
            // downscroll code
            if(scrolled > lheight){
                $('.left-wrapper').addClass('fixed-left').css('margin-top',0);
            }
            if(scrolled > (rheight - 20)){
                $('.left-wrapper').removeClass('fixed-left').css('margin-top',fixheight);
            }

        } else {
            // upscroll code
            // if(scrolled > lheight){
            //     $('.left-wrapper').addClass('fixed-left').css('margin-top',0);
            // }
            // if(scrolled > (rheight - 20)){
            //     $('.left-wrapper').removeClass('fixed-left').css('margin-top',fixheight);
            // }

        }
        lastScrollTop = st;


        console.log(scrolled+'/'+rheight);

    })
</script>
<div id="main-container">
    <div class="main-rows row-one">
        <div class="search-header">
            <!--Items-->
            <div class="row-item" style="display: none">
                <div class="left-col">
                    <img src="<?php echo base_url('public/assets/item-demo-3.png') ?>">
                    <span class="icon-title">Best Match</span>
                </div>
                <div class="right-col">
                    <div>
                        <span class="info-label item-name">Samsung Galaxy Tab S3 Red 32GB 4GB RAM</span>
                        <span class="info-label item-price">&#x20a8; 5400 <span class="previous-price">&#x20a8; 4000</span> <span class="discount">(20%OFF)</span></span>
                        <span class="ratings">4.2 <i class="material-icons">star_rate</i></span>
                        <span class="delivery-time">Get it by <span class="sub-label">6 hours</span></span>
                        <span class="offers">5 offers available</span>
                        <div class="button-wrapper">
                            <span class="buttons view-button">View</span>
                            <span class="buttons cart-button">Add to Cart</span>
                            <span class="buttons buy-button">Buy Now</span>
                        </div>
                    </div>
                </div>
            </div>
            <!--Shop Head-->
            <div class="row-shop">
                <div class="left-col">
                    <span class="icon-title">Shop</span>
                </div>
                <div class="right-col">
                    <div>
                        <h3 class="shop-name info-label">Shop Name</h3>
                        <span class="shop-category info-label">ELectronics</span>
                        <span class="shop-items info-label">500 items in 10 categories</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="main-rows row-two">
        <div class="col-wrapper">
            <div class="left-wrapper">
                <div class="loading-wrapper" style="display: none"><img src="<?php echo base_url('public/assets/logos/spinner.svg') ?>"></div>
                <div class="cards">
                    <div class="card-header">
                        <h3>Groups</h3>
                        <span class="header-icon"><i class="material-icons">keyboard_arrow_down</i></span>
                    </div>
                    <div class="card-content">
                        <ul>
                            <li><label class="control control-checkbox">Invoiced
                                    <input type="checkbox" name="warehouse[]" value=""/>
                                    <span class="control-indicator"></span>
                                </label></li>
                            <li><label class="control control-checkbox">Invoiced
                                    <input type="checkbox" name="warehouse[]" value=""/>
                                    <span class="control-indicator"></span>
                                </label></li>
                            <li><label class="control control-checkbox">Invoiced
                                    <input type="checkbox" name="warehouse[]" value=""/>
                                    <span class="control-indicator"></span>
                                </label></li>
                        </ul>
                        <div class="card-footer">
                            <span class="more-button">27 More</span>
                        </div>
                    </div>
                </div>
                <div class="cards">
                    <div class="card-header">
                        <h3>Groups</h3>
                        <span class="header-icon"><i class="material-icons">keyboard_arrow_down</i></span>
                    </div>
                    <div class="card-content" >
                        <ul>
                            <li><label class="control control-checkbox">Invoiced
                                    <input type="checkbox" name="warehouse[]" value=""/>
                                    <span class="control-indicator"></span>
                                </label></li>
                            <li><label class="control control-checkbox">Invoiced
                                    <input type="checkbox" name="warehouse[]" value=""/>
                                    <span class="control-indicator"></span>
                                </label></li>
                            <li><label class="control control-checkbox">Invoiced
                                    <input type="checkbox" name="warehouse[]" value=""/>
                                    <span class="control-indicator"></span>
                                </label></li>
                        </ul>
                        <div class="card-footer">
                            <span class="more-button">27 More</span>
                        </div>
                    </div>
                </div>
                <div class="cards">
                    <div class="card-header">
                        <h3>Groups</h3>
                        <span class="header-icon"><i class="material-icons">keyboard_arrow_down</i></span>
                    </div>
                    <div class="card-content" style="display: none">
                        <ul>
                            <li><label class="control control-checkbox">Invoiced
                                    <input type="checkbox" name="warehouse[]" value=""/>
                                    <span class="control-indicator"></span>
                                </label></li>
                            <li><label class="control control-checkbox">Invoiced
                                    <input type="checkbox" name="warehouse[]" value=""/>
                                    <span class="control-indicator"></span>
                                </label></li>
                            <li><label class="control control-checkbox">Invoiced
                                    <input type="checkbox" name="warehouse[]" value=""/>
                                    <span class="control-indicator"></span>
                                </label></li>
                        </ul>
                        <div class="card-footer">
                            <span class="more-button">27 More</span>
                        </div>
                    </div>
                </div>
                <div class="cards">
                    <div class="card-header">
                        <h3>Groups</h3>
                        <span class="header-icon"><i class="material-icons">keyboard_arrow_down</i></span>
                    </div>
                    <div class="card-content" style="display: none">
                        <ul>
                            <li><label class="control control-checkbox">Invoiced
                                    <input type="checkbox" name="warehouse[]" value=""/>
                                    <span class="control-indicator"></span>
                                </label></li>
                            <li><label class="control control-checkbox">Invoiced
                                    <input type="checkbox" name="warehouse[]" value=""/>
                                    <span class="control-indicator"></span>
                                </label></li>
                            <li><label class="control control-checkbox">Invoiced
                                    <input type="checkbox" name="warehouse[]" value=""/>
                                    <span class="control-indicator"></span>
                                </label></li>
                        </ul>
                        <div class="card-footer">
                            <span class="more-button">27 More</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-wrapper">
                <div class="item-action-bar">
                    <div class="row-1">
                        <label class="page-nav"><a href="#">Nav 1</a> &#8250; <a href="#">Nav 2</a> </label>
                    </div>
                    <div class="row-2">
                        <div class="cols col-1">
                            <h3>Mens Wear <span class="sub-label">( About 500 results )</span></h3>
                        </div>
                        <div class="cols col-2 sort-wrapper">
                            <label class="field-label">Sort:</label>
                            <div class="drop-select sort-select">
                                <ul>
                                    <li data-value="">None</li>
                                </ul>
                                <input type="hidden" class="drop-input sort-input" name="sort" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-wrapper">
                    <a href="#" class="product-grid">
                        <span class="product-image"><img src="<?php echo base_url('public/assets/note-4.jpeg') ?>"></span>
                        <div class="product-info">
                            <span class="info-label item-name">Samsung Galaxy Tab S3 Red 32GB 4GB RAM</span>
                            <span class="info-label item-price">&#x20a8; 5400 <span class="previous-price">&#x20a8; 4000</span> <span class="discount">(20%OFF)</span></span>
                            <span class="ratings">4.2 <i class="material-icons">star_rate</i></span>
                            <span class="delivery-time">Get it by <span class="sub-label">6 hours</span></span>
                            <span class="offers">5 offers available</span>
                        </div>
                    </a>
                    <a href="#" class="product-grid">
                        <span class="product-image"><img src="<?php echo base_url('public/assets/item-demo-3.png') ?>"></span>
                        <div class="product-info">
                            <span class="info-label item-name">Samsung Galaxy Tab S3 Red 32GB 4GB RAM</span>
                            <span class="info-label item-price">&#x20a8; 5400 <span class="previous-price">&#x20a8; 4000</span> <span class="discount">(20%OFF)</span></span>
                            <span class="ratings">4.2 <i class="material-icons">star_rate</i></span>
                        </div>
                    </a>
                    <a href="#" class="product-grid">
                        <span class="product-image"><img src="<?php echo base_url('public/assets/note-4.jpeg') ?>"></span>
                        <div class="product-info">
                            <span class="info-label item-name">Samsung Galaxy Tab S3 Red 32GB 4GB RAM</span>
                            <span class="info-label item-price">&#x20a8; 5400 <span class="previous-price">&#x20a8; 4000</span> <span class="discount">(20%OFF)</span></span>
                            <span class="ratings">4.2 <i class="material-icons">star_rate</i></span>
                            <span class="offers">5 offers available</span>
                        </div>
                    </a>
                    <a href="#" class="product-grid">
                        <span class="product-image"><img src="<?php echo base_url('public/assets/demo-image-5.jpeg') ?>"></span>
                        <div class="product-info">
                            <span class="info-label item-name">Samsung Galaxy Tab S3 Red 32GB 4GB RAM</span>
                            <span class="info-label item-price">&#x20a8; 5400 <span class="previous-price">&#x20a8; 4000</span> <span class="discount">(20%OFF)</span></span>
                            <span class="ratings">4.2 <i class="material-icons">star_rate</i></span>
                            <span class="offers">5 offers available</span>
                        </div>
                    </a>
                    <a href="#" class="product-grid">
                        <span class="product-image"><img src="<?php echo base_url('public/assets/demo-image-6.jpeg') ?>"></span>
                        <div class="product-info">
                            <span class="info-label item-name">Samsung Galaxy Tab S3 Red 32GB 4GB RAM</span>
                            <span class="info-label item-price">&#x20a8; 5400 <span class="previous-price">&#x20a8; 4000</span> <span class="discount">(20%OFF)</span></span>
                            <span class="ratings">4.2 <i class="material-icons">star_rate</i></span>
                            <span class="offers">5 offers available</span>
                        </div>
                    </a>
                    <a href="#" class="product-grid">
                        <span class="product-image"><img src="<?php echo base_url('public/assets/note-4.jpeg') ?>"></span>
                        <div class="product-info">
                            <span class="info-label item-name">Samsung Galaxy Tab S3 Red 32GB 4GB RAM</span>
                            <span class="info-label item-price">&#x20a8; 5400 <span class="previous-price">&#x20a8; 4000</span> <span class="discount">(20%OFF)</span></span>
                            <span class="ratings">4.2 <i class="material-icons">star_rate</i></span>
                            <span class="offers">5 offers available</span>
                        </div>
                    </a>
                    <a href="#" class="product-grid">
                        <span class="product-image"><img src="<?php echo base_url('public/assets/item-demo-3.png') ?>"></span>
                        <div class="product-info">
                            <span class="info-label item-name">Samsung Galaxy Tab S3 Red 32GB 4GB RAM</span>
                            <span class="info-label item-price">&#x20a8; 5400 <span class="previous-price">&#x20a8; 4000</span> <span class="discount">(20%OFF)</span></span>
                            <span class="ratings">4.2 <i class="material-icons">star_rate</i></span>
                        </div>
                    </a>
                    <a href="#" class="product-grid">
                        <span class="product-image"><img src="<?php echo base_url('public/assets/note-4.jpeg') ?>"></span>
                        <div class="product-info">
                            <span class="info-label item-name">Samsung Galaxy Tab S3 Red 32GB 4GB RAM</span>
                            <span class="info-label item-price">&#x20a8; 5400 <span class="previous-price">&#x20a8; 4000</span> <span class="discount">(20%OFF)</span></span>
                            <span class="ratings">4.2 <i class="material-icons">star_rate</i></span>
                            <span class="offers">5 offers available</span>
                        </div>
                    </a>
                    <a href="#" class="product-grid">
                        <span class="product-image"><img src="<?php echo base_url('public/assets/demo-image-5.jpeg') ?>"></span>
                        <div class="product-info">
                            <span class="info-label item-name">Samsung Galaxy Tab S3 Red 32GB 4GB RAM</span>
                            <span class="info-label item-price">&#x20a8; 5400 <span class="previous-price">&#x20a8; 4000</span> <span class="discount">(20%OFF)</span></span>
                            <span class="ratings">4.2 <i class="material-icons">star_rate</i></span>
                            <span class="offers">5 offers available</span>
                        </div>
                    </a>
                    <a href="#" class="product-grid">
                        <span class="product-image"><img src="<?php echo base_url('public/assets/demo-image-6.jpeg') ?>"></span>
                        <div class="product-info">
                            <span class="info-label item-name">Samsung Galaxy Tab S3 Red 32GB 4GB RAM</span>
                            <span class="info-label item-price">&#x20a8; 5400 <span class="previous-price">&#x20a8; 4000</span> <span class="discount">(20%OFF)</span></span>
                            <span class="ratings">4.2 <i class="material-icons">star_rate</i></span>
                            <span class="offers">5 offers available</span>
                        </div>
                    </a>
                </div>
                <div class="item-footer loadmore-wrapper">
                    <span class="loadmore-button">Load More</span>
                </div>
            </div>
        </div>
    </div>

</div>