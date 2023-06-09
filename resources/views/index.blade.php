@extends('components.'.$layout)
@section('content')
<section class="main-slider main-slider__two">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{
"slidesPerView": 1,
"loop": true,
"effect": "fade",
"autoplay": {
"delay": 5000
},
"navigation": {
"nextEl": "#main-slider__swiper-button-next",
"prevEl": "#main-slider__swiper-button-prev"
}
}'>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/main-slider/main-slider-2-1.jpg);">
                </div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 text-left">
                            <h2 class="line-height-2">New <br>
                                <span class="line-one">Organic</span> <br>
                                <span class="line-two">Products</span>
                            </h2>
                            <a href="products.html" class=" thm-btn">Order Now</a>
                            <!-- /.thm-btn dynamic-radius -->
                        </div><!-- /.col-lg-7 text-right -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div>
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/main-slider/main-slider-2-2.jpg);">
                </div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 text-left">
                            <h2 class="line-height-2">New <br>
                                <span class="line-one">Organic</span> <br>
                                <span class="line-two">Products</span>
                            </h2>
                            <a href="products.html" class=" thm-btn">Order Now</a>
                            <!-- /.thm-btn dynamic-radius -->
                        </div><!-- /.col-lg-7 text-right -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div>
        </div>

        {{-- navigation buttons --}}
        <div class="main-slider__nav-two">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i class="organik-icon-left-arrow"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i class="organik-icon-right-arrow"></i></div>
        </div><

    </div>
</section>

<section class="featured-category">
    <div class="featured-category__head" style="background-image: url(assets/images/shapes/category-bg-1-1.png);">
        <div class="container-fluid">
            <div class="block-title text-center">
                <div class="block-title__decor" style="background-image: url(assets/images/shapes/leaf-2-1.png);"></div>
                <!-- /.block-title__decor -->
                <p>Recently Added</p>
                <h3>Browse by Category</h3>
            </div><!-- /.block-title -->
        </div><!-- /.container-fluid -->
    </div><!-- /.featured-category__head -->
    <div class="featured-category__carousel-wrap wow fadeInUp" data-wow-duration="1500ms">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{
"slidesPerView": 2,
"loop": false,
"navigation": {
    "nextEl": "#featured-category__swiper-button-next",
    "prevEl": "#featured-category__swiper-button-prev"
},
"autoplay": {
    "delay": 5000
}, "breakpoints": {
    "575": {
        "spaceBetween": 30,
        "slidesPerView": 2
    },
    "768": {
        "spaceBetween": 30,
        "slidesPerView": 3
    },
    "1200": {
        "spaceBetween": 30,
        "slidesPerView": 5
    }
}}'>

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="featured-category__box">
                        <i class="organik-icon-harvest"></i>
                        <h3><a href="products.html">О Грядке</a></h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="featured-category__box">
                        <i class="organik-icon-fruits"></i>
                        <h3><a href="products.html">Жизнь в грядке</a></h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="featured-category__box">
                        <i class="organik-icon-dairy-products"></i>
                        <h3><a href="products.html">Посещения</a></h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="featured-category__box">
                        <i class="organik-icon-boiled"></i>
                        <h3><a href="products.html">Сотрудничество</a></h3>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="featured-category__box">
                        <i class="organik-icon-fish"></i>
                        <h3><a href="products.html">Контакты</a></h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- If we need navigation buttons -->
        <div class="featured-category__nav">
            <div class="swiper-button-prev" id="featured-category__swiper-button-prev"><i class="organik-icon-left-arrow"></i>
            </div>
            <div class="swiper-button-next" id="featured-category__swiper-button-next"><i class="organik-icon-right-arrow"></i></div>
        </div><!-- /.featured-category__nav -->
    </div><!-- /.featured-category__carousel-wrap -->
</section><!-- /.featured-category -->

