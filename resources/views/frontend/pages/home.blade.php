@extends('frontend.layouts.app')
@section('content')

    <!-- Main Sllider Start -->
        <section class="main-slider-three">
            <div class="main-slider__carousel owl-carousel owl-theme thm-owl__carousel"
                data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"], "margin": 0, "dots": true, "nav": true, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

                <div class="item main-slider-three__slide-1">
                    <div class="main-slider-three__bg"
                        style="background-image: url('{{asset('frontend/images/backgrounds/resolvers_banner1.webp')}}');">
                    </div><!-- /.slider-one__bg -->
                    <div class="container">
                        <div class="main-slider-three__content">
                            <p class="main-slider-three__sub-title">Resolver Enterprises Where Problem Resolves</p>
                            <h2 class="main-slider-three__title">Foreign Education<br>
                                <span>Consultancy</span></h2>
                            <div class="main-slider-three__btn-box">
                                <a href="contact.html" class="main-slider-three__btn-one thm-btn">Book Appointment</a>
                                <a href="about.html" class="main-slider-three__btn-two thm-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item main-slider-three__slide-2">
                    <div class="main-slider-three__bg"
                        style="background-image: url('{{asset('frontend/images/backgrounds/resolvers_banner2.webp')}}');">
                    </div><!-- /.slider-one__bg -->
                    <div class="container">
                        <div class="main-slider-three__content">
                            <p class="main-slider-three__sub-title">Empowering People and Student Around the world</p>
                            <h2 class="main-slider-three__title">Trusted Immigration <br>
                                <span>Consultancy</span></h2>
                            <div class="main-slider-three__btn-box">
                                <a href="contact.html" class="main-slider-three__btn-one thm-btn">Book Appointment</a>
                                <a href="about.html" class="main-slider-three__btn-two thm-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item main-slider-three__slide-3">
                    <div class="main-slider-three__bg"
                        style="background-image: url('{{asset('frontend/images/backgrounds/slider-3-3.jpg')}}');">
                    </div><!-- /.slider-one__bg -->
                    <div class="container">
                        <div class="main-slider-three__content">
                            <p class="main-slider-three__sub-title">Secure Immigration Permits and Visa</p>
                            <h2 class="main-slider-three__title">Visa & Immigration<br>
                                <span>Consultancy</span></h2>
                            <div class="main-slider-three__btn-box">
                                <a href="contact.html" class="main-slider-three__btn-one thm-btn">Book Appointment</a>
                                <a href="about.html" class="main-slider-three__btn-two thm-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--Main Sllider Start -->
        
        <!--feature One Start-->
        <section class="feature-one">
            <div class="container">
                <div class="row">
                    <!--feature One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="feature-one__single">
                            <div class="feature-one__inner">
                                <div class="feature-one__shape-1">
                                    <img src="{{asset('frontend/images/shapes/feature-one-shape-1.png')}}" alt="">
                                </div>
                                <div class="feature-one__img-one">
                                    <img src="{{asset('frontend/images/resources/feature-1-1.png')}}" alt="">
                                </div>
                                <p class="feature-one__sub-title">Online form</p>
                                <h3 class="feature-one__title"><a href="visa-details.html">Apply Online for <br> New
                                        Visa</a></h3>
                                <div class="feature-one__btn-box">
                                    <a href="visa-details.html" class="feature-one__btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--feature One Single End-->
                    <!--feature One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="feature-one__single">
                            <div class="feature-one__inner">
                                <div class="feature-one__shape-1">
                                    <img src="{{asset('frontend/images/shapes/feature-one-shape-1.png')}}" alt="">
                                </div>
                                <div class="feature-one__img-one feature-one__img-two">
                                    <img src="{{asset('frontend/images/resources/feature-1-2.png')}}" alt="">
                                </div>
                                <p class="feature-one__sub-title">Positive result</p>
                                <h3 class="feature-one__title"><a href="visa-details.html">Best Immigration <br>
                                        Process</a></h3>
                                <div class="feature-one__btn-box">
                                    <a href="visa-details.html" class="feature-one__btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--feature One Single End-->
                    <!--feature One Single Start-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="feature-one__single">
                            <div class="feature-one__inner">
                                <div class="feature-one__shape-1">
                                    <img src="{{asset('frontend/images/shapes/feature-one-shape-1.png')}}" alt="">
                                </div>
                                <div class="feature-one__img-one feature-one__img-three">
                                    <img src="{{asset('frontend/images/resources/feature-1-3.png')}}" alt="">
                                </div>
                                <p class="feature-one__sub-title">download form</p>
                                <h3 class="feature-one__title"><a href="visa-details.html">Documents Required <br> for
                                        Visa</a></h3>
                                <div class="feature-one__btn-box">
                                    <a href="visa-details.html" class="feature-one__btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--feature One Single End-->
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="feature-one__bottom">
                            <p class="feature-one__text">Providing a One-Stop Solution for all Your <a
                                    href="visa.html">Visa</a>
                                & <a href="visa-details.html">Immigration</a> Needs</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--feature One End-->

    <!--About Two Start -->
    <section class="about-two">
        <div class="about-two__shape-2 img-bounce">
            <img src="{{asset('frontend/images/shapes/about-two-shape-2.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-two__left">
                        <div class="about-two__img-box">
                            <div class="about-two__img">
                                <img src="{{asset('frontend/images/resources/about-two-img-1.jpg')}}" alt="">
                            </div>
                            <div class="about-two__experience">
                                <div class="about-two__experience-inner count-box">
                                    <h3 class="count-text" data-stop="5" data-speed="1500">00</h3>
                                    <p>Years of Experience</p>
                                    <div class="about-two__shape-1">
                                        <img src="{{asset('frontend/images/shapes/about-two-shape-1.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-two__right">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">About Resolvers Enterprises</span>
                                <div class="section-title__border-box"></div>
                            </div>
                            <h2 class="section-title__title">A Dynamic and Versatile Company.</h2>
                        </div>
                        <p class="about-two__text">The RESOLVER ENTERPRISES is an international Company registered with the Security & Exchange Commission 
                        of Pakistan & the Federal Board of Revenue. Our offices are situated in ITALY, KARACHI & ISLAMABAD. Comprise of PhD Scholars, Foreign 
                        Scholarship holders, Digital Marketing Experts & Lawyers, we take pride in offering legal, Immigration, Educational & IT-related services 
                        to our broad spectrum of National & International Clients.</p>
                        <ul class="about-two__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>Ready to Help <br> You in Immigration</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-check"></span>
                                </div>
                                <div class="text">
                                    <p>Works Fast & We’re
                                        <br> Cost Effective</p>
                                </div>
                            </li>
                        </ul>
                        <div class="about-two__progress">
                            <h4 class="about-two__progress-title">Construction</h4>
                            <div class="bar">
                                <div class="bar-inner count-bar" data-percent="90%">
                                    <div class="count-text">90%</div>
                                </div>
                            </div>
                        </div>
                        <div class="about-two__btn-and-call-box">
                            <div class="about-two__btn-box">
                                <a href="" class="about-two__btn thm-btn">Discover More</a>
                            </div>
                            <div class="about-two__call-box">
                                <div class="about-two__call-icon">
                                    <span class="fa fa-phone"></span>
                                </div>
                                <div class="about-two__call-content">
                                    <p>Have Question?</p>
                                    <h3><span>Free </span><a href="tel:+923029774305">+923029774305</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Two Start -->

    <!--Countries-Three Start-->
        <section class="countries-three">
            <div class="countries-three__shape-1 float-bob-y">
                <img src="{{asset('frontend/images/shapes/countries-three-shape-1.png')}}" alt="">
            </div>
            <div class="countries-three__shape-2 float-bob-y">
                <img src="{{asset('frontend/images/shapes/countries-three-shape-2.png')}}" alt="">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">Our countries list</span>
                        <div class="section-title__border-box"></div>
                    </div>
                    <h2 class="section-title__title">Select the Country of <br> Your Choice</h2>
                </div>
                <div class="countries-three__top">
                    <div class="countries-three__main-tab-box tabs-box">
                        <ul class="tab-buttons clearfix list-unstyled">
                            <li data-tab="#one" class="tab-btn">
                                <div class="img-box">
                                    <img src="{{asset('frontend/images/resources/flag-1-1.jpg')}}" alt="">
                                </div>
                            </li>
                            <li data-tab="#two" class="tab-btn active-btn">
                                <div class="img-box">
                                    <img src="{{asset('frontend/images/resources/flag-1-2.jpg')}}" alt="">
                                </div>
                            </li>
                            <li data-tab="#three" class="tab-btn">
                                <div class="img-box">
                                    <img src="{{asset('frontend/images/resources/flag-1-3.jpg')}}" alt="">
                                </div>
                            </li>
                            <li data-tab="#four" class="tab-btn">
                                <div class="img-box">
                                    <img src="{{asset('frontend/images/resources/flag-1-4.jpg')}}" alt="">
                                </div>
                            </li>
                            <li data-tab="#five" class="tab-btn">
                                <div class="img-box">
                                    <img src="{{asset('frontend/images/resources/flag-1-5.jpg')}}" alt="">
                                </div>
                            </li>
                            <li data-tab="#six" class="tab-btn">
                                <div class="img-box">
                                    <img src="{{asset('frontend/images/resources/flag-1-6.jpg')}}" alt="">
                                </div>
                            </li>
                            <li data-tab="#seven" class="tab-btn">
                                <div class="img-box">
                                    <img src="{{asset('frontend/images/resources/flag-1-7.jpg')}}" alt="">
                                </div>
                            </li>
                        </ul>
                        <div class="tabs-content">
                            <!--tab-->
                            <div class="tab" id="one">
                                <div class="countries-three__main-content-box">
                                    <div class="countries-three__title-box">
                                        <h4 class="countries-three__title">Germany</h4>
                                    </div>
                                    <p class="countries-three__text">There are many variations of passages the <br>
                                        majority dolore magna.</p>
                                    <div class="countries-three__arrow">
                                        <a href="#"><span class="icon-up-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                            <div class="tab active-tab" id="two">
                                <div class="countries-three__main-content-box">
                                    <div class="countries-three__title-box">
                                        <h4 class="countries-three__title">United Kingdom</h4>
                                    </div>
                                    <p class="countries-three__text">There are many variations of passages the <br>
                                        majority dolore magna.</p>
                                    <div class="countries-three__arrow">
                                        <a href="#"><span class="icon-up-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                            <div class="tab " id="three">
                                <div class="countries-three__main-content-box">
                                    <div class="countries-three__title-box">
                                        <h4 class="countries-three__title">Italy</h4>
                                    </div>
                                    <p class="countries-three__text">There are many variations of passages the <br>
                                        majority dolore magna.</p>
                                    <div class="countries-three__arrow">
                                        <a href="#"><span class="icon-up-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                            <div class="tab " id="four">
                                <div class="countries-three__main-content-box">
                                    <div class="countries-three__title-box">
                                        <h4 class="countries-three__title">Australia</h4>
                                    </div>
                                    <p class="countries-three__text">There are many variations of passages the <br>
                                        majority dolore magna.</p>
                                    <div class="countries-three__arrow">
                                        <a href="#"><span class="icon-up-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                            <div class="tab " id="five">
                                <div class="countries-three__main-content-box">
                                    <div class="countries-three__title-box">
                                        <h4 class="countries-three__title">Canada</h4>
                                    </div>
                                    <p class="countries-three__text">There are many variations of passages the <br>
                                        majority dolore magna.</p>
                                    <div class="countries-three__arrow">
                                        <a href="#"><span class="icon-up-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                            <div class="tab " id="six">
                                <div class="countries-three__main-content-box">
                                    <div class="countries-three__title-box">
                                        <h4 class="countries-three__title">United States</h4>
                                    </div>
                                    <p class="countries-three__text">There are many variations of passages the <br>
                                        majority dolore magna.</p>
                                    <div class="countries-three__arrow">
                                        <a href="#"><span class="icon-up-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--tab-->
                            <div class="tab " id="seven">
                                <div class="countries-three__main-content-box">
                                    <div class="countries-three__title-box">
                                        <h4 class="countries-three__title">Turkish</h4>
                                    </div>
                                    <p class="countries-three__text">There are many variations of passages the <br>
                                        majority dolore magna.</p>
                                    <div class="countries-three__arrow">
                                        <a href="#"><span class="icon-up-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="countries-three__bottom">
                    <div class="countries-three__bottom-shape">
                        <img src="assets/images/shapes/countries-three-bottom-shape.png" alt="">
                    </div>
                    <div class="countries-three__bottom-content">
                        <p class="countries-three__bottom-text">Need Visa & Immigration Consultation? <a
                                href="about.html">Send a
                                Free Request!</a></p>
                    </div>
                    <div class="countries-three__btn-box">
                        <a href="contact.html" class="countries-three__btn thm-btn">Book Appointment</a>
                    </div>
                </div>
            </div>
        </section>
        <!--Countries-Three End-->

    <!--coaching Two Start -->
    <section class="coaching-two">
        <div class="coaching-two__bg" style="background-image: url('{{asset('frontend/images/backgrounds/coaching-two-bg.jpg')}}');">
        </div>
        <div class="coaching-two__bg-2"
             style="background-image: url('{{asset('frontend/images/backgrounds/coaching-two-bg-2.png')}}');">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Coaching we offer</span>
                    <div class="section-title__border-box"></div>
                </div>
                <h2 class="section-title__title">Get the Best Trainings
                    <br> You Deserve</h2>
            </div>
            <div class="coaching-three__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                    "loop": true,
                    "autoplay": true,
                    "margin": 30,
                    "nav": true,
                    "dots": false,
                    "smartSpeed": 500,
                    "autoplayTimeout": 10000,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive": {
                        "0": {
                            "items": 1
                        },
                        "768": {
                            "items": 2
                        },
                        "992": {
                            "items": 3
                        },
                        "1200": {
                            "items": 3
                        }
                    }
                }'>
                    <!--Coaching Three Single Start-->
                    <div class="item">
                        <div class="coaching-three__single">
                            <div class="coaching-three__img">
                                <img src="{{asset('frontend/images/resources/coaching-three-1-1.jpg')}}" alt="">
                                <div class="coaching-three__img-content">
                                    <p>2 weeks preparation</p>
                                </div>
                                <div class="coaching-three__hover">
                                    <p>2 weeks preparation</p>
                                    <div class="coaching-three__arrow">
                                        <a href="coaching-details.html"><span class="icon-up-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="coaching-three__content">
                                <div class="coaching-three__title-box">
                                    <h3 class="coaching-three__title"><a href="coaching-details.html">OET Coaching</a>
                                    </h3>
                                </div>
                                <p class="coaching-three__text">There are many variations of passages the majority
                                    dolore magna.</p>
                            </div>
                        </div>
                    </div>
                    <!--Coaching Three Single End-->
                    <!--Coaching Three Single Start-->
                    <div class="item">
                        <div class="coaching-three__single">
                            <div class="coaching-three__img">
                                <img src="{{asset('frontend/images/resources/coaching-three-1-2.jpg')}}" alt="">
                                <div class="coaching-three__img-content">
                                    <p>2 weeks preparation</p>
                                </div>
                                <div class="coaching-three__hover">
                                    <p>2 weeks preparation</p>
                                    <div class="coaching-three__arrow">
                                        <a href="coaching-details.html"><span class="icon-up-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="coaching-three__content">
                                <div class="coaching-three__title-box">
                                    <h3 class="coaching-three__title"><a href="coaching-details.html">IELTS Coaching</a>
                                    </h3>
                                </div>
                                <p class="coaching-three__text">There are many variations of passages the majority
                                    dolore magna.</p>
                            </div>
                        </div>
                    </div>
                    <!--Coaching Three Single End-->
                    <!--Coaching Three Single Start-->
                    <div class="item">
                        <div class="coaching-three__single">
                            <div class="coaching-three__img">
                                <img src="{{asset('frontend/images/resources/coaching-three-1-2.jpg')}}" alt="">
                                <div class="coaching-three__img-content">
                                    <p>2 weeks preparation</p>
                                </div>
                                <div class="coaching-three__hover">
                                    <p>2 weeks preparation</p>
                                    <div class="coaching-three__arrow">
                                        <a href="coaching-details.html"><span class="icon-up-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="coaching-three__content">
                                <div class="coaching-three__title-box">
                                    <h3 class="coaching-three__title"><a href="coaching-details.html">IMATE Coaching</a>
                                    </h3>
                                </div>
                                <p class="coaching-three__text">There are many variations of passages the majority
                                    dolore magna.</p>
                            </div>
                        </div>
                    </div>
                    <!--Coaching Three Single End-->
                    <!--Coaching Three Single Start-->
                    <div class="item">
                        <div class="coaching-three__single">
                            <div class="coaching-three__img">
                                <img src="{{asset('frontend/images/resources/coaching-three-1-3.jpg')}}" alt="">
                                <div class="coaching-three__img-content">
                                    <p>2 weeks preparation</p>
                                </div>
                                <div class="coaching-three__hover">
                                    <p>2 weeks preparation</p>
                                    <div class="coaching-three__arrow">
                                        <a href="coaching-details.html"><span class="icon-up-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="coaching-three__content">
                                <div class="coaching-three__title-box">
                                    <h3 class="coaching-three__title"><a href="coaching-details.html">TOFEL Coaching</a>
                                    </h3>
                                </div>
                                <p class="coaching-three__text">There are many variations of passages the majority
                                    dolore magna.</p>
                            </div>
                        </div>
                    </div>
                    <!--Coaching Three Single End-->
                </div>
        </div>
    </section>

    <!--FAQ One Start -->
    <section class="faq-one">
        <div class="faq-one__shape-1 float-bob-y">
            <img src="{{asset('frontend/images/shapes/faq-one-shape-1.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="faq-one__left">
                        <div class="faq-one__bg"
                             style="background-image: url('{{asset('frontend/images/backgrounds/faq-one-bg.jpg')}}');"></div>
                        <div class="faq-one__inner">
                            <div class="faq-one__icon">
                                <span class="icon-deal"></span>
                            </div>
                            <h3 class="faq-one__title">Most Trusted Visa
                                & Immigration
                                Agency!</h3>
                            <div class="faq-one__btn-box">
                                <a href="" class="faq-one__btn thm-btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="faq-one__right">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">common faqs</span>
                                <div class="section-title__border-box"></div>
                            </div>
                            <h2 class="section-title__title">Frequently Asked
                                Questions?</h2>
                        </div>
                        <div class="faq-one__faq-box">
                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>What is a Direct Immigration Services?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>There are many variations of passages the majority have suffered
                                                alteration in some fo injected humour, or randomised words
                                                believable.
                                            </p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion active">
                                    <div class="accrodion-title">
                                        <h4>What are the Benefits of Visa Consultancy?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>There are many variations of passages the majority have suffered
                                                alteration in some fo injected humour, or randomised words
                                                believable.
                                            </p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>What We should do If our Visa get Rejection?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>There are many variations of passages the majority have suffered
                                                alteration in some fo injected humour, or randomised words
                                                believable.
                                            </p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>Which Documents are Required to Apply Visa Online?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>There are many variations of passages the majority have suffered
                                                alteration in some fo injected humour, or randomised words
                                                believable.
                                            </p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FAQ One End-->

    <!--Services Two Start -->
    <section class="services-two">
        <div class="section-title text-center">
            <div class="section-title__tagline-box">
                <span class="section-title__tagline">our Visa categories</span>
                <div class="section-title__border-box"></div>
            </div>
            <h2 class="section-title__title">We Offers Citizenship & <br>
                Immigration Services</h2>
        </div>
        <div class="services-two__wrap">
            <div class="services-two__shape-1"
                 style="background-image: url('{{asset('frontend/images/shapes/services-two-shape-1.png')}}');"></div>
            <div class="container">
                <div class="services-two__inner">
                    <div class="services-two__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                            "loop": true,
                            "autoplay": true,
                            "margin": 30,
                            "nav": true,
                            "dots": false,
                            "smartSpeed": 500,
                            "autoplayTimeout": 10000,
                            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                            "responsive": {
                                "0": {
                                    "items": 1
                                },
                                "768": {
                                    "items": 2
                                },
                                "992": {
                                    "items": 3
                                },
                                "1200": {
                                    "items": 3
                                }
                            }
                        }'>
                        <!--Services Two Single End -->
                        <div class="item">
                            <div class="services-two__single">
                                <div class="services-two__single-inner">
                                    <div class="services-two__content">
                                        <h3 class="services-two__title"><a href="">Tourist Visa</a>
                                        </h3>
                                        <p class="services-two__text-1">Fusce pretium sem eget mattis.</p>
                                    </div>
                                    <div class="services-two__img-box">
                                        <div class="services-two__icon">
                                            <span class="icon-tourist"></span>
                                        </div>
                                        <div class="services-two__img">
                                            <img src="{{asset('frontend/images/services/services-2-1.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="services-two__hover-content-box">
                                        <div class="services-two__hover-bg"
                                             style="background-image: url('{{asset('frontend/images/backgrounds/services-two-hover-bg.jpg')}}');">
                                        </div>
                                        <div class="services-two__hover-content">
                                            <h3 class="services-two__hover-title"><a
                                                    href="">Tourist Visa</a></h3>
                                            <p class="services-two__hover-text">Fusce pretium sem eget mattis <br>
                                                one priority strive to deliver.</p>
                                        </div>
                                        <div class="services-two__hover-icon">
                                            <span class="icon-tourist"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Services Two Single End -->
                        <!--Services Two Single End -->
                        <div class="item">
                            <div class="services-two__single">
                                <div class="services-two__single-inner">
                                    <div class="services-two__content">
                                        <h3 class="services-two__title"><a href="">Business
                                                Visa</a></h3>
                                        <p class="services-two__text-1">Fusce pretium sem eget mattis.</p>
                                    </div>
                                    <div class="services-two__img-box">
                                        <div class="services-two__icon">
                                            <span class="icon-consulting"></span>
                                        </div>
                                        <div class="services-two__img">
                                            <img src="{{asset('frontend/images/services/services-2-2.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="services-two__hover-content-box">
                                        <div class="services-two__hover-bg"
                                             style="background-image: url('{{asset('frontend/images/backgrounds/services-two-hover-bg.jpg')}}');">
                                        </div>
                                        <div class="services-two__hover-content">
                                            <h3 class="services-two__hover-title"><a
                                                    href="">Business Visa</a></h3>
                                            <p class="services-two__hover-text">Fusce pretium sem eget mattis <br>
                                                one priority strive to deliver.</p>
                                        </div>
                                        <div class="services-two__hover-icon">
                                            <span class="icon-consulting"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Services Two Single End -->
                        <!--Services Two Single End -->
                        <div class="item">
                            <div class="services-two__single">
                                <div class="services-two__single-inner">
                                    <div class="services-two__content">
                                        <h3 class="services-two__title"><a href="">Student Visa</a>
                                        </h3>
                                        <p class="services-two__text-1">Fusce pretium sem eget mattis.</p>
                                    </div>
                                    <div class="services-two__img-box">
                                        <div class="services-two__icon">
                                            <span class="icon-graduating-student"></span>
                                        </div>
                                        <div class="services-two__img">
                                            <img src="{{asset('frontend/images/services/services-2-3.jpg')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="services-two__hover-content-box">
                                        <div class="services-two__hover-bg"
                                             style="background-image: url('{{asset('frontend/images/backgrounds/services-two-hover-bg.jpg')}}');">
                                        </div>
                                        <div class="services-two__hover-content">
                                            <h3 class="services-two__hover-title"><a
                                                    href="">Student Visa</a></h3>
                                            <p class="services-two__hover-text">Fusce pretium sem eget mattis <br>
                                                one priority strive to deliver.</p>
                                        </div>
                                        <div class="services-two__hover-icon">
                                            <span class="icon-graduating-student"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Services Two Single End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Services Two End -->

