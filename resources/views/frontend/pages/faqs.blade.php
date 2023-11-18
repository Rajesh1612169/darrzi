@extends('frontend.layouts.app')
    @section('content')

        {{--   Page Header Start     --}}
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url('{{asset('frontend/images/backgrounds/page-header-bg.jpg')}}')">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Faqs</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>-</span></li>
                        <li class="active">Faqs</li>
                    </ul>
                </div>
            </div>
        </section>
        {{--   Page Header End    --}}

        {{--   Faq Search Box Start    --}}
        <section class="faq-search-box">
            <div class="container">
                <div class="faq-search-box__inner">
                    <div class="faq-search-box__shape float-bob-x">
                        <img src="{{asset('frontend/images/shapes/faq-search-shape-1.png')}}" alt="">
                    </div>
                    <div class="faq-search-box__left">
                        <h3 class="faq-search-box__title">HOW WE HELP CLIENTS</h3>
                        <h1 class="faq-search-box__title">Read All Frequently Asked <Questions></Questions></h1>
                        <p class="faq-search-box__text">We provide a skilled staff to help you get the most out of your immigration. Our qualified and dependable Immigration Consultants can assist you in obtaining a favorable result in your case.</p>
                        <form class="faq-search-box__form">
                            <div class="faq-search-box__form-input">
                                <input type="search" placeholder="Search Here">
                                <button type="submit"><i class="icon-magnifying-glass"></i></button>
                            </div>
                            <div class="faq-search-box__form-btn-and-text">
                                <a href="contact.html" class="thm-btn faq-search-box__form-btn">Contact Now</a>
                                <p class="faq-search-box__form-text">Explain us everything you need?</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        {{--   Faq Search Box End    --}}

        <section class="faq-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="faq-page__left">
                            <div class="faq-page__content">
                                <h4 class="faq-page__content-title">Still have Questions?
                                    Call Now!</h4>
                                <div class="faq-page__call">
                                    <div class="faq-page__call-icon">
                                        <span class="fas fa-phone"></span>
                                    </div>
                                    <div class="faq-page__call-content">
                                        <p class="faq-page__call-sub-title">Have Question?</p>
                                        <h4 class="faq-page__call-number"> <span>Free</span> <a href="tel:923342908532">
                                                +92 334 2908532</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="faq-page__right">
                            <div class="faq-one__faq-box">
                                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion">
                                    <div class="accrodion active">
                                        <div class="accrodion-title">
                                            <h4>Which is quicker to process, an immigrant or a visa?</h4>
                                        </div>
                                        <div class="accrodion-content" style="">
                                            <div class="inner">
                                                <p>The transfer of an immigrant visa application from USCIS to the National Visa Center takes about 30-60 days. Before phoning to confirm receipt of an application, the National Visa Center recommends waiting at least 60 days from the date of the immigration petition's approval.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>What is a lawful permanent resident?</h4>
                                        </div>
                                        <div class="accrodion-content" style="display: none;">
                                            <div class="inner">
                                                <p>A green card, also known as a permanent resident card, is an identity document that verifies a person's legal status in the United States. Lawful permanent residents are those who have a green card.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>How can I apply for the tourist visa?</h4>
                                        </div>
                                        <div class="accrodion-content" style="display: none;">
                                            <div class="inner">
                                                <p>A current passport-size color image showing the entire face. Certificate from the employer as proof of profession. In the case of students, a copy of their educational institution's identification card must be attached.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>Will I be eligible to work on entering the United States?</h4>
                                        </div>
                                        <div class="accrodion-content" style="display: none;">
                                            <div class="inner">
                                                <p>If you are selected and if you are capable then you must be able to work on the United States.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>Where can I get assistance with filling out the visa forms?</h4>
                                        </div>
                                        <div class="accrodion-content" style="display: none;">
                                            <div class="inner">
                                                <p>You don’t have no need to worry about filling out the visa form. Visarzo will helo you to do that.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>Does your immigration offers the money-back guarantee?</h4>
                                        </div>
                                        <div class="accrodion-content" style="display: none;">
                                            <div class="inner">
                                                <p>It is difficult to say that. Sometimes it gives the money back and sometimes due to some difficulties it is possible to give back the full mone.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>What if I cannot travel during the validity period of visa?</h4>
                                        </div>
                                        <div class="accrodion-content" style="display: none;">
                                            <div class="inner">
                                                <p>Your passport is valid until it reaches the end of its validity period. The sole stumbling block may be the country or countries you intend to visit entry procedures. Many nations need your passport to be valid for at least 3 to 6 months before allowing you to enter or issuing a travel visa.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>Can I transmit citizenship to my spouse?</h4>
                                        </div>
                                        <div class="accrodion-content" style="display: none;">
                                            <div class="inner">
                                                <p>Of course you can transmit the citizenship of your spouse.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>Who requires an Immigrant Visa?</h4>
                                        </div>
                                        <div class="accrodion-content" style="display: none;">
                                            <div class="inner">
                                                <p>Foreign people who plan to live permanently in the abroad are granted immigrant visas. Nonimmigrant visas are for foreign nationals who seek to visit the foreign country temporarily for reasons such as tourism, medical treatment, business, temporary work, study, or other similar activities.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>Why would a green card application be denied?</h4>
                                        </div>
                                        <div class="accrodion-content" style="display: none;">
                                            <div class="inner">
                                                <p>Green card applications are frequently denied due to simple errors. It's critical to go over all of your application materials thoroughly before forwarding them to USCIS. The following are the most prevalent mistakes: Translations were not provided.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h3 class="faq-search-box__title my-5 ">Special Issues & Common Forms</h3>
                        <div class="faq-page p-0">
                            <div class="faq-one__faq-box">
                                <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion">
                                    <div class="accrodion active">
                                        <div class="accrodion-title">
                                            <h4>I have made an error on the DS-260, what should I do?</h4>
                                        </div>
                                        <div class="accrodion-content" style="">
                                            <div class="inner">
                                                <p>If you want to correct the mistake before your visa interview at the emabassy or consulate, send an email to the NVC explaining the error and asking it to change the DS-260.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>Why are police certificates required and How do I obtain a police certificate?</h4>
                                        </div>
                                        <div class="accrodion-content" style="display: none;">
                                            <div class="inner">
                                                <p>A Police Clearance Certificate is a crucial document that verifies whether an individual has been convicted of a crime. It is required for visa, immigration, and emigration applications, as well as most employment applications nowadays.</p>
                                            </div><!-- /.inner -->
                                        </div>
                                    </div>
                                    <div class="accrodion">
                                        <div class="accrodion-title">
                                            <h4>What if my medical runs out before I travel to the United States with a copy of my medical report?</h4>
                                        </div>
                                        <div class="accrodion-content" style="display: none;">
                                            <div class="inner">
                                                <p>There is a risk involved in doing so. The fiancee visa medical is now only valid for a MAXIMUM of 6 months, according to most consulates, and the fiance must reach the United States before the medical expires.</p>
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
    @endsection
