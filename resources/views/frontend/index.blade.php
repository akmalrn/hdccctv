<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $configuration->title ?? '' }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="{{ $configuration->meta_keywords ?? '' }}" name="keywords">
    <meta content="{{ $configuraiton->meta_descriptions ?? '' }}" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ $configuration->path_logo ?? '' }}" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>



    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assetsfront/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsfront/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assetsfront/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assetsfront/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assetsfront/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5">
        <div class="row gx-4 d-none d-lg-flex">
            <div class="col-lg-6 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <div class="btn-sm-square rounded-circle bg-primary me-2">
                        <small class="fa fa-map-marker-alt text-white"></small>
                    </div>
                    <small>{{ $contact->address ?? '' }}</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <div class="btn-sm-square rounded-circle bg-primary me-2">
                        <small class="fa fa-envelope-open text-white"></small>
                    </div>
                    <small>{{ $contact->email_address ?? '' }}</small>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <div class="btn-sm-square rounded-circle bg-primary me-2">
                        <small class="fa fa-phone-alt text-white"></small>
                    </div>
                    <small>+{{ $contact->phone_number ?? '' }}</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <div class="btn-sm-square rounded-circle bg-primary me-2">
                        <small class="far fa-clock text-white"></small>
                    </div>
                    <small>{{ $contact->hours ?? '' }}</small>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5">
        <a href="" class="navbar-brand d-flex align-items-center">
            <img src="{{ asset($configuration->path ?? '') }}" alt="{{ $configuration->website_name ?? '' }}"
                width="50px" height="50px">
            <h2 class="ms-3 mt-3"> {{ $configuration->website_name ?? '' }}</h2>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-4 py-lg-0">
                <a href="#" class="nav-item nav-link active">Beranda</a>
                <a href="#about" class="nav-item nav-link">Tentang</a>
                <a href="#services" class="nav-item nav-link">Layanan</a>
                <a href="#gallery" class="nav-item nav-link">Galeri</a>
                <a href="https://wa.me/{{ $contact->phone_number }}" target="blank"
                    class="nav-item nav-link">Kontak</a>
            </div>
            <div class="h-100 d-lg-inline-flex align-items-center d-none">
                @if ($contact->phone_number)
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-2"
                        href="https://wa.me/{{ $contact->phone_number }}" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                @endif

                @if ($contact->email_address)
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-2"
                        href="mailto:{{ $contact->email_address }}" target="_blank">
                        <i class="fab fa-google"></i>
                    </a>
                @endif

                @if ($contact->facebook)
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-2" href="{{ $contact->facebook }}"
                        target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                @endif

                @if ($contact->instagram)
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-2"
                        href="{{ $contact->instagram }}" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                @endif
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <div class="whatsapp-container">
        <a href="https://wa.me/{{ $contact->phone_number }}" class="whatsapp-button" target="_blank"
            rel="noopener noreferrer">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>


    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative">
            @foreach ($sliders as $slider)
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{ asset($slider->path) }}" alt="">
                    <div class="carousel-inner">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 col-lg-8 text-center">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">{{ $slider->title }}
                                    </h1>
                                    <p class="fs-5 text-white mb-4 pb-2">{{ $slider->overview }}</p>
                                    <a href="https://wa.me/{{ $contact->phone_number }}" target="blank"
                                        class="btn btn-primary rounded-pill py-md-3 px-md-5 me-3 animated slideInLeft">Hubungi</a>
                                    <a href="{{ $contact->email_address ?? '' }}" target="blank"
                                        class="btn btn-light rounded-pill py-md-3 px-md-5 animated slideInRight">Email</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0" id="about">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset($about->path ?? '') }}"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="bg-primary mb-3" style="width: 60px; height: 2px;"></div>
                        <h1 class="display-5 mb-4">Tentang Kami</h1>
                        <p class="mb-4 pb-2">{!! $about->description ?? '' !!}</p>
                        <div class="row g-4 mb-4 pb-3">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            </div>
                        </div>
                        <a href="https://wa.me/{{ $contact->phone_number ?? '' }}" target="blank"
                            class="btn btn-primary rounded-pill py-3 px-5">Hubungi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <div class="container-xxl py-5" id="superiority">
        <div class="container">
            <div class="row g-4">
                @foreach ($superioritys as $superiority)
                    <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="h-100 bg-dark p-4 p-xl-5">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="btn-square rounded-circle"
                                    style="width: 64px; height: 64px; background: #000000;">
                                    <img class="img-fluid" src="{{ $superiority->path }}" alt="Icon">
                                </div>
                                <h1 class="display-1 mb-0" style="color: #000000;">{{ $superiority->id }}</h1>
                            </div>
                            <h5 class="text-white">{{ $superiority->title }}</h5>
                            <hr class="w-25">
                            <span>{!! $superiority->description !!}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Facts Start -->

    <!-- Service Start -->
    <div class="swiper services-slider">
        <div class="swiper-wrapper">
            @foreach ($services as $service)
                <div class="swiper-slide">
                    <div class="service-item border h-100 p-4 text-center">
                        <div class="btn-square bg-light rounded-circle mx-auto mb-4"
                            style="width: 300px; height: 300px; display: flex; align-items: center; justify-content: center;">
                            <img class="img-fluid" src="{{ asset($service->path) }}" alt="gambar"
                                style="max-width: 100%; height: auto;">
                        </div>
                        <a class="btn btn-primary" href="https://wa.me/{{ $contact->phone_number ?? '' }}"
                            target="_blank">
                            <i class="fa fa-arrow-right me-2"></i>Hubungi
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <br>

    <script>
        const servicesSwiper = new Swiper('.services-slider', {
            loop: true,
            spaceBetween: 20,
            slidesPerView: 4,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
            },
        });
    </script>



    <!-- Service End -->

    <!--Gallery One Start-->
    <section class="gallery-one" id="gallery">
        <div class="container">
            <div class="gallery-one__carousel owl-carousel owl-theme"
                data-owl-options='{
                "items": 5,
                "margin": 10,
                "smartSpeed": 700,
                "loop": true,
                "autoplay": true,
                "autoplayTimeout": 6000,
                "nav": true,
                "dots": false,
                "navText": ["<span class=\"fa fa-angle-left\"></span>", "<span class=\"fa fa-angle-right\"></span>"],
                "responsive": {
                    "0": {
                        "items": 1
                    },
                    "768": {
                        "items": 3
                    },
                    "992": {
                        "items": 4
                    },
                    "1200": {
                        "items": 5
                    }
                }
            }'>
                <!-- Gallery Item Start -->
                @foreach ($gallerys as $gallery)
                    <div class="gallery-one__single">
                        <div class="gallery-one__img">
                            <img src="{{ asset($gallery->path) }}" alt="Gallery Image"
                                style="width:250px; height:250px;">
                            <div class="gallery-one__icon">
                                <a class="img-popup" href="{{ asset($gallery->path) }}"><span
                                        class="fa fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- Gallery Item End -->
            </div>
        </div>
    </section>

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.default.min.css">

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

    <!-- Custom CSS for Image Handling -->
    <style>
        .gallery-one__img {
            position: relative;
        }

        .gallery-one__img img {
            height: auto;
            object-fit: cover;
        }

        .gallery-one__icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 50%;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .gallery-one__img:hover .gallery-one__icon {
            opacity: 1;
        }

        .img-popup {
            color: #fff;
            font-size: 24px;
        }
    </style>

    <script>
        // Initialize Owl Carousel
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel(JSON.parse($('.gallery-one__carousel').attr('data-owl-options')));
        });
    </script>


    <!--Gallery One End-->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
                <h1 class="display-5 mb-5">Testimonial</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                @foreach ($testimonials as $testimonial)
                    <div class="testimonial-item text-center"
                        data-dot="<img class='img-fluid' src='img/testimonial-1.jpg' alt=''>">
                        <p class="fs-5">{!! $testimonial->description !!}</p>
                        <h4>{{ $testimonial->name }}</h4>
                        <!-- Testimonial End -->
                        <span class="text-primary">{{ $testimonial->position }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Mitra -->
    <section id="clients" class="clients section">
        <div class="container">
            <div class="swiper mitra-slider">
                <div class="swiper-wrapper">
                    @foreach ($mitras as $item)
                        <div class="swiper-slide">
                            <img src="{{ asset($item->path) }}" class="img-fluid custom-img" alt="Mitra Image"
                                style="max-width: 107px; width:107px; max-height: 110px; height:110px;">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <script>
        const mitraSwiper = new Swiper('.mitra-slider', {
            loop: true,
            speed: 600,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            slidesPerView: 10,
            spaceBetween: 20,
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true,
            },
            breakpoints: {
                320: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                480: {
                    slidesPerView: 3,
                    spaceBetween: 60,
                },
                640: {
                    slidesPerView: 4,
                    spaceBetween: 80,
                },
                992: {
                    slidesPerView: 10,
                    spaceBetween: 20,
                },
            },
        });
    </script>


    <!-- Swiper CSS -->
    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Custom CSS for Images -->
    <style>
        .swiper-container {
            width: 100%;
            height: auto;
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-shrink: 0;
        }

        .custom-img {
            max-width: 100%;
            height: auto;
            object-fit: contain;
        }
    </style>

    <script>
        // Initialize Swiper
        var swiper = new Swiper('.swiper-container', JSON.parse(document.querySelector('.swiper-config').textContent));
    </script>





    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col col-md">
                    <h5 class="text-light mb-4">{{ $about->description ?? '' }}</h5>
                    <div class="position-relative w-100">
                        <iframe src="{{ $contact->map ?? '' }}" frameborder="0"></iframe>
                    </div>
                </div>
                <div class="col col-md">
                    <h5 class="text-light mb-4">Nav</h5>
                    <a class="btn btn-link" href="#">Beranda</a>
                    <a class="btn btn-link" href="#about">Tentang</a>
                    <a class="btn btn-link" href="#services">Layanan</a>
                    <a class="btn btn-link" href="#gallery">Galeri</a>
                    <a class="btn btn-link" href="https://wa.me/{{ $contact->phone_number ?? '' }}">Kontak</a>
                </div>

                <div class="col col-md">
                    <h5 class="text-light mb-4">Alamat</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{ $contact->address ?? '' }}</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+{{ $contact->phone_number ?? '' }}</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{ $contact->email_address ?? '' }}</p>
                    <div class="d-flex pt-2">
                        @if ($contact->phone_number)
                            <a class="btn btn-square btn-outline-secondary rounded-circle me-2"
                                href="https://wa.me/{{ $contact->phone_number }}" target="_blank">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        @endif

                        @if ($contact->email_address)
                            <a class="btn btn-square btn-outline-secondary rounded-circle me-2"
                                href="mailto:{{ $contact->email_address }}" target="_blank">
                                <i class="fab fa-google"></i>
                            </a>
                        @endif

                        @if ($contact->facebook)
                            <a class="btn btn-square btn-outline-secondary rounded-circle me-2"
                                href="{{ $contact->facebook }}" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        @endif

                        @if ($contact->instagram)
                            <a class="btn btn-square btn-outline-secondary rounded-circle me-2"
                                href="{{ $contact->instagram }}" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid py-4" style="background: #000000;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    {{ $configuration->footer ?? '' }}
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->

                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assetsfront/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assetsfront/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assetsfront/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assetsfront/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assetsfront/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assetsfront/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assetsfront/lib/lightbox/js/lightbox.min.js') }}"></script>

    <script src="{{ asset('assetsfront/js/aport.js') }}"></script>
    <!-- Template Javascript -->
    <script src="{{ asset('assetsfront/js/main.js') }}"></script>


</body>

</html>
