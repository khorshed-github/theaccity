@extends('web_layouts.app')

@section('wrapper')
<!-- Body main wrapper start -->
<main>

@if(!empty($getnews['title']))

    <div class="breadcrumb__area dark-green breadcrumb-space overflow-hidden custom-width position-relative z-1" data-background="web-assets/imgs/breadcrumb/breadcrumb.png">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__title-wrapper mb-15 mb-sm-10 mb-xs-5">
                            <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">{{ $getnews['type']}}</h1>
                        </div>
                        <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                            <nav>
                                <ul>
                                    <li><span><a href="/">Home</a></span></li>
                                    <li><span><a href="/">News</a></span></li>
                                    <li class="active"><span>{{ $getnews['title']}}</span></li>
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
                        @foreach($news as $new)
                        <a class="mb-15 wow fadeInLeft animated" data-wow-delay=".2s" href="news/{{ $new['id'] }}/{{ urlencode(str_replace(' ', '-', $new['title'])) }}">{!! $new['title'] !!} <span><i class="fa-solid fa-angle-right"></i></span></a>
                        @endforeach
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
                    
                    <div class="coaching-details__bottom">
                        <div class="coaching-details__bottom-img mb-30" data-tilt>
                            <img class="img-fluid" src="{{ asset('assets/images/news/' . $getnews['file_name']) }}" alt="img not found">
                        </div>
                        <h3 class="mb-20 wow fadeInLeft animated" data-wow-delay=".8s">{{ $getnews['title']}}</h3>
                        <p class=" wow fadeInLeft animated" data-wow-delay=".9s">{!! $getnews['shot_desc'] !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    @else
    
    <div class="breadcrumb__area dark-green breadcrumb-space overflow-hidden custom-width position-relative z-1" data-background="web-assets/imgs/breadcrumb/news-bg.jpg">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__title-wrapper mb-15 mb-sm-10 mb-xs-5">
                            <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">News & Blogs</h1>
                        </div>
                        <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                            <nav>
                                <ul>
                                    <li><span><a href="/">Home</a></span></li>
                                    <li class="active"><span>News</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Coaching-page-->
    <section class="coaching__area pt-100 section-space-bottom">
        <div class="container">
            <div class="row mb-minus-30">
                @foreach($news as $new)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="coaching__item mb-30 d-flex align-items-center wow fadeInLeft animated" data-wow-delay=".2s">
                        <div class="coaching__item-midea" data-tilt>
                            <img class="img-fluid" src="{{ asset('assets/images/news/' . $new['file_name']) }}" alt="img not found">
                        </div>
                        <div class="coaching__item-content">
                            <h4 class="coaching__item-content-title mb-20">{!! $new['type'] !!}</h4>
                            <p>{!! $new['title'] !!}</p>
                            <a href="news/{{ $new['id'] }}/{{ urlencode(str_replace(' ', '-', $new['title'])) }}">
                                Read More <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
        <!-- Brand area start -->
    <section class="main-brand__area section-space-bottom">
        <div class="brand__area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="swiper brand__active wow fadeIn" data-wow-delay=".3s">
                            <div class="swiper-wrapper">
                                
                                 @foreach($university as $values)
                                 <div class="swiper-slide">
                                    <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".1s">
                                        <div class="brand__thumb choice__item">
                                            {{ $values['name'];}}
                                            <!--<img class="img-fluid" src="{{ asset('assets/images/University/' . $values['file_name']) }}" alt="{{ $values['name'];}}">-->
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
    <!-- Brand area end -->
    
    @endif

</main>
@endsection
