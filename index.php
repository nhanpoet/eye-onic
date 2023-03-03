<?php require('top.php') ?>
<div class="body__overlay"></div>
<style>
.brand {
    position: relative;
    margin-top: 50px;
    padding: 30px 0;
    background: rgba(0, 0, 0, 0.1);
}

.brand .brand-item {
    text-align: center; 
}

.brand .brand-item img {
    max-width: 100%;
    margin: auto; 
}

.brand .slick-prev,
.brand .slick-next {
    width: 40px;
    height: 40px;
    z-index: 1;
    opacity: 0;
    transition: .5s;
    background: #FF6F61;
    border-radius: 4px;
}

.brand .slick-prev {
    left: 55px;
}

.brand .slick-next {
    right: 55px;
}

.brand .slick-slider:hover .slick-prev {
    left: 15px;
    opacity: 1;
}

.brand .slick-slider:hover .slick-next {
    right: 15px;
    opacity: 1;
}

.brand .slick-prev:hover,
.brand .slick-prev:focus,
.brand .slick-next:hover,
.brand .slick-next:focus {
    background: #000000;
}

.brand .slick-prev:hover::before,
.brand .slick-prev:focus::before,
.brand .slick-next:hover::before,
.brand .slick-next:focus::before {
    color: #FF6F61;
}

.brand .slick-prev::before,
.brand .slick-next::before {
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    font-size: 30px;
    color: #000000;
}

.brand .slick-prev::before {
    content: "\f104";
}

.brand .slick-next::before {
    content: "\f105";
}


.feature {
    position: relative;
}

.feature .feature-col {
    margin-top: 100px;
}

.feature .feature-content {
    position: relative;
    width: 100%;
    height: 100%;
    padding: 30px 15px;
    text-align: center;
    background: rgba(0, 0, 0, 0.1);;
}

.feature .feature-content i {
    color: #666666;
    font-size: 60px;
    margin-bottom: 30px;
}

.feature .feature-content h2 {
    font-size: 18px;
}

.feature .feature-content p {
    font-size: 15px;
    margin: 0;
}

</style>


<!-- Start Slider Area -->
<div class="slider__container slider--one bg__cat--3">
    <div class="slide__container slider__activation__wrap owl-carousel">
        <!-- Start Single Slide -->
        <div class="single__slide animation__style01 slider__fixed--height">
            <div class="container">
                <div class="row align-items__center">
                    <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                        <div class="slide">
                            <div class="slider__inner">
                                <h2>collection 2021</h2>
                                <h1>NICE GLASSES</h1>
                                <div class="cr__btn">
                                    <a href="cart.php">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                        <div class="slide__thumb">
                            <img src="images/banner/big-img/bg2.jpg" alt="slider images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->
        <!-- Start Single Slide -->
        <div class="single__slide animation__style01 slider__fixed--height">
            <div class="container">
                <div class="row align-items__center">
                    <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                        <div class="slide">
                            <div class="slider__inner">
                                <h2>collection 2021</h2>
                                <h1>NICE GLASSES</h1>
                                <div class="cr__btn">
                                    <a href="cart.php">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                        <div class="slide__thumb">
                            <img src="images/banner/big-img/bg1.jpeg" alt="slider images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->
    </div>
    
</div>
<!-- Start Slider Area -->
<!-- Start Category Area -->


<!-- Brand Start -->
<div class="brand">
    <div class="container-fluid">
        <div class="brand-slider">
            <div class="brand-item"><img src="images/brand/ray-ban.jpg.webp" alt=""></div>
            <div class="brand-item"><img src="images/brand/gucci.jpg" alt=""></div>
            <div class="brand-item"><img src="images/brand/ray-ban.jpg.webp" alt=""></div>
            <div class="brand-item"><img src="images/brand/gucci.jpg" alt=""></div>
            <div class="brand-item"><img src="images/brand/ray-ban.jpg.webp" alt=""></div>
            <div class="brand-item"><img src="images/brand/gucci.jpg" alt=""></div>
        </div>
    </div>
</div>
<!-- Brand End -->


<section class="htc__category__area ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">New Arrivals</h2>
                </div>
            </div>
        </div>
        <div class="htc__product__container">
            <div class="row">
                <div class="product__list clearfix mt--30 align-items-center product-slider product-slider-4">
                    <?php
                    $get_product = get_product($con, 4);
                    foreach ($get_product as $list) {
                    ?>
                        <!-- Start Single Category -->
                        <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                            <div class="category">
                                <div class="ht__cat__thumb">
                                    <a href="product.php?id=<?php echo $list['id'] ?>">
                                        <img src="<?php echo 'media/product/' . $list['image'] ?>">
                                    </a>
                                </div>
                                <div class="fr__hover__info">
                                    <ul class="product__action">
                                        <li><a href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id'] ?>','add')"><i class="icon-heart icons"></i></a></li>
                                        <li><a href="javascript:void(0)" onclick="manage_cart('<?php echo $list['id'] ?>','add')"><i class="icon-handbag icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="fr__product__inner">
                                    <h4><a href="product.php?id=<?php echo $list['id'] ?>"><?php echo $list['name'] ?></a></h4>
                                    <ul class="fr__pro__prize">
                                        <li class="old__prize" style="text-decoration-line:line-through;"><?php echo $list['mrp'] ?></li>
                                        <li><?php echo "$", $list['price'] ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Category -->
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<div style="margin-top: 200px;">

</div>
<!-- End Category Area -->
<!-- Start Product Area -->
<section class="ftr__product__area ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">Best Seller</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product__list clearfix mt--30 align-items-center product-slider product-slider-4">
                <?php
                $get_product = get_product($con, 4, '', '', '', '', 'yes');
                foreach ($get_product as $list) {
                ?>
                    <!-- Start Single Category -->
                    <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                        <div class="category">
                            <div class="ht__cat__thumb">
                                <a href="product.php?id=<?php echo $list['id'] ?>">
                                    <img src="<?php echo 'media/product/' . $list['image'] ?>">
                                </a>
                            </div>
                            <div class="fr__hover__info">
                                <ul class="product__action">
                                    <li><a href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id'] ?>','add')"><i class="icon-heart icons"></i></a></li>
                                    <li><a href="javascript:void(0)" onclick="manage_cart('<?php echo $list['id'] ?>','add')"><i class="icon-handbag icons"></i></a></li>
                                </ul>
                            </div>
                            <div class="fr__product__inner">
                                <h4><a href="product.php?id=<?php echo $list['id'] ?>"><?php echo $list['name'] ?></a></h4>
                                <ul class="fr__pro__prize">
                                    <li class="old__prize" style="text-decoration-line:line-through;"><?php echo $list['mrp'] ?></li>
                                    <li><?php echo "$", $list['price'] ?></li>
                                </ul>

                            </div>

                        </div>
                    </div>
                    <!-- End Single Category -->
                <?php } ?>
            </div>
        </div>
    </div>
    <div style="margin-top:200px">

    </div>
</section>
<!-- End Product Area -->
<input type="hidden" id="qty" value="1" />
<?php require('footer.php') ?>