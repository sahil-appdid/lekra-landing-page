<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Terms and conditions</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('site/images/icons/favicon-32x32.png?v=1') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('site/images/icons/favicon-16x16.png?v=1') }}">
    <link rel="apple-touch-icon" href="{{ asset('site/images/icons/apple-touch-icon.png?v=1') }}">
    <link rel="shortcut icon" href="{{ asset('site/images/icons/favicon.ico?v=1') }}">
    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css">
</head>

<body>

    <section class="hero-section">

        <div class="background-strips">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg py-3">
                <div class="container nav-contents">
                    <a class="navbar-brand d-flex align-items-center" href="/">
                        <img src="{{ asset('site/images/logo.png') }}" class="me-2" width="200px" alt="logo">
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navMenu">
                        <ul class="navbar-nav gap-4">
                            <li class="nav-item"><a href="/#about" class="nav-link">About</a></li>
                            <li class="nav-item"><a href="/#features" class="nav-link">Features</a></li>
                            <li class="nav-item"><a href="/#testimonial" class="nav-link">Testimonial</a></li>
                            {{-- <li class="nav-item"><a href="#faq" class="nav-link">FAQs</a></li> --}}
                            <li class="nav-item"><a href="/#contactus" class="nav-link">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="faded-circle" style="width: 350px; height: 350px; right: -80px; top: -80px;"></div>
                </div>

            </nav>

            <hr class="nav-divider" />

        </div>

    </section>

    <section class="container py-5">
        {!! $content !!}
    </section>

    {{-- footer --}}

    <footer class="footer-section">
        <div class="container py-5">
            <div class="row align-items-start footer-container">

                <div class="col-md-4 col-12 mb-4 mb-md-0 d-flex flex-column align-items-center">
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center mb-2">
                            <a class="navbar-brand d-flex align-items-center" href="/">
                                <img src="{{ asset('site/images/logo.png') }}" class="me-2" width="200px"
                                    alt="logo">
                            </a>
                        </div>
                        <p class="tagline m-0">Crafted Elegance,</p>
                        <p class="tagline m-0">Now Just a Tap Away.</p>
                    </div>
                </div>

                <div class="col-md-4 col-12 mb-4 mb-md-0 d-flex align-items-center flex-column nav-links">
                    <div class="d-flex flex-column">
                        <a href="/#about" class="footer-link">About us</a>
                        <a href="/#contactus" class="footer-link">Contact us</a>
                        <a href="/#features" class="footer-link">Features</a>
                        {{-- <a href="#faq" class="footer-link">FAQs</a> --}}
                        <a href="/#testimonial" class="footer-link">Testimonials</a>
                        <a href="/terms-and-condition" class="footer-link">Terms & Condition</a>
                        <a href="/privacy-policy" class="footer-link">Privacy Policy</a>
                    </div>
                </div>

                <div class="col-md-4 col-12 d-flex download-section">
                    <a href="https://play.google.com/store/apps/details?id=com.lekraInternational"
                                target="_blank" class="app-store-link mb-3">
                        <img src="{{ asset('site/images/playstore.svg') }}" width="130" style="cursor: pointer;">
                    </a>

                    <a  href="https://apps.apple.com/in/app/lekra/id6754777170" target="_blank" class="google-play-link">
                        <img src="{{ asset('site/images/appstore.svg') }}" width="130" style="cursor: pointer;">
                    </a>
                </div>

            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            swiper1 = new Swiper('.testimonials-slider:not(.swiper-reverse)', {
                loop: true,
                slidesPerView: 1,
                spaceBetween: 20,

                freeMode: {
                    enabled: true,
                    momentum: false,
                },

                autoplay: {
                    delay: 0,
                    disableOnInteraction: false,
                },

                breakpoints: {
                    0: {
                        slidesPerView: 1,
                        spaceBetween: 15,
                    },
                    576: {
                        slidesPerView: 1.2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 2.2,
                        spaceBetween: 25,
                    },
                    992: {
                        slidesPerView: 3.2,
                        spaceBetween: 30,
                    }
                },

                speed: 3500,
            });


            swiper2 = new Swiper('.testimonials-slider.swiper-reverse', {
                loop: true,
                slidesPerView: 3.2,
                spaceBetween: 30,

                freeMode: {
                    enabled: true,
                    momentum: false,
                },

                autoplay: {
                    delay: 0,
                    reverseDirection: true,
                    disableOnInteraction: false,
                },

                breakpoints: {
                    0: {
                        slidesPerView: 1,
                        spaceBetween: 15,
                    },
                    576: {
                        slidesPerView: 1.2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 2.2,
                        spaceBetween: 25,
                    },
                    992: {
                        slidesPerView: 3.2,
                        spaceBetween: 30,
                    }
                },

                speed: 3500,
            });

        });
    </script>
</body>

</html>
