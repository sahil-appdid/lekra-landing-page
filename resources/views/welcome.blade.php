<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lekra</title>
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

        <div class="background-strips"
            style="background: url('{{ asset('site/images/hero-background.svg') }}') no-repeat center center / contain;">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg py-3">
                <div class="container nav-contents">
                    <a class="navbar-brand d-flex align-items-center" href="#">
                        <img src="{{ asset('site/images/logo.png') }}" class="me-2" width="200px" alt="logo">
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navMenu">
                        <ul class="navbar-nav gap-4">
                            <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                            <li class="nav-item"><a href="#features" class="nav-link">Features</a></li>
                            <li class="nav-item"><a href="#testimonial" class="nav-link">Testimonial</a></li>
                            <li class="nav-item"><a href="#faq" class="nav-link">FAQs</a></li>
                            <li class="nav-item"><a href="#contactus" class="nav-link">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="faded-circle" style="width: 350px; height: 350px; right: -80px; top: -80px;"></div>
                </div>

            </nav>

            <hr class="nav-divider" />

            <!-- Hero Content -->
            <div class="container py-5 px-0">
                <div class="row">

                    <!-- Left text -->
                    <div class="col-md-6 mt-5 pt-5">
                        <h1 class="hero-title heading">
                            Expertly crafted to<br>
                            embody confidence and<br>
                            sophistication.
                        </h1>
                        <p class="hero-sub">
                            Explore premium leather goods, designed to elevate your everyday style.
                        </p>

                        <div class="d-flex gap-3 mt-4">
                            <a href="https://play.google.com/store/apps/details?id=com.lekraInternational"
                                target="_blank">
                                <img src="{{ asset('site/images/playstore.svg') }}" width="130"
                                    style="cursor: pointer;">
                            </a>

                            <a href="https://apps.apple.com/in/app/lekra/id6754777170" target="_blank">
                                <img src="{{ asset('site/images/appstore.svg') }}" width="130"
                                    style="cursor: pointer;">
                            </a>
                        </div>
                    </div>

                    <!-- Right mobile mockup -->
                    <div class="col-md-6 text-center mt-4" id="hero-right-section">
                        <div class="faded-circle" style="width: 100px; height: 100px; top: 50%; left: 55%;"></div>
                        <img src="{{ asset('site/images/hero-phone.svg') }}" class="hero-phone-img">
                    </div>

                </div>
            </div>
        </div>

    </section>

    {{-- descover key features section --}}

    <section class="discover-section py-5" id="features">
        <div class="container pt-5 px-0">



            <div class="section-head pb-5 mb-5">
                <span class="small-ornament left"></span>
                <h2 class="section-heading">Discover the key features</h2>
                <span class="small-ornament right"></span>
            </div>


            <div class="container">
                <div class="hero-row">
                    <div class="row best-seller-section">
                        <div class="faded-circle"
                            style="width: 350px; height: 350px; left: -150px; top: -150px; background-color: #f5ada9;">
                        </div>
                        <div class="col-lg-6">
                            <div class="phone-wrap">
                                <img src="{{ asset('site/images/best-seller-phone.svg') }}" alt="phone mockup"
                                    class="phone-img">
                                <div class="phone-badge" aria-hidden="true"></div>
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <div class="content-card pt-5">
                                <h3 class="small-heading">Our Best Sellers</h3>
                                <p class="lead">
                                    Discover the pieces our customers love the most. From premium handcrafted leather
                                    bags
                                    and
                                    wallets to timeless belts and accessories, our best sellers reflect the perfect
                                    blend of
                                    style, durability, and craftsmanship. Each item is made from high-quality genuine
                                    leather,
                                    designed to elevate your everyday look and stand the test of time.
                                </p>

                                <p class="lead" style="margin-bottom: 1.4rem;">
                                    Shop the favorites that have earned their spot at the top — because true quality
                                    never
                                    goes
                                    out of style.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- order and summary section --}}

            <div class="row hero-row">

                <div class="col-lg-6">
                    <div class="content-card pt-5">
                        <h3 class="small-heading">Orders & Summary</h3>
                        <p class="lead">
                            Stay on top of your purchases with ease. View your past and current orders, track shipping
                            updates, and manage returns — all in one place. Your order summary gives you a clear
                            overview of what you’ve bought, where it’s headed, and when it will arrive.
                        </p>

                        <p class="lead" style="margin-bottom: 1.4rem;">
                            Because a seamless shopping experience doesn’t end at checkout.
                        </p>

                        <div class="d-flex pt-2" style="gap:20px;">
                            <div class="image-text text-center">
                                <img src="{{ asset('site/images/order-summary-img1.svg') }}" alt="">
                                <p>mobile & Tab</p>
                            </div>

                            <div class="image-text text-center">
                                <img src="{{ asset('site/images/order-summary-img2.svg') }}" alt="">
                                <p>Gun Holster</p>
                            </div>

                            <div class="image-text text-center">
                                <img src="{{ asset('site/images/order-summary-img3.svg') }}" alt="">
                                <p>Gift Boxes</p>
                            </div>

                            <div class="image-text text-center">
                                <img src="{{ asset('site/images/order-summary-img4.svg') }}" alt="">
                                <p>Car Accesso</p>
                            </div>

                            <div class="image-text text-center">
                                <img src="{{ asset('site/images/order-summary-img1.svg') }}" alt="">
                                <p>Mobile & Tab</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="phone-wrap">
                        <img src="{{ asset('site/images/order-summary-phone.svg') }}" alt="phone mockup"
                            class="phone-img">
                        <div class="phone-badge" aria-hidden="true"></div>
                    </div>
                </div>
            </div>

            {{-- login via mobile section --}}

            <div class="row hero-row">

                <div class="col-lg-6">
                    <div class="phone-wrap">

                        <img src="{{ asset('site/images/login-via-phone.svg') }}" alt="phone mockup"
                            class="phone-img">

                        <div class="phone-badge" aria-hidden="true"></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="content-card pt-5">
                        <h3 class="small-heading">Log In via Mobile Number</h3>
                        <p class="lead">
                            Access your account quickly and securely using your mobile number. No need to remember
                            passwords — just enter your phone number, verify with an OTP, and you’re in. Enjoy a smooth
                            and safe login experience designed for your convenience.
                        </p>

                        <p class="lead" style="margin-bottom: 1.4rem;">
                            Shop the favorites that have earned their spot at the top — because true quality never goes
                            out of style.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    {{-- step into elegence section --}}

    <section class="step-into-elegence" id="about" style="background: url({{ asset('site/images/elegence.png') }}) right top / cover no-repeat, linear-gradient(90deg,rgba(246, 219, 173, 1) 0%, rgba(245, 213, 166, 1) 19%, rgba(241, 210, 160, 1) 35%, rgba(236, 200, 149, 1) 51%, rgba(228, 191, 137, 1) 64%, rgba(215, 179, 126, 1) 76%, rgba(208, 172, 120, 1) 88%, rgba(204, 169, 117, 1) 100%); padding-bottom:700px !important;">

        <div class="container py-4 px-0"  >
            <div class="row hero-row">

                <div class="col-lg-6">
                    <span class="section-heading elegence-step-text">STEP INTO</span><br>
                    <h3 class="section-heading elegence-text">ELEGANCE</h3>
                </div>

                <div class="col-lg-6">
                    <div class="content-card">
                        <p class="lead py-3">
                            Discover handcrafted leather goods designed for those who value quality, detail, and
                            enduring style. Each piece tells a story of tradition, craftsmanship, and sophistication.
                        </p>
                    </div>
                </div>

            </div>
        </div>

    </section>

    {{-- faq section --}}

    <section class="discover-section py-5" id="faq">
        <div class="container px-0">


            <div class="section-head">
                <span class="small-ornament left"></span>
                <h2 class="section-heading">FAQs</h2>
                <span class="small-ornament right"></span>
            </div>


            <div class="row hero-row">
                <div class="accordion" id="faqAccordion">

                    <div class="accordion-item faq-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What types of leather products do you offer?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We offer a curated collection of premium leather goods, including bags, wallets, belts,
                                accessories, and more — all handcrafted from genuine, high-quality leather.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item faq-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How do I place an order through the app?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Answer content for How do I place an order through the app?
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item faq-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Can I log in using my phone number?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Answer content for Can I log in using my phone number?
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item faq-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                How long will my order take to arrive?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Answer content for Can I log in using my phone number?
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item faq-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                What payment methods do you accept?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Answer content for Can I log in using my phone number?
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item faq-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Can I return or exchange an item?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Answer content for Can I log in using my phone number?
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- testimonial section --}}

    <section class="discover-section hero-row testimonials-section py-5" id="testimonial" style="background-color: rgba(119, 48, 27, 0.05);" >
        <div class="px-0" style="overflow: hidden;">

            <div class="section-head">
                <span class="small-ornament left"></span>
                <h2 class="section-heading">Testimonials</h2>
                <span class="small-ornament right"></span>
            </div>


            <div class="row hero-row">
                <div class="swiper testimonials-slider">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide p-2">
                            <div class="card testimonial-card h-100 shadow-sm border-0 testimonial-card-round-border">
                                <div class="card-body">
                                    <div class="rating mb-3">
                                        <span class="star">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star">&#9733;</span>
                                        <span class="star half-star">&#9733;</span>
                                    </div>
                                    <p class="card-text">"As a first-time mom, this app has been a lifesaver. Easy to
                                        use,
                                        informative, and it feels like a friend guiding me through each trimester.
                                        Thanks,
                                        team!"</p>
                                </div>
                                <div
                                    class="card-footer bg-white border-0 d-flex align-items-center justify-content-between testimonial-card-round-border">
                                    <div>
                                        <h6 class="mb-0 user-name">Gauri Patel</h6>
                                        <p class="text-muted small mb-0 user-role">Home Maker</p>
                                        <p class="text-muted small mb-0 user-location">New Jersey, USA</p>
                                    </div>
                                    <img src="path/to/gauri-patel.jpg" alt="Gauri Patel"
                                        class="user-avatar rounded-circle me-3">
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide p-2">
                            <div class="card testimonial-card h-100 shadow-sm border-0 testimonial-card-round-border">
                                <div class="card-body">
                                    <div class="rating mb-3">
                                        <span class="star">&#9733;</span><span class="star">&#9733;</span><span
                                            class="star">&#9733;</span><span class="star">&#9733;</span><span
                                            class="star">&#9733;</span>
                                    </div>
                                    <p class="card-text">"Impressed with the beta version! The design is sleek, and the
                                        daily insights have been spot on."</p>
                                </div>
                                <div
                                    class="card-footer bg-white border-0 d-flex align-items-center justify-content-between testimonial-card-round-border">
                                    <div>
                                        <h6 class="mb-0 user-name">Archita Vats</h6>
                                        <p class="text-muted small mb-0 user-role">Assistant Manager</p>
                                        <p class="text-muted small mb-0 user-location">Delhi, India</p>
                                    </div>
                                    <img src="path/to/archita-vats.jpg" alt="Archita Vats"
                                        class="user-avatar rounded-circle me-3">
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide p-2">
                            <div class="card testimonial-card h-100 shadow-sm border-0 testimonial-card-round-border">
                                <div class="card-body">
                                    <div class="rating mb-3">
                                        <span class="star">&#9733;</span><span class="star">&#9733;</span><span
                                            class="star">&#9733;</span><span class="star">&#9733;</span><span
                                            class="star half-star">&#9733;</span>
                                    </div>
                                    <p class="card-text">"A must-have for every expectant mother! The features are
                                        incredibly helpful, and the design is such a pleasure to touch. Thank you for
                                        making
                                        my pregnancy journey enjoyable!"</p>
                                </div>
                                <div
                                    class="card-footer bg-white border-0 d-flex align-items-center justify-content-between testimonial-card-round-border">
                                    <div>
                                        <h6 class="mb-0 user-name">Anmol Abrol</h6>
                                        <p class="text-muted small mb-0 user-role">Web Developer</p>
                                        <p class="text-muted small mb-0 user-location">Mumbai, India</p>
                                    </div>
                                    <img src="path/to/anmol-abrol.jpg" alt="Anmol Abrol"
                                        class="user-avatar rounded-circle me-3">
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide p-2">
                            <div class="card testimonial-card h-100 shadow-sm border-0 testimonial-card-round-border">
                                <div class="card-body">
                                    <div class="rating mb-3">
                                        <span class="star">&#9733;</span><span class="star">&#9733;</span><span
                                            class="star">&#9733;</span><span class="star">&#9733;</span><span
                                            class="star half-star">&#9733;</span>
                                    </div>
                                    <p class="card-text">"A must-have for every expectant mother! The features are
                                        incredibly helpful, and the design is such a pleasure to touch. Thank you for
                                        making
                                        my pregnancy journey enjoyable!"</p>
                                </div>
                                <div
                                    class="card-footer bg-white border-0 d-flex align-items-center justify-content-between testimonial-card-round-border">
                                    <div>
                                        <h6 class="mb-0 user-name">Anmol Abrol</h6>
                                        <p class="text-muted small mb-0 user-role">Web Developer</p>
                                        <p class="text-muted small mb-0 user-location">Mumbai, India</p>
                                    </div>
                                    <img src="path/to/anmol-abrol.jpg" alt="Anmol Abrol"
                                        class="user-avatar rounded-circle me-3">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- contact us section --}}

    <section class="discover-section py-5" id="contactus">
        <div class="container px-0">

            <div class="row hero-row">
                <div class="col-lg-6">

                    <div class="section-head">
                        <span class="small-ornament left"></span>
                        <h2 class="section-heading">Contact Us</h2>
                        <span class="small-ornament right"></span>
                    </div>

                    <p class="pt-3 text-center" style="font-size: 20px">
                        We are honoured to receive your comments and suggestions. Please feel free to contact us :
                    </p>

                    <div class="d-flex social-icons-container justify-content-center pt-2" style="gap:15px;">
                        <img src="{{ asset('site/images/appel.svg') }}" alt="">
                        <img src="{{ asset('site/images/google.svg') }}" alt="">
                        <img src="{{ asset('site/images/linkedin.svg') }}" alt="">
                        <img src="{{ asset('site/images/twitter.svg') }}" alt="">
                        <img src="{{ asset('site/images/facebook.svg') }}" alt="">
                    </div>

                </div>

                <div class="col-lg-6">
                    <div class="contact-form-container">
                        <form action="#" method="post" class="contact-form">
                            <div class="form-group">
                                <label for="name">Name<sup>*</sup></label>
                                <input type="text" name="name" id="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email<sup>*</sup></label>
                                <input type="email" name="email" id="email" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message<sup>*</sup></label>
                                <textarea type="text" name="message" id="message" required></textarea>
                            </div>
                            <input type="submit" value="Submit" class="submit-btn">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- footer --}}

    <footer class="footer-section">
        <div class="container py-5">
            <div class="row align-items-start">

                <div class="col-md-4 col-12 mb-4 mb-md-0 d-flex flex-column align-items-center">
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center mb-2">
                            <a class="navbar-brand d-flex align-items-center" href="#">
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
                        <a href="#" class="footer-link">About us</a>
                        <a href="#" class="footer-link">Contact us</a>
                        <a href="#" class="footer-link">Features</a>
                        <a href="#" class="footer-link">FAQs</a>
                        <a href="#" class="footer-link">Testimonials</a>
                        <a href="#" class="footer-link">Terms & Condition</a>
                        <a href="#" class="footer-link">Privacy Policy</a>
                    </div>
                </div>

                <div class="col-md-4 col-12 d-flex flex-column align-items-center download-section">
                    <a href="#" class="app-store-link mb-3">
                        <img src="{{ asset('site/images/appstore.svg') }}" width="130" style="cursor: pointer;">
                    </a>

                    <a href="#" class="google-play-link">
                        <img src="{{ asset('site/images/playstore.svg') }}" width="130" style="cursor: pointer;">
                    </a>
                </div>

            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.testimonials-slider', {
                direction: 'horizontal',
                loop: true,
                slidesPerView: 1.2,

                spaceBetween: 20,

                autoplay: {
                    delay: 1000,
                    disableOnInteraction: false,
                },

                breakpoints: {
                    768: {
                        slidesPerView: 2.2,
                        spaceBetween: 30
                    },

                    992: {
                        slidesPerView: 3.5,
                        spaceBetween: 30
                    }
                },
            });
        });
    </script>
</body>

</html>