<section class="featured-products">
    <div class="container-fluid">
        <div class="block-title text-center">
            <div class="block-title__decor"></div><!-- /.block-title__decor -->
            <p>Recently Added
            </p>
            <h3>New Featured Products</h3>
        </div><!-- /.block-title -->
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{
    "slidesPerView": 1,
    "loop": true,
    "navigation": {
        "nextEl": "#featured-product__swiper-button-next",
        "prevEl": "#featured-product__swiper-button-prev"
    },
    "autoplay": {
        "delay": 5000
    }, "breakpoints": {
        "575": {
            "spaceBetween": 30,
            "slidesPerView": 2
        },
        "768": {
            "spaceBetween": 30,
            "slidesPerView": 3
        },
        "1200": {
            "spaceBetween": 30,
            "slidesPerView": 4
        }
    }}'>

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="product-card__two">
                        <div class="product-card__two-image">
                            <span class="product-card__two-sale">sale</span>
                            <img src="assets/images/products/product-2-1.jpg" alt="">
                            <div class="product-card__two-image-content">
                                <a href="#"><i class="organik-icon-visibility"></i></a>
                                <a href="#"><i class="organik-icon-heart"></i></a>
                                <a href="cart.html"><i class="organik-icon-shopping-cart"></i></a>
                            </div><!-- /.product-card__two-image-content -->
                        </div><!-- /.product-card__two-image -->
                        <div class="product-card__two-content">
                            <h3><a href="product-details.html">Banana</a></h3>
                            <div class="product-card__two-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.product-card__two-stars -->
                            <p>$1.00</p>
                        </div><!-- /.product-card__two-content -->
                    </div><!-- /.product-card__two -->
                </div>
                <div class="swiper-slide">
                    <div class="product-card__two">
                        <div class="product-card__two-image">

                            <img src="assets/images/products/product-2-2.jpg" alt="">
                            <div class="product-card__two-image-content">
                                <a href="#"><i class="organik-icon-visibility"></i></a>
                                <a href="#"><i class="organik-icon-heart"></i></a>
                                <a href="cart.html"><i class="organik-icon-shopping-cart"></i></a>
                            </div><!-- /.product-card__two-image-content -->
                        </div><!-- /.product-card__two-image -->
                        <div class="product-card__two-content">
                            <h3><a href="product-details.html">Olive Oil</a></h3>
                            <div class="product-card__two-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.product-card__two-stars -->
                            <p>$9.00</p>
                        </div><!-- /.product-card__two-content -->
                    </div><!-- /.product-card__two -->
                </div>
                <div class="swiper-slide">
                    <div class="product-card__two">
                        <div class="product-card__two-image">

                            <img src="assets/images/products/product-2-3.jpg" alt="">
                            <div class="product-card__two-image-content">
                                <a href="#"><i class="organik-icon-visibility"></i></a>
                                <a href="#"><i class="organik-icon-heart"></i></a>
                                <a href="cart.html"><i class="organik-icon-shopping-cart"></i></a>
                            </div><!-- /.product-card__two-image-content -->
                        </div><!-- /.product-card__two-image -->
                        <div class="product-card__two-content">
                            <h3><a href="product-details.html">Eggs</a></h3>
                            <div class="product-card__two-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.product-card__two-stars -->
                            <p>$3.00</p>
                        </div><!-- /.product-card__two-content -->
                    </div><!-- /.product-card__two -->
                </div>
                <div class="swiper-slide">
                    <div class="product-card__two">
                        <div class="product-card__two-image">

                            <img src="assets/images/products/product-2-4.jpg" alt="">
                            <div class="product-card__two-image-content">
                                <a href="#"><i class="organik-icon-visibility"></i></a>
                                <a href="#"><i class="organik-icon-heart"></i></a>
                                <a href="cart.html"><i class="organik-icon-shopping-cart"></i></a>
                            </div><!-- /.product-card__two-image-content -->
                        </div><!-- /.product-card__two-image -->
                        <div class="product-card__two-content">
                            <h3><a href="product-details.html">Tamatos</a></h3>
                            <div class="product-card__two-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.product-card__two-stars -->
                            <p>$1.00</p>
                        </div><!-- /.product-card__two-content -->
                    </div><!-- /.product-card__two -->
                </div>
                <div class="swiper-slide">
                    <div class="product-card__two">
                        <div class="product-card__two-image">

                            <img src="assets/images/products/product-2-5.jpg" alt="">
                            <div class="product-card__two-image-content">
                                <a href="#"><i class="organik-icon-visibility"></i></a>
                                <a href="#"><i class="organik-icon-heart"></i></a>
                                <a href="cart.html"><i class="organik-icon-shopping-cart"></i></a>
                            </div><!-- /.product-card__two-image-content -->
                        </div><!-- /.product-card__two-image -->
                        <div class="product-card__two-content">
                            <h3><a href="product-details.html">Bread</a></h3>
                            <div class="product-card__two-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.product-card__two-stars -->
                            <p>$2.00</p>
                        </div><!-- /.product-card__two-content -->
                    </div><!-- /.product-card__two -->
                </div>
                <div class="swiper-slide">
                    <div class="product-card__two">
                        <div class="product-card__two-image">
                            <span class="product-card__two-sale">sale</span>
                            <img src="assets/images/products/product-2-6.jpg" alt="">
                            <div class="product-card__two-image-content">
                                <a href="#"><i class="organik-icon-visibility"></i></a>
                                <a href="#"><i class="organik-icon-heart"></i></a>
                                <a href="cart.html"><i class="organik-icon-shopping-cart"></i></a>
                            </div><!-- /.product-card__two-image-content -->
                        </div><!-- /.product-card__two-image -->
                        <div class="product-card__two-content">
                            <h3><a href="product-details.html">Apples</a></h3>
                            <div class="product-card__two-stars">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.product-card__two-stars -->
                            <p>$2.00</p>
                        </div><!-- /.product-card__two-content -->
                    </div><!-- /.product-card__two -->
                </div>
            </div><!-- /.swiper-wrapper -->

        </div>

        <!-- If we need navigation buttons -->
        <div class="featured-product__nav">
            <div class="swiper-button-prev" id="featured-product__swiper-button-next"><i class="organik-icon-left-arrow"></i>
            </div>
            <div class="swiper-button-next" id="featured-product__swiper-button-prev"><i class="organik-icon-right-arrow"></i></div>
        </div><!-- /.featured-product__nav -->
        <div class="text-center load-more">
            <a href="products.html" class="thm-btn">View All Products</a><!-- /.thm-btn -->
        </div><!-- /.text-center -->
    </div><!-- /.container -->
