@extends('frontend.layouts.app')
    @section('content')

        {{--   Page Header Start     --}}
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url('{{asset('frontend/images/backgrounds/page-header-bg.jpg')}}')">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>About</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="">Home</a></li>
                        <li><span>-</span></li>
                        <li class="active">About</li>
                    </ul>
                </div>
            </div>
        </section>
        {{--   Page Header End    --}}

        <section class="about-four">
            <div class="about-four__shape-2 img-bounce">
                <img src="{{asset('frontend/images/shapes/about-four-shape-2.png')}}" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-four__left">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">WHO ARE RESOLVER ENTERPRISES</span>
                                    <div class="section-title__border-box"></div>
                                </div>
                                <h2 class="section-title__title">Not Just Traditional Visa &amp; <br> Immigration Firm</h2>
                            </div>
                            <div class="about-four__top">
                                <div class="about-four__icon">
                                    <span class="icon-group"></span>
                                </div>
                                <div class="about-four__content">
                                    <h4>Sponsoring and managing work visas parts now becoming results in the experience.</h4>
                                </div>
                            </div>
                            <p class="about-four__text-1">Resolver Enterprises Is An International Company. It Is In The Business Of Extending Legal, Immigration, Educational And IT related Services & Support To Its Broad Spectrum Of National & International Clients. Since Our Company Is Dynamix So Are Our Team. We Are Comprises Of Digital Marketing Experts, Learned Lawyers, Educationists And Scholars. You Might Be Seeking Our Either Of The Service But We Shall Be Extending You That Service With That Versatile Expertise Which We Enjoy In The Realms Of Law, Digital Marketing & Foreign Education.</p>
                            <div class="about-four__points-box">
                                <ul class="list-unstyled about-four__points">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Fast Processing</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-unstyled about-four__points about-four__points--two">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Guarantee Approval</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="about-four__btn-box">
                                <a href="{{asset('contact.index')}}" class="thm-btn about-four__btn">Discover More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-four__right">
                            <div class="about-four__img-box">
                                <div class="about-four__img-one">
                                    <img src="{{asset('frontend/images/resources/about-four-img-1.jpg')}}" alt="">
                                </div>
                                <div class="about-four__img-two">
                                    <img src="{{asset('frontend/images/resources/about-four-img-2.jpg')}}" alt="">
                                </div>
                                <div class="about-four__experience">
                                    <div class="about-four__experience-inner count-box counted">
                                        <h3 class="count-text" data-stop="28" data-speed="1500">28</h3>
                                        <p>Years of Experience</p>
                                        <div class="about-four__shape-1">
                                            <img src="{{asset('frontend/images/resources/about-two-shape-1.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="below-about">
            <div class="container">
                <h2 class="section-title__title text-center text-white">Unparalleled Consultancy from Experienced Lawyers</h2>
                <h5 class="text-white text-center">
                    Resolvers Enterprises gives their consultancy by a registered and experienced lawyer.

                </h5>
            </div>
        </section>
    @endsection
