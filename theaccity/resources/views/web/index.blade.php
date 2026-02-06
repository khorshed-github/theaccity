@extends('web_layouts.app')

@section('wrapper')

<main>
    <!-- Banner area start -->
    <section class="banner__area banner-4 p-relative">
        <div class="swiper banner-4__active p-relative">
            <div class="swiper-wrapper">
                
                @foreach($sliders as $slider)
                <div class="swiper-slide">
                    <div class="banner-4__shapes">
                        <div class="banner-4__shapes-shape-1 upDown" data-animation="pixfix-fadeInLeft" data-delay="1000ms" data-duration="1200ms">
                            <img src="{{ asset('assets/images/sliders/' . $slider->file_name) }}" alt="img not found">
                        </div>
                    </div>
                    <div class="banner banner__space banner-4__space">
                        <div class="banner__thumb-bg banner-4__thumb-bg" data-background="{{ asset('assets/images/sliders/' . $slider->file_name) }}"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="banner__content banner-4__content p-relative z-index-1">
                                        <h2 class="banner__title banner-4__title" data-animation="pixfix-fadeInUp" data-delay="1000ms" data-duration="1200ms">{{ $slider['title'] }}</h2>
                                        <p data-animation="pixfix-fadeInUp" data-delay="1200ms" data-duration="1400ms">{!! $slider['shot_desc'] !!}</p>
                                        <div class="banner-home-2__btn__wrapper-2 banner-4__btn-wrapper" data-animation="pixfix-fadeInUp" data-delay="1400ms" data-duration="1600ms">
                                            <a href="contact" class="rr-btn btn-hover-white banner-4__btn-wrapper-btn">Get Started<i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
            <div class="slider-arrow banner-4__slider-arrow-4">
                <div class="slider-nav slider-next"><i class="fa-sharp fa-regular fa-arrow-right"></i></div>
                <div class="slider-nav slider-prev"><i class="fa-sharp fa-regular fa-arrow-left"></i></div>
            </div>
        </div>
    </section>

     <!--about 2 start-->
     <section class="about-us-2 about-4 section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-us-2__wrapper about-4__wrapper wow fadeInLeft animated" data-wow-delay=".3s">
                        <div class="about-us-2__wrapper-media about-4__wrapper-media overflow-hidden d-flex">
                            <div class="img-wrap">
                                <div class="about-us-2__wrapper-media-image-1">
                                    <img src="web-assets/imgs/home-4/about-4-img-1.png" class="img-fluid"  alt="image not found">
                                </div>
                            </div>
                            <div class="about-us-2__wrapper-media-image-2">
                                <img class="leftRight" src="web-assets/imgs/home-4/about-4-plane-img.png" alt="image not found">
                            </div>
                        </div>
                        <div class="about-us-2__wrapper-media about-4__wrapper-media d-flex">
                            <div class="about-us-2__wrapper-media__counter">
                                <h3 class="about-us-2__wrapper-media__counter-title"><span class="odometer" data-count="{{ $settings['years_of_experience'] ?? '15' }}">0</span>+</h3>
                                <p>Years Of Experience</p>
                            </div>
                            <div class="about-us-2__wrapper-media-image-3 img-wrap">
                                <img src="web-assets/imgs/home-4/about-4-img-2.png" class="img-fluid"  alt="image not found">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__content about-4__content">
                        <div class="section__title-wrapper mb-20">
                            <!--<h6 class="section__title-wrapper-black-subtitle mb-10 wow fadeInLeft animated" data-wow-delay=".4s">About Us </h6>-->
                            <h2 class="section__title-wrapper-title wow fadeInLeft animated" data-wow-delay=".5s">{{ $settings['about_heading'] ?? 'About Us' }}</h2>
                        </div>
                        <p class=" wow fadeInLeft animated" data-wow-delay=".8s">{{ $settings['about_description'] ?? 'At ACCity, we are dedicated to connecting ambitious students from across the globe with world-class educational opportunities.' }}</p>
                        <div class="about__box about-4__box mt-20">
                            <div class="about__box-item about-4__box-item mb-15 wow fadeInLeft animated" data-wow-delay=".6s">
                                
                                <div class="text">
                                    <h4 class="about__box-item-title">Our Mission</h4>
                                    <p>{{ $settings['about_mission'] ?? 'Our mission is to empower students to unlock their full academic and professional potential.' }}</p>
                                </div>
                            </div>
                            <div class="about__box-item about-4__box-item wow fadeInLeft animated" data-wow-delay=".7s">
                                
                                <div class="text">
                                    <h4 class="about__box-item-title">Our Vision</h4>
                                    <p>{{ $settings['about_vision'] ?? 'We envision a future in which every student has access to high-quality higher education.' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="about__btn about-4__btn wow fadeInLeft animated" data-wow-delay=".8s">
                            <a href="about-us" class="rr-btn">Read More<i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>


    <!--cta 4-->
    <section class="cta-4">
        <div class="cta-4__bg" data-background="web-assets/imgs/home-4/cta-4.png"></div>
        <div class="container">
            <div class="row">
                <div class="cta-4__wrapper">
                    <div class="cta-4__text">
                        <h3 class="cta-4__text-title">We <span>Counsel</span> Students to <br> Get Study</h3>
                    </div>
                    <div class="cta-4__icon">
                        <a class="popup-video video-btn" href="https://www.youtube.com/watch?v=kXgJei4u-TA" data-effect="mfp-move-from-top vertical-middle">
                            <svg width="34" height="38" viewBox="0 0 34 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M33.0574 19.0006L0 37.7629V0.238281L33.0574 19.0006Z" fill="#034833"/>
                            </svg> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--visit-->
    <section class="visit__area p-relative bg-gray">
        <div class="container">
            <div class="visit__wrapper">
                <div class="visit__shape">
                    <img src="web-assets/imgs/home-4/visit-right-shape.png" alt="img not found">
                </div>
                <div class="visit__wrapper-countries">
                    <div class="section__title-wrapper mb-20">
                        <h6 class="section__title-wrapper-black-subtitle mb-4 wow fadeInLeft animated" data-wow-delay=".2s">Universities You Can Visit</h6>
                        <h2 class="section__title-wrapper-title wow fadeInLeft animated" data-wow-delay=".3s">Select the University of Your Choice</h2>
                    </div>
                    <div class="visit__wrapper-countries-wrap" style="margin-bottom: 10px !important; gap: 20px !important;">
                         @foreach($university as $unv)
                         <div class="visit__wrapper-countries-wrap-box img-1">
                            <!--<img class="img-fluid" src="{{ asset('assets/images/University/' . $unv->file_name) }}" alt="{{ $unv['name'] }}">-->
                            <h3 style="border: 1px dotted #ddd;
                                        padding: 5px;
                                        border-radius: 10px;
                                        background: #fafafa;" class="title">{{ $unv['name'] }}</h3>
                        </div>
                        @endforeach
                </div>
            </div>
        </div>
    </section>

    <!--team-4-->
    <section class="team-4__area section-space bg-gray p-relative">
        <div class="team-4__shape">
            <img src="web-assets/imgs/home-4/team-4-bg-shape.png" alt="img not found">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__title-wrapper text-center mb-60  mb-xs-30">
                        <h6 class="section__title-wrapper-center-subtitle mb-10 wow fadeInLeft animated" data-wow-delay=".2s">Professional people</h6>
                        <h2 class="section__title-wrapper-title wow fadeInLeft animated" data-wow-delay=".3s">Meet Our Expert Consultatns</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-minus-30">
                
                @foreach($consultants as $cont)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="team-4__item mb-30">
                        <div class="team-4__item-thumb">
                            <div class="team-4__item-thumb-overlay"></div>
                            <img src="{{ asset('assets/images/sliders/' . $cont->file_name) }}" alt="img not found">
                            <div class="team-4__item-thumb-social">
                                <ul>
                                    <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="https://www.pinterest.com/"><i class="fa-brands fa-pinterest-p"></i></a></li>
                                    <li><a href="https://vimeo.com/"><i class="fa-brands fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="team-4__item-content">
                                <h4 class="title"><a href="#">{{ $cont['title'] }}</a></h4>
                                <p class="dec">{!! $cont['shot_desc'] !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>

        <!--counter-->
    <section class="latest-counter__area overflow-hidden p-relative z-1 pt-100 pb-90 pt-xs-30 pb-xs-60 latest-counter-bg">
        <div class="latest-counter__shapes">
            <div class="shape-1 upDown">
                <img src="web-assets/imgs/home-5/counter-plane-img.png" alt="img not found">
            </div>
            <div class="shape-2">
                <img src="web-assets/imgs/home-5/counter-bg-shape.png" alt="img not found">
            </div>
        </div>
        <div class="container">
            <div class="row">
                @if(isset($statistics) && $statistics->count() > 0)
                    @foreach($statistics as $key => $stat)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                       <div class="latest-counter__counter-box wow fadeInLeft animated" data-wow-delay="1s">
                            <div class="latest-counter__content text-center">
                                <div class="latest-counter__content__counter-img {{ $key == 0 ? 'mt-40' : '' }}">
                                    @if($stat->icon)
                                        <img src="{{ asset($stat->icon) }}" alt="{{ $stat->label }}">
                                    @endif
                                </div>
                                <h5><span class="odometer" data-count="{{ $stat->value }}">0</span>{{ $stat->suffix }}</h5>
                                <span>{{ $stat->label }}</span>
                            </div>
                       </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <!--faq 5-->
    <section class="faq-5__area ask-question p-relative overflow-hidden section-space">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-5__thumb">
                        <div class="faq-5__thumb-shape upDown-bottom">
                            <img src="web-assets/imgs/home-5/faq-circle-plane-shape.png" alt="img not found">
                        </div>
                        <div class="faq-5__thumb-media">
                            <img src="web-assets/imgs/home-5/faq-right-img.png" alt="img not found">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section__title-wrapper mb-40">
                        <h6 class="section__title-wrapper-black-subtitle mb-10 wow fadeInLeft animated" data-wow-delay=".2s">Have Any Questions?</h6>
                        <h2 class="section__title-wrapper-title wow fadeInLeft animated" data-wow-delay=".3s">Your Questions, Our Answers</h2>
                    </div>
                    <div class="ask-question__faq">
                        <div class="accordion" id="accordionExample">
                            @foreach($qas as $com)
                            <div class="accordion-item ask-question__faq-item faq-5__item wow fadeInLeft animated" data-wow-delay=".4s">
                                <h5 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_{{ $com['id'] }}" aria-expanded="true" aria-controls="collapseThree">
                                        {{ $com['question'] }}
                                    </button>
                                </h5>
                                <div id="collapse_{{ $com['id'] }}" class="accordion-collapse collapse" aria-labelledby="heading_{{ $com['id'] }}" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>{!! $com['answer'] !!}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testi-5__area section-space p-relative testi-bg z-1">
        <div class="testi-5__bg-img" data-background="web-assets/imgs/home-5/testi-5-bg-img.png"></div>
        <div class="container">
            <div class="row  mb-minus-65">
                <div class="col-12">
                    <div class="swiper testi-5__wrap testi-5__item-slide">
                        <div class="swiper-wrapper">
                            @foreach($testimonials as $testi)
                            <div class="swiper-slide text-center mb-65">
                                <div class="testi-5__item">
                                    <div class="testi-5__item-thumb">
                                        <img src="{{ asset('assets/images/sliders/' . $testi->file_name) }}" alt="img not found">
                                    </div>
                                    <!--<h4 class="testi-5__item-title"><a href="#">Name</a></h4>-->
                                    <span class="testi-5__item-subtitle">{{ $testi['title'] }}</span>
                                    <p class="testi-5__item-dec"> {!! $testi['shot_desc'] !!}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--blog 4-->
    <section class="blog-4__area section-space-top">
        <div class="container">
            
            <div class="row">
                <div class="section-title2 mb-60 mb-xs-30">
                    <div class="section-title2__wrapper">
                        <span class="section-title2__wrapper-subtitle wow fadeInLeft animated" data-wow-delay=".2s">News & Blog Post</span>
                        <h2 class="section-title2__wrapper-title  wow fadeInLeft animated" data-wow-delay=".3s">Latest Insight from News & Blog</h2>
                    </div>
                    <div class="section-title2__bunews-and-blogstton blog-4__button wow fadeInLeft animated" data-wow-delay=".4s">
                        <a class="rr-btn" href="news-and-blogs">See All News & Blog <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="row mb-minus-30">
                
                @foreach($blogs as $blog)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="blog-4__item mb-30">
                        <div class="blog-4__item-thumb">
                            <img src="{{ asset('assets/images/news/' . $blog->file_name) }}" alt="img not found">
                            <div class="blog-4__item-thumb-text">
                                <span>{{ $blog->created_at->format('d F, Y') }}</span>
                            </div>
                        </div>
                        <div class="blog-4__item-content">
                            <div class="blog-4__item-content-wrap">
                                <div class="blog-4__item-content-wrap-cta">
                                    <div class="bullet"></div>
                                    <div class="title">{{ $blog['type'] }}</div>
                                </div>
                            </div>
                            <h3 class="blog-4__item-content-title"><a href="#">{{ $blog['title'] }}</a></h3>
                            <a class="blog-4__item-content-btn" href="news/{{ $blog['id'] }}/{{ urlencode(str_replace(' ', '-', $blog['title'])) }}">Read More <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>

    <!-- Brand area start -->
    <section class="main-brand__area section-space">
        <div class="brand__area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="swiper brand__active wow fadeIn" data-wow-delay=".3s">
                            <div class="swiper-wrapper">
                                 @foreach($university as $unv)
                                    <div class="swiper-slide">
                                        <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".1s">
                                            <div class="brand__thumb choice__item">
                                                <a href="#">{{ $unv['name'] }}
                                                   <!-- <img class="img-fluid" src="{{ asset('assets/images/University/' . $unv->file_name) }}" alt="{{ $unv['name'] }}">-->
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

@endsection