</section><!-- /.featured-products -->

<section class="video-one jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 50%">
    <img src="assets/images/backgrounds/video-bg-1-1.jpg" alt="" class="jarallax-img">
    <div class="container text-center">
        <img src="assets/images/shapes/video-leaf-2-1.png" alt="" class="video-one__leaf-1">
        <img src="assets/images/shapes/video-leaf-2-2.png" alt="" class="video-one__leaf-2">
        <a href="https://www.youtube.com/watch?v=u5l4cdUjau4" class="video-popup">
            <i class="fa fa-play"></i>
        </a><!-- /.video-popup -->
        <h3>Get Always Fresh <br>
            Organic Food</h3>
    </div><!-- /.container -->
</section><!-- /.video-one -->

<section class="feature-two">
    <div class="container">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{
    "slidesPerView": 1,
    "loop": true,
    "autoplay": {
        "delay": 5000
    }, "breakpoints": {
        "575": {
            "spaceBetween": 30,
            "slidesPerView": 2
        },
        "768": {
            "spaceBetween": 30,
            "slidesPerView": 3
        }
    }}'>

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="feature-two__box" style="background-image: url(assets/images/resources/feature-bg-1-1.png);">
                        <h3>Latest
                            Products</h3>
                    </div><!-- /.feature-two__box -->
                </div>
                <div class="swiper-slide">
                    <div class="feature-two__box" style="background-image: url(assets/images/resources/feature-bg-1-2.png);">
                        <h3>Diet
                            Recipe</h3>
                    </div><!-- /.feature-two__box -->
                </div>
                <div class="swiper-slide">
                    <div class="feature-two__box" style="background-image: url(assets/images/resources/feature-bg-1-3.png);">
                        <h3>Pure
                            Organic</h3>
                    </div><!-- /.feature-two__box -->
                </div>
            </div><!-- /.row -->

        </div><!-- /.swiper-container -->
    </div><!-- /.container -->
