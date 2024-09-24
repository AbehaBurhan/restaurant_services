@extends('restaurant.layouts.master')

@section('content')
    <section class="p-0 full-screen md-h-700px bg-dark-gray sm-h-600px ipad-top-space-margin cover-background"
        data-parallax-background-ratio="0.8"
        style="background-image: url('{{ asset('assets/restaurant/images/demo-restaurant-home-banner-bg.png') }}')">
        <div class="opacity-light bg-dark-gray"></div>
        <div class="container h-100">
            <div class="row align-items-center h-100 justify-content-center">
                <div class="col-12 position-relative text-center">
                    <div class="background-repeat bg-base-color border-radius-100 w-700px h-700px lg-w-550px lg-h-550px sm-w-450px sm-h-450px xs-w-320px xs-h-320px mx-auto position-relative d-flex justify-content-center align-items-center"
                        style="background-image: url('{{ asset('assets/images/demo-restaurant-home-banner-pattern.png') }}')"
                        data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 800, "delay": 100, "staggervalue": 100, "easing": "easeOutQuad" }'>
                        <div>
                            <p
                                class="text-black alt-font fs-26 xs-fs-17 xs-lh-26 ls-1px text-uppercase mb-25px sm-mb-15px mt-10px">
                                Experience the taste of italy</p>
                            <div class="alt-font fs-110 lh-100 xs-fs-80 xs-lh-70 mb-30px xs-mb-15px fancy-text-style-4">
                                <span
                                    class="text-outline text-outline text-outline-width-1px sm-text-outline-width-1px text-outline-color-white text-outline-base-color-background">Great
                                    dining</span> <span
                                    data-fancy-text='{ "effect": "rotate", "string": ["experience", "restaurant"] }'
                                    class="text-white ls-minus-2px"></span>
                            </div>
                            {{-- <a href="demo-restaurant-about.html"
                                class="btn btn-extra-large btn-switch-text btn-black btn-round-edge btn-box-shadow mb-10px">
                                <span>
                                    <span class="btn-double-text" data-text="Authentic experience">Authentic
                                        experience</span>
                                    <span><i class="feather icon-feather-arrow-right"></i></span>
                                </span>
                            </a> --}}
                            {{-- <img src="{{ asset('assets/images/demo-restaurant-home-01.png') }}" alt=""
                                class="position-absolute right-minus-50px bottom-50px lg-bottom-10px lg-w-180px sm-w-150px animation-float d-none d-sm-inline-block"> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner -->
    <!-- start section -->
    <section class="position-relative overflow-hidden z-index-0" id="about">
        <div
            class="position-absolute left-0px w-100 text-center top-minus-90px lg-top-minus-60px xs-top-minus-20px opacity-2 ls-minus-10px lg-ls-minus-1px fs-350 lg-fs-250 xs-fs-200 text-nowrap alt-font text-uppercase">
            experience</div>
        {{-- <div class="position-absolute left-minus-50px mt-15 d-none d-xl-inline-block" data-parallax-liquid="true"
            data-parallax-transition="2" data-parallax-position="top">
            <img src="https://via.placeholder.com/248x244" alt="" data-bottom-top="transform: rotate(-30deg)"
                data-top-bottom="transform:rotate(10deg)">
        </div> --}}
        {{-- <div class="position-absolute z-index-minus-1 right-minus-50px xxl-right-minus-100px xl-right-minus-50px xl-w-220px d-none d-xl-inline-block"
            data-parallax-liquid="true" data-parallax-transition="2" data-parallax-position="bottom">
            <img src="https://via.placeholder.com/346x345" alt="" data-bottom-top="transform: rotate(-30deg)"
                data-top-bottom="transform:rotate(10deg)">
        </div> --}}
        <div class="container">
            <div class="row align-items-center mb-4 lg-mb-6 lg-mt-5">
                <div class="col-xl-7 col-lg-6 text-center position-relative md-mb-50px xs-mb-30px"
                    data-anime='{ "rotateZ": [-15, 0], "opacity": [0,1], "duration": 1500, "delay": 300, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <img src="{{ asset('assets/restaurant/images/demo-restaurant-about.png') }}" alt="">
                </div>
                <div class="col-xl-5 col-lg-6"
                    data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="fs-15 fw-600 text-red text-uppercase mb-25px d-block"><span
                            class="w-70px h-2px bg-red d-inline-block align-middle me-15px"></span>since 1988</span>
                    <h1 class="alt-font text-dark-gray mb-15px">Wonderful dining experience & food.</h1>
                    <p class="w-90">Welcome to tasty bites, your go-to destination in Lahore for a memorable dining
                        experience. Our passion for exceptional cuisine shines through in every dish, crafted from the
                        freshest ingredients by our talented chefs.

                        We offer a diverse menu for everything from family gatherings to special celebrations. Our friendly
                        staff is dedicated to providing top-notch service, ensuring you feel right at home.

                        Join us for delicious food, great company, and unforgettable moments. We look forward to serving you
                        at Tasty Bites!</p>
                    <div class="d-inline-block mt-10px xs-mt-0">
                        <a href="#contact"
                            class="btn btn-dark-gray btn-large btn-switch-text btn-round-edge btn-box-shadow me-30px xs-me-15px xs-mb-10px">
                            <span>
                                <span class="btn-double-text" data-text="Contact Us">Contact Us</span>
                            </span>
                        </a>
                        <div class="alt-font fs-24 d-inline-block align-middle lh-0 text-dark-gray xs-mb-10px"><i
                                class="feather icon-feather-phone-outgoing me-10px text-base-color"></i><a
                                href="tel:1800222000">+92-319-5199686</a></div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-xl-3 row-cols-lg-3 row-cols-md-2 justify-content-center"
                data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <!-- start features box item -->
                <div class="col icon-with-text-style-08 md-mb-50px sm-mb-30px">
                    <div class="feature-box feature-box-left-icon-middle">
                        <div
                            class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle bg-white box-shadow-medium-bottom me-25px">
                            <i class="bi bi-box-seam d-inline-block icon-medium text-dark-gray"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-inline-block alt-font fs-26 text-dark-gray">fast delivery</span>
                            <p class="lh-22">Within 30 minutes</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-08 md-mb-50px sm-mb-30px">
                    <div class="feature-box feature-box-left-icon-middle">
                        <div
                            class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle bg-white box-shadow-medium-bottom me-25px">
                            <i class="bi bi-award d-inline-block icon-medium text-dark-gray"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-inline-block alt-font fs-26 text-dark-gray">absolute dining</span>
                            <p class="lh-22">Best buffet restaurant</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-08">
                    <div class="feature-box feature-box-left-icon-middle">
                        <div
                            class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle bg-white box-shadow-medium-bottom me-25px">
                            <i class="bi bi-bag-check d-inline-block icon-medium text-dark-gray"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-inline-block alt-font fs-26 text-dark-gray">pickup delivery</span>
                            <p class="lh-22">Grab your food order</p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
            </div>
        </div>
    </section>
    <!-- end section -->

    <section class="ipad-top-space-margin page-title-big-typography cover-background p-0 md-background-position-left-center"
        id="gallery"
        style="background-image: url('{{ asset('assets/restaurant/images/demo-restaurant-about-title-bg.jpg') }}')">
        <div class="container">
            <div class="row align-items-center justify-content-center small-screen">
                <div class="col-lg-6 col-md-8 position-relative text-center page-title-extra-large"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                    <h1 class="alt-font text-dark-gray text-uppercase ls-minus-1px mb-0">Photo gallery</h1>
                    <h2 class="m-auto text-red fw-600 text-uppercase mb-0"><span
                            class="h-2px w-5px bg-red d-inline-block align-middle me-5px"></span>Luxury restaurant<span
                            class="h-2px w-5px bg-red d-inline-block align-middle ms-5px"></span></h2>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- filter navigation -->
                    <ul class="portfolio-filter nav nav-tabs justify-content-center border-0 fw-500 pb-4">
                        <li class="nav active"><a data-filter="*" href="#">All</a></li>
                        <li class="nav"><a data-filter=".nonveg" href="#">Nonveg</a></li>
                        <li class="nav"><a data-filter=".vegetarian" href="#">Vegetarian</a></li>
                        <li class="nav"><a data-filter=".dessert" href="#">Dessert</a></li>
                        <li class="nav"><a data-filter=".drinks" href="#">Drinks</a></li>
                    </ul>
                    <!-- end filter navigation -->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 filter-content">
                    <ul
                        class="portfolio-simple portfolio-wrapper grid-loading grid grid-3col xxl-grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                        <li class="grid-sizer"></li>
                        <!-- start portfolio item -->
                        <li class="grid-item nonveg dessert drinks transition-inner-all">
                            <div class="portfolio-box">
                                <div class="portfolio-image bg-dark-gray border-radius-6px">
                                    <img src={{ asset('assets/restaurant/images/demo-restaurant-gallery-01.png') }}
                                        alt="" />
                                    <div class="portfolio-hover d-flex justify-content-center flex-column p-35px">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href={{ asset('assets/restaurant/images/demo-restaurant-gallery-01.png') }}
                                                data-group="portfolio-items"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px rounded-circle box-shadow-large move-bottom-top"
                                                title="Lightbox gallery image title">
                                                <i class="feather icon-feather-search fw-600" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item vegetarian dessert transition-inner-all">
                            <div class="portfolio-box">
                                <div class="portfolio-image bg-dark-gray border-radius-6px">
                                    <img src={{ asset('assets/restaurant/images/demo-restaurant-gallery-02.png') }}
                                        alt="" />
                                    <div class="portfolio-hover d-flex justify-content-center flex-column p-35px">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href={{ asset('assets/restaurant/images/demo-restaurant-gallery-02.png') }}
                                                data-group="portfolio-items"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px rounded-circle box-shadow-large move-bottom-top"
                                                title="Lightbox gallery image title">
                                                <i class="feather icon-feather-search fw-600" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item vegetarian dessert transition-inner-all">
                            <div class="portfolio-box">
                                <div class="portfolio-image bg-dark-gray border-radius-6px">
                                    <img src={{ asset('assets/restaurant/images/demo-restaurant-gallery-03.png') }}
                                        alt="" />
                                    <div class="portfolio-hover d-flex justify-content-center flex-column p-35px">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href={{ asset('assets/restaurant/images/demo-restaurant-gallery-03.png') }}
                                                data-group="portfolio-items"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px rounded-circle box-shadow-large move-bottom-top"
                                                title="Lightbox gallery image title">
                                                <i class="feather icon-feather-search fw-600" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item nonveg vegetarian drinks transition-inner-all">
                            <div class="portfolio-box">
                                <div class="portfolio-image bg-dark-gray border-radius-6px">
                                    <img src={{ asset('assets/restaurant/images/demo-restaurant-gallery-04.jpg') }}
                                        alt="" />
                                    <div class="portfolio-hover d-flex justify-content-center flex-column p-35px">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href={{ asset('assets/restaurant/images/demo-restaurant-gallery-04.jpg') }}
                                                data-group="portfolio-items"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px rounded-circle box-shadow-large move-bottom-top"
                                                title="Lightbox gallery image title">
                                                <i class="feather icon-feather-search fw-600" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item vegetarian dessert drinks transition-inner-all">
                            <div class="portfolio-box">
                                <div class="portfolio-image bg-dark-gray border-radius-6px">
                                    <img src={{ asset('assets/restaurant/images/demo-restaurant-gallery-05.png') }}
                                        alt="" />
                                    <div class="portfolio-hover d-flex justify-content-center flex-column p-35px">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href={{ asset('assets/restaurant/images/demo-restaurant-gallery-05.png') }}
                                                data-group="portfolio-items"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px rounded-circle box-shadow-large move-bottom-top"
                                                title="Lightbox gallery image title">
                                                <i class="feather icon-feather-search fw-600" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item nonveg vegetarian drinks transition-inner-all">
                            <div class="portfolio-box">
                                <div class="portfolio-image bg-dark-gray border-radius-6px">
                                    <img src={{ asset('assets/restaurant/images/demo-restaurant-gallery-06.png') }}
                                        alt="" />
                                    <div class="portfolio-hover d-flex justify-content-center flex-column p-35px">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href={{ asset('assets/restaurant/images/demo-restaurant-gallery-06.png') }}
                                                data-group="portfolio-items"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px rounded-circle box-shadow-large move-bottom-top"
                                                title="Lightbox gallery image title">
                                                <i class="feather icon-feather-search fw-600" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item nonveg vegetarian transition-inner-all">
                            <div class="portfolio-box">
                                <div class="portfolio-image bg-dark-gray border-radius-6px">
                                    <img src={{ asset('assets/restaurant/images/demo-restaurant-gallery-07.png') }}
                                        alt="" />
                                    <div class="portfolio-hover d-flex justify-content-center flex-column p-35px">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href={{ asset('assets/restaurant/images/demo-restaurant-gallery-07.png') }}
                                                data-group="portfolio-items"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px rounded-circle box-shadow-large move-bottom-top"
                                                title="Lightbox gallery image title">
                                                <i class="feather icon-feather-search fw-600" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item nonveg dessert drinks transition-inner-all">
                            <div class="portfolio-box">
                                <div class="portfolio-image bg-dark-gray border-radius-6px">
                                    <img src={{ asset('assets/restaurant/images/demo-restaurant-gallery-08.png') }}
                                        alt="" />
                                    <div class="portfolio-hover d-flex justify-content-center flex-column p-35px">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href={{ asset('assets/restaurant/images/demo-restaurant-gallery-08.png') }}
                                                data-group="portfolio-items"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px rounded-circle box-shadow-large move-bottom-top"
                                                title="Lightbox gallery image title">
                                                <i class="feather icon-feather-search fw-600" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                        <!-- start portfolio item -->
                        <li class="grid-item nonveg dessert drinks transition-inner-all">
                            <div class="portfolio-box">
                                <div class="portfolio-image bg-dark-gray border-radius-6px">
                                    <img src={{ asset('assets/restaurant/images/demo-restaurant-gallery-09.png') }}
                                        alt="" />
                                    <div class="portfolio-hover d-flex justify-content-center flex-column p-35px">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href={{ asset('assets/restaurant/images/demo-restaurant-gallery-09.png') }}
                                                data-group="portfolio-items"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px rounded-circle box-shadow-large move-bottom-top"
                                                title="Lightbox gallery image title">
                                                <i class="feather icon-feather-search fw-600" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- end portfolio item -->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- start section -->
    <section class="cover-background" id="services"
        style="background-image: url('{{ asset('assets/restaurant/images/demo-restaurant-home-05.jpg') }}')">
        <div class="container">
            <div class="row justify-content-center mb-1">
                <div class="col-lg-7 text-center"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="fs-15 fw-600 text-red text-uppercase mb-10px d-block"><span
                            class="w-5px h-2px bg-red d-inline-block align-middle me-5px"></span>Choose delicious<span
                            class="w-5px h-2px bg-red d-inline-block align-middle ms-5px"></span></span>
                    <h2 class="alt-font text-dark-gray">Popular menu</h2>
                </div>
            </div>
            <div class="row mb-6 xs-mb-8">
                <div class="col tab-style-02 fs-600">
                    <ul class="nav nav-tabs fs-18 fw-500 justify-content-center text-center mb-4 sm-mb-0"
                        data-anime='{ "el": "childs", "rotateX": [30, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#tab_first1"><i
                                    class="line-icon-Chopsticks d-block icon-large mb-10px"></i>Starters</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_first2"><i
                                    class="line-icon-Bike-Helmet d-block icon-large mb-10px"></i>Nonvage</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_first3"><i
                                    class="line-icon-Doughnut d-block icon-large mb-10px"></i>Vegetarian</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_first4"><i
                                    class="line-icon-Cupcake d-block icon-large mb-10px"></i>Dessert</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab_first5"><i
                                    class="line-icon-Beer d-block icon-large mb-10px"></i>Drinks</a></li>
                    </ul>
                    <div class="tab-content">
                        <!-- start tab content -->
                        <div class="tab-pane fade in active show" id="tab_first1">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 sm-mb-20px">
                                    <ul class="pricing-table-style-12 pe-15px md-pe-0"
                                        data-anime='{ "el": "childs", "rotateX": [-40, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                        <li class="last-paragraph-no-margin">
                                            <img src={{ asset('assets/restaurant/images/demo-restaurant-tab-01.jpg') }}
                                                class="rounded-circle" alt="">
                                            <div class="ms-30px xs-ms-0 flex-grow-1">
                                                <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                    <span class="fw-600 text-dark-gray">Boiled organic egg</span>
                                                    <div
                                                        class="divider-style-03 divider-style-03-02 border-color-extra-medium-gray flex-grow-1 ms-20px me-20px">
                                                    </div>
                                                    <div class="ms-auto fw-600 text-dark-gray">$12.00</div>
                                                </div>
                                                <p>Lorem ipsum has been the industry.</p>
                                            </div>
                                        </li>
                                        <li class="last-paragraph-no-margin">
                                            <img src={{ asset('assets/restaurant/images/demo-restaurant-tab-02.jpg') }}
                                                class="rounded-circle" alt="">
                                            <div class="ms-30px xs-ms-0 flex-grow-1">
                                                <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                    <span class="fw-600 text-dark-gray">Chicken breast burger</span>
                                                    <div
                                                        class="divider-style-03 divider-style-03-02 border-color-extra-medium-gray flex-grow-1 ms-20px me-20px">
                                                    </div>
                                                    <div class="ms-auto fw-600 text-dark-gray">$10.00</div>
                                                </div>
                                                <p>Lorem ipsum has been the industry.</p>
                                            </div>
                                        </li>
                                        <li class="last-paragraph-no-margin">
                                            <img src={{ asset('assets/restaurant/images/demo-restaurant-tab-03.jpg') }}
                                                class="rounded-circle" alt="">
                                            <div class="ms-30px xs-ms-0 flex-grow-1">
                                                <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                    <span class="fw-600 text-dark-gray">Medium spicy chips</span>
                                                    <div
                                                        class="divider-style-03 divider-style-03-02 border-color-extra-medium-gray flex-grow-1 ms-20px me-20px">
                                                    </div>
                                                    <div class="ms-auto fw-600 text-dark-gray">$08.00</div>
                                                </div>
                                                <p>Lorem ipsum has been the industry.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="pricing-table-style-12 ps-15px md-ps-0"
                                        data-anime='{ "el": "childs", "rotateX": [-40, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                        <li class="last-paragraph-no-margin">
                                            <img src={{ asset('assets/restaurant/images/demo-restaurant-tab-04.jpg') }}
                                                class="rounded-circle" alt="">
                                            <div class="ms-30px xs-ms-0 flex-grow-1">
                                                <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                    <span class="fw-600 text-dark-gray">Boiled organic egg</span>
                                                    <div
                                                        class="divider-style-03 divider-style-03-02 border-color-extra-medium-gray flex-grow-1 ms-20px me-20px">
                                                    </div>
                                                    <div class="ms-auto fw-600 text-dark-gray">$12.00</div>
                                                </div>
                                                <p>Lorem ipsum has been the industry.</p>
                                            </div>
                                        </li>
                                        <li class="last-paragraph-no-margin">
                                            <img src={{ asset('assets/restaurant/images/demo-restaurant-tab-05.jpg') }}
                                                class="rounded-circle" alt="">
                                            <div class="ms-30px xs-ms-0 flex-grow-1">
                                                <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                    <span class="fw-600 text-dark-gray">Chicken breast burger</span>
                                                    <div
                                                        class="divider-style-03 divider-style-03-02 border-color-extra-medium-gray flex-grow-1 ms-20px me-20px">
                                                    </div>
                                                    <div class="ms-auto fw-600 text-dark-gray">$11.00</div>
                                                </div>
                                                <p>Lorem ipsum has been the industry.</p>
                                            </div>
                                        </li>
                                        <li class="last-paragraph-no-margin">
                                            <img src={{ asset('assets/restaurant/images/demo-restaurant-tab-06.jpg') }}
                                                class="rounded-circle" alt="">
                                            <div class="ms-30px xs-ms-0 flex-grow-1">
                                                <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                    <span class="fw-600 text-dark-gray">Medium spicy chips</span>
                                                    <div
                                                        class="divider-style-03 divider-style-03-02 border-color-extra-medium-gray flex-grow-1 ms-20px me-20px">
                                                    </div>
                                                    <div class="ms-auto fw-600 text-dark-gray">$10.00</div>
                                                </div>
                                                <p>Lorem ipsum has been the industry.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in" id="tab_first2">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 sm-mb-20px">
                                    <ul class="pricing-table-style-12 pe-15px md-pe-0">
                                        <li class="last-paragraph-no-margin">
                                            <img src={{ asset('assets/restaurant/images/demo-restaurant-tab-04.jpg') }}
                                                class="rounded-circle" alt="">
                                            <div class="ms-30px xs-ms-0 flex-grow-1">
                                                <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                    <span class="fw-600 text-dark-gray">Boiled organic egg</span>
                                                    <div
                                                        class="divider-style-03 divider-style-03-02 border-color-extra-medium-gray flex-grow-1 ms-20px me-20px">
                                                    </div>
                                                    <div class="ms-auto fw-600 text-dark-gray">$12.00</div>
                                                </div>
                                                <p>Lorem ipsum has been the industry.</p>
                                            </div>
                                        </li>
                                        <li class="last-paragraph-no-margin">
                                            <img src={{ asset('assets/restaurant/images/demo-restaurant-tab-03.jpg') }}
                                                class="rounded-circle" alt="">
                                            <div class="ms-30px xs-ms-0 flex-grow-1">
                                                <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                    <span class="fw-600 text-dark-gray">Chicken breast burger</span>
                                                    <div
                                                        class="divider-style-03 divider-style-03-02 border-color-extra-medium-gray flex-grow-1 ms-20px me-20px">
                                                    </div>
                                                    <div class="ms-auto fw-600 text-dark-gray">$10.00</div>
                                                </div>
                                                <p>Lorem ipsum has been the industry.</p>
                                            </div>
                                        </li>
                                        <li class="last-paragraph-no-margin">
                                            <img src={{ asset('assets/restaurant/images/demo-restaurant-tab-01.jpg') }}
                                                class="rounded-circle" alt="">
                                            <div class="ms-30px xs-ms-0 flex-grow-1">
                                                <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                    <span class="fw-600 text-dark-gray">Medium spicy chips</span>
                                                    <div
                                                        class="divider-style-03 divider-style-03-02 border-color-extra-medium-gray flex-grow-1 ms-20px me-20px">
                                                    </div>
                                                    <div class="ms-auto fw-600 text-dark-gray">$08.00</div>
                                                </div>
                                                <p>Lorem ipsum has been the industry.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="pricing-table-style-12 ps-15px md-ps-0">
                                        <li class="last-paragraph-no-margin">
                                            <img src={{ asset('assets/restaurant/images/demo-restaurant-tab-05.jpg') }}
                                                class="rounded-circle" alt="">
                                            <div class="ms-30px xs-ms-0 flex-grow-1">
                                                <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                    <span class="fw-600 text-dark-gray">Boiled organic egg</span>
                                                    <div
                                                        class="divider-style-03 divider-style-03-02 border-color-extra-medium-gray flex-grow-1 ms-20px me-20px">
                                                    </div>
                                                    <div class="ms-auto fw-600 text-dark-gray">$12.00</div>
                                                </div>
                                                <p>Lorem ipsum has been the industry.</p>
                                            </div>
                                        </li>
                                        <li class="last-paragraph-no-margin">
                                            <img src={{ asset('assets/restaurant/images/demo-restaurant-tab-02.jpg') }}
                                                class="rounded-circle" alt="">
                                            <div class="ms-30px xs-ms-0 flex-grow-1">
                                                <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                    <span class="fw-600 text-dark-gray">Chicken breast burger</span>
                                                    <div
                                                        class="divider-style-03 divider-style-03-02 border-color-extra-medium-gray flex-grow-1 ms-20px me-20px">
                                                    </div>
                                                    <div class="ms-auto fw-600 text-dark-gray">$11.00</div>
                                                </div>
                                                <p>Lorem ipsum has been the industry.</p>
                                            </div>
                                        </li>
                                        <li class="last-paragraph-no-margin">
                                            <img src={{ asset('assets/restaurant/images/demo-restaurant-tab-06.jpg') }}
                                                class="rounded-circle" alt="">
                                            <div class="ms-30px xs-ms-0 flex-grow-1">
                                                <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                    <span class="fw-600 text-dark-gray">Medium spicy chips</span>
                                                    <div
                                                        class="divider-style-03 divider-style-03-02 border-color-extra-medium-gray flex-grow-1 ms-20px me-20px">
                                                    </div>
                                                    <div class="ms-auto fw-600 text-dark-gray">$10.00</div>
                                                </div>
                                                <p>Lorem ipsum has been the industry.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in" id="tab_first3">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 sm-mb-20px">
                                    <ul class="pricing-table-style-12 pe-15px md-pe-0">
                                        <li class="last-paragraph-no-margin">
                                            <img src={{ asset('assets/restaurant/images/demo-restaurant-tab-03.jpg') }}
                                                class="rounded-circle" alt="">
                                            <div class="ms-30px xs-ms-0 flex-grow-1">
                                                <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                    <span class="fw-600 text-dark-gray">Boiled organic egg</span>
                                                    <div
                                                        class="divider-style-03 divider-style-03-02 border-color-extra-medium-gray flex-grow-1 ms-20px me-20px">
                                                    </div>
                                                    <div class="ms-auto fw-600 text-dark-gray">$12.00</div>
                                                </div>
                                                <p>Lorem ipsum has been the industry.</p>
                                            </div>
                                        </li>
                                        <li class="last-paragraph-no-margin">
                                            <img src={{ asset('assets/restaurant/images/demo-restaurant-tab-02.jpg') }}
                                                class="rounded-circle" alt="">
                                            <div class="ms-30px xs-ms-0 flex-grow-1">
                                                <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                    <span class="fw-600 text-dark-gray">Chicken breast burger</span>
                                                    <div
                                                        class="divider-style-03 divider-style-03-02 border-color-extra-medium-gray flex-grow-1 ms-20px me-20px">
                                                    </div>
                                                    <div class="ms-auto fw-600 text-dark-gray">$10.00</div>
                                                </div>
                                                <p>Lorem ipsum has been the industry.</p>
                                            </div>
                                        </li>
                                        <li class="last-paragraph-no-margin">
                                            <img src={{ asset('assets/restaurant/images/demo-restaurant-tab-01.jpg') }}
                                                class="rounded-circle" alt="">
                                            <div class="ms-30px xs-ms-0 flex-grow-1">
                                                <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                    <span class="fw-600 text-dark-gray">Medium spicy chips</span>
                                                    <div
                                                        class="divider-style-03 divider-style-03-02 border-color-extra-medium-gray flex-grow-1 ms-20px me-20px">
                                                    </div>
                                                    <div class="ms-auto fw-600 text-dark-gray">$08.00</div>
                                                </div>
                                                <p>Lorem ipsum has been the industry.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="pricing-table-style-12 ps-15px md-ps-0">
                                        <li class="last-paragraph-no-margin">
                                            <img src={{ asset('assets/restaurant/images/demo-restaurant-tab-06.jpg') }}
                                                class="rounded-circle" alt="">
                                            <div class="ms-30px xs-ms-0 flex-grow-1">
                                                <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                    <span class="fw-600 text-dark-gray">Boiled organic egg</span>
                                                    <div
                                                        class="divider-style-03 divider-style-03-02 border-color-extra-medium-gray flex-grow-1 ms-20px me-20px">
                                                    </div>
                                                    <div class="ms-auto fw-600 text-dark-gray">$12.00</div>
                                                </div>
                                                <p>Lorem ipsum has been the industry.</p>
                                            </div>
                                        </li>
                                        <li class="last-paragraph-no-margin">
                                            <img src={{ asset('assets/restaurant/images/demo-restaurant-tab-05.jpg') }}
                                                class="rounded-circle" alt="">
                                            <div class="ms-30px xs-ms-0 flex-grow-1">
                                                <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                    <span class="fw-600 text-dark-gray">Chicken breast burger</span>
                                                    <div
                                                        class="divider-style-03 divider-style-03-02 border-color-extra-medium-gray flex-grow-1 ms-20px me-20px">
                                                    </div>
                                                    <div class="ms-auto fw-600 text-dark-gray">$11.00</div>
                                                </div>
                                                <p>Lorem ipsum has been the industry.</p>
                                            </div>
                                        </li>
                                        <li class="last-paragraph-no-margin">
                                            <img src={{ asset('assets/restaurant/images/demo-restaurant-tab-04.jpg') }}
                                                class="rounded-circle" alt="">
                                            <div class="ms-30px xs-ms-0 flex-grow-1">
                                                <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                    <span class="fw-600 text-dark-gray">Medium spicy chips</span>
                                                    <div
                                                        class="divider-style-03 divider-style-03-02 border-color-extra-medium-gray flex-grow-1 ms-20px me-20px">
                                                    </div>
                                                    <div class="ms-auto fw-600 text-dark-gray">$10.00</div>
                                                </div>
                                                <p>Lorem ipsum has been the industry.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in" id="tab_first4">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 sm-mb-20px">
                                    <ul class="pricing-table-style-12 pe-15px md-pe-0">
                                        <li class="last-paragraph-no-margin">
                                            <img src={{ asset('assets/restaurant/images/demo-restaurant-tab-02.jpg') }}
                                                class="rounded-circle" alt="">
                                            <div class="ms-30px xs-ms-0 flex-grow-1">
                                                <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                    <span class="fw-600 text-dark-gray">Boiled organic egg</span>
                                                    <div
                                                        class="divider-style-03 divider-style-03-02 border-color-extra-medium-gray flex-grow-1 ms-20px me-20px">
                                                    </div>
                                                    <div class="ms-auto fw-600 text-dark-gray">$12.00</div>
                                                </div>
                                                <p>Lorem ipsum has been the industry.</p>
                                            </div>
                                        </li>
                                        <li class="last-paragraph-no-margin">
                                            <img src={{ asset('assets/restaurant/images/demo-restaurant-tab-01.jpg') }}
                                                class="rounded-circle" alt="">
                                            <div class="ms-30px xs-ms-0 flex-grow-1">
                                                <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                    <span class="fw-600 text-dark-gray">Chicken breast burger</span>
                                                    <div
                                                        class="divider-style-03 divider-style-03-02 border-color-extra-medium-gray flex-grow-1 ms-20px me-20px">
                                                    </div>
                                                    <div class="ms-auto fw-600 text-dark-gray">$10.00</div>
                                                </div>
                                                <p>Lorem ipsum has been the industry.</p>
                                            </div>
                                        </li>
                                        <li class="last-paragraph-no-margin">
                                            <img src={{ asset('assets/restaurant/images/demo-restaurant-tab-04.jpg') }}
                                                class="rounded-circle" alt="">
                                            <div class="ms-30px xs-ms-0 flex-grow-1">
                                                <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                    <span class="fw-600 text-dark-gray">Medium spicy chips</span>
                                                    <div
                                                        class="divider-style-03 divider-style-03-02 border-color-extra-medium-gray flex-grow-1 ms-20px me-20px">
                                                    </div>
                                                    <div class="ms-auto fw-600 text-dark-gray">$08.00</div>
                                                </div>
                                                <p>Lorem ipsum has been the industry.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="pricing-table-style-12 ps-15px md-ps-0">
                                        <li class="last-paragraph-no-margin">
                                            <img src={{ asset('assets/restaurant/images/demo-restaurant-tab-03.jpg') }}
                                                class="rounded-circle" alt="">
                                            <div class="ms-30px xs-ms-0 flex-grow-1">
                                                <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                    <span class="fw-600 text-dark-gray">Boiled organic egg</span>
                                                    <div
                                                        class="divider-style-03 divider-style-03-02 border-color-extra-medium-gray flex-grow-1 ms-20px me-20px">
                                                    </div>
                                                    <div class="ms-auto fw-600 text-dark-gray">$12.00</div>
                                                </div>
                                                <p>Lorem ipsum has been the industry.</p>
                                            </div>
                                        </li>
                                        <li class="last-paragraph-no-margin">
                                            <img src={{ asset('assets/restaurant/images/demo-restaurant-tab-06.jpg') }}
                                                class="rounded-circle" alt="">
                                            <div class="ms-30px xs-ms-0 flex-grow-1">
                                                <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                    <span class="fw-600 text-dark-gray">Chicken breast burger</span>
                                                    <div
                                                        class="divider-style-03 divider-style-03-02 border-color-extra-medium-gray flex-grow-1 ms-20px me-20px">
                                                    </div>
                                                    <div class="ms-auto fw-600 text-dark-gray">$11.00</div>
                                                </div>
                                                <p>Lorem ipsum has been the industry.</p>
                                            </div>
                                        </li>
                                        <li class="last-paragraph-no-margin">
                                            <img src={{ asset('assets/restaurant/images/demo-restaurant-tab-05.jpg') }}
                                                class="rounded-circle" alt="">
                                            <div class="ms-30px xs-ms-0 flex-grow-1">
                                                <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                    <span class="fw-600 text-dark-gray">Medium spicy chips</span>
                                                    <div
                                                        class="divider-style-03 divider-style-03-02 border-color-extra-medium-gray flex-grow-1 ms-20px me-20px">
                                                    </div>
                                                    <div class="ms-auto fw-600 text-dark-gray">$10.00</div>
                                                </div>
                                                <p>Lorem ipsum has been the industry.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in" id="tab_first5">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 sm-mb-20px">
                                    <ul class="pricing-table-style-12 pe-15px md-pe-0">
                                        <li class="last-paragraph-no-margin">
                                            <img src={{ asset('assets/restaurant/images/demo-restaurant-tab-06.jpg') }}
                                                class="rounded-circle" alt="">
                                            <div class="ms-30px xs-ms-0 flex-grow-1">
                                                <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                    <span class="fw-600 text-dark-gray">Boiled organic egg</span>
                                                    <div
                                                        class="divider-style-03 divider-style-03-02 border-color-extra-medium-gray flex-grow-1 ms-20px me-20px">
                                                    </div>
                                                    <div class="ms-auto fw-600 text-dark-gray">$12.00</div>
                                                </div>
                                                <p>Lorem ipsum has been the industry.</p>
                                            </div>
                                        </li>
                                        <li class="last-paragraph-no-margin">
                                            <img src={{ asset('assets/restaurant/images/demo-restaurant-tab-05.jpg') }}
                                                class="rounded-circle" alt="">
                                            <div class="ms-30px xs-ms-0 flex-grow-1">
                                                <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                    <span class="fw-600 text-dark-gray">Chicken breast burger</span>
                                                    <div
                                                        class="divider-style-03 divider-style-03-02 border-color-extra-medium-gray flex-grow-1 ms-20px me-20px">
                                                    </div>
                                                    <div class="ms-auto fw-600 text-dark-gray">$10.00</div>
                                                </div>
                                                <p>Lorem ipsum has been the industry.</p>
                                            </div>
                                        </li>
                                        <li class="last-paragraph-no-margin">
                                            <img src={{ asset('assets/restaurant/images/demo-restaurant-tab-04.jpg') }}
                                                class="rounded-circle" alt="">
                                            <div class="ms-30px xs-ms-0 flex-grow-1">
                                                <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                    <span class="fw-600 text-dark-gray">Medium spicy chips</span>
                                                    <div
                                                        class="divider-style-03 divider-style-03-02 border-color-extra-medium-gray flex-grow-1 ms-20px me-20px">
                                                    </div>
                                                    <div class="ms-auto fw-600 text-dark-gray">$08.00</div>
                                                </div>
                                                <p>Lorem ipsum has been the industry.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="pricing-table-style-12 ps-15px md-ps-0">
                                        <li class="last-paragraph-no-margin">
                                            <img src={{ asset('assets/restaurant/images/demo-restaurant-tab-03.jpg') }}
                                                class="rounded-circle" alt="">
                                            <div class="ms-30px xs-ms-0 flex-grow-1">
                                                <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                    <span class="fw-600 text-dark-gray">Boiled organic egg</span>
                                                    <div
                                                        class="divider-style-03 divider-style-03-02 border-color-extra-medium-gray flex-grow-1 ms-20px me-20px">
                                                    </div>
                                                    <div class="ms-auto fw-600 text-dark-gray">$12.00</div>
                                                </div>
                                                <p>Lorem ipsum has been the industry.</p>
                                            </div>
                                        </li>
                                        <li class="last-paragraph-no-margin">
                                            <img src={{ asset('assets/restaurant/images/demo-restaurant-tab-02.jpg') }}
                                                class="rounded-circle" alt="">
                                            <div class="ms-30px xs-ms-0 flex-grow-1">
                                                <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                    <span class="fw-600 text-dark-gray">Chicken breast burger</span>
                                                    <div
                                                        class="divider-style-03 divider-style-03-02 border-color-extra-medium-gray flex-grow-1 ms-20px me-20px">
                                                    </div>
                                                    <div class="ms-auto fw-600 text-dark-gray">$11.00</div>
                                                </div>
                                                <p>Lorem ipsum has been the industry.</p>
                                            </div>
                                        </li>
                                        <li class="last-paragraph-no-margin">
                                            <img src={{ asset('assets/restaurant/images/demo-restaurant-tab-01.jpg') }}
                                                class="rounded-circle" alt="">
                                            <div class="ms-30px xs-ms-0 flex-grow-1">
                                                <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                    <span class="fw-600 text-dark-gray">Medium spicy chips</span>
                                                    <div
                                                        class="divider-style-03 divider-style-03-02 border-color-extra-medium-gray flex-grow-1 ms-20px me-20px">
                                                    </div>
                                                    <div class="ms-auto fw-600 text-dark-gray">$10.00</div>
                                                </div>
                                                <p>Lorem ipsum has been the industry.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center"
                data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col-12 text-center last-paragraph-no-margin">
                    <div
                        class="d-inline-block align-middle bg-red fw-500 text-white border-radius-30px ps-20px pe-20px fs-14 me-10px sm-m-10px">
                        Masterchef</div>
                    <div class="d-inline-block align-middle text-dark-gray fs-18 fw-500">Unique and delicious dishes from
                        the worlds <span class="text-decoration-line-bottom-medium fw-600">best masterchefs.</span></div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="overflow-hidden overlap-height position-relative">
        <div class="container-fluid overlap-gap-section">
            <div class="row justify-content-center mb-2">
                <div class="col-lg-7 text-center"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="fs-15 fw-600 text-red text-uppercase mb-10px d-block"><span
                            class="w-5px h-2px bg-red d-inline-block align-middle me-5px"></span>Specials choice<span
                            class="w-5px h-2px bg-red d-inline-block align-middle ms-5px"></span></span>
                    <h2 class="alt-font text-dark-gray">Popular dishes</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 position-relative feather-shadow sm-feather-shadow-none">
                    <div class="outside-box-right-15 outside-box-left-15 sm-outside-box-right-0 sm-outside-box-left-0"
                        data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <div class="swiper swiper-dark-pagination swiper-line-pagination-style-01 magic-cursor"
                            data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "autoplay": { "delay": 2500, "disableOnInteraction": false },  "pagination": { "el": ".slider-four-slide-pagination-1", "clickable": true }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 5 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 3 }, "576": { "slidesPerView": 2 } }, "effect": "slide" }'>
                            <div class="swiper-wrapper">
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <div class="services-box-style-01 hover-box last-paragraph-no-margin">
                                        <div class="position-relative box-image border-radius-6px">
                                            <img class="w-100 border-radius-6px"
                                                src={{ asset('assets/restaurant/images/demo-restaurant-slider-01.jpg') }}
                                                alt="">
                                            <div class="box-overlay bg-dark-gray"></div>
                                            <span
                                                class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-130px h-130px rounded-circle bg-white box-shadow-extra-large text-uppercase alt-font fs-30 lh-28 text-red ps-15px pe-15px text-center">Just
                                                $35.00</span>
                                        </div>
                                        <div class="pt-30px bg-white text-center">
                                            <span class="d-inline-block text-dark-gray fs-19 fw-600">Chicken breast
                                                burger</span>
                                            <div class="w-100">
                                                <span class="d-inline-block align-middle">Capsicum</span>
                                                <span
                                                    class="d-inline-block align-middle ms-10px me-10px fs-12 opacity-5">&#9677;</span>
                                                <span class="d-inline-block align-middle">Parmesan</span>
                                                <span
                                                    class="d-inline-block align-middle ms-10px me-10px fs-12 opacity-5">&#9677;</span>
                                                <span class="d-inline-block align-middle">Paneer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <div class="services-box-style-01 hover-box last-paragraph-no-margin">
                                        <div class="position-relative box-image border-radius-6px">
                                            <img class="w-100"
                                                src={{ asset('assets/restaurant/images/demo-restaurant-slider-02.jpg') }}
                                                alt="">
                                            <div class="box-overlay bg-dark-gray"></div>
                                            <span
                                                class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-130px h-130px rounded-circle bg-white box-shadow-extra-large text-uppercase alt-font fs-30 lh-28 text-red ps-15px pe-15px text-center">Just
                                                $35.00</span>
                                        </div>
                                        <div class="pt-30px bg-white text-center">
                                            <span class="d-inline-block text-dark-gray fs-19 fw-600">Chicken breast
                                                burger</span>
                                            <div class="w-100">
                                                <span class="d-inline-block align-middle">Tomatoes</span>
                                                <span
                                                    class="d-inline-block align-middle ms-10px me-10px fs-12 opacity-5">&#9677;</span>
                                                <span class="d-inline-block align-middle">Parmesan</span>
                                                <span
                                                    class="d-inline-block align-middle ms-10px me-10px fs-12 opacity-5">&#9677;</span>
                                                <span class="d-inline-block align-middle">Basil</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <div class="services-box-style-01 hover-box last-paragraph-no-margin">
                                        <div class="position-relative box-image border-radius-6px">
                                            <img class="w-100"
                                                src={{ asset('assets/restaurant/images/demo-restaurant-slider-03.jpg') }}
                                                alt="">
                                            <div class="box-overlay bg-dark-gray"></div>
                                            <span
                                                class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-130px h-130px rounded-circle bg-white box-shadow-extra-large text-uppercase alt-font fs-30 lh-28 text-red ps-15px pe-15px text-center">Just
                                                $35.00</span>
                                        </div>
                                        <div class="pt-30px bg-white text-center">
                                            <span class="d-inline-block text-dark-gray fs-19 fw-600">Medium spicy
                                                chips</span>
                                            <div class="w-100">
                                                <span class="d-inline-block align-middle">Cheese</span>
                                                <span
                                                    class="d-inline-block align-middle ms-10px me-10px fs-12 opacity-5">&#9677;</span>
                                                <span class="d-inline-block align-middle">Capsicum</span>
                                                <span
                                                    class="d-inline-block align-middle ms-10px me-10px fs-12 opacity-5">&#9677;</span>
                                                <span class="d-inline-block align-middle">Basil</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <div class="services-box-style-01 hover-box last-paragraph-no-margin">
                                        <div class="position-relative box-image border-radius-6px">
                                            <img class="w-100"
                                                src={{ asset('assets/restaurant/images/demo-restaurant-slider-04.jpg') }}
                                                alt="">
                                            <div class="box-overlay bg-dark-gray"></div>
                                            <span
                                                class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-130px h-130px rounded-circle bg-white box-shadow-extra-large text-uppercase alt-font fs-30 lh-28 text-red ps-15px pe-15px text-center">Just
                                                $35.00</span>
                                        </div>
                                        <div class="pt-30px bg-white text-center">
                                            <span class="d-inline-block text-dark-gray fs-19 fw-600">Appeteaser
                                                blatter</span>
                                            <div class="w-100">
                                                <span class="d-inline-block align-middle">Cucumber</span>
                                                <span
                                                    class="d-inline-block align-middle ms-10px me-10px fs-12 opacity-5">&#9677;</span>
                                                <span class="d-inline-block align-middle">Mushroom</span>
                                                <span
                                                    class="d-inline-block align-middle ms-10px me-10px fs-12 opacity-5">&#9677;</span>
                                                <span class="d-inline-block align-middle">Basil</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <div class="services-box-style-01 hover-box last-paragraph-no-margin">
                                        <div class="position-relative box-image border-radius-6px">
                                            <img class="w-100"
                                                src={{ asset('assets/restaurant/images/demo-restaurant-slider-05.jpg') }}
                                                alt="">
                                            <div class="box-overlay bg-dark-gray"></div>
                                            <span
                                                class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-130px h-130px rounded-circle bg-white box-shadow-extra-large text-uppercase alt-font fs-30 lh-28 text-red ps-15px pe-15px text-center">Just
                                                $35.00</span>
                                        </div>
                                        <div class="pt-30px bg-white text-center">
                                            <span class="d-inline-block text-dark-gray fs-19 fw-600">Appeteaser
                                                blatter</span>
                                            <div class="w-100">
                                                <span class="d-inline-block align-middle">Mushroom</span>
                                                <span
                                                    class="d-inline-block align-middle ms-10px me-10px fs-12 opacity-5">&#9677;</span>
                                                <span class="d-inline-block align-middle">Parmesan</span>
                                                <span
                                                    class="d-inline-block align-middle ms-10px me-10px fs-12 opacity-5">&#9677;</span>
                                                <span class="d-inline-block align-middle">Paneer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <div class="services-box-style-01 hover-box last-paragraph-no-margin">
                                        <div class="position-relative box-image border-radius-6px">
                                            <img class="w-100 border-radius-6px"
                                                src={{ asset('assets/restaurant/images/demo-restaurant-slider-01.jpg') }}
                                                alt="">
                                            <div class="box-overlay bg-dark-gray"></div>
                                            <span
                                                class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-130px h-130px rounded-circle bg-white box-shadow-extra-large text-uppercase alt-font fs-30 lh-28 text-red ps-15px pe-15px text-center">Just
                                                $35.00</span>
                                        </div>
                                        <div class="pt-30px bg-white text-center">
                                            <span class="d-inline-block text-dark-gray fs-19 fw-600">Chicken breast
                                                burger</span>
                                            <div class="w-100">
                                                <span class="d-inline-block align-middle">Capsicum</span>
                                                <span
                                                    class="d-inline-block align-middle ms-10px me-10px fs-12 opacity-5">&#9677;</span>
                                                <span class="d-inline-block align-middle">Parmesan</span>
                                                <span
                                                    class="d-inline-block align-middle ms-10px me-10px fs-12 opacity-5">&#9677;</span>
                                                <span class="d-inline-block align-middle">Paneer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <div class="services-box-style-01 hover-box last-paragraph-no-margin">
                                        <div class="position-relative box-image border-radius-6px">
                                            <img class="w-100"
                                                src={{ asset('assets/restaurant/images/demo-restaurant-slider-02.jpg') }}
                                                alt="">
                                            <div class="box-overlay bg-dark-gray"></div>
                                            <span
                                                class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-130px h-130px rounded-circle bg-white box-shadow-extra-large text-uppercase alt-font fs-30 lh-28 text-red ps-15px pe-15px text-center">Just
                                                $35.00</span>
                                        </div>
                                        <div class="pt-30px bg-white text-center">
                                            <span class="d-inline-block text-dark-gray fs-19 fw-600">Chicken breast
                                                burger</span>
                                            <div class="w-100">
                                                <span class="d-inline-block align-middle">Tomatoes</span>
                                                <span
                                                    class="d-inline-block align-middle ms-10px me-10px fs-12 opacity-5">&#9677;</span>
                                                <span class="d-inline-block align-middle">Parmesan</span>
                                                <span
                                                    class="d-inline-block align-middle ms-10px me-10px fs-12 opacity-5">&#9677;</span>
                                                <span class="d-inline-block align-middle">Basil</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <div class="services-box-style-01 hover-box last-paragraph-no-margin">
                                        <div class="position-relative box-image border-radius-6px">
                                            <img class="w-100"
                                                src={{ asset('assets/restaurant/images/demo-restaurant-slider-03.jpg') }}
                                                alt="">
                                            <div class="box-overlay bg-dark-gray"></div>
                                            <span
                                                class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-130px h-130px rounded-circle bg-white box-shadow-extra-large text-uppercase alt-font fs-30 lh-28 text-red ps-15px pe-15px text-center">Just
                                                $35.00</span>
                                        </div>
                                        <div class="pt-30px bg-white text-center">
                                            <span class="d-inline-block text-dark-gray fs-19 fw-600">Medium spicy
                                                chips</span>
                                            <div class="w-100">
                                                <span class="d-inline-block align-middle">Cheese</span>
                                                <span
                                                    class="d-inline-block align-middle ms-10px me-10px fs-12 opacity-5">&#9677;</span>
                                                <span class="d-inline-block align-middle">Capsicum</span>
                                                <span
                                                    class="d-inline-block align-middle ms-10px me-10px fs-12 opacity-5">&#9677;</span>
                                                <span class="d-inline-block align-middle">Basil</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <div class="services-box-style-01 hover-box last-paragraph-no-margin">
                                        <div class="position-relative box-image border-radius-6px">
                                            <img class="w-100"
                                                src={{ asset('assets/restaurant/images/demo-restaurant-slider-05.jpg') }}
                                                alt="">
                                            <div class="box-overlay bg-dark-gray"></div>
                                            <span
                                                class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-130px h-130px rounded-circle bg-white box-shadow-extra-large text-uppercase alt-font fs-30 lh-28 text-red ps-15px pe-15px text-center">Just
                                                $35.00</span>
                                        </div>
                                        <div class="pt-30px bg-white text-center">
                                            <span class="d-inline-block text-dark-gray fs-19 fw-600">Appeteaser
                                                blatter</span>
                                            <div class="w-100">
                                                <span class="d-inline-block align-middle">Cucumber</span>
                                                <span
                                                    class="d-inline-block align-middle ms-10px me-10px fs-12 opacity-5">&#9677;</span>
                                                <span class="d-inline-block align-middle">Mushroom</span>
                                                <span
                                                    class="d-inline-block align-middle ms-10px me-10px fs-12 opacity-5">&#9677;</span>
                                                <span class="d-inline-block align-middle">Basil</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end slider item -->
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <div class="services-box-style-01 hover-box last-paragraph-no-margin">
                                        <div class="position-relative box-image border-radius-6px">
                                            <img class="w-100"
                                                src={{ asset('assets/restaurant/images/demo-restaurant-slider-05.jpg') }}
                                                alt="">
                                            <div class="box-overlay bg-dark-gray"></div>
                                            <span
                                                class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-130px h-130px rounded-circle bg-white box-shadow-extra-large text-uppercase alt-font fs-30 lh-28 text-red ps-15px pe-15px text-center">Just
                                                $35.00</span>
                                        </div>
                                        <div class="pt-30px bg-white text-center">
                                            <span class="d-inline-block text-dark-gray fs-19 fw-600">Appeteaser
                                                blatter</span>
                                            <div class="w-100">
                                                <span class="d-inline-block align-middle">Mushroom</span>
                                                <span
                                                    class="d-inline-block align-middle ms-10px me-10px fs-12 opacity-5">&#9677;</span>
                                                <span class="d-inline-block align-middle">Parmesan</span>
                                                <span
                                                    class="d-inline-block align-middle ms-10px me-10px fs-12 opacity-5">&#9677;</span>
                                                <span class="d-inline-block align-middle">Paneer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end slider item -->
                            </div>
                        </div>
                    </div>
                    <!-- start slider pagination -->
                    <!--<div class="swiper-pagination slider-four-slide-pagination-1 swiper-pagination-style-2 swiper-pagination-clickable swiper-pagination-bullets"></div>-->
                    <!-- end slider pagination -->
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-very-light-gray position-relative big-section">
        <div class="container-fluid overlap-section">
            <div class="row position-relative mb-4"
                data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col swiper swiper-width-auto text-center"
                    data-slider-options='{ "slidesPerView": "auto", "spaceBetween":50, "speed": 10000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                    <div class="swiper-wrapper marquee-slide">
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <div class="fs-150 ls-minus-2px alt-font text-outline text-outline-color-base-color">Delicious
                            </div>
                        </div>
                        <!-- end slider item -->
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <div class="fs-150 ls-minus-2px alt-font text-dark-gray">Awesome</div>
                        </div>
                        <!-- end slider item -->
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <div class="fs-150 ls-minus-2px alt-font text-outline text-outline-color-base-color">Experience
                            </div>
                        </div>
                        <!-- end slider item -->
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <div class="fs-150 ls-minus-2px alt-font text-dark-gray">Cuisine</div>
                        </div>
                        <!-- end slider item -->
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <div class="fs-150 ls-minus-2px alt-font text-outline text-outline-color-base-color">Delicious
                            </div>
                        </div>
                        <!-- end slider item -->
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <div class="fs-150 ls-minus-2px alt-font text-dark-gray">Awesome</div>
                        </div>
                        <!-- end slider item -->
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <div class="fs-150 ls-minus-2px alt-font text-outline text-outline-color-base-color">Experience
                            </div>
                        </div>
                        <!-- end slider item -->
                        <!-- start slider item -->
                        <div class="swiper-slide">
                            <div class="fs-150 ls-minus-2px alt-font text-dark-gray">Cuisine</div>
                        </div>
                        <!-- end slider item -->
                    </div>
                </div>
            </div>
        </div>
        <div class="position-absolute left-150px xxl-left-50px mt-7 d-none d-xxl-inline-block" data-parallax-liquid="true"
            data-parallax-transition="1" data-parallax-position="top">
            <img src="https://via.placeholder.com/355x298" alt="">
        </div>
        <div class="position-absolute right-150px xxl-right-50px d-none d-xxl-inline-block" data-parallax-liquid="true"
            data-parallax-transition="1" data-parallax-position="bottom">
            <img src="https://via.placeholder.com/367x283" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10"
                    data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="swiper slider-custom-image swiper-pagination-bottom magic-cursor testimonials-style-03"
                        data-slider-options='{ "loop": true, "pagination": { "el": ".slider-custom-image-pagination", "type": "bullets", "clickable": true }, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav", "effect": "fade" } }'
                        data-thumbs='["assets/restaurant/images/avtar-33.jpg","assets/restaurant/images/avtar-34.jpg","assets/restaurant/images/avtar-35.jpg"]'>
                        <div class="swiper-wrapper">
                            <!-- start testimonial item -->
                            <div class="swiper-slide"
                                data-bullet-thumb="background-image: url('{{ asset('assets/restaurant/images/avtar-33.jpg') }}')">
                                <div class="d-flex flex-column">
                                    <div class="mb-28 align-self-center text-center w-100">
                                        <img src="{{ asset('assets/images/demo-restaurant-home-quotes-icon.jpg') }}"
                                            class="mb-30px rounded-circle" alt="">

                                        <h4 class="alt-font lh-42 text-dark-gray mb-10px">Food for us comes from our
                                            relatives whether they have wings or fins or roots that is how we consider food
                                            has a culture It has history it has a story it has relationships.</h4>
                                        <span class="fs-20 fw-500 text-base-color d-block">Herman miller</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end testimonial item -->
                            <!-- start testimonial item -->
                            <div class="swiper-slide"
                                data-bullet-thumb="background-image: url(assets/restaurant/images/avtar-33.jpg)">
                                <div class="d-flex flex-column">
                                    <div class="mb-28 align-self-center text-center w-100">
                                        <img src="{{ asset('assets/images/demo-restaurant-home-quotes-icon.jpg') }}"
                                            class="mb-30px rounded-circle" alt="">
                                        <h4 class="alt-font lh-42 text-dark-gray mb-10px">It was a lovely place with great
                                            ambience. Loved the service of the staff. The dishes are priced very high as
                                            compared to the quality. Thank you so much to all staff.</h4>
                                        <span class="fs-20 fw-500 text-base-color d-block">Matthew taylor</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end testimonial item -->
                            <!-- start testimonial item -->
                            <div class="swiper-slide"
                                data-bullet-thumb="background-image: url(assets/restaurant/images/avtar-33.jpg)">
                                <div class="d-flex flex-column">
                                    <div class="mb-28 align-self-center text-center w-100">
                                        <img src="{{ asset('assets/images/demo-restaurant-home-quotes-icon.jpg') }}"
                                            class="mb-30px rounded-circle" alt="">
                                        <h4 class="alt-font lh-42 text-dark-gray mb-10px">Good communication and the food
                                            was great the facilities were good. Love the desserts and there way of
                                            presenting. We came here for a family dinner and this place won my heart.</h4>
                                        <span class="fs-20 fw-500 text-base-color d-block">Leonel mooney</span>
                                    </div>
                                </div>
                            </div>
                            <!-- end testimonial item -->
                        </div>
                        <!-- start slider pagination -->
                        <div
                            class="slider-custom-image-pagination swiper-pagination text-center pb-20px xs-pb-0px md-bottom-0px">
                        </div>
                        <!-- end slider pagination -->
                        <!-- start slider navigation -->
                        <!--<div class="swiper-button-next-nav swiper-button-next mb-5px"><i class="line-icon-Arrow-OutRight icon-large text-light-gray"></i></div>
                                <div class="swiper-button-previous-nav swiper-button-prev mb-5px"><i class="line-icon-Arrow-OutLeft icon-large text-light-gray"></i></div>-->
                        <!-- end slider pagination -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section>
        <div class="container">
            <div class="row justify-content-center overlap-section mb-6 g-0">
                <div class="col-auto text-center last-paragraph-no-margin bg-white pt-20px pb-20px ps-6 pe-6 border-radius-100px"
                    data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div
                        class="text-center bg-golden-yellow text-white fs-16 lh-36 border-radius-30px d-inline-block ps-20px pe-20px align-middle me-10px">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <div class="d-inline-block fs-18 text-dark-gray align-middle fw-500"><span
                            class="text-decoration-line-bottom-medium fw-600">25,000+ happy food lovers</span> visited our
                        authentic restaurant.</div>
                </div>
            </div>
            <div class="row justify-content-center mb-4">
                <div class="col-lg-7 text-center"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="fs-15 fw-600 text-red text-uppercase mb-10px d-block"><span
                            class="w-5px h-2px bg-red d-inline-block align-middle me-5px"></span>From our blog<span
                            class="w-5px h-2px bg-red d-inline-block align-middle ms-5px"></span></span>
                    <h2 class="alt-font text-dark-gray mb-0">Recent articles</h2>
                </div>
            </div>
            <div class="row blog-metro">
                <div class="col-12">
                    <ul class="blog-metro blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-large"
                        data-anime='{ "el": "childs", "translateY": [0, 0], "perspective": [1200,1200], "scale": [1.05, 1], "rotateX": [30, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <li class="grid-sizer"></li>
                        <!-- start blog item -->
                        <li class="grid-item">
                            <figure class="position-relative mb-0 overflow-hidden border-radius-6px">
                                <div class="blog-image bg-dark-slate-blue">
                                    <a href="demo-restaurant-blog-single-creative.html"><img
                                            src={{ asset('assets/restaurant/images/demo-restaurant-blog-01.jpg') }}
                                            alt="" /></a>
                                    <div class="blog-overlay"></div>
                                </div>
                                <figcaption class="d-flex flex-column justify-content-end h-100 p-50px lg-p-35px">
                                    <div class="blog-categories mb-auto">
                                        <a href="#"
                                            class="categories-btn bg-white text-dark-gray text-uppercase fw-600 ms-0 mb-auto align-self-start">Restaurant</a>
                                    </div>
                                    <a href="demo-restaurant-blog-single-creative.html"
                                        class="text-white card-title fs-28 lh-32 alt-font w-60 xl-w-70 lg-w-80 md-w-70">Never
                                        eat more than you can life.</a>
                                </figcaption>
                            </figure>
                        </li>
                        <!-- end blog item -->
                        <!-- start blog item -->
                        <li class="grid-item">
                            <figure class="position-relative mb-0 overflow-hidden border-radius-6px">
                                <div class="blog-image bg-dark-slate-blue">
                                    <a href="demo-restaurant-blog-single-creative.html"><img
                                            src={{ asset('assets/restaurant/images/demo-restaurant-blog-02.jpg') }}
                                            alt="" /></a>
                                    <div class="blog-overlay"></div>
                                </div>
                                <figcaption class="d-flex flex-column justify-content-end h-100 p-50px lg-p-35px">
                                    <div class="blog-categories mb-auto">
                                        <a href="#"
                                            class="categories-btn bg-white text-dark-gray text-uppercase fw-600 ms-0 mb-auto align-self-start">Restaurant</a>
                                    </div>
                                    <a href="demo-restaurant-blog-single-creative.html"
                                        class="text-white card-title fs-28 lh-32 alt-font w-60 xl-w-70 lg-w-80 md-w-70">Life
                                        is uncertain Eat dessert first.</a>
                                </figcaption>
                            </figure>
                        </li>
                        <!-- end blog item -->
                        <!-- start blog item -->
                        <li class="grid-item">
                            <figure class="position-relative mb-0 overflow-hidden border-radius-6px">
                                <div class="blog-image bg-dark-slate-blue">
                                    <a href="demo-restaurant-blog-single-creative.html"><img
                                            src={{ asset('assets/restaurant/images/demo-restaurant-blog-03.jpg') }}
                                            alt="" /></a>
                                    <div class="blog-overlay"></div>
                                </div>
                                <figcaption class="d-flex flex-column justify-content-end h-100 p-50px lg-p-35px">
                                    <div class="blog-categories mb-auto">
                                        <a href="#"
                                            class="categories-btn bg-white text-dark-gray text-uppercase fw-600 ms-0 mb-auto align-self-start">Restaurant</a>
                                    </div>
                                    <a href="demo-restaurant-blog-single-creative.html"
                                        class="text-white card-title fs-28 lh-32 alt-font w-60 xl-w-70 lg-w-80 md-w-70">Food
                                        simply isn't important to me.</a>
                                </figcaption>
                            </figure>
                        </li>
                        <!-- end blog item -->
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section
        class="ipad-top-space-margin page-title-big-typography cover-background p-0 md-background-position-left-center"
        id="contact"
        style="background-image: url('{{ asset('assets/restaurant/images/demo-restaurant-about-title-bg.jpg') }}')">
        <div class="container">
            <div class="row align-items-center justify-content-center small-screen">
                <div class="col-lg-6 col-md-8 position-relative text-center page-title-extra-large"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                    <h1 class="alt-font text-dark-gray text-uppercase ls-minus-1px mb-0">Contact us</h1>
                    <h2 class="m-auto text-red fw-600 text-uppercase mb-0"><span
                            class="h-2px w-5px bg-red d-inline-block align-middle me-5px"></span>Delicious food<span
                            class="h-2px w-5px bg-red d-inline-block align-middle ms-5px"></span></h2>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="pt-0">
        <div class="container"
            data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
            {{-- <div class="row">
                <div class="col-12 pe-17 background-position-right-top background-no-repeat md-pe-15px" > 
                    <div id="map" class="map sm-h-350px" data-map-options='{ "lat": -37.805688, "lng": 144.962312, "style": "Retro", "marker": { "type": "HTML", "color": "#d39121" }, "popup": { "html": "<div class=infowindow><strong class=\"mb-3 d-inline-block alt-font\">Crafto Restaurants</strong><p class=\"alt-font\">16122 Collins street, Melbourne, Australia</p></div><div class=\"google-maps-link alt-font\"> <a aria-label=\"View larger map\" target=\"_blank\" jstcache=\"31\" href=\"https://maps.google.com/maps?ll=-37.805688,144.962312&amp;z=17&amp;t=m&amp;hl=en-US&amp;gl=IN&amp;mapclient=embed&amp;cid=13153204942596594449\" jsaction=\"mouseup:placeCard.largerMap\">VIEW LARGER MAP</a></div>" } }'></div>
                </div> 
            </div> --}}
            <div class="row align-items-end justify-content-center">
                {{-- <div class="col-xl-7 col-lg-6 align-self-start">
                    <span class="fs-140 lg-fs-100 xs-fs-90 fw-700 text-very-light-gray ls-minus-8px lg-ls-minus-5px xs-ls-minus-4px md-w-100 d-block text-center text-lg-start">Write here</span>
                </div> --}}
                <div
                    class="col-xl-5 col-lg-6 col-md-12 contact-form-style-03 position-relative overlap-section-one-fourth md-mt-0">
                    <div
                        class="bg-very-light-gray p-14 position-relative overflow-hidden mt-50px md-mt-25px sm-mt-15px lg-p-10">
                        <i
                            class="bi bi-chat-text fs-140 text-base-color opacity-1 position-absolute top-minus-35px right-minus-20px"></i>
                        <h2 class="alt-font text-dark-gray mb-15px">How we can help your food?</h2>
                        <form action="email-templates/contact-form.php" method="post">
                            <div class="position-relative form-group mb-10px">
                                <span class="form-icon text-medium-gray"><i class="bi bi-emoji-smile"></i></span>
                                <input
                                    class="ps-0 border-radius-0px bg-transparent border-color-transparent-dark-very-light form-control required"
                                    type="text" name="name" placeholder="Your name*">
                            </div>
                            <div class="position-relative form-group mb-10px">
                                <span class="form-icon medium-gray"><i class="bi bi-envelope"></i></span>
                                <input
                                    class="ps-0 border-radius-0px bg-transparent border-color-transparent-dark-very-light form-control required"
                                    type="email" name="email" placeholder="Your email address*">
                            </div>
                            <div class="position-relative form-group form-textarea mt-10px mb-0">
                                <textarea class="ps-0 border-radius-0px bg-transparent border-color-transparent-dark-very-light form-control"
                                    name="comment" placeholder="Your message" rows="3"></textarea>
                                <span class="form-icon medium-gray"><i class="bi bi-chat-square-dots"></i></span>
                                <input type="hidden" name="redirect" value="">
                                <button
                                    class="btn btn-dark-gray btn-medium btn-switch-text btn-round-edge btn-box-shadow submit mt-30px"
                                    type="submit">
                                    <span>
                                        <span class="btn-double-text" data-text="Send a message">Send a message</span>
                                    </span>
                                </button>
                                <div class="form-results mt-20px d-none"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 md-mb-40px xs-mb-30px text-center text-md-start"
                    data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <span class="d-block fs-15 fw-600 text-red text-uppercase mb-15px">Need a private space?</span>
                    <h3 class="alt-font fw-400 text-dark-gray mb-0 w-85 sm-w-100">Reserve a Table? <span
                            class="text-decoration-underline">Let's talk us.</span></h3>
                </div>
                <div class="col-lg-8 text-center text-md-start"
                    data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="row row-cols-1 row-cols-md-3 row-cols-sm-2 justify-content-center">
                        <div class="col sm-mb-30px">
                            <span class="d-block fs-26 alt-font text-dark-gray fw-400 text-uppercase">Write Us</span>
                            <div>
                                <a href="mailto:info@yourdomain.com">info@yourdomain.com</a><br />
                                <a href="mailto:hr@yourdomain.com">hr@yourdomain.com</a>
                            </div>
                        </div>
                        <div class="col sm-mb-30px">
                            <span class="d-block fs-26 alt-font text-dark-gray fw-400 text-uppercase">Follow Us</span>
                            <div class="d-lg-block"><a
                                    href="https://www.facebook.com/p/Ovee-Labs-100082879345140/?_rdr"><i
                                        class="facebook fa-brands fa-facebook-f w-25px text-dark-gray"></i>Ovee Labs in
                                    facebook</a></div>
                            <div class="d-lg-block"><a href="https://www.linkedin.com/company/oveelabs"><i
                                        class="linkedin fa-brands fa-linkedin w-25px text-dark-gray"></i>Ovee Labs in
                                    linkedin</a></div>
                        </div>
                        <div class="col">
                            <span class="d-block fs-26 alt-font text-dark-gray fw-400 text-uppercase">Call Us</span>
                            <div>
                                <a href="tel:12345678910">+92 319 5199686</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
