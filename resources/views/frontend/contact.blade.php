@extends('frontend.layouts')
@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index.html">Home</a></li>
                    <li><span>/</span></li>
                    <li>Contact</li>
                </ul>
                <h2>Contact us</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Contact Two Start-->
    <section class="contact-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-two__left">
                        <div class="contact-two__img">
                            <img src="assets/images/resources/contact-two-img-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-two__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">contact with us</span>
                            <h2 class="section-title__title">Get in touch now</h2>
                        </div>
                        <p class="contact-two__text-1">Lorem ipsum dolor sit amet, consectetur notted adipis not
                            icing elit sed do eiusmod tempor incididunt.</p>
                        <ul class="list-unstyled contact-two__list">
                            <li>
                                <div class="icon">
                                    <i class="icon-telephone"></i>
                                </div>
                                <div class="content">
                                    <p>Have any question?</p>
                                    <h4> <span>Free</span> <a href="tel:230009850">+23 (000)-9850</a></h4>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="icon-email"></i>
                                </div>
                                <div class="content">
                                    <p>Write email</p>
                                    <h4><a href="mailto:needhelp@company.com">needhelp@company.com</a></h4>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="icon-pin"></i>
                                </div>
                                <div class="content">
                                    <p>Visit anytime</p>
                                    <h4>30 broklyn golden street. New York</h4>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Two End-->

    <!--Google Map Start-->
    <section class="contact-page-google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
            class="google-map__two" allowfullscreen></iframe>

    </section>
    <!--Google Map End-->

    <!--Contact Three Start-->
    <section class="contact-three">
        <div class="container">
            <div class="contact-three__inner">
                <div class="section-title text-center">
                    <span class="section-title__tagline">write a message</span>
                    <h2 class="section-title__title">Feel free to write</h2>
                </div>
                <div class="contact-three__form-box">
                    <form action="assets/inc/sendemail.php" class="contact-three__form contact-form-validated"
                        novalidate="novalidate">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <input type="text" placeholder="Your name" name="name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <input type="email" placeholder="Email address" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="contact-form__input-box text-message-box">
                                    <textarea name="message" placeholder="Write message"></textarea>
                                </div>
                                <div class="contact-form__btn-box">
                                    <button type="submit" class="thm-btn contact-form__btn">Send a Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Three End-->

    <!--Brand Three Start-->
    <section class="brand-three">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="brand-three__inner">
                        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
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
                                <div class="swiper-slide">
                                    <img src="assets/images/brand/brand-2-1.png" alt="">
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide">
                                    <img src="assets/images/brand/brand-2-2.png" alt="">
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide">
                                    <img src="assets/images/brand/brand-2-3.png" alt="">
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide">
                                    <img src="assets/images/brand/brand-2-4.png" alt="">
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide">
                                    <img src="assets/images/brand/brand-2-5.png" alt="">
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide">
                                    <img src="assets/images/brand/brand-2-6.png" alt="">
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide">
                                    <img src="assets/images/brand/brand-2-1.png" alt="">
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide">
                                    <img src="assets/images/brand/brand-2-2.png" alt="">
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide">
                                    <img src="assets/images/brand/brand-2-3.png" alt="">
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide">
                                    <img src="assets/images/brand/brand-2-4.png" alt="">
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide">
                                    <img src="assets/images/brand/brand-2-5.png" alt="">
                                </div><!-- /.swiper-slide -->
                                <div class="swiper-slide">
                                    <img src="assets/images/brand/brand-2-6.png" alt="">
                                </div><!-- /.swiper-slide -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Brand Three End-->
@endsection