</section><!-- /.feature-two -->

<section class="call-to-action-five">
    <img src="assets/images/shapes/call-shape-5-1.png" alt="" class="call-to-action-five__shape-1">
    <div class="container">
        <div class="inner-container wow fadeInDown" data-wow-duration="1500ms">
            <h3>We Sale Best Organic Products</h3>
            <h3>We have 30 Years Experience</h3>
        </div><!-- /.inner-container -->
    </div><!-- /.container -->
</section><!-- /.call-to-action-five -->

<section class="new-products-two">
    <div class="container">
        <div class="block-title text-center">
            <div class="block-title__decor"></div><!-- /.block-title__decor -->
            <p>Recently Added</p>
            <h3>
                New Products</h3>
        </div><!-- /.block-title -->
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{
    "slidesPerView": 1,
    "loop": true,
    "autoplay": {
        "delay": 5000
    }, "breakpoints": {
        "575": {
            "spaceBetween": 30,
            "slidesPerView": 2
        },
        "768": {
            "spaceBetween": 30,
            "slidesPerView": 3
        },
        "1200": {
            "spaceBetween": 30,
            "slidesPerView": 4
        }
    }}'>

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="assets/images/products/product-1-1.jpg" alt="">
                            <div class="product-card__image-content">
                                <a href="#"><i class="organik-icon-heart"></i></a>
                                <a href="cart.html"><i class="organik-icon-shopping-cart"></i></a>
                            </div><!-- /.product-card__image-content -->
                        </div><!-- /.product-card__image -->
                        <div class="product-card__content">
                            <div class="product-card__left">
                                <h3><a href="product-details.html">Banana</a></h3>
                                <p>$1.00</p>
                            </div><!-- /.product-card__left -->
                            <div class="product-card__right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.product-card__right -->
                        </div><!-- /.product-card__content -->
                    </div><!-- /.product-card -->
                </div>
                <div class="swiper-slide">
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="assets/images/products/product-1-2.jpg" alt="">
                            <div class="product-card__image-content">
                                <a href="#"><i class="organik-icon-heart"></i></a>
                                <a href="cart.html"><i class="organik-icon-shopping-cart"></i></a>
                            </div><!-- /.product-card__image-content -->
                        </div><!-- /.product-card__image -->
                        <div class="product-card__content">
                            <div class="product-card__left">
                                <h3><a href="product-details.html">Tomatoes</a></h3>
                                <p>$3.00</p>
                            </div><!-- /.product-card__left -->
                            <div class="product-card__right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.product-card__right -->
                        </div><!-- /.product-card__content -->
                    </div><!-- /.product-card -->
                </div>
                <div class="swiper-slide">
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="assets/images/products/product-1-3.jpg" alt="">
                            <div class="product-card__image-content">
                                <a href="#"><i class="organik-icon-heart"></i></a>
                                <a href="cart.html"><i class="organik-icon-shopping-cart"></i></a>
                            </div><!-- /.product-card__image-content -->
                        </div><!-- /.product-card__image -->
                        <div class="product-card__content">
                            <div class="product-card__left">
                                <h3><a href="product-details.html">Bread</a></h3>
                                <p>$2.00</p>
                            </div><!-- /.product-card__left -->
                            <div class="product-card__right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.product-card__right -->
                        </div><!-- /.product-card__content -->
                    </div><!-- /.product-card -->
                </div>
                <div class="swiper-slide">
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="assets/images/products/product-1-4.jpg" alt="">
                            <div class="product-card__image-content">
                                <a href="#"><i class="organik-icon-heart"></i></a>
                                <a href="cart.html"><i class="organik-icon-shopping-cart"></i></a>
                            </div><!-- /.product-card__image-content -->
                        </div><!-- /.product-card__image -->
                        <div class="product-card__content">
                            <div class="product-card__left">
                                <h3><a href="product-details.html">Apples</a></h3>
                                <p>$5.00</p>
                            </div><!-- /.product-card__left -->
                            <div class="product-card__right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.product-card__right -->
                        </div><!-- /.product-card__content -->
                    </div><!-- /.product-card -->
                </div>
                <div class="swiper-slide">
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="assets/images/products/product-1-5.jpg" alt="">
                            <div class="product-card__image-content">
                                <a href="#"><i class="organik-icon-heart"></i></a>
                                <a href="cart.html"><i class="organik-icon-shopping-cart"></i></a>
                            </div><!-- /.product-card__image-content -->
                        </div><!-- /.product-card__image -->
                        <div class="product-card__content">
                            <div class="product-card__left">
                                <h3><a href="product-details.html">Olive Oil</a></h3>
                                <p>$6.00</p>
                            </div><!-- /.product-card__left -->
                            <div class="product-card__right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.product-card__right -->
                        </div><!-- /.product-card__content -->
                    </div><!-- /.product-card -->
                </div>
                <div class="swiper-slide">
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="assets/images/products/product-1-6.jpg" alt="">
                            <div class="product-card__image-content">
                                <a href="#"><i class="organik-icon-heart"></i></a>
                                <a href="cart.html"><i class="organik-icon-shopping-cart"></i></a>
                            </div><!-- /.product-card__image-content -->
                        </div><!-- /.product-card__image -->
                        <div class="product-card__content">
                            <div class="product-card__left">
                                <h3><a href="product-details.html">Eggs</a></h3>
                                <p>$4.00</p>
                            </div><!-- /.product-card__left -->
                            <div class="product-card__right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.product-card__right -->
                        </div><!-- /.product-card__content -->
                    </div><!-- /.product-card -->
                </div>
                <div class="swiper-slide">
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="assets/images/products/product-1-7.jpg" alt="">
                            <div class="product-card__image-content">
                                <a href="#"><i class="organik-icon-heart"></i></a>
                                <a href="cart.html"><i class="organik-icon-shopping-cart"></i></a>
                            </div><!-- /.product-card__image-content -->
                        </div><!-- /.product-card__image -->
                        <div class="product-card__content">
                            <div class="product-card__left">
                                <h3><a href="product-details.html">Honey</a></h3>
                                <p>$9.00</p>
                            </div><!-- /.product-card__left -->
                            <div class="product-card__right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.product-card__right -->
                        </div><!-- /.product-card__content -->
                    </div><!-- /.product-card -->
                </div>
                <div class="swiper-slide">
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="assets/images/products/product-1-8.jpg" alt="">
                            <div class="product-card__image-content">
                                <a href="#"><i class="organik-icon-heart"></i></a>
                                <a href="cart.html"><i class="organik-icon-shopping-cart"></i></a>
                            </div><!-- /.product-card__image-content -->
                        </div><!-- /.product-card__image -->
                        <div class="product-card__content">
                            <div class="product-card__left">
                                <h3><a href="product-details.html">Onions</a></h3>
                                <p>$2.00</p>
                            </div><!-- /.product-card__left -->
                            <div class="product-card__right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.product-card__right -->
                        </div><!-- /.product-card__content -->
                    </div><!-- /.product-card -->
                </div>
                <div class="swiper-slide">
                    <div class="product-card">
                        <div class="product-card__image">
                            <img src="assets/images/products/product-1-9.jpg" alt="">
                            <div class="product-card__image-content">
                                <a href="#"><i class="organik-icon-heart"></i></a>
                                <a href="cart.html"><i class="organik-icon-shopping-cart"></i></a>
                            </div><!-- /.product-card__image-content -->
                        </div><!-- /.product-card__image -->
                        <div class="product-card__content">
                            <div class="product-card__left">
                                <h3><a href="product-details.html">Cabbage</a></h3>
                                <p>$3.00</p>
                            </div><!-- /.product-card__left -->
                            <div class="product-card__right">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div><!-- /.product-card__right -->
                        </div><!-- /.product-card__content -->
                    </div><!-- /.product-card -->
                </div>
            </div><!-- /.row -->

        </div><!-- /.swiper-container -->
    </div><!-- /.container -->
