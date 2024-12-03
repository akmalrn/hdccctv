@extends('frontend.layouts')
@section('content')
    <!--Main Slider Start-->
    <section class="main-slider clearfix">
        <div class="swiper-container thm-swiper__slider"
            data-swiper-options='{"slidesPerView": 1, "loop": true,
            "effect": "fade",
            "pagination": {
            "el": "#main-slider-pagination",
            "type": "bullets",
            "clickable": true
            },
            "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
            },
            "autoplay": {
            "delay": 5000
            }}'>

            <div class="swiper-wrapper">
                @foreach ($sliders as $slider)
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url({{ asset($slider->path) }});"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title">{{ $slider->title }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>



            <!-- If we need navigation buttons -->
            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-left-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-right-arrow"></i>
                </div>
            </div>

        </div>
    </section>
    <!--Main Slider End-->

    <!--About One Start-->
    <section class="about-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="about-one__big-text">Apartments</div>
                        <div class="about-one__img-box">
                            <div class="about-one__img-one">
                                <img src="{{ asset($configuration->path_building ?? '') }}" alt="" height="800px" style="width:550px ; max-width: 550px">
                            </div>
                            <div class="about-one__img-two">
                                <img src="{{ asset($configuration->path_building_2 ?? '') }}" alt="" width="419px" height="353">
                            </div>
                            <div class="about-one__shape-1 float-bob-y"></div>
                            <div class="about-one__shape-2">
                                <img src="assetsfront/images/shapes/about-one-shape-2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-one__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">gambaran umum bangunan</span>
                            <h2 class="section-title__title">{{ $configuration->title_building ?? '' }}</h2>
                        </div>
                        <p class="about-one__text">{{ $configuration->overview_building ?? '' }}</p>
                        <ul class="list-unstyled about-one__points">
                            {!! $configuration->description ?? '' !!}
                        </ul>
                        <a href="{{ route('about') }}" class="thm-btn about-one__btn">Lebih Detil</a>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About One End-->

    <!--Counter One Start-->
    <section class="counter-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="counter-one__inner">
                        <ul class="list-unstyled counter-one__list">
                            <li class="counter-one__single wow fadeInLeft" data-wow-delay="100ms">
                                <div class="counter-one__icon">
                                    <span class="icon-size"></span>
                                </div>
                                <div class="counter-one__content-box count-box">
                                    <h3 class="count-text" data-stop="{{ $configuration->areas_building ?? '' }}" data-speed="1500">00</h3>
                                    <p class="counter-one__text">Area Bangunan</p>
                                </div>
                            </li>
                            <li class="counter-one__single wow fadeInLeft" data-wow-delay="200ms">
                                <div class="counter-one__icon">
                                    <span class="icon-parking"></span>
                                </div>
                                <div class="counter-one__content-box count-box">
                                    <h3 class="count-text" data-stop="{{ $configuration->parkings_building ?? '' }}" data-speed="1500">00</h3>
                                    <p class="counter-one__text">Parkir Mobil</p>
                                </div>
                            </li>
                            <li class="counter-one__single wow fadeInLeft" data-wow-delay="300ms">
                                <div class="counter-one__icon">
                                    <span class="icon-apartments"></span>
                                </div>
                                <div class="counter-one__content-box count-box">
                                    <h3 class="count-text" data-stop="{{ $configuration->units_building ?? '' }}" data-speed="1500">00</h3>
                                    <p class="counter-one__text">Tipe Unit</p>
                                </div>
                            </li>
                            <li class="counter-one__single wow fadeInLeft" data-wow-delay="400ms">
                                <div class="counter-one__icon">
                                    <span class="icon-hotel-bed"></span>
                                </div>
                                <div class="counter-one__content-box count-box">
                                    <h3 class="count-text" data-stop="{{ $configuration->bedrooms_building ?? '' }}" data-speed="1500">00</h3>
                                    <p class="counter-one__text">Kamar Tidur</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Counter One End-->

    <!--Feature One Start-->
    <section class="feature-one">
        <div class="feature-one__bg-box">
            <div class="feature-one__bg"
                style="background-image: url(assetsfront/images/backgrounds/feature-one-bg.jpg);"></div>
        </div>
        <div class="feature-one__shape-1 float-bob-x">
            <img src="assetsfront/images/shapes/feature-one-shape-1.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="feature-one__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Fitur utama</span>
                            <h2 class="section-title__title">
                                Fitur properti utama kami</h2>
                        </div>
                        <p class="feature-one__text">Pengalaman Tak Tertandingi Nikmati pengalaman yang luar biasa dengan layanan terbaik yang kami tawarkan, dirancang khusus untuk memenuhi kebutuhan Anda dengan kualitas yang tak tertandingi.</p>
                        <div class="feature-one__video-link">
                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                <div class="feature-one__video-icon">
                                    <span class="fa fa-play"></span>
                                    <i class="ripple"></i>
                                </div>
                            </a>
                        </div>
                        <div class="feature-one__counter-box">
                            <ul class="feature-one__counter-list list-unstyled">
                                <li>
                                    <div class="feature-one__counter-content-box">
                                        <div class="feature-one__counter-count-box count-box">
                                            <h3 class="count-text" data-stop="{{ $configuration->units_building ?? '' }}" data-speed="1500">00</h3>
                                            <span class="feature-one__counter-plus">+</span>
                                        </div>
                                        <p class="feature-one__counter-text">Total Tipe Unit</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="feature-one__counter-content-box">
                                        <div class="feature-one__counter-count-box count-box">
                                            <h3 class="count-text" data-stop="{{ $configuration->features_building ?? '' }}" data-speed="1500">00</h3>
                                            <span class="feature-one__counter-plus">+</span>
                                        </div>
                                        <p class="feature-one__counter-text">Kualitas Fitur</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="feature-one__right">
                        <div class="row">
                            <!--Feature One Single Start-->
                            @foreach ($superioritys as $superiority)

                            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                <div class="feature-one__single">
                                    <div class="feature-one__single-inner">
                                        <div class="feature-one__icon">
                                           {!! $superiority->icon !!}
                                        </div>
                                        <h3 class="feature-one__title"><a href="services.html">{{ $superiority->title }}</a>
                                        </h3>
                                        <p class="feature-one__text">{!! $superiority->description !!}</p>
                                        <div class="feature-one__btn">
                                            <a href="services.html"> <i class="fa fa-arrow-right"></i>Hubungi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!--Feature One Single End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Feature One End-->

    <!--Floor Plan Start-->
    <section class="floor-plan">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Villa plans</span>
                <h2 class="section-title__title">Apartment plans</h2>
                <p class="floor-plan__text">Retro four loko ethical, distillery lomo meh mixtape vice plaid palo
                    santo
                    live-edge ugh banjo marfa lyft. <br> Pour-over distillery keytar activated charcoal. Snackwave
                    blue
                    bottle bespoke af farm-to-table <br> 3 wolf moon, beard helvetica godard hell of. Schli hot
                    chicken
                    kombucha.</p>
            </div>
            <div class="floor-plan__main-tab-box tabs-box">
                <ul class="tab-buttons clearfix list-unstyled">
                    <li data-tab="#penthouse" class="tab-btn active-btn"><span>Penthouse</span></li>
                    <li data-tab="#stuido" class="tab-btn"><span>Stuido</span></li>
                    <li data-tab="#duplex" class="tab-btn"><span>Duplex</span></li>
                </ul>
                <div class="tabs-content">
                    <!--tab-->
                    <div class="tab active-tab" id="penthouse">
                        <div class="floor-plan__tab-content-inner">
                            <div class="floor-plan__tab-content-left">
                                <ul class="list-unstyled floor-plan__tab-content-details">
                                    <li>
                                        <p>Total area</p>
                                        <span>2800 Sq. Ft</span>
                                    </li>
                                    <li>
                                        <p>Floor no.</p>
                                        <span>2nd</span>
                                    </li>
                                    <li>
                                        <p>Current status</p>
                                        <span>Available</span>
                                    </li>
                                    <li>
                                        <p>No. of rooms</p>
                                        <span>04</span>
                                    </li>
                                    <li>
                                        <p>Parking available</p>
                                        <span>Yes</span>
                                    </li>
                                    <li>
                                        <p>Price from</p>
                                        <span>$4500</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="floor-plan__tab-content-righ">
                                <img src="assetsfront/images/resources/floor-plan-tab-content-img-1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <!--tab-->
                    <div class="tab " id="stuido">
                        <div class="floor-plan__tab-content-inner">
                            <div class="floor-plan__tab-content-left">
                                <ul class="list-unstyled floor-plan__tab-content-details">
                                    <li>
                                        <p>Total area</p>
                                        <span>2800 Sq. Ft</span>
                                    </li>
                                    <li>
                                        <p>Floor no.</p>
                                        <span>2nd</span>
                                    </li>
                                    <li>
                                        <p>Current status</p>
                                        <span>Available</span>
                                    </li>
                                    <li>
                                        <p>No. of rooms</p>
                                        <span>04</span>
                                    </li>
                                    <li>
                                        <p>Parking available</p>
                                        <span>Yes</span>
                                    </li>
                                    <li>
                                        <p>Price from</p>
                                        <span>$4500</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="floor-plan__tab-content-righ">
                                <img src="assetsfront/images/resources/floor-plan-tab-content-img-1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <!--tab-->
                    <div class="tab " id="duplex">
                        <div class="floor-plan__tab-content-inner">
                            <div class="floor-plan__tab-content-left">
                                <ul class="list-unstyled floor-plan__tab-content-details">
                                    <li>
                                        <p>Total area</p>
                                        <span>2800 Sq. Ft</span>
                                    </li>
                                    <li>
                                        <p>Floor no.</p>
                                        <span>2nd</span>
                                    </li>
                                    <li>
                                        <p>Current status</p>
                                        <span>Available</span>
                                    </li>
                                    <li>
                                        <p>No. of rooms</p>
                                        <span>04</span>
                                    </li>
                                    <li>
                                        <p>Parking available</p>
                                        <span>Yes</span>
                                    </li>
                                    <li>
                                        <p>Price from</p>
                                        <span>$4500</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="floor-plan__tab-content-righ">
                                <img src="assetsfront/images/resources/floor-plan-tab-content-img-1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Floor Plan End-->

    <!--Apartments One Start-->
    <section class="apartments-one">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Kompleks</span>
                <h2 class="section-title__title">Pilih Tipe Kamu</h2>
            </div>
            <div class="row">
                <!--Apartments One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="apartments-one__single">
                        <div class="apartments-one__img">
                            <img src="assetsfront/images/apartment/apartment-1-1.jpg" alt="">
                            <div class="apartments-one__title-box">
                                <h3 class="apartments-one__title"><a href="apartment-details.html">Studio
                                        apartment</a></h3>
                            </div>
                            <div class="apartments-one__hover">
                                <h3 class="apartments-one__hover-title"><a href="apartment-details.html">Studio
                                        apartment</a></h3>
                                <p class="apartments-one__hover-text">There are many type of variations <br> pass
                                    not available</p>
                                <div class="apartments-one__arrow">
                                    <a href="apartment-details.html"><span class="icon-right-arrow"></span> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Apartments One Single End-->
                <!--Apartments One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="apartments-one__single">
                        <div class="apartments-one__img">
                            <img src="assetsfront/images/apartment/apartment-1-2.jpg" alt="">
                            <div class="apartments-one__title-box">
                                <h3 class="apartments-one__title"><a href="apartment-details.html">Luxury
                                        apartment</a></h3>
                            </div>
                            <div class="apartments-one__hover">
                                <h3 class="apartments-one__hover-title"><a href="apartment-details.html">Luxury
                                        apartment</a></h3>
                                <p class="apartments-one__hover-text">There are many type of variations <br> pass
                                    not available</p>
                                <div class="apartments-one__arrow">
                                    <a href="apartment-details.html"><span class="icon-right-arrow"></span> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Apartments One Single End-->
                <!--Apartments One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="apartments-one__single">
                        <div class="apartments-one__img">
                            <img src="assetsfront/images/apartment/apartment-1-3.jpg" alt="">
                            <div class="apartments-one__title-box">
                                <h3 class="apartments-one__title"><a href="apartment-details.html">Deluxe
                                        apartment</a></h3>
                            </div>
                            <div class="apartments-one__hover">
                                <h3 class="apartments-one__hover-title"><a href="apartment-details.html">Deluxe
                                        apartment</a></h3>
                                <p class="apartments-one__hover-text">There are many type of variations <br> pass
                                    not available</p>
                                <div class="apartments-one__arrow">
                                    <a href="apartment-details.html"><span class="icon-right-arrow"></span> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Apartments One Single End-->
                <!--Apartments One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="apartments-one__single">
                        <div class="apartments-one__img">
                            <img src="assetsfront/images/apartment/apartment-1-4.jpg" alt="">
                            <div class="apartments-one__title-box">
                                <h3 class="apartments-one__title"><a href="apartment-details.html">Modern
                                        apartment</a></h3>
                            </div>
                            <div class="apartments-one__hover">
                                <h3 class="apartments-one__hover-title"><a href="apartment-details.html">Modern
                                        apartment</a></h3>
                                <p class="apartments-one__hover-text">There are many type of variations <br> pass
                                    not available</p>
                                <div class="apartments-one__arrow">
                                    <a href="apartment-details.html"><span class="icon-right-arrow"></span> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Apartments One Single End-->
            </div>
        </div>
    </section>
    <!--Apartments One End-->

    <!--Neighborhoods Start-->
    <section class="neighborhoods">
        <div class="neighborhoods-bg" style="background-image: url(assetsfront/images/backgrounds/neighborhoods-bg.jpg);">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">Area di sekitar</span>
                <h2 class="section-title__title">Lingkungan</h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="neighborhoods__left">
                        <div class="neighborhoods__faq">
                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                <div class="accrodion active">
                                    <div class="accrodion-title">
                                        <h4>{{ $contact->address ?? '' }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="neighborhoods__right">
                        <div class="neighborhoods__img-box">
                            <div class="">
                                <iframe
                                src="{{ $contact->map ?? '' }}"
                                width="100%"
                                height="450"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Neighborhoods End-->

    <!--Brand One Start-->
    <section class="brand-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="brand-one__inner">
                        <div class="thm-swiper__slider swiper-container"
                            data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
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
                        "slidesPerView": 6
                    }
                }}'>
                            <div class="swiper-wrapper">
                                @foreach ($mitras as $mitra)
                                <div class="swiper-slide">
                                    <img src="{{ $mitra->path ?? '' }}" alt="{{ $mitra->title ?? '' }}" width="107px" height="110px">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Brand One End-->

    <!--Contact One Start-->
    <section class="contact-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5">
                    <div class="contact-one__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Kontak Sekarang</span>
                            <h2 class="section-title__title">Hubungi kami</h2>
                        </div>
                        <div class="contact-one__person">
                            <div class="contact-one__person-img">
                                <img src="assetsfront/images/resources/contact-one-person-img-1.jpg" alt="">
                            </div>
                            <div class="contact-one__person-content">
                                <h3 class="contact-one__person-name">Kevin Smith</h3>
                                <p class="contact-one__person-sub-title">Certified agent</p>
                            </div>
                        </div>
                        <p class="contact-one__text-1">Lorem ipsum dolor sit amet, consecte adipiscing elit. In hac
                            habitasse platea dictumst. Duis porta, quam ut finibus ultrices.</p>
                        <ul class="list-unstyled contact-one__list">
                            <li>
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="content">
                                    <p>Ada Pertannyaan?</p>
                                    <h4> <span>Gratis</span> <a href="https://wa.me/{{ $contact->phone_number ?? '' }}" target="blank">+{{ $contact->phone_number ?? '' }}</a></h4>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <p>Tulis Email</p>
                                    <h4><a href="mailto:{{ $contact->email_address ?? '' }}">{{ $contact->email_address ?? '' }}</a></h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="contact-one__right">
                        <div class="row">
                            <div class="contact-one__form-box">
                                <form action="assetsfront/inc/sendemail.php"
                                    class="contact-one__form contact-one-validated" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="contact-one__input-box">
                                                <input type="text" placeholder="Your name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="contact-one__input-box">
                                                <input type="email" placeholder="Email address" name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="contact-one__input-box text-message-box">
                                                <textarea name="message" placeholder="Write message"></textarea>
                                            </div>
                                            <div class="contact-one__btn-box">
                                                <a href="about.html" class="thm-btn contact-one__btn">Send a
                                                    Message</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact One End-->

    <!--News One Start-->
    <section class="news-one">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">What’s Happening</span>
                <h2 class="section-title__title">Latest news updates <br> & articles</h2>
            </div>
            <div class="row">
                <!--News One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="assetsfront/images/blog/news-1-1.jpg" alt="">
                        </div>
                        <div class="news-one__content-box">
                            <div class="news-one__date">
                                <p>18 april</p>
                            </div>
                            <div class="news-one__content">
                                <p class="news-one__author">by John Smith</p>
                                <h3 class="news-one__title"><a href="news-details.html">Let’s understand the
                                        different types of luxury spaces</a></h3>
                            </div>
                            <div class="news-one__bottom">
                                <a href="news-details.html" class="news-one__more"> <i class="fa fa-arrow-right"></i>
                                    Read More</a>
                                <a href="news-details.html" class="news-one__comments"> <i class="fas fa-comments"></i> 2
                                    Comments</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News One Single End-->
                <!--News One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="assetsfront/images/blog/news-1-2.jpg" alt="">
                        </div>
                        <div class="news-one__content-box">
                            <div class="news-one__date">
                                <p>18 april</p>
                            </div>
                            <div class="news-one__content">
                                <p class="news-one__author">by John Smith</p>
                                <h3 class="news-one__title"><a href="news-details.html">Lorem Ipsum has been the
                                        industry's standard dummy</a></h3>
                            </div>
                            <div class="news-one__bottom">
                                <a href="news-details.html" class="news-one__more"> <i class="fa fa-arrow-right"></i>
                                    Read More</a>
                                <a href="news-details.html" class="news-one__comments"> <i class="fas fa-comments"></i> 2
                                    Comments</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News One Single End-->
                <!--News One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                    <div class="news-one__single">
                        <div class="news-one__img">
                            <img src="assetsfront/images/blog/news-1-3.jpg" alt="">
                        </div>
                        <div class="news-one__content-box">
                            <div class="news-one__date">
                                <p>18 april</p>
                            </div>
                            <div class="news-one__content">
                                <p class="news-one__author">by John Smith</p>
                                <h3 class="news-one__title"><a href="news-details.html">The point of using Lorem
                                        Ipsum is that it has a more</a></h3>
                            </div>
                            <div class="news-one__bottom">
                                <a href="news-details.html" class="news-one__more"> <i class="fa fa-arrow-right"></i>
                                    Read More</a>
                                <a href="news-details.html" class="news-one__comments"> <i class="fas fa-comments"></i> 2
                                    Comments</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--News One Single End-->
            </div>
        </div>
    </section>
    <!--News One End-->

    <!--Gallery One Start-->
    <section class="gallery-one">
        <div class="gallery-one__container">
            <div class="gallery-one__carousel thm-owl__carousel owl-theme owl-carousel"
                data-owl-options='{
                "items": 5,
                "margin": 0,
                "smartSpeed": 700,
                "loop":true,
                "autoplay": 6000,
                "nav":false,
                "dots":false,
                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                "responsive":{
                    "0":{
                        "items":1
                    },
                    "768":{
                        "items":3
                    },
                    "992":{
                        "items": 4
                    },
                    "1200":{
                        "items": 5
                    }
                }
            }'>
                <!--Gallery One Single Start-->
                @foreach ($gallerys as $gallery)
                <div class="item">
                    <div class="gallery-one__single">
                        <div class="gallery-one__img">
                            <img src="{{ asset($gallery->path) }}" alt="">
                            <div class="gallery-one__icon">
                                <a class="img-popup" href="{{ asset($gallery->path) }}"><span
                                        class="fa fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--Gallery One Single End-->
            </div>
        </div>
    </section>
    <!--Gallery One End-->
@endsection
