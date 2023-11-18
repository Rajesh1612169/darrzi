<header class="main-header-three">
            <nav class="main-menu main-menu-three">
                <div class="main-menu-three__wrapper">
                    <div class="main-menu-three__wrapper-inner">
                        <div class="main-menu-three__logo">
                            <a href=""><img src="{{asset('frontend/images/resources/reslovers-enterprise-logo-black.png')}}" style="width: 100px!important;" alt=""></a>
                        </div>
                        <div class="main-menu-three__top">
                            <div class="main-menu-three__top-inner">
                                <div class="main-menu-three__top-left">
                                    <ul class="list-unstyled main-menu-three__contact-list">
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-map-marker"></i>
                                            </div>
                                            <div class="text">
                                                <p>2nd Floor FL3/11 Gulshan-E-Iqbal Block 5</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                            <div class="text">
                                                <p><a href="mailto:info@resolverenterprises.com">info@resolverenterprises.com</a>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <i class="fas fa-clock"></i>
                                            </div>
                                            <div class="text">
                                                <p>Mon - Fri 8.00 am - 6.00 pm</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-menu-three__top-right">
                                    <div class="main-menu-three__social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                    <ul class="list-unstyled main-menu-three__top-menu">
                                        @if(\Illuminate\Support\Facades\Auth::user())
                                            <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                                            @else
                                            <li><a href="{{route('login')}}">Login</a></li>
                                        @endif
                                        <li><a href="">Faq’s</a></li>
                                        <li><a href="">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="main-menu-three__bottom">
                            <div class="main-menu-three__bottom-inner">
                                <div class="main-menu-three__main-menu-box">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">
                                        <li class="dropdown current megamenu">
                                            <a href="{{route('home.index')}}">Home </a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">About</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{route('about.index')}}">About Us</a></li>
                                                <li><a href="{{route('our-team.index')}}">Our Team</a></li>
                                                <li><a href="{{route('faqs.index')}}">FAQ's</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Coaching</a>
                                            <ul class="sub-menu">
                                                <li><a href="">Our Coaching</a></li>
                                                <li><a href="">Coaching Details</a></li>
                                                <li><a href="">Take IELTS</a></li>
                                                <li><a href="">PTE Coaching</a></li>
                                                <li><a href="">Citizenship Test</a></li>
                                                <li><a href="">TOEFL</a></li>
                                                <li><a href="">SAT Coaching</a></li>
                                                <li><a href="">Skills Exam</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Services</a>
                                            <ul class="sub-menu">
                                                <li><a href="">3 Years Bachelors Program</a></li>
                                                <li><a href="">Masters/MPhil Program</a></li>
                                                <li><a href="">PhD Programs</a></li>
                                                <li><a href="">Professional Degree Programs</a></li>
                                                <li><a href="">5 Years Bachelors Programs</a></li>
                                                <li><a href="">Work & Family VISA</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Countries</a>
                                            <ul class="sub-menu">
                                                <li><a href="">United States</a></li>
                                                <li><a href="">Canada</a></li>
                                                <li><a href="">Australia</a></li>
                                                <li><a href="">Middle East</a></li>
                                                <li><a href="">Europe</a></li>
                                                <li><a href="">United Kingdom</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Blog</a>
                                            <!--<ul class="sub-menu">-->
                                            <!--    <li><a href="blog.html">Blog</a></li>-->
                                            <!--    <li><a href="blog-sidebar.html">Blog Sidebar</a></li>-->
                                            <!--    <li><a href="blog-details.html">Blog Details</a></li>-->
                                            <!--</ul>-->
                                        </li>
                                        <!--<li class="dropdown">-->
                                        <!--    <a href="#">Shop</a>-->
                                        <!--    <ul class="sub-menu">-->
                                        <!--        <li><a href="products.html">Products</a></li>-->
                                        <!--        <li><a href="product-details.html">Product Details</a></li>-->
                                        <!--        <li><a href="cart.html">Cart</a></li>-->
                                        <!--        <li><a href="checkout.html">Checkout</a></li>-->
                                        <!--    </ul>-->
                                        <!--</li>-->
                                        <li>
                                            <a href="contact.html">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-menu-three__right">
                                    <div class="main-menu-three__call">
                                        <div class="main-menu-three__call-icon">
                                            <img src="assets/images/icon/main-menu-three-comment-icon.png" alt="">
                                        </div>
                                        <div class="main-menu-three__call-content">
                                            <p class="main-menu-three__call-sub-title">Have Question?</p>
                                            <h5 class="main-menu-three__call-number"><a
                                                    href="tel:923029774305"><span>Free</span>
                                                    +923029774305</a>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="main-menu-three__search-cart-box">
                                        <div class="main-menu-three__search-box">
                                            <a href="#"
                                                class="main-menu-three__search search-toggler icon-magnifying-glass"></a>
                                        </div>
                                        <div class="main-menu-three__cart-box">
                                            @if(\Illuminate\Support\Facades\Auth::user())
                                                <a href="{{route('dashboard')}}"><img src="{{asset('frontend/images/icon/icons8-user-50.png')}}" style="width: 30px!important; margin-left: 15px;" alt=""></a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="main-menu-three__btn">
                                        <a href="">Book Appointment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