</section><!-- /.new-products-two -->

<section class="call-to-action-four" style="background-image: url(assets/images/backgrounds/call-4-bg.png);">
    <img src="assets/images/shapes/call-shape-4-1.png" alt="" class="call-to-action-four__shape-1">
    <img src="assets/images/shapes/call-shape-4-2.png" alt="" class="call-to-action-four__shape-2">
    <img src="assets/images/shapes/call-shape-4-3.png" alt="" class="call-to-action-four__shape-3">
    <img src="assets/images/shapes/call-shape-4-4.png" alt="" class="call-to-action-four__shape-4">
    <img src="assets/images/shapes/call-shape-4-5.png" alt="" class="call-to-action-four__shape-5 wow fadeInRight" data-wow-duration="1500ms">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <div class="call-to-action-four__content">
                    <div class="block-title text-left">
                        <div class="block-title__decor"></div><!-- /.block-title__decor -->
                        <p>Weekly Offers</p>
                        <h3>Deal of the Day</h3>
                    </div><!-- /.block-title -->
                    <p>Lorem ipsum dolor sit amet nsectetur cing elit. Suspe ndisse suscipit sagittis leo sit met entum
                        estibu dignissim.</p>
                    <ul class="countdown-one__list list-unstyled">
                        <!-- content loading via js -->
                    </ul><!-- /.coundown-one__list -->
                    <a href="products.html" class="thm-btn">Order Now</a><!-- /.thm-btn -->
                </div><!-- /.call-to-action-four__content -->
            </div><!-- /.col-sm-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.call-to-action-four -->

