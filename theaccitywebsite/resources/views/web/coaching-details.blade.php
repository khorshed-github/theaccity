@extends('web_layouts.app')

@section('wrapper')
<!-- Body main wrapper start -->
<main>

    <div class="breadcrumb__area dark-green breadcrumb-space overflow-hidden custom-width position-relative z-1" data-background="web-assets/imgs/breadcrumb/breadcrumb.png">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__title-wrapper mb-15 mb-sm-10 mb-xs-5">
                            <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">Coaching Details</h1>
                        </div>
                        <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                            <nav>
                                <ul>
                                    <li><span><a href="/">Home</a></span></li>
                                    <li class="active"><span>Coaching Details</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!--Coaching Details-->
    <section class="coaching-details__area pt-100 section-space-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="coaching-details__category">
                        <a class="mb-15 wow fadeInLeft animated" data-wow-delay=".2s" href="coaching-details">SAT Couching <span><i class="fa-solid fa-angle-right"></i></span></a>
                        <a class="mb-15 wow fadeInLeft animated" data-wow-delay=".4s" href="coaching-details">PTE Couching <span><i class="fa-solid fa-angle-right"></i></span></a>
                        <a class="mb-15 wow fadeInLeft animated" data-wow-delay=".6s" href="coaching-details">Student service <span><i class="fa-solid fa-angle-right"></i></span></a>
                        <a class="mb-15 wow fadeInLeft animated" data-wow-delay=".8s" href="coaching-details">Skills Exam <span><i class="fa-solid fa-angle-right"></i></span></a>
                        <a class="mb-15 wow fadeInLeft animated" data-wow-delay="1s" href="coaching-details">OET Coaching <span><i class="fa-solid fa-angle-right"></i></span></a>
                        <a class="mb-15 wow fadeInLeft animated" data-wow-delay="1.2s" href="coaching-details">IELTS Coaching <span><i class="fa-solid fa-angle-right"></i></span></a>
                        <a class="wow fadeInLeft animated" data-wow-delay="1.4s" href="coaching-details">TOFEL Coaching <span><i class="fa-solid fa-angle-right"></i></span></a>
                    </div>
                    <div class="coaching-details__widget mt-30 wow fadeInLeft animated" data-wow-delay="1.6s">
                        <div class="coaching-details__widget-icon">
                            <svg width="41" height="42" viewBox="0 0 41 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M39.9219 31.2344L38.0469 39.125C37.8125 40.2969 36.875 41.0781 35.7031 41.0781C16.0156 41 0 24.9844 0 5.29688C0 4.125 0.703125 3.1875 1.875 2.95312L9.76562 1.07812C10.8594 0.84375 12.0312 1.46875 12.5 2.48438L16.1719 11C16.5625 12.0156 16.3281 13.1875 15.4688 13.8125L11.25 17.25C13.9062 22.6406 18.2812 27.0156 23.75 29.6719L27.1875 25.4531C27.8125 24.6719 28.9844 24.3594 30 24.75L38.5156 28.4219C39.5312 28.9688 40.1562 30.1406 39.9219 31.2344Z" fill="white"/>
                            </svg> 
                        </div>
                        <h3 class="mt-15">GET TOUCH</h3>
                        <a href="tel:+888123456765">(+888) 123 456 765</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="coaching-details__content">
                        <div class="coaching-details__content-top-img pb-20" data-tilt>
                            <img src="web-assets/imgs/coaching/coaching-details/coaching-details-top-img.png" alt="img not found">
                        </div>
                        <h2 class="coaching-details__content-title mb-30 wow fadeInLeft animated" data-wow-delay=".3s">About IELTS Coaching</h2>
                        <p class=" wow fadeInLeft animated" data-wow-delay=".4s">IELTS score is internationally recognized as an English Language proficiency requirement for higher education, in almost all countries including the USA, the United Kingdom, Australia, Canada, and New Zealand. The highest IELT Academic module whether you have adequate  possible band score is 9.0; most universities accept a score of 6.0 for undergraduate admission and 6.0-7.0 for graduate admission. There are two versions of the </p>
                        <p class="paragrapg wow fadeInLeft animated" data-wow-delay=".5s">IELTS score is internationally recognized as an English Language proficiency requirement English Language for higher education, in almost all countries including the USA, the United Kingdom, Australia, Canada, </p>
                    </div>
                    <div class="coaching-details__guides d-flex mb-40 mt-30">
                        <div class="coaching-details__guides-card">
                            <div class="coaching-details__guides-card-tetx wow fadeInLeft animated" data-wow-delay=".4s">
                                <h5><i class="fa-solid fa-check"></i>Safety Guides</h5>
                                <p>Lorem ipsum dolor sit amet, cons <br> ectetur adipiscing elit</p>
                            </div>
                            <div class="coaching-details__guides-card-tetx mt-30 wow fadeInLeft animated" data-wow-delay=".5s">
                                <h5><i class="fa-solid fa-check"></i>Safety Guides</h5>
                                <p>Lorem ipsum dolor sit amet, cons <br> ectetur adipiscing elit</p>
                            </div>
                        </div>
                        <div class="coaching-details__guides-card">
                            <div class="coaching-details__guides-card-tetx wow fadeInLeft animated" data-wow-delay=".6s">
                                <h5><i class="fa-solid fa-check"></i>Passport Assistance</h5>
                                <p>Lorem ipsum dolor sit amet, cons <br> ectetur adipiscing elit</p>
                            </div>
                            <div class="coaching-details__guides-card-tetx mt-30 wow fadeInLeft animated" data-wow-delay=".7s">
                                <h5><i class="fa-solid fa-check"></i>Passport Assistance</h5>
                                <p>Lorem ipsum dolor sit amet, cons <br> ectetur adipiscing elit</p>
                            </div>
                        </div>
                    </div>
                    <div class="coaching-details__bottom">
                        <div class="coaching-details__bottom-img mb-30" data-tilt>
                            <img src="web-assets/imgs/coaching/coaching-details/coaching-details-bottom-img.png" alt="img not found">
                        </div>
                        <h3 class="mb-20 wow fadeInLeft animated" data-wow-delay=".8s">Our Benefits</h3>
                        <p class=" wow fadeInLeft animated" data-wow-delay=".9s">IELTS score is internationally recognized as an English Language proficiency requirement for higher education, in almost all countries including the USA, the United Kingdom, Australia, Canada, and New Zealand. The highest IELT Academic module test assesses whether you have adequate  possible band score is 9.0; most universities accept a score of 6.0 for undergraduate and 6.0-7.0 for graduate admission. There are two versions of the </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>
@endsection
