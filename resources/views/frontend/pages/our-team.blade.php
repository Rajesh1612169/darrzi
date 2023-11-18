@extends('frontend.layouts.app')
    @section('content')

        {{--   Page Header Start     --}}
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url('{{asset('frontend/images/backgrounds/page-header-bg.jpg')}}')">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Our Team</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="">Home</a></li>
                        <li><span>-</span></li>
                        <li class="active">Our Team</li>
                    </ul>
                </div>
            </div>
        </section>
        {{--   Page Header End    --}}

        <section class="team-page">
            <div class="container">
                <div class="row">
                    <!--Team One Single Start-->
                    <div class="col-md-4 wow fadeInUp animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{asset('frontend/images/team/team-1-1.jpg')}}" alt="">
                                </div>
                                <div class="team-one__share-btn">
                                    <a href="#"><i class="fa fa-share-alt"></i></a>
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">CEO - Founder</p>
                                <h3 class="team-one__title"><a href="#">CHARLES HENRY</a></h3>
                                <div class="team-one__arrow-box">
                                    <a href="#" class="team-one__arrow"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-md-4 wow fadeInUp animated" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{asset('frontend/images/team/team-1-2.jpg')}}" alt="">
                                </div>
                                <div class="team-one__share-btn">
                                    <a href="#"><i class="fa fa-share-alt"></i></a>
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">EDWARD MATTHEW</p>
                                <h3 class="team-one__title"><a href="#">Immigration Expert</a></h3>
                                <div class="team-one__arrow-box">
                                    <a href="#" class="team-one__arrow"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-md-4 wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{asset('frontend/images/team/team-1-3.jpg')}}" alt="">
                                </div>
                                <div class="team-one__share-btn">
                                    <a href="#"><i class="fa fa-share-alt"></i></a>
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Senior Engineer</p>
                                <h3 class="team-one__title"><a href="#">BEN CHRISTOPHER</a></h3>
                                <div class="team-one__arrow-box">
                                    <a href="#" class="team-one__arrow"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-md-4 wow fadeInUp animated" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{asset('frontend/images/team/team-1-4.jpg')}}" alt="">
                                </div>
                                <div class="team-one__share-btn">
                                    <a href="#"><i class="fa fa-share-alt"></i></a>
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Consultants</p>
                                <h3 class="team-one__title"><a href="#">Christine Eve</a></h3>
                                <div class="team-one__arrow-box">
                                    <a href="#" class="team-one__arrow"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-md-4 wow fadeInUp animated" data-wow-delay="500ms" style="visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{asset('frontend/images/team/team-1-5.jpg')}}" alt="">
                                </div>
                                <div class="team-one__share-btn">
                                    <a href="#"><i class="fa fa-share-alt"></i></a>
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Consultants</p>
                                <h3 class="team-one__title"><a href="#">Sarah Albert</a></h3>
                                <div class="team-one__arrow-box">
                                    <a href="#" class="team-one__arrow"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="col-md-4 wow fadeInUp animated" data-wow-delay="600ms" style="visibility: visible; animation-delay: 600ms; animation-name: fadeInUp;">
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="{{asset('frontend/images/team/team-1-6.jpg')}}" alt="">
                                </div>
                                <div class="team-one__share-btn">
                                    <a href="#"><i class="fa fa-share-alt"></i></a>
                                </div>
                                <ul class="list-unstyled team-one__social">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-one__content">
                                <p class="team-one__sub-title">Consultants</p>
                                <h3 class="team-one__title"><a href="#">David Cooper</a></h3>
                                <div class="team-one__arrow-box">
                                    <a href="#" class="team-one__arrow"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