<section class="call-to-action-three">
    <div class="container">
        <div class="inner-container wow fadeInUp" data-wow-duration="1500ms" style="background-image: url(assets/images/shapes/call-shape-3-1.png);">
            <div class="call-to-action-three__discount">
                <h4>25<span>%</span></h4>
                <p>Discounts</p>
            </div><!-- /.call-to-action-three__discount -->
            <div class="row justify-content-xl-end">
                <div class="col-md-12 col-lg-6">
                    <div class="call-to-action-three__content">
                        <h3>Natural Healthy
                            Vegetables</h3>
                        <a href="products.html" class="thm-btn">Order Now</a><!-- /.thm-btn -->
                    </div><!-- /.call-to-action-three__content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            <img src="assets/images/resources/call-3-1.png" alt="" class="call-to-action-three__image">

        </div><!-- /.inner-container -->
    </div><!-- /.container -->
</section><!-- /.call-to-action-three -->

<section class="blog-two">
    <div class="container">
        <div class="block-title text-center">
            <div class="block-title__decor"></div><!-- /.block-title__decor -->
            <p>From the Blog</p>
            <h3>News & Articles</h3>
        </div><!-- /.block-title -->
        <div class="thm-tiny__slider" id="blog-two__carousel" data-tiny-options='{
    "container": "#blog-two__carousel",
    "items": 1,
    "slideBy": "page",
    "gutter": 0,
    "mouseDrag": true,
    "autoplay": true,
    "nav": false,
    "controlsPosition": "bottom",
    "controlsText": ["<i class=\"fa fa-angle-left\"></i>", "<i class=\"fa fa-angle-right\"></i>"],
    "autoplayButtonOutput": false,
    "responsive": {
        "640": {
          "items": 2,
          "gutter": 30
        },
        "992": {
          "gutter": 30,
          "items": 3
        },
        "1200": {
          "disable": true
        }
      }
}'>
            <div>
                <div class="blog-card">
                    <div class="blog-card__image">
                        <div class="blog-card__date">18 Nov</div><!-- /.blog-card__date -->
                        <img src="assets/images/blog/blog-1-1.png" alt="How to Findout Healthy Food For Body">
                        <a href="news-details.html"></a>
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">
                        <div class="blog-card__meta">
                            <a href="news-details.html"><i class="far fa-user-circle"></i> by Admin</a>
                            <a href="news-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                        </div><!-- /.blog-card__meta -->
                        <h3><a href="news-details.html">How to Findout Healthy Food For Body</a></h3>
                        <p>Lorem ipsum is simply free text used by copytyping refreshing.</p>
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div>
            <div>
                <div class="blog-card">
                    <div class="blog-card__image">
                        <div class="blog-card__date">18 Nov</div><!-- /.blog-card__date -->
                        <img src="assets/images/blog/blog-1-2.png" alt="Bring to the table win-win survival">
                        <a href="news-details.html"></a>
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">
                        <div class="blog-card__meta">
                            <a href="news-details.html"><i class="far fa-user-circle"></i> by Admin</a>
                            <a href="news-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                        </div><!-- /.blog-card__meta -->
                        <h3><a href="news-details.html">Bring to the table win-win survival</a></h3>
                        <p>Lorem ipsum is simply free text used by copytyping refreshing.</p>
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div>
            <div>
                <div class="blog-card">
                    <div class="blog-card__image">
                        <div class="blog-card__date">18 Nov</div><!-- /.blog-card__date -->
                        <img src="assets/images/blog/blog-1-3.png" alt="At the end of the day, going forward">
                        <a href="news-details.html"></a>
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">
                        <div class="blog-card__meta">
                            <a href="news-details.html"><i class="far fa-user-circle"></i> by Admin</a>
                            <a href="news-details.html"><i class="far fa-comments"></i> 2 Comments</a>
                        </div><!-- /.blog-card__meta -->
                        <h3><a href="news-details.html">At the end of the day, going forward</a></h3>
                        <p>Lorem ipsum is simply free text used by copytyping refreshing.</p>
                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div>
        </div>
    </div><!-- /.container -->