<!--coaching Two End -->
    
       <!--Excellence One Start -->
    <section class="excellence-one">
        <div class="container">
            <div class="excellence-one__inner">
                <div class="excellence-one__bg"
                     style="background-image: url('{{asset('frontend/images/backgrounds/excellence-one-bg.png')}}');"></div>
                <div class="excellence-one__shape-1 img-bounce">
                    <img src="{{asset('frontend/images/shapes/excellence-one-shape-1.png')}}" alt="">
                </div>
                <div class="excellence-one__shape-2 float-bob-x">
                    <img src="{{asset('frontend/images/shapes/excellence-one-shape-2.png')}}" alt="">
                </div>
                <h3 class="excellence-one__title">Excellence
                    <br> in Visa & Immigration</h3>
                <div class="excellence-one__btn-box">
                    <a href="" class="excellence-one__btn thm-btn">Apply for Visa</a>
                </div>
            </div>
        </div>
    </section>
    <!--Excellence One End -->

    <!--Process One Start-->
    <section class="process-one">
        <div class="process-one__bg" style="background-image: url('{{asset('frontend/images/backgrounds/process-one-bg.png')}}');">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">3 easy process steps</span>
                    <div class="section-title__border-box"></div>
                </div>
                <h2 class="section-title__title">Get your Visa in 03 Easy
                    <br> & Simple Steps</h2>
            </div>
            <div class="row">
                <!--Process One Single Start-->
                <div class="col-xl-4 col-lg-4">
                    <div class="process-one__single">
                        <div class="process-one__icon-box">
                            <div class="process-one__shape-1">
                                <img src="{{asset('frontend/images/shapes/process-one-shape-1.png')}}" alt="">
                                <div class="process-one__shape-3">
                                    <img src="{{asset('frontend/images/shapes/process-one-shape-3.png')}}" alt="">
                                </div>
                            </div>
                            <div class="process-one__shape-2">
                                <img src="{{asset('frontend/images/shapes/process-one-shape-2.png')}}" alt="">
                            </div>
                            <div class="process-one__icon">
                                <span class="icon-success-1"></span>
                            </div>
                        </div>
                        <div class="process-one__content">
                            <div class="process-one__step">
                                <p>Step</p>
                                <div class="process-one__count"></div>
                            </div>
                            <h3 class="process-one__title"><a href="">Complete
                                    <br> Online Form</a></h3>
                            <p class="process-one__text">Risus commodo viverra lacus maecenas accumsan vel</p>
                        </div>
                    </div>
                </div>
                <!--Process One Single End-->
                <!--Process One Single Start-->
                <div class="col-xl-4 col-lg-4">
                    <div class="process-one__single">
                        <div class="process-one__icon-box">
                            <div class="process-one__shape-1">
                                <img src="{{asset('frontend/images/shapes/process-one-shape-1.png')}}" alt="">
                                <div class="process-one__shape-3">
                                    <img src="{{asset('frontend/images/shapes/process-one-shape-3.png')}}" alt="">
                                </div>
                            </div>
                            <div class="process-one__shape-2">
                                <img src="{{asset('frontend/images/shapes/process-one-shape-2.png')}}" alt="">
                            </div>
                            <div class="process-one__icon">
                                <span class="icon-document"></span>
                            </div>
                        </div>
                        <div class="process-one__content">
                            <div class="process-one__step">
                                <p>Step</p>
                                <div class="process-one__count"></div>
                            </div>
                            <h3 class="process-one__title"><a href="">Documents
                                    <br> and Payments</a></h3>
                            <p class="process-one__text">Risus commodo viverra lacus maecenas accumsan vel</p>
                        </div>
                    </div>
                </div>
                <!--Process One Single End-->
                <!--Process One Single Start-->
                <div class="col-xl-4 col-lg-4">
                    <div class="process-one__single">
                        <div class="process-one__icon-box">
                            <div class="process-one__shape-1">
                                <img src="{{asset('frontend/images/shapes/process-one-shape-1.png')}}" alt="">
                                <div class="process-one__shape-3">
                                    <img src="{{asset('frontend/images/shapes/process-one-shape-3.png')}}" alt="">
                                </div>
                            </div>
                            <div class="process-one__shape-2">
                                <img src="{{asset('frontend/images/shapes/process-one-shape-2.png')}}" alt="">
                            </div>
                            <div class="process-one__icon">
                                <span class="icon-visa"></span>
                            </div>
                        </div>
                        <div class="process-one__content">
                            <div class="process-one__step">
                                <p>Step</p>
                                <div class="process-one__count"></div>
                            </div>
                            <h3 class="process-one__title"><a href="">Receive now
                                    <br> your Visa</a></h3>
                            <p class="process-one__text">Risus commodo viverra lacus maecenas accumsan vel</p>
                        </div>
                    </div>
                </div>
                <!--Process One Single End-->
            </div>
        </div>
    </section>
    <!--Process One End-->

    <!--Testimonial Two Start-->
    <section class="testimonial-one">
            <div class="container">
                <div class="testimonial-one__wrap">
                    <div class="testimonial-one__bg"
                        style="background-image: url('{{asset('frontend/images/backgrounds/testimonial-one-bg.png')}}');"></div>
                    <div class="testimonial-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                        "loop": true,
                        "autoplay": true,
                        "margin": 30,
                        "nav": true,
                        "dots": false,
                        "smartSpeed": 500,
                        "autoplayTimeout": 10000,
                        "navText": ["<span class=\"icon-right-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                        "responsive": {
                            "0": {
                                "items": 1
                            },
                            "768": {
                                "items": 1
                            },
                            "992": {
                                "items": 1
                            },
                            "1200": {
                                "items": 1
                            }
                        }
                    }'>
                        <!--Testimonial one Single Start-->
                        <div class="item">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__img-1">
                                    <img src="{{asset('frontend/images/testimonial/testimonial-one-img-1.png')}}" alt="">
                                    <div class="testimonial-one__shape-1">
                                        <img src="{{asset('frontend/images/shapes/testimonial-one-shape-1.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-one__inner">
                                    <div class="testimonial-one__icon-and-ratting">
                                        <div class="testimonial-one__icon">
                                            <img src="{{asset('frontend/images/icon/testimonial-one-chatting-icon.png')}}" alt="">
                                        </div>
                                        <div class="testimonial-one__ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="testimonial-one__text">Thank you for making the process of getting a
                                        Canada
                                        visa
                                        so easy. Your phone and email response was prompt and courteous. I received my
                                        passport
                                        with the visa one day earlier than I had anticipated.</p>
                                    <div class="testimonial-one__client-name-box">
                                        <h4 class="testimonial-one__client-name">Michale Albert</h4>
                                        <p class="testimonial-one__client-sub-title">Happy Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial one Single End-->
                        <!--Testimonial one Single Start-->
                        <div class="item">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__img-1">
                                    <img src="{{asset('frontend/images/testimonial/testimonial-one-img-2.png')}}" alt="">
                                    <div class="testimonial-one__shape-1">
                                        <img src="{{asset('frontend/images/shapes/testimonial-one-shape-1.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-one__inner">
                                    <div class="testimonial-one__icon-and-ratting">
                                        <div class="testimonial-one__icon">
                                            <img src="{{asset('frontend/images/icon/testimonial-one-chatting-icon.png')}}" alt="">
                                        </div>
                                        <div class="testimonial-one__ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="testimonial-one__text">Thank you for making the process of getting a
                                        Canada
                                        visa
                                        so easy. Your phone and email response was prompt and courteous. I received my
                                        passport
                                        with the visa one day earlier than I had anticipated.</p>
                                    <div class="testimonial-one__client-name-box">
                                        <h4 class="testimonial-one__client-name">Jessica Brown</h4>
                                        <p class="testimonial-one__client-sub-title">Happy Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial one Single End-->
                        <!--Testimonial one Single Start-->
                        <div class="item">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__img-1">
                                    <img src="{{asset('frontend/images/testimonial/testimonial-one-img-3.png')}}" alt="">
                                    <div class="testimonial-one__shape-1">
                                        <img src="{{asset('frontend/images/shapes/testimonial-one-shape-1.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-one__inner">
                                    <div class="testimonial-one__icon-and-ratting">
                                        <div class="testimonial-one__icon">
                                            <img src="{{asset('frontend/images/icon/testimonial-one-chatting-icon.png')}}" alt="">
                                        </div>
                                        <div class="testimonial-one__ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="testimonial-one__text">Thank you for making the process of getting a
                                        Canada
                                        visa
                                        so easy. Your phone and email response was prompt and courteous. I received my
                                        passport
                                        with the visa one day earlier than I had anticipated.</p>
                                    <div class="testimonial-one__client-name-box">
                                        <h4 class="testimonial-one__client-name">Sarah Albert</h4>
                                        <p class="testimonial-one__client-sub-title">Happy Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial one Single End-->
                        <!--Testimonial one Single Start-->
                        <div class="item">
                            <div class="testimonial-one__single">
                                <div class="testimonial-one__img-1">
                                    <img src="{{asset('frontend/images/testimonial/testimonial-one-img-4.png')}}" alt="">
                                    <div class="testimonial-one__shape-1">
                                        <img src="{{asset('frontend/images/shapes/testimonial-one-shape-1.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="testimonial-one__inner">
                                    <div class="testimonial-one__icon-and-ratting">
                                        <div class="testimonial-one__icon">
                                            <img src="{{asset('frontend/images/icon/testimonial-one-chatting-icon.png')}}" alt="">
                                        </div>
                                        <div class="testimonial-one__ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <p class="testimonial-one__text">Thank you for making the process of getting a
                                        Canada
                                        visa
                                        so easy. Your phone and email response was prompt and courteous. I received my
                                        passport
                                        with the visa one day earlier than I had anticipated.</p>
                                    <div class="testimonial-one__client-name-box">
                                        <h4 class="testimonial-one__client-name">Christine Eve</h4>
                                        <p class="testimonial-one__client-sub-title">Happy Customer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Testimonial one Single End-->
                    </div>
                </div>
            </div>
        </section>
    <!--Testimonial Two End-->

    <!--Awards One Start-->
    <section class="awards-one">
        <div class="awards-one__shape-2">
            <img src="{{asset('frontend/images/shapes/awards-one-shape-2.png')}}" alt="">
        </div>
        <div class="awards-one__shape-3">
            <img src="{{asset('frontend/images/shapes/awards-one-shape-3.png')}}" alt="">
        </div>
        <div class="awards-one__shape-4">
            <img src="{{asset('frontend/images/shapes/awards-one-shape-4.png')}}" alt="">
        </div>
        <div class="awards-one__shape-5 img-bounce">
            <img src="{{asset('frontend/images/shapes/awards-one-shape-8.png')}}" alt="">
        </div>
        <div class="awards-one__shape-6 float-bob-y">
            <img src="{{asset('frontend/images/shapes/awards-one-shape-6.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="awards-one__left">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">They trust Resolvers Enterprises</span>
                                <div class="section-title__border-box"></div>
                            </div>
                            <h2 class="section-title__title">Our Agency Awards &
                                <br> Achievements</h2>
                        </div>
                        <div class="awards-one__text-and-points-box">
                            <p class="awards-one__text count-box">We’re Trusted by <span class="count-text"
                                                                                         data-stop="68000" data-speed="1500">00</span> Satisfied Clients
                                Across the World for Best Visa & Immigration</p>
                            <ul class="awards-one__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Professional Consultants</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>100% Guarantee Approvals</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-check"></span>
                                    </div>
                                    <div class="text">
                                        <p>Affordable Fees</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="awards-one__right">
                        <div class="awards-one__shape-7">
                            <img src="{{asset('frontend/images/shapes/awards-one-shape-7.png')}}" alt="">
                        </div>
                        <div class="row">
                            <!--Awards One Single Start-->
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="awards-one__single">
                                    <div class="awards-one__shape-1">
                                        <img src="{{asset('frontend/images/shapes/awards-one-shape-1.png')}}" alt="">
                                    </div>
                                    <p class="awards-one__year">2020
                                        <br> Award</p>
                                    <div class="awards-one__img">
                                        <img src="{{asset('frontend/images/resources/awards-1-4.png')}}" alt="">
                                    </div>
                                    <h3 class="awards-one__title"><a href="#">Best <br>
                                            Consulting</a></h3>
                                </div>
                            </div>
                            <!--Awards One Single End-->
                            <!--Awards One Single Start-->
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="awards-one__single">
                                    <div class="awards-one__shape-1">
                                        <img src="{{asset('frontend/images/shapes/awards-one-shape-1.png')}}" alt="">
                                    </div>
                                    <p class="awards-one__year">2022
                                        <br> Award</p>
                                    <div class="awards-one__img">
                                        <img src="{{asset('frontend/images/resources/awards-1-5.png')}}" alt="">
                                    </div>
                                    <h3 class="awards-one__title"><a href="#">Visa <br>
                                            Guarantee</a></h3>
                                </div>
                            </div>
                            <!--Awards One Single End-->
                            <!--Awards One Single Start-->
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="awards-one__single">
                                    <div class="awards-one__shape-1">
                                        <img src="{{asset('frontend/images/shapes/awards-one-shape-1.png')}}" alt="">
                                    </div>
                                    <p class="awards-one__year">2018
                                        <br> Award</p>
                                    <div class="awards-one__img">
                                        <img src="{{asset('frontend/images/resources/awards-1-6.png')}}" alt="">
                                    </div>
                                    <h3 class="awards-one__title"><a href="#">Quality <br>
                                            Management</a></h3>
                                </div>
                            </div>
                            <!--Awards One Single End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Awards One End-->

    <!--Blog Two Start-->
    <section class="blog-one">
            <div class="container">
                <div class="section-title text-center">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">NEWS & UPDATES</span>
                        <div class="section-title__border-box"></div>
                    </div>
                    <h2 class="section-title__title">Latest News & Articles
                        <br> From the Blog</h2>
                </div>
                <div class="row">
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img-box">
                                <div class="blog-one__img">
                                    <img src="{{asset('frontend/images/blog/blog-1-9.png')}}" alt="">
                                    <a href="blog-details.html">
                                        <span class="blog-one__plus"></span>
                                    </a>
                                </div>
                                <div class="blog-one__date">
                                    <p>01 <span>Aug</span></p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <div class="blog-one__tag-and-user">
                                    <div class="blog-one__tag">
                                        <p>Hasham's Blog</p>
                                    </div>
                                    <div class="blog-one__user">
                                        <div class="img">
                                            <img src="{{asset('frontend/images/blog/blog-one-user-img-1.jpg')}}" alt="">
                                        </div>
                                        <div class="text">
                                            <p>Hasham Bin Tahir</p>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="blog-one__title"><a href="blog-details.html">Indian Belligerency on Kashmir Continues</a></h3>
                                <div class="blog-one__comment-and-arrow">
                                    <div class="blog-one__comment">
                                        <p><span class="fas fa-comments"></span> 02 Comments</p>
                                    </div>
                                    <div class="blog-one__arrow">
                                        <a href="blog-details.html"><i class="icon-up-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img-box">
                                <div class="blog-one__img">
                                    <img src="{{asset('frontend/images/blog/blog-1-7.png')}}" alt="">
                                    <a href="blog-details.html">
                                        <span class="blog-one__plus"></span>
                                    </a>
                                </div>
                                <div class="blog-one__date">
                                    <p>02 <span>Aug</span></p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <div class="blog-one__tag-and-user">
                                    <div class="blog-one__tag">
                                        <p>Working Visa</p>
                                    </div>
                                    <div class="blog-one__user">
                                        <div class="img">
                                            <img src="{{asset('frontend/images/blog/blog-one-user-img-1.jpg')}}" alt="">
                                        </div>
                                        <div class="text">
                                            <p>Hasham Bin Tahir</p>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="blog-one__title"><a href="blog-details.html">Country To Offer Point-Based Immigrations</a></h3>
                                <div class="blog-one__comment-and-arrow">
                                    <div class="blog-one__comment">
                                        <p><span class="fas fa-comments"></span> 02 Comments</p>
                                    </div>
                                    <div class="blog-one__arrow">
                                        <a href="blog-details.html"><i class="icon-up-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img-box">
                                <div class="blog-one__img">
                                    <img src="{{asset('frontend/images/blog/blog-1-8.png')}}" alt="">
                                    <a href="blog-details.html">
                                        <span class="blog-one__plus"></span>
                                    </a>
                                </div>
                                <div class="blog-one__date">
                                    <p>03 <span>Aug</span></p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <div class="blog-one__tag-and-user">
                                    <div class="blog-one__tag">
                                        <p>Study Visa</p>
                                    </div>
                                    <div class="blog-one__user">
                                        <div class="img">
                                            <img src="{{asset('frontend/images/blog/blog-one-user-img-1.jpg')}}" alt="">
                                        </div>
                                        <div class="text">
                                            <p>by Hasham Bin Tahir</p>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="blog-one__title"><a href="blog-details.html">Covid-19 And Its Impact On USA Immigration</a></h3>
                                <div class="blog-one__comment-and-arrow">
                                    <div class="blog-one__comment">
                                        <p><span class="fas fa-comments"></span> 02 Comments</p>
                                    </div>
                                    <div class="blog-one__arrow">
                                        <a href="blog-details.html"><i class="icon-up-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                </div>
            </div>
        </section>
    <!--Blog Two End-->

    <!--Contact Two Start-->
    <section class="contact-three">
            <div class="contact-three__bg"
                style="background-image: url('{{asset('frontend/images/backgrounds/contact-three-bg.png')}}');"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7">
                        <div class="contact-three__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">Contact with us</span>
                                    <div class="section-title__border-box"></div>
                                </div>
                                <h2 class="section-title__title">Contact Us for Visa <br>
                                    & Immigration</h2>
                            </div>
                            <div class="contact-three__main-tab-box tabs-box">
                                <ul class="tab-buttons clearfix list-unstyled">
                                    <li data-tab="#canada" class="tab-btn active-btn"><span>Islamabad</span></li>
                                    <li data-tab="#australia" class="tab-btn"><span>Karachi</span></li>
                                    <li data-tab="#dubai" class="tab-btn"><span>Dubai</span></li>
                                </ul>
                                <div class="tabs-content">
                                    <!--tab-->
                                    <div class="tab active-tab" id="canada">
                                        <div class="contact-three__tab-content-inner">
                                            <p class="contact-three__tab-content-text">There are many variations of
                                                passages the simply free text available in the market majority dolore
                                                magna.</p>
                                            <div class="contact-three__contact-details">
                                                <div class="contact-three__contact-details-img">
                                                    <img src="{{asset('frontend/images/resources/islambad.png')}}" alt="">
                                                </div>
                                                <ul class="list-unstyled contact-three__contact-list">
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>2nd Floor FL3/11 Gulshan-E-Iqbal <br> Block 5 Near Nipa Chorangi</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fas fa-envelope"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p><a
                                                                    href="mailto:info@resolverenterprises.com">info@resolverenterprises.com</a>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fas fa-phone"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p><a href="+923029774305">+923029774305</a></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab-->
                                    <div class="tab " id="australia">
                                        <div class="contact-three__tab-content-inner">
                                            <p class="contact-three__tab-content-text">There are many variations of
                                                passages the simply free text available in the market majority dolore
                                                magna.</p>
                                            <div class="contact-three__contact-details">
                                                <div class="contact-three__contact-details-img">
                                                    <img src="{{asset('frontend/images/resources/karachi.png')}}" alt="">
                                                </div>
                                                <ul class="list-unstyled contact-three__contact-list">
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>2nd Floor FL3/11 Gulshan-E-Iqbal <br> Block 5 Near Nipa Chorangi</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fas fa-envelope"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p><a
                                                                    href="mailto:info@resolverenterprises.com">info@resolverenterprises.com</a>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fas fa-phone"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p><a href="tel:+923029774305">+923029774305</a></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab-->
                                    <div class="tab " id="dubai">
                                        <div class="contact-three__tab-content-inner">
                                            <p class="contact-three__tab-content-text">There are many variations of
                                                passages the simply free text available in the market majority dolore
                                                magna.</p>
                                            <div class="contact-three__contact-details">
                                                <div class="contact-three__contact-details-img">
                                                    <img src="{{asset('frontend/images/resources/dubai.png')}}" alt="">
                                                </div>
                                                <ul class="list-unstyled contact-three__contact-list">
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fas fa-map-marker-alt"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p>2nd Floor FL3/11 Gulshan-E-Iqbal <br> Block 5 Near Nipa Chorangi</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fas fa-envelope"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p><a
                                                                    href="mailto:info@resolverenterprises.com">info@resolverenterprises.com</a>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">
                                                            <i class="fas fa-phone"></i>
                                                        </div>
                                                        <div class="text">
                                                            <p><a href="tel:923029774305">+923029774305</a></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <div class="contact-three__right">
                            <div class="contact-three__form-box">
                                <div class="contact-three__form-top">
                                    <p>Request a Appointment</p>
                                </div>
                                <form action="https://bracketweb.com/treck-html/main-html/assets/inc/sendemail.php"
                                    class="contact-three__form contact-form-validated" novalidate="novalidate">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="contact-three__form-input-box">
                                                <input type="text" placeholder="Full Name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                            <div class="contact-three__form-input-box">
                                                <input type="email" placeholder="Email Address" name="email">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="contact-three__form-input-box">
                                                <input type="text" placeholder="Phone" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="contact-three__form-input-box">
                                                <select class="selectpicker" aria-label="Default select example">
                                                    <option selected>Visa Type</option>
                                                    <option value="1">Tourist Visa</option>
                                                    <option value="2">Business Visa</option>
                                                    <option value="3">Student Visa</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="contact-three__form-input-box text-message-box">
                                                <textarea name="message" placeholder="Write a Message"></textarea>
                                            </div>
                                            <div class="contact-three__form-btn-box">
                                                <button type="submit" class="thm-btn contact-three__form-btn">Send a
                                                    Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="result"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--Contact Two End-->

    <!--Brand Two Start-->
    <section class="brand-two">
        <div class="container">
            <h4 class="brand-two__title">Our partners & suppoters</h4>
            <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                    "0": {
                        "spaceBetween": 30,
                        "slidesPerView": 1
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
                        <img src="{{asset('frontend/images/brand/clients-logo-1.webp')}}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('frontend/images/brand/clients-logo-2.webp')}}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('frontend/images/brand/clients-logo-3.webp')}}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('frontend/images/brand/clients-logo-4.webp')}}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('frontend/images/brand/clients-logo-1.webp')}}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('frontend/images/brand/clients-logo-2.webp')}}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('frontend/images/brand/clients-logo-3.webp')}}" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <img src="{{asset('frontend/images/brand/clients-logo-4.webp')}}" alt="">
                    </div><!-- /.swiper-slide -->
                </div>
            </div>
        </div>
    </section>
    <!--Brand Two End-->

    <!--Gallery One Start-->
    <section class="gallery-one">
        <div class="container">
            <div class="gallery-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                    "loop": true,
                    "autoplay": true,
                    "margin": 10,
                    "nav": false,
                    "dots": false,
                    "smartSpeed": 500,
                    "autoplayTimeout": 10000,
                    "navText": ["<span class=\"icon-up-arrow\"></span>","<span class=\"icon-down-arrow\"></span>"],
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
                <!--Gallery One Single Start-->
                <div class="item">
                    <div class="gallery-one__single">
                        <div class="gallery-one__img">
                            <img src="{{asset('frontend/images/gallery/gallery-1-1.jpg')}}" alt="">
                            <div class="gallery-one__icon">
                                <a href="{{asset('frontend/images/gallery/gallery-1-1.jpg')}}" class="img-popup"><i
                                        class="icon-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery one Single End-->
                <!--Gallery One Single Start-->
                <div class="item">
                    <div class="gallery-one__single">
                        <div class="gallery-one__img">
                            <img src="{{asset('frontend/images/gallery/gallery-1-2.jpg')}}" alt="">
                            <div class="gallery-one__icon">
                                <a href="{{asset('frontend/images/gallery/gallery-1-2.jpg')}}" class="img-popup"><i
                                        class="icon-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery one Single End-->
                <!--Gallery One Single Start-->
                <div class="item">
                    <div class="gallery-one__single">
                        <div class="gallery-one__img">
                            <img src="{{asset('frontend/images/gallery/gallery-1-3.jpg')}}" alt="">
                            <div class="gallery-one__icon">
                                <a href="{{asset('frontend/images/gallery/gallery-1-3.jpg')}}" class="img-popup"><i
                                        class="icon-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery one Single End-->
                <!--Gallery One Single Start-->
                <div class="item">
                    <div class="gallery-one__single">
                        <div class="gallery-one__img">
                            <img src="{{asset('frontend/images/gallery/gallery-1-4.jpg')}}" alt="">
                            <div class="gallery-one__icon">
                                <a href="{{asset('frontend/images/gallery/gallery-1-4.jpg')}}" class="img-popup"><i
                                        class="icon-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery one Single End-->
                <!--Gallery One Single Start-->
                <div class="item">
                    <div class="gallery-one__single">
                        <div class="gallery-one__img">
                            <img src="{{asset('frontend/images/gallery/gallery-1-5.jpg')}}" alt="">
                            <div class="gallery-one__icon">
                                <a href="{{asset('frontend/images/gallery/gallery-1-5.jpg')}}" class="img-popup"><i
                                        class="icon-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Gallery one Single End-->
            </div>
        </div>
    </section>
    <!--Gallery One End-->
@endsection