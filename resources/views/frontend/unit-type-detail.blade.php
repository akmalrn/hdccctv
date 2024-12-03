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
                    <li>Apartments</li>
                </ul>
                <h2>Apartment details</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Apartment Details Start-->
    <section class="apartment-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="apartment-details__img-box">
                        <div class="apartment-details__img">
                            <img src="assets/images/apartment/apartment-details-img-1.jpg" alt="">
                            <div class="apartment-details__list-box">
                                <ul class="list-unstyled apartment-details__list">
                                    <li>
                                        <div class="apartment-details__list-content">
                                            <h3>130</h3>
                                            <p>SQUARE AREAS</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="apartment-details__list-content">
                                            <h3>6</h3>
                                            <p>floor</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="apartment-details__list-content">
                                            <h3>3</h3>
                                            <p>Bedrooms</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="apartment-details__list-content">
                                            <h3>3</h3>
                                            <p>bathrooms</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="apartment-details__list-content">
                                            <h3>4</h3>
                                            <p>terrace</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="apartment-details__list-content">
                                            <h3>2</h3>
                                            <p>parkings</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="apartment-details__content-box">
                        <h3 class="apartment-details__content-title">Studio apartment</h3>
                        <p class="apartment-details__text-1">There are many variations of passages of psum
                            available, but the majority have suffered alteration in some form, by injected humour,
                            or randomised words which don't look even slightly believable. If you are going to use a
                            passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
                            the middle of text. Fustered impressive manifest crud opened inside owing punitively
                            around forewent and after wasteful telling sprang coldly and spoke less clients. Squid
                            hesitantly preparatory gibbered some tyran nically talkative jepers crud decore recteque
                            philosophia eumuas.</p>
                        <p class="apartment-details__text-2">Beyond more stoic this along goodness hey this this wow
                            manatee mongoose one as since a far flustered impressive manifest far crud opened inside
                            owing punitively around forewent and after wasteful telling sprang coldly and spoke less
                            clients. Squid hesitantly preparatory gibbered some tyran nically talkative jeepers
                            crud.</p>
                        <ul class="list-unstyled apartment-details__points">
                            <li>
                                <div class="icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet is simply free text available in the market</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="text">
                                    <p>Sed tempor arcu non ligula convallis suffered alternation in some form by
                                        injected</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="text">
                                    <p>Fusce sodales lacus sollicitudin, if you are going to use a passage</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="text">
                                    <p>Curabitur efficitur gravida ligula siml is not</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Apartment Details End-->

    <!--Floor Plan Two Start-->
    <section class="floor-plan-two apartment-plan">
        <div class="container">
            <h3 class="apartment-plan__title">Studio apartment plan</h3>
            <div class="floor-plan-two__main-tab-box tabs-box">
                <div class="row">
                    <div class="col-xl-3 col-lg-3">
                        <div class="floor-plan-two__left">
                            <ul class="tab-buttons clearfix list-unstyled">
                                <li data-tab="#penthouse" class="tab-btn">
                                    <span>Penthouse </span>
                                    <i class="icon-right-arrow"></i>
                                </li>
                                <li data-tab="#apartment" class="tab-btn active-btn">
                                    <span>Apartment</span>
                                    <i class="icon-right-arrow"></i>
                                </li>
                                <li data-tab="#duplex" class="tab-btn">
                                    <span>Duplex</span>
                                    <i class="icon-right-arrow"></i>
                                </li>
                                <li data-tab="#studio" class="tab-btn">
                                    <span>Studio</span>
                                    <i class="icon-right-arrow"></i>
                                </li>
                                <li data-tab="#height" class="tab-btn">
                                    <span>Double height</span>
                                    <i class="icon-right-arrow"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <div class="floor-plan-two__right">
                            <div class="tabs-content">
                                <!--tab-->
                                <div class="tab" id="penthouse">
                                    <div class="floor-plan-two__tab-content">
                                        <div class="row">
                                            <div class="col-xl-7">
                                                <div class="floor-plan-two__tab-content-img">
                                                    <img src="assets/images/resources/floor-plan-two-tab-content-img-1.png"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-5">
                                                <div class="floor-plan-two__tab-content-right">
                                                    <p class="floor-plan-two__tab-content-text">Lorem ipsum simply
                                                        free text in the market. At vero eos et accusamus et iusto
                                                        odio dig ducimus qui blan ditiis praesentium.</p>
                                                    <ul class="list-unstyled floor-plan-two__tab-content-details">
                                                        <li>
                                                            <p>Total area</p>
                                                            <span>2800 Sq. Ft</span>
                                                        </li>
                                                        <li>
                                                            <p>Floor no.</p>
                                                            <span>2nd</span>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--tab-->
                                <div class="tab active-tab" id="apartment">
                                    <div class="floor-plan-two__tab-content">
                                        <div class="row">
                                            <div class="col-xl-7">
                                                <div class="floor-plan-two__tab-content-img">
                                                    <img src="assets/images/resources/floor-plan-two-tab-content-img-1.png"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-5">
                                                <div class="floor-plan-two__tab-content-right">
                                                    <p class="floor-plan-two__tab-content-text">Lorem ipsum simply
                                                        free text in the market. At vero eos et accusamus et iusto
                                                        odio dig ducimus qui blan ditiis praesentium.</p>
                                                    <ul class="list-unstyled floor-plan-two__tab-content-details">
                                                        <li>
                                                            <p>Total area</p>
                                                            <span>2800 Sq. Ft</span>
                                                        </li>
                                                        <li>
                                                            <p>Floor no.</p>
                                                            <span>2nd</span>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--tab-->
                                <div class="tab" id="duplex">
                                    <div class="floor-plan-two__tab-content">
                                        <div class="row">
                                            <div class="col-xl-7">
                                                <div class="floor-plan-two__tab-content-img">
                                                    <img src="assets/images/resources/floor-plan-two-tab-content-img-1.png"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-5">
                                                <div class="floor-plan-two__tab-content-right">
                                                    <p class="floor-plan-two__tab-content-text">Lorem ipsum simply
                                                        free text in the market. At vero eos et accusamus et iusto
                                                        odio dig ducimus qui blan ditiis praesentium.</p>
                                                    <ul class="list-unstyled floor-plan-two__tab-content-details">
                                                        <li>
                                                            <p>Total area</p>
                                                            <span>2800 Sq. Ft</span>
                                                        </li>
                                                        <li>
                                                            <p>Floor no.</p>
                                                            <span>2nd</span>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--tab-->
                                <div class="tab" id="studio">
                                    <div class="floor-plan-two__tab-content">
                                        <div class="row">
                                            <div class="col-xl-7">
                                                <div class="floor-plan-two__tab-content-img">
                                                    <img src="assets/images/resources/floor-plan-two-tab-content-img-1.png"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-5">
                                                <div class="floor-plan-two__tab-content-right">
                                                    <p class="floor-plan-two__tab-content-text">Lorem ipsum simply
                                                        free text in the market. At vero eos et accusamus et iusto
                                                        odio dig ducimus qui blan ditiis praesentium.</p>
                                                    <ul class="list-unstyled floor-plan-two__tab-content-details">
                                                        <li>
                                                            <p>Total area</p>
                                                            <span>2800 Sq. Ft</span>
                                                        </li>
                                                        <li>
                                                            <p>Floor no.</p>
                                                            <span>2nd</span>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--tab-->
                                <div class="tab" id="height">
                                    <div class="floor-plan-two__tab-content">
                                        <div class="row">
                                            <div class="col-xl-7">
                                                <div class="floor-plan-two__tab-content-img">
                                                    <img src="assets/images/resources/floor-plan-two-tab-content-img-1.png"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-5">
                                                <div class="floor-plan-two__tab-content-right">
                                                    <p class="floor-plan-two__tab-content-text">Lorem ipsum simply
                                                        free text in the market. At vero eos et accusamus et iusto
                                                        odio dig ducimus qui blan ditiis praesentium.</p>
                                                    <ul class="list-unstyled floor-plan-two__tab-content-details">
                                                        <li>
                                                            <p>Total area</p>
                                                            <span>2800 Sq. Ft</span>
                                                        </li>
                                                        <li>
                                                            <p>Floor no.</p>
                                                            <span>2nd</span>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Floor Plan Two End-->

    <!--CTA One Start-->
    <section class="cta-one">
        <div class="cta-one__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
            style="background-image: url(assets/images/backgrounds/cta-one-bg.jpg);"></div>
        <div class="cta-one__shape-1 float-bob-y">
            <img src="assets/images/shapes/cta-one-shape-1.png" alt="">
        </div>
        <div class="container">
            <div class="cta-one__inner">
                <div class="cta-one__title-box">
                    <p>Don’t hesitate to contact us</p>
                    <h2>Make an appointment now</h2>
                </div>
                <div class="cta-one__btn-box">
                    <a href="contact.html" class="thm-btn cta-one__btn">Schedule a Visit</a>
                    <div class="cta-one__shape-2 float-bob-x">
                        <img src="assets/images/shapes/cta-one-shape-2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CTA One End-->
@endsection
