@extends('web_layouts.app')

@section('wrapper')
<!-- Body main wrapper start -->
<main>

    <div class="breadcrumb__area dark-green breadcrumb-space overflow-hidden custom-width position-relative z-1" data-background="public/web-assets/imgs/breadcrumb/breadcrumb.png">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__title-wrapper mb-15 mb-sm-10 mb-xs-5">
                            <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">Story Details</h1>
                        </div>
                        <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                            <nav>
                                <ul>
                                    <li><span><a href="/">Home</a></span></li>
                                    <li class="active"><span>Story Details</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!--Story-->
    <section class="story-details__area padding-t100 section-space-bottom overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="story-details__content">
                        <h2 class="story-details__content-title mb-30 wow fadeInLeft animated" data-wow-delay=".2s">Visa  Got Approved for Eygpt </h2>
                        <div class="story-details__content-icon mb-30 wow fadeInLeft animated" data-wow-delay=".3s">
                            <svg width="96" height="76" viewBox="0 0 96 76" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M7.20616 36.59V36.5909C7.20616 38.4926 8.72059 40.007 10.6223 40.007H35.9984V74.5124H1.493V36.5909C1.493 18.8888 15.0229 4.28355 32.2581 2.56528V8.29926C25.5974 9.11479 19.4206 12.2568 14.833 17.194C9.9347 22.4655 7.21032 29.394 7.20616 36.59ZM94.401 40.007V74.5124H59.8956V36.5909C59.8956 18.8886 73.4264 4.28176 90.6997 2.56495V8.29661C76.5653 9.99792 65.6087 22.019 65.6087 36.5909C65.6087 38.4926 67.1232 40.007 69.0249 40.007H94.401Z" stroke="#83CD20" stroke-width="2.93619"/>
                            </svg>
                        </div>
                        <p class=" wow fadeInLeft animated" data-wow-delay=".4s">Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis  viverra laoreet augue mattis fmentum ullamco rper viverra laoreet Aliquam eros justo, posuere loborti viverra laoreet matti ullamc orper posuere viverra .Aliquam eros justo, posu Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobo rtis  viverra laoreet augue mattis fmentum ullamcorper viverra laoreet Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere</p>
                        <div class="teamdetail__content-text mt-20 wow fadeInLeft animated" data-wow-delay=".5s">
                            <ul>
                                <li>Visa Applied: <span>Visa Special</span></li>
                                <li>Visa Type: <span>10 years +</span></li>
                                <li>Approval: <a href="mailto:adbs@gmail.com">adbs@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="story-details__button mt-40 wow fadeInLeft animated" data-wow-delay=".6s">
                        <a href="contact">Apply For Visa <i class="fa-solid fa-arrow-right"></i></a>
                        <a href="story-details">Read  More Stories</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="story-details__media wow fadeInLeft animated" data-wow-delay=".7s">
                        <div class="story-details__media-wrapper">
                            <div class="story-details__media-wrapper-left-shape">
                                <img src="public/web-assets/imgs/story-img/story-details/story-details-right-shape1.png" alt="img not found">
                            </div>
                            <div class="story-details__media-wrapper-right-shape">
                                <img src="public/web-assets/imgs/story-img/story-details/story-details-right-shape2.png" alt="img not found">
                            </div>
                        </div>
                        <div class="story-details__media-thumb position-relative">
                            <div class="story-details__media-thumb-box"></div>
                            <img src="public/web-assets/imgs/story-img/story-details/story-details-right-img.png" alt="img not found">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection