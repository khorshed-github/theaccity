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
                            <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">Success Story</h1>
                        </div>
                        <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                            <nav>
                                <ul>
                                    <li><span><a href="/">Home</a></span></li>
                                    <li class="active"><span>Success Story</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!--Story-->
    <section class="story__area pt-100 section-space-bottom">
        <div class="container">
            <div class="row mb-minus-30">
                <div class="col-lg-6 col-md-6">
                    <div class="story__content white-bg mb-30 wow fadeInLeft animated" data-wow-delay=".2s">
                        <div class="story__content-icon mb-20">
                            <svg width="73" height="55" viewBox="0 0 73 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M44.0341 14.5451L44.0344 14.5452L44.0367 14.5351C44.1306 14.1282 44.4712 13.8476 44.914 13.8476H62.0595C62.3775 13.8476 62.5532 13.9188 62.6535 14.0223C62.7551 14.127 62.8182 14.3042 62.8182 14.6063V17.1783C62.7817 17.6376 62.6405 18.0558 62.3993 18.4017L43.3594 43.51L43.3591 43.5098L43.3527 43.5194C43.106 43.8894 42.5749 44.0166 42.1685 43.7665L42.1686 43.7664L42.1611 43.7622L36.9788 40.8874C36.8253 40.7614 36.7424 40.6291 36.7066 40.4683C36.6684 40.2962 36.6803 40.074 36.7524 39.7656L44.0341 14.5451ZM17.3297 14.5451L17.3301 14.5452L17.3329 14.5322C17.4256 14.0999 17.8286 13.8155 18.2719 13.8471L18.2719 13.8476H18.2855H35.3551C35.6731 13.8476 35.8487 13.9188 35.9491 14.0223C36.0506 14.127 36.1137 14.3042 36.1137 14.6063V17.1783C36.0772 17.6377 35.9361 18.0559 35.6947 18.4018L16.7306 43.5103L16.7303 43.5101L16.7241 43.5194C16.4777 43.889 15.9518 44.0134 15.5485 43.7342L15.5398 43.7282L15.5306 43.7232L10.2736 40.8867C10.1206 40.7609 10.0379 40.6288 10.0022 40.4683C9.96395 40.2962 9.97581 40.074 10.048 39.7656L17.3297 14.5451Z" stroke="#83CD20" stroke-width="0.379325"/>
                            </svg>                                
                        </div>
                        <div class="story__content-text">
                            <p>We have been operating for over an go providin top-notch services to our is a clients and build strong track record in the industry.We have been operating in for over a decad providi ina </p>
                        </div>
                        <div class="story__content-details d-flex mt-40">
                            <div class="story__content-details-img">
                                <img src="public/web-assets/imgs/story-img/story-cricle-img1.png" alt="img not found">
                            </div>
                            <div class="story__content-details-name">
                                <h6>Albert Flores</h6>
                                <span>President of Sales</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="story__content gray-bg mb-30 wow fadeInLeft animated" data-wow-delay=".3s">
                        <div class="story__content-icon mb-20">
                            <svg width="73" height="55" viewBox="0 0 73 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M44.0341 14.5451L44.0344 14.5452L44.0367 14.5351C44.1306 14.1282 44.4712 13.8476 44.914 13.8476H62.0595C62.3775 13.8476 62.5532 13.9188 62.6535 14.0223C62.7551 14.127 62.8182 14.3042 62.8182 14.6063V17.1783C62.7817 17.6376 62.6405 18.0558 62.3993 18.4017L43.3594 43.51L43.3591 43.5098L43.3527 43.5194C43.106 43.8894 42.5749 44.0166 42.1685 43.7665L42.1686 43.7664L42.1611 43.7622L36.9788 40.8874C36.8253 40.7614 36.7424 40.6291 36.7066 40.4683C36.6684 40.2962 36.6803 40.074 36.7524 39.7656L44.0341 14.5451ZM17.3297 14.5451L17.3301 14.5452L17.3329 14.5322C17.4256 14.0999 17.8286 13.8155 18.2719 13.8471L18.2719 13.8476H18.2855H35.3551C35.6731 13.8476 35.8487 13.9188 35.9491 14.0223C36.0506 14.127 36.1137 14.3042 36.1137 14.6063V17.1783C36.0772 17.6377 35.9361 18.0559 35.6947 18.4018L16.7306 43.5103L16.7303 43.5101L16.7241 43.5194C16.4777 43.889 15.9518 44.0134 15.5485 43.7342L15.5398 43.7282L15.5306 43.7232L10.2736 40.8867C10.1206 40.7609 10.0379 40.6288 10.0022 40.4683C9.96395 40.2962 9.97581 40.074 10.048 39.7656L17.3297 14.5451Z" stroke="#83CD20" stroke-width="0.379325"/>
                            </svg>                                
                        </div>
                        <div class="story__content-text">
                            <p>We have been operating for over an go providin top-notch services to our is a clients and build strong track record in the industry.We have been operating in for over a decad providi ina </p>
                        </div>
                        <div class="story__content-details d-flex mt-40">
                            <div class="story__content-details-img">
                                <img src="public/web-assets/imgs/story-img/story-cricle-img2.png" alt="img not found">
                            </div>
                            <div class="story__content-details-name">
                                <h6>Eleanor Pena</h6>
                                <span>Dog Trainer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="story__content gray-bg mb-30 wow fadeInLeft animated" data-wow-delay=".4s">
                        <div class="story__content-icon mb-20">
                            <svg width="73" height="55" viewBox="0 0 73 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M44.0341 14.5451L44.0344 14.5452L44.0367 14.5351C44.1306 14.1282 44.4712 13.8476 44.914 13.8476H62.0595C62.3775 13.8476 62.5532 13.9188 62.6535 14.0223C62.7551 14.127 62.8182 14.3042 62.8182 14.6063V17.1783C62.7817 17.6376 62.6405 18.0558 62.3993 18.4017L43.3594 43.51L43.3591 43.5098L43.3527 43.5194C43.106 43.8894 42.5749 44.0166 42.1685 43.7665L42.1686 43.7664L42.1611 43.7622L36.9788 40.8874C36.8253 40.7614 36.7424 40.6291 36.7066 40.4683C36.6684 40.2962 36.6803 40.074 36.7524 39.7656L44.0341 14.5451ZM17.3297 14.5451L17.3301 14.5452L17.3329 14.5322C17.4256 14.0999 17.8286 13.8155 18.2719 13.8471L18.2719 13.8476H18.2855H35.3551C35.6731 13.8476 35.8487 13.9188 35.9491 14.0223C36.0506 14.127 36.1137 14.3042 36.1137 14.6063V17.1783C36.0772 17.6377 35.9361 18.0559 35.6947 18.4018L16.7306 43.5103L16.7303 43.5101L16.7241 43.5194C16.4777 43.889 15.9518 44.0134 15.5485 43.7342L15.5398 43.7282L15.5306 43.7232L10.2736 40.8867C10.1206 40.7609 10.0379 40.6288 10.0022 40.4683C9.96395 40.2962 9.97581 40.074 10.048 39.7656L17.3297 14.5451Z" stroke="#83CD20" stroke-width="0.379325"/>
                            </svg>                                
                        </div>
                        <div class="story__content-text">
                            <p>We have been operating for over an go providin top-notch services to our is a clients and build strong track record in the industry.We have been operating in for over a decad providi ina </p>
                        </div>
                        <div class="story__content-details d-flex mt-40">
                            <div class="story__content-details-img">
                                <img src="public/web-assets/imgs/story-img/story-cricle-img3.png" alt="img not found">
                            </div>
                            <div class="story__content-details-name">
                                <h6>Ronald Richards</h6>
                                <span>President of Sales</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="story__content white-bg mb-30 wow fadeInLeft animated" data-wow-delay=".5s">
                        <div class="story__content-icon mb-20">
                            <svg width="73" height="55" viewBox="0 0 73 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M44.0341 14.5451L44.0344 14.5452L44.0367 14.5351C44.1306 14.1282 44.4712 13.8476 44.914 13.8476H62.0595C62.3775 13.8476 62.5532 13.9188 62.6535 14.0223C62.7551 14.127 62.8182 14.3042 62.8182 14.6063V17.1783C62.7817 17.6376 62.6405 18.0558 62.3993 18.4017L43.3594 43.51L43.3591 43.5098L43.3527 43.5194C43.106 43.8894 42.5749 44.0166 42.1685 43.7665L42.1686 43.7664L42.1611 43.7622L36.9788 40.8874C36.8253 40.7614 36.7424 40.6291 36.7066 40.4683C36.6684 40.2962 36.6803 40.074 36.7524 39.7656L44.0341 14.5451ZM17.3297 14.5451L17.3301 14.5452L17.3329 14.5322C17.4256 14.0999 17.8286 13.8155 18.2719 13.8471L18.2719 13.8476H18.2855H35.3551C35.6731 13.8476 35.8487 13.9188 35.9491 14.0223C36.0506 14.127 36.1137 14.3042 36.1137 14.6063V17.1783C36.0772 17.6377 35.9361 18.0559 35.6947 18.4018L16.7306 43.5103L16.7303 43.5101L16.7241 43.5194C16.4777 43.889 15.9518 44.0134 15.5485 43.7342L15.5398 43.7282L15.5306 43.7232L10.2736 40.8867C10.1206 40.7609 10.0379 40.6288 10.0022 40.4683C9.96395 40.2962 9.97581 40.074 10.048 39.7656L17.3297 14.5451Z" stroke="#83CD20" stroke-width="0.379325"/>
                            </svg>                                
                        </div>
                        <div class="story__content-text">
                            <p>We have been operating for over an go providin top-notch services to our is a clients and build strong track record in the industry.We have been operating in for over a decad providi ina </p>
                        </div>
                        <div class="story__content-details d-flex mt-40">
                            <div class="story__content-details-img">
                                <img src="public/web-assets/imgs/story-img/story-cricle-img4.png" alt="img not found">
                            </div>
                            <div class="story__content-details-name">
                                <h6>Savannah Nguyen</h6>
                                <span>Marketing Coordinator</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="story__content white-bg mb-30 wow fadeInLeft animated" data-wow-delay=".6s">
                        <div class="story__content-icon mb-20">
                            <svg width="73" height="55" viewBox="0 0 73 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M44.0341 14.5451L44.0344 14.5452L44.0367 14.5351C44.1306 14.1282 44.4712 13.8476 44.914 13.8476H62.0595C62.3775 13.8476 62.5532 13.9188 62.6535 14.0223C62.7551 14.127 62.8182 14.3042 62.8182 14.6063V17.1783C62.7817 17.6376 62.6405 18.0558 62.3993 18.4017L43.3594 43.51L43.3591 43.5098L43.3527 43.5194C43.106 43.8894 42.5749 44.0166 42.1685 43.7665L42.1686 43.7664L42.1611 43.7622L36.9788 40.8874C36.8253 40.7614 36.7424 40.6291 36.7066 40.4683C36.6684 40.2962 36.6803 40.074 36.7524 39.7656L44.0341 14.5451ZM17.3297 14.5451L17.3301 14.5452L17.3329 14.5322C17.4256 14.0999 17.8286 13.8155 18.2719 13.8471L18.2719 13.8476H18.2855H35.3551C35.6731 13.8476 35.8487 13.9188 35.9491 14.0223C36.0506 14.127 36.1137 14.3042 36.1137 14.6063V17.1783C36.0772 17.6377 35.9361 18.0559 35.6947 18.4018L16.7306 43.5103L16.7303 43.5101L16.7241 43.5194C16.4777 43.889 15.9518 44.0134 15.5485 43.7342L15.5398 43.7282L15.5306 43.7232L10.2736 40.8867C10.1206 40.7609 10.0379 40.6288 10.0022 40.4683C9.96395 40.2962 9.97581 40.074 10.048 39.7656L17.3297 14.5451Z" stroke="#83CD20" stroke-width="0.379325"/>
                            </svg>                                
                        </div>
                        <div class="story__content-text">
                            <p>We have been operating for over an go providin top-notch services to our is a clients and build strong track record in the industry.We have been operating in for over a decad providi ina </p>
                        </div>
                        <div class="story__content-details d-flex mt-40">
                            <div class="story__content-details-img">
                                <img src="public/web-assets/imgs/story-img/story-cricle-img5.png" alt="img not found">
                            </div>
                            <div class="story__content-details-name">
                                <h6>Jerome Bell</h6>
                                <span>Web Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="story__content gray-bg mb-30 wow fadeInLeft animated" data-wow-delay=".7s">
                        <div class="story__content-icon mb-20">
                            <svg width="73" height="55" viewBox="0 0 73 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M44.0341 14.5451L44.0344 14.5452L44.0367 14.5351C44.1306 14.1282 44.4712 13.8476 44.914 13.8476H62.0595C62.3775 13.8476 62.5532 13.9188 62.6535 14.0223C62.7551 14.127 62.8182 14.3042 62.8182 14.6063V17.1783C62.7817 17.6376 62.6405 18.0558 62.3993 18.4017L43.3594 43.51L43.3591 43.5098L43.3527 43.5194C43.106 43.8894 42.5749 44.0166 42.1685 43.7665L42.1686 43.7664L42.1611 43.7622L36.9788 40.8874C36.8253 40.7614 36.7424 40.6291 36.7066 40.4683C36.6684 40.2962 36.6803 40.074 36.7524 39.7656L44.0341 14.5451ZM17.3297 14.5451L17.3301 14.5452L17.3329 14.5322C17.4256 14.0999 17.8286 13.8155 18.2719 13.8471L18.2719 13.8476H18.2855H35.3551C35.6731 13.8476 35.8487 13.9188 35.9491 14.0223C36.0506 14.127 36.1137 14.3042 36.1137 14.6063V17.1783C36.0772 17.6377 35.9361 18.0559 35.6947 18.4018L16.7306 43.5103L16.7303 43.5101L16.7241 43.5194C16.4777 43.889 15.9518 44.0134 15.5485 43.7342L15.5398 43.7282L15.5306 43.7232L10.2736 40.8867C10.1206 40.7609 10.0379 40.6288 10.0022 40.4683C9.96395 40.2962 9.97581 40.074 10.048 39.7656L17.3297 14.5451Z" stroke="#83CD20" stroke-width="0.379325"/>
                            </svg>                                
                        </div>
                        <div class="story__content-text">
                            <p>We have been operating for over an go providin top-notch services to our is a clients and build strong track record in the industry.We have been operating in for over a decad providi ina </p>
                        </div>
                        <div class="story__content-details d-flex mt-40">
                            <div class="story__content-details-img">
                                <img src="public/web-assets/imgs/story-img/story-cricle-img6.png" alt="img not found">
                            </div>
                            <div class="story__content-details-name">
                                <h6>Annette Black</h6>
                                <span>Nursing Assistant</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog__content-pagination margin-t80">
                    <div class="blog__content-pagination-social d-flex justify-content-center">
                        <a href="#" class="active"><i class="fa-solid fa-1"></i></a>
                        <a href="#"><i class="fa-solid fa-2"></i></a>
                        <a href="#"><i class="fa-solid fa-3"></i></a>
                        <a href="#"><i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection