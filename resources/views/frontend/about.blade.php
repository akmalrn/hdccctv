@extends('frontend.layouts')
@section('content')
<!--Page Header Start-->
<section class="page-header">
    <div class="page-header-bg" style="background-image: url(assetsfront/images/backgrounds/page-header-bg.jpg)">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ route('index') }}">Beranda</a></li>
                <li><span>/</span></li>
                <li>Tentang</li>
            </ul>
            <h2>Tentang Kami</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Feature Three Start-->
<section class="feature-four">
    <div class="container">
        <div class="row">
            <!--Feature Three Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <div class="feature-four__single">
                    <div class="feature-four__img-box">
                        <div class="feature-four__img">
                            <img src="assetsfront/images/resources/feature-four-1-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="feature-four__content">
                        <h3 class="feature-four__title"><a href="services.html">Living experience</a></h3>
                        <p class="feature-four__text">There are many variations of passages of available, but
                            the majority have in some form, by humour words.</p>
                    </div>
                </div>
            </div>
            <!--Feature Three Single End-->
            <!--Feature Three Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <div class="feature-four__single">
                    <div class="feature-four__img-box">
                        <div class="feature-four__img">
                            <img src="assetsfront/images/resources/feature-four-1-2.jpg" alt="">
                        </div>
                    </div>
                    <div class="feature-four__content">
                        <h3 class="feature-four__title"><a href="services.html">Property management</a></h3>
                        <p class="feature-four__text">There are many variations of passages of available, but
                            the majority have in some form, by humour words.</p>
                    </div>
                </div>
            </div>
            <!--Feature Three Single End-->
            <!--Feature Three Single Start-->
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                <div class="feature-four__single">
                    <div class="feature-four__img-box">
                        <div class="feature-four__img">
                            <img src="assetsfront/images/resources/feature-four-1-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="feature-four__content">
                        <h3 class="feature-four__title"><a href="services.html">Premium places</a></h3>
                        <p class="feature-four__text">There are many variations of passages of available, but
                            the majority have in some form, by humour words.</p>
                    </div>
                </div>
            </div>
            <!--Feature Three Single End-->
        </div>
    </div>
</section>
<!--Feature Three End-->

<!--Testimonial One Start-->
<section class="testimonial-one testimonial-two">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5">
                <div class="testimonial-one__left">
                    <div class="testimonial-one__img-1">
                        <img src="assetsfront/images/testimonial/testimonial-1-1.jpg" alt="">
                    </div>
                    <div class="testimonial-one__img-1 testimonial-one__img-2">
                        <img src="assetsfront/images/testimonial/testimonial-1-2.jpg" alt="">
                    </div>
                    <div class="testimonial-one__img-1 testimonial-one__img-3">
                        <img src="assetsfront/images/testimonial/testimonial-1-3.jpg" alt="">
                    </div>
                    <div class="testimonial-one__img-1 testimonial-one__img-4">
                        <img src="assetsfront/images/testimonial/testimonial-1-4.jpg" alt="">
                    </div>
                    <div class="testimonial-one__img-1 testimonial-one__img-5">
                        <img src="assetsfront/images/testimonial/testimonial-1-5.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="testimonial-one__right">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">our Testimonials</span>
                        <h2 class="section-title__title">What they’re saying?</h2>
                    </div>
                    <div class="testimonial-one__carousel thm-owl__carousel owl-theme owl-carousel"
                        data-owl-options='{
                        "items": 1,
                        "margin": 30,
                        "smartSpeed": 700,
                        "loop":true,
                        "autoplay": 6000,
                        "nav":false,
                        "dots":true,
                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                        "responsive":{
                            "0":{
                                "items":1
                            },
                            "768":{
                                "items":1
                            },
                            "992":{
                                "items": 1
                            }
                        }
                    }'>
                        <!--Testimonial One Single Start-->
                        <div class="item">
                            <div class="testimonial-one__single">
                                <p class="testimonial-one__text">Vestibulum scelerisque enim pulvinar, aliquam
                                    erat sit amet, hendrerit dui. Vivamus varius libero metus, sit amet
                                    hendrerit semper.</p>
                                <div class="testimonial-one__client-info">
                                    <h3 class="testimonial-one__client-name">Smith jackan</h3>
                                    <p class="testimonial-one__client-title">interior Designer</p>
                                </div>
                                <div class="testimonial-one__quote">
                                    <span class="icon-quotes"></span>
                                </div>
                                <div class="testimonial-one__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial One Single End-->
                        <!--Testimonial One Single Start-->
                        <div class="item">
                            <div class="testimonial-one__single">
                                <p class="testimonial-one__text">Vestibulum scelerisque enim pulvinar, aliquam
                                    erat sit amet, hendrerit dui. Vivamus varius libero metus, sit amet
                                    hendrerit semper.</p>
                                <div class="testimonial-one__client-info">
                                    <h3 class="testimonial-one__client-name">Kevin smith</h3>
                                    <p class="testimonial-one__client-title">interior Designer</p>
                                </div>
                                <div class="testimonial-one__quote">
                                    <span class="icon-quotes"></span>
                                </div>
                                <div class="testimonial-one__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial One Single End-->
                        <!--Testimonial One Single Start-->
                        <div class="item">
                            <div class="testimonial-one__single">
                                <p class="testimonial-one__text">Vestibulum scelerisque enim pulvinar, aliquam
                                    erat sit amet, hendrerit dui. Vivamus varius libero metus, sit amet
                                    hendrerit semper.</p>
                                <div class="testimonial-one__client-info">
                                    <h3 class="testimonial-one__client-name">Mike hardson</h3>
                                    <p class="testimonial-one__client-title">interior Designer</p>
                                </div>
                                <div class="testimonial-one__quote">
                                    <span class="icon-quotes"></span>
                                </div>
                                <div class="testimonial-one__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial One Single End-->
                        <!--Testimonial One Single Start-->
                        <div class="item">
                            <div class="testimonial-one__single">
                                <p class="testimonial-one__text">Vestibulum scelerisque enim pulvinar, aliquam
                                    erat sit amet, hendrerit dui. Vivamus varius libero metus, sit amet
                                    hendrerit semper.</p>
                                <div class="testimonial-one__client-info">
                                    <h3 class="testimonial-one__client-name">Sandar sims</h3>
                                    <p class="testimonial-one__client-title">interior Designer</p>
                                </div>
                                <div class="testimonial-one__quote">
                                    <span class="icon-quotes"></span>
                                </div>
                                <div class="testimonial-one__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial One Single End-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Testimonial One End-->

<!--Value Two Start-->
<section class="value-two">
    <div class="value-two__wrap">
        <div class="value-two__left">
            <div class="value-two__bg"
                style="background-image: url(assetsfront/images/backgrounds/value-two-bg.jpg);"></div>
        </div>
        <div class="value-two__right">
            <div class="value-two__shape-1 float-bob-x">
                <img src="assetsfront/images/shapes/value-two-shape-1.png" alt="">
            </div>
            <div class="value-two__right-content">
                <div class="section-title text-left">
                    <span class="section-title__tagline">apartment features</span>
                    <h2 class="section-title__title">Values of smart living in vista residence</h2>
                </div>
                <p class="value-two__text">Lorem ipsum simply free text available in the market. At vero eos et
                    accusamus et iusto odio dig ducimus qui blan ditiis sit praesentium.</p>
                <div class="value-two__points-box">
                    <ul class="list-unstyled value-two__points">
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>Wellness</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>Library</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>Shopping</p>
                            </div>
                        </li>
                    </ul>
                    <ul class="list-unstyled value-two__points value-two__points-two">
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>Fitness</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>Restaurant</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>Fashion</p>
                            </div>
                        </li>
                    </ul>
                    <ul class="list-unstyled value-two__points value-two__points-three">
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>Conference</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>Bars</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="text">
                                <p>Swmming Pull</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Value Two End-->

<!--Team Two Start-->
<section class="team-two">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">meet the team</span>
            <h2 class="section-title__title">Our expert agents</h2>
        </div>
        <div class="row">
            <!--Team Two Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="team-two__single">
                    <div class="team-two__img-box">
                        <div class="team-two__img">
                            <img src="assetsfront/images/team/team-two-img-1-1.jpg" alt="">
                        </div>
                        <div class="team-two__hover">
                            <h3 class="team-two__hover-name"><a href="agents.html">Sandar sims</a></h3>
                            <p class="team-two__hover-sub-title">Area agent</p>
                            <div class="team-two__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-two__content">
                        <h3 class="team-two__name"><a href="agents.html">Sandar sims</a></h3>
                        <p class="team-two__sub-title">Area agent</p>
                    </div>
                </div>
            </div>
            <!--Team Two Single End-->
            <!--Team Two Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="team-two__single">
                    <div class="team-two__img-box">
                        <div class="team-two__img">
                            <img src="assetsfront/images/team/team-two-img-1-2.jpg" alt="">
                        </div>
                        <div class="team-two__hover">
                            <h3 class="team-two__hover-name"><a href="agents.html">Mike hardson</a></h3>
                            <p class="team-two__hover-sub-title">Area agent</p>
                            <div class="team-two__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-two__content">
                        <h3 class="team-two__name"><a href="agents.html">Mike hardson</a></h3>
                        <p class="team-two__sub-title">Area agent</p>
                    </div>
                </div>
            </div>
            <!--Team Two Single End-->
            <!--Team Two Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                <div class="team-two__single">
                    <div class="team-two__img-box">
                        <div class="team-two__img">
                            <img src="assetsfront/images/team/team-two-img-1-3.jpg" alt="">
                        </div>
                        <div class="team-two__hover">
                            <h3 class="team-two__hover-name"><a href="agents.html">Jessica brown</a></h3>
                            <p class="team-two__hover-sub-title">Area agent</p>
                            <div class="team-two__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-two__content">
                        <h3 class="team-two__name"><a href="agents.html">Jessica brown</a></h3>
                        <p class="team-two__sub-title">Area agent</p>
                    </div>
                </div>
            </div>
            <!--Team Two Single End-->
            <!--Team Two Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                <div class="team-two__single">
                    <div class="team-two__img-box">
                        <div class="team-two__img">
                            <img src="assetsfront/images/team/team-two-img-1-4.jpg" alt="">
                        </div>
                        <div class="team-two__hover">
                            <h3 class="team-two__hover-name"><a href="agents.html">Kevin martin</a></h3>
                            <p class="team-two__hover-sub-title">Area agent</p>
                            <div class="team-two__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-two__content">
                        <h3 class="team-two__name"><a href="agents.html">Kevin martin</a></h3>
                        <p class="team-two__sub-title">Area agent</p>
                    </div>
                </div>
            </div>
            <!--Team Two Single End-->
        </div>
    </div>
</section>
<!--Team Two End-->

<!--Brand Two Start-->
<section class="brand-two">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="brand-two__inner">
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
                                <img src="assetsfront/images/brand/brand-2-1.png" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="assetsfront/images/brand/brand-2-2.png" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="assetsfront/images/brand/brand-2-3.png" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="assetsfront/images/brand/brand-2-4.png" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="assetsfront/images/brand/brand-2-5.png" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="assetsfront/images/brand/brand-2-6.png" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="assetsfront/images/brand/brand-2-1.png" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="assetsfront/images/brand/brand-2-2.png" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="assetsfront/images/brand/brand-2-3.png" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="assetsfront/images/brand/brand-2-4.png" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="assetsfront/images/brand/brand-2-5.png" alt="">
                            </div><!-- /.swiper-slide -->
                            <div class="swiper-slide">
                                <img src="assetsfront/images/brand/brand-2-6.png" alt="">
                            </div><!-- /.swiper-slide -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Brand Two End-->
@endsection