</section><!-- /.blog-two -->

<div class="client-carousel ">
    <div class="container">
        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 140, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
        "0": {
            "spaceBetween": 30,
            "slidesPerView": 2
        },
        "375": {
            "spaceBetween": 30,
            "slidesPerView": 2
        },
        "575": {
            "spaceBetween": 30,
            "slidesPerView": 3
        },
        "767": {
            "spaceBetween": 50,
            "slidesPerView": 4
        },
        "991": {
            "spaceBetween": 50,
            "slidesPerView": 5
        },
        "1199": {
            "spaceBetween": 100,
            "slidesPerView": 5
        }
    }}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="assets/images/resources/brand-1-1.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/resources/brand-1-1.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/resources/brand-1-1.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/resources/brand-1-1.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/resources/brand-1-1.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/resources/brand-1-1.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/resources/brand-1-1.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/resources/brand-1-1.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/resources/brand-1-1.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/resources/brand-1-1.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/resources/brand-1-1.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/resources/brand-1-1.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/resources/brand-1-1.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/resources/brand-1-1.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/resources/brand-1-1.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/resources/brand-1-1.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/resources/brand-1-1.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/resources/brand-1-1.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/resources/brand-1-1.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/resources/brand-1-1.png" alt="">
                </div>
            </div><!-- /.swiper-wrapper -->
        </div><!-- /.thm-swiper__slider -->
    </div><!-- /.container -->
</div><!-- /.client-carousel -->
@endsection