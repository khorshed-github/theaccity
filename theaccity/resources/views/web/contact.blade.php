@extends('web_layouts.app')

@section('wrapper')
<!-- Body main wrapper start -->
<main>

    <div class="breadcrumb__area dark-green breadcrumb-space overflow-hidden custom-width position-relative z-1" data-background="web-assets/imgs/bg/contactusbg.jpg">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__title-wrapper mb-15 mb-sm-10 mb-xs-5">
                            <h1 class="breadcrumb__title color-white wow fadeInLeft animated" data-wow-delay=".2s">Contact Us</h1>
                        </div>
                        <div class="breadcrumb__menu wow fadeInLeft animated" data-wow-delay=".3s">
                            <nav>
                                <ul>
                                    <li><span><a href="/">Home</a></span></li>
                                    <li class="active"><span>Contact Us</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--contact-us-start-->
    <section class="contact-us__area section pt-100 section-space-bottom overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-us__widget mb-30" data-tilt>
                        <img src="web-assets/imgs/concact/contact-left-img.png" alt="img not found">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-us__title-wrapper">
                        <div class="section__title-wrapper mb-40">
                            <h6 class="section__title-wrapper-black-subtitle mb-10 wow fadeInLeft animated" data-wow-delay=".2s">Contact Information
                                <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3843_1169)">
                                <path d="M4.92578 10.3748L6.49623 9.68052L5.62583 9.07031L4.92578 10.3748Z" fill="#83CD20"/>
                                <path d="M4.92578 10.3743L5.00073 8L13.9088 0L5.66505 9.1113L4.92578 10.3743Z" fill="#83CD20"/>
                                <path d="M5 8L13.908 0L0 6.22704L5 8Z" fill="#83CD20"/>
                                <path d="M5.66406 9.1113L9.95686 12L13.9078 0L5.66406 9.1113Z" fill="#034833"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_3843_1169">
                                <rect width="13.908" height="12" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg></h6>
                            <h2 class="section__title-wrapper-title wow fadeInLeft animated" data-wow-delay=".3s">Tell us your question or inquiry.</h2>
                        </div>

                        <div class="contact-us__form-wrapper">
                            @if(session('success'))
                            <div class="alert alert-success" id="successMessage">
                                {{ session('success') }}
                            </div>
                        @endif
                        
                        <form class="contact-us__form" id="contact-us__form" method="POST" action="{{ route('contact.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="contact-us__input">
                                        <span>Your Email</span>
                                        <input name="email" id="email" type="email" placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="contact-us__input">
                                        <span>Your Phone</span>
                                        <input name="phone" id="phone" type="tel" placeholder="Your Phone">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="contact-us__input">
                                        <span>Your Address</span>
                                        <input name="address" id="address" type="text" placeholder="Your Address">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="contact-us__textarea">
                                        <span>Message</span>
                                        <textarea name="textarea" id="textarea" cols="30" rows="10" placeholder="Write Message.."></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="contact-btn mt-30">Send Message</button>
                                </div>
                            </div>
                        </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact-us-end-->

    <section class="product-filter-area section pb-190 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__title-wrapper text-center mb-30">
                        <h6 class="section__title-wrapper-subtitle mb-10 wow fadeInLeft animated" data-wow-delay=".2s">Contact Information</h6>
                        <h2 class="section__title-wrapper-title wow fadeInLeft animated" data-wow-delay=".3s">Let Your Wanderlust <br> Guide You</h2>
                    </div>
                </div>
            </div>
           <!-- <div class="row">
                <div class="col-xl-12">
                    <div class="rr-fea-product__tab rr-fea-product__tab-3 product-filter-area-review mb-60">
                        <nav>
                            <div class="nav nav-tab nav-inner nav-inner-3 align-items-center justify-content-center" id="nav-tab" role="tablist">
                                <div class="all-button d-flex">
                                    <button class="nav-link nav-link-3 rr-el-rep-filterBtn active wow fadeInLeft animated" data-wow-delay=".4s" id="nav-0-tab" data-bs-toggle="tab" data-bs-target="#nav-0" type="button" role="tab" aria-controls="nav-0" aria-selected="true">
                                        <span class="button button-3">
                                            <span>Asia</span>
                                        </span>
                                    </button>
                                    <button class="nav-link nav-link-3 rr-el-rep-filterBtn wow fadeInLeft animated" data-wow-delay=".5s" id="nav-1-tab" data-bs-toggle="tab" data-bs-target="#nav-1" type="button" role="tab" aria-controls="nav-1" aria-selected="false">
                                        <span class="button text-center">
                                            <span>Europe</span>
                                        </span>
                                    </button>
                                    <button class="nav-link nav-link-3 rr-el-rep-filterBtn wow fadeInLeft animated" data-wow-delay=".6s" id="nav-2-tab" data-bs-toggle="tab" data-bs-target="#nav-2" type="button" role="tab" aria-controls="nav-1" aria-selected="false">
                                        <span class="button text-center">
                                            <span>North America</span>
                                        </span>
                                    </button>
                                    <button class="nav-link nav-link-3 rr-el-rep-filterBtn wow fadeInLeft animated" data-wow-delay=".7s" id="nav-3-tab" data-bs-toggle="tab" data-bs-target="#nav-3" type="button" role="tab" aria-controls="nav-1" aria-selected="false">
                                        <span class="button text-center">
                                            <span>Australia</span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>-->
            <div class="row">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane active fade show" id="nav-0" role="tabpanel" aria-labelledby="nav-0-tab" tabindex="0">
                        <div class="rr-fea-product d-flex justify-content-between">
                            <div class="media-content has--line wow fadeInLeft animated" data-wow-delay=".2s">
                                <div class="latest-contact-us-2-media-content-contact">
                                    <div class="latest-contact-us-2-media-content-contact-icon">
                                        <a href="contact">
                                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M24.9512 19.0215L23.7793 23.9531C23.6328 24.6855 23.0469 25.1738 22.3145 25.1738C10.0098 25.125 0 15.1152 0 2.81055C0 2.07812 0.439453 1.49219 1.17188 1.3457L6.10352 0.173828C6.78711 0.0273438 7.51953 0.417969 7.8125 1.05273L10.1074 6.375C10.3516 7.00977 10.2051 7.74219 9.66797 8.13281L7.03125 10.2812C8.69141 13.6504 11.4258 16.3848 14.8438 18.0449L16.9922 15.4082C17.3828 14.9199 18.1152 14.7246 18.75 14.9688L24.0723 17.2637C24.707 17.6055 25.0977 18.3379 24.9512 19.0215Z" fill="#83CD20"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="latest-contact-us-2-media-content-contact-text">
                                        <span>Requesting A Call:</span>
                                        <a href="tel:6295550129">
                                            <h6>(629) 555-0129</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="latest-contact-us-2-media-content-contact">
                                    <div class="latest-contact-us-2-media-content-contact-icon">
                                        <a href="contact">
                                            <svg width="25" height="19" viewBox="0 0 25 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M22.6562 0.25C23.9258 0.25 25 1.32422 25 2.59375C25 3.375 24.6094 4.05859 24.0234 4.49805L13.4277 12.457C12.8418 12.8965 12.1094 12.8965 11.5234 12.457L0.927734 4.49805C0.341797 4.05859 0 3.375 0 2.59375C0 1.32422 1.02539 0.25 2.34375 0.25H22.6562ZM10.5957 13.7266C11.7188 14.5566 13.2324 14.5566 14.3555 13.7266L25 5.71875V15.875C25 17.6328 23.584 19 21.875 19H3.125C1.36719 19 0 17.6328 0 15.875V5.71875L10.5957 13.7266Z" fill="#83CD20"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="latest-contact-us-2-media-content-contact-text">
                                        <span>E-mail</span>
                                        <a href="mailto:info.rrdevs@gmail.com">
                                            <h6>info@theaccity.com</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="latest-contact-us-2-media-content-contact">
                                    <div class="latest-contact-us-2-media-content-contact-icon">
                                        <a href="contact">
                                            <svg width="19" height="26" viewBox="0 0 19 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.20312 24.5391C5.66406 21.3652 0 13.7969 0 9.5C0 4.32422 4.15039 0.125 9.375 0.125C14.5508 0.125 18.75 4.32422 18.75 9.5C18.75 13.7969 13.0371 21.3652 10.498 24.5391C9.91211 25.2715 8.78906 25.2715 8.20312 24.5391ZM9.375 12.625C11.084 12.625 12.5 11.2578 12.5 9.5C12.5 7.79102 11.084 6.375 9.375 6.375C7.61719 6.375 6.25 7.79102 6.25 9.5C6.25 11.2578 7.61719 12.625 9.375 12.625Z" fill="#83CD20"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="latest-contact-us-2-media-content-contact-text">
                                        <span>Location</span>
                                        <a href="https://maps.app.goo.gl/R8Y6ZY6s1KrcGWc67">
                                            <h6>Room G2-G4, Ground Floor<br>
                                                251-253 Commercial Road,
                                                 <br> London, E1 2BT.</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="media-content wow fadeInLeft animated" data-wow-delay=".3s">
                                <div class="latest-contact-us-2-media-content-contact">
                                    <div class="latest-contact-us-2-media-content-contact-text">
                                        <span>Monday</span>
                                        <h5>
                                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 20.5C4.45312 20.5 0 16.0469 0 10.5C0 4.99219 4.45312 0.5 10 0.5C15.5078 0.5 20 4.99219 20 10.5C20 16.0469 15.5078 20.5 10 20.5ZM9.0625 10.5C9.0625 10.8125 9.21875 11.125 9.45312 11.2812L13.2031 13.7812C13.6328 14.0938 14.2188 13.9766 14.4922 13.5469C14.8047 13.1172 14.6875 12.5312 14.2578 12.2188L10.9375 10.0312V5.1875C10.9375 4.67969 10.5078 4.25 9.96094 4.25C9.45312 4.25 9.02344 4.67969 9.02344 5.1875L9.0625 10.5Z" fill="#83CD20"/>
                                            </svg>
                                            9 am - 8 pm
                                        </h5>
                                    </div>
                                </div>
                                <div class="latest-contact-us-2-media-content-contact">
                                    <div class="latest-contact-us-2-media-content-contact-text">
                                        <span>Tuesday-Friday</span>
                                        <h5>
                                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 20.5C4.45312 20.5 0 16.0469 0 10.5C0 4.99219 4.45312 0.5 10 0.5C15.5078 0.5 20 4.99219 20 10.5C20 16.0469 15.5078 20.5 10 20.5ZM9.0625 10.5C9.0625 10.8125 9.21875 11.125 9.45312 11.2812L13.2031 13.7812C13.6328 14.0938 14.2188 13.9766 14.4922 13.5469C14.8047 13.1172 14.6875 12.5312 14.2578 12.2188L10.9375 10.0312V5.1875C10.9375 4.67969 10.5078 4.25 9.96094 4.25C9.45312 4.25 9.02344 4.67969 9.02344 5.1875L9.0625 10.5Z" fill="#83CD20"/>
                                            </svg>
                                            9 am - 8 pm
                                        </h5>
                                    </div>
                                </div>
                                <div class="latest-contact-us-2-media-content-contact">
                                    <div class="latest-contact-us-2-media-content-contact-text">
                                        <span>Saturday</span>
                                        <h5>
                                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 20.5C4.45312 20.5 0 16.0469 0 10.5C0 4.99219 4.45312 0.5 10 0.5C15.5078 0.5 20 4.99219 20 10.5C20 16.0469 15.5078 20.5 10 20.5ZM9.0625 10.5C9.0625 10.8125 9.21875 11.125 9.45312 11.2812L13.2031 13.7812C13.6328 14.0938 14.2188 13.9766 14.4922 13.5469C14.8047 13.1172 14.6875 12.5312 14.2578 12.2188L10.9375 10.0312V5.1875C10.9375 4.67969 10.5078 4.25 9.96094 4.25C9.45312 4.25 9.02344 4.67969 9.02344 5.1875L9.0625 10.5Z" fill="#83CD20"/>
                                            </svg>
                                            9 am - 8 pm
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content" data-tilt>
                                <img src="web-assets/imgs/concact/contact-tap-img.png" alt="img not found">
                            </div>
                        </div>
                    </div>
                    <!--<div class="tab-pane second-pane fade " id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab" tabindex="0">
                        <div class="rr-fea-product d-flex justify-content-between">
                            <div class="media-content has--line wow fadeInLeft animated" data-wow-delay=".2s">
                                <div class="latest-contact-us-2-media-content-contact">
                                    <div class="latest-contact-us-2-media-content-contact-icon">
                                        <a href="contact">
                                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M24.9512 19.0215L23.7793 23.9531C23.6328 24.6855 23.0469 25.1738 22.3145 25.1738C10.0098 25.125 0 15.1152 0 2.81055C0 2.07812 0.439453 1.49219 1.17188 1.3457L6.10352 0.173828C6.78711 0.0273438 7.51953 0.417969 7.8125 1.05273L10.1074 6.375C10.3516 7.00977 10.2051 7.74219 9.66797 8.13281L7.03125 10.2812C8.69141 13.6504 11.4258 16.3848 14.8438 18.0449L16.9922 15.4082C17.3828 14.9199 18.1152 14.7246 18.75 14.9688L24.0723 17.2637C24.707 17.6055 25.0977 18.3379 24.9512 19.0215Z" fill="#83CD20"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="latest-contact-us-2-media-content-contact-text">
                                        <span>Requesting A Call:</span>
                                        <a href="tel:6295550129">
                                            <h6>(629) 555-0129</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="latest-contact-us-2-media-content-contact">
                                    <div class="latest-contact-us-2-media-content-contact-icon">
                                        <a href="contact">
                                            <svg width="25" height="19" viewBox="0 0 25 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M22.6562 0.25C23.9258 0.25 25 1.32422 25 2.59375C25 3.375 24.6094 4.05859 24.0234 4.49805L13.4277 12.457C12.8418 12.8965 12.1094 12.8965 11.5234 12.457L0.927734 4.49805C0.341797 4.05859 0 3.375 0 2.59375C0 1.32422 1.02539 0.25 2.34375 0.25H22.6562ZM10.5957 13.7266C11.7188 14.5566 13.2324 14.5566 14.3555 13.7266L25 5.71875V15.875C25 17.6328 23.584 19 21.875 19H3.125C1.36719 19 0 17.6328 0 15.875V5.71875L10.5957 13.7266Z" fill="#83CD20"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="latest-contact-us-2-media-content-contact-text">
                                        <span>E-mail</span>
                                        <a href="mailto:info.rrdevs@gmail.com">
                                            <h6>info@example.com</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="latest-contact-us-2-media-content-contact">
                                    <div class="latest-contact-us-2-media-content-contact-icon">
                                        <a href="contact">
                                            <svg width="19" height="26" viewBox="0 0 19 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.20312 24.5391C5.66406 21.3652 0 13.7969 0 9.5C0 4.32422 4.15039 0.125 9.375 0.125C14.5508 0.125 18.75 4.32422 18.75 9.5C18.75 13.7969 13.0371 21.3652 10.498 24.5391C9.91211 25.2715 8.78906 25.2715 8.20312 24.5391ZM9.375 12.625C11.084 12.625 12.5 11.2578 12.5 9.5C12.5 7.79102 11.084 6.375 9.375 6.375C7.61719 6.375 6.25 7.79102 6.25 9.5C6.25 11.2578 7.61719 12.625 9.375 12.625Z" fill="#83CD20"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="latest-contact-us-2-media-content-contact-text">
                                        <span>Location</span>
                                        <a href="https://maps.app.goo.gl/R8Y6ZY6s1KrcGWc67">
                                            <h6>6391 Elgin St. Celina, <br> Delaware 10299</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="media-content wow fadeInLeft animated" data-wow-delay=".3s">
                                <div class="latest-contact-us-2-media-content-contact">
                                    <div class="latest-contact-us-2-media-content-contact-text">
                                        <span>Monday</span>
                                        <h5>
                                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 20.5C4.45312 20.5 0 16.0469 0 10.5C0 4.99219 4.45312 0.5 10 0.5C15.5078 0.5 20 4.99219 20 10.5C20 16.0469 15.5078 20.5 10 20.5ZM9.0625 10.5C9.0625 10.8125 9.21875 11.125 9.45312 11.2812L13.2031 13.7812C13.6328 14.0938 14.2188 13.9766 14.4922 13.5469C14.8047 13.1172 14.6875 12.5312 14.2578 12.2188L10.9375 10.0312V5.1875C10.9375 4.67969 10.5078 4.25 9.96094 4.25C9.45312 4.25 9.02344 4.67969 9.02344 5.1875L9.0625 10.5Z" fill="#83CD20"/>
                                            </svg>
                                            9 am - 8 pm
                                        </h5>
                                    </div>
                                </div>
                                <div class="latest-contact-us-2-media-content-contact">
                                    <div class="latest-contact-us-2-media-content-contact-text">
                                        <span>Tuesday-Friday</span>
                                        <h5>
                                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 20.5C4.45312 20.5 0 16.0469 0 10.5C0 4.99219 4.45312 0.5 10 0.5C15.5078 0.5 20 4.99219 20 10.5C20 16.0469 15.5078 20.5 10 20.5ZM9.0625 10.5C9.0625 10.8125 9.21875 11.125 9.45312 11.2812L13.2031 13.7812C13.6328 14.0938 14.2188 13.9766 14.4922 13.5469C14.8047 13.1172 14.6875 12.5312 14.2578 12.2188L10.9375 10.0312V5.1875C10.9375 4.67969 10.5078 4.25 9.96094 4.25C9.45312 4.25 9.02344 4.67969 9.02344 5.1875L9.0625 10.5Z" fill="#83CD20"/>
                                            </svg>
                                            9 am - 8 pm
                                        </h5>
                                    </div>
                                </div>
                                <div class="latest-contact-us-2-media-content-contact">
                                    <div class="latest-contact-us-2-media-content-contact-text">
                                        <span>Saturday</span>
                                        <h5>
                                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 20.5C4.45312 20.5 0 16.0469 0 10.5C0 4.99219 4.45312 0.5 10 0.5C15.5078 0.5 20 4.99219 20 10.5C20 16.0469 15.5078 20.5 10 20.5ZM9.0625 10.5C9.0625 10.8125 9.21875 11.125 9.45312 11.2812L13.2031 13.7812C13.6328 14.0938 14.2188 13.9766 14.4922 13.5469C14.8047 13.1172 14.6875 12.5312 14.2578 12.2188L10.9375 10.0312V5.1875C10.9375 4.67969 10.5078 4.25 9.96094 4.25C9.45312 4.25 9.02344 4.67969 9.02344 5.1875L9.0625 10.5Z" fill="#83CD20"/>
                                            </svg>
                                            9 am - 8 pm
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content" data-tilt>
                                <img src="web-assets/imgs/concact/contact-tap-img2.png" alt="img not found">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane second-pane fade " id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab" tabindex="0">
                        <div class="rr-fea-product d-flex justify-content-between">
                            <div class="media-content has--line wow fadeInLeft animated" data-wow-delay=".4zs">
                                <div class="latest-contact-us-2-media-content-contact">
                                    <div class="latest-contact-us-2-media-content-contact-icon">
                                        <a href="contact">
                                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M24.9512 19.0215L23.7793 23.9531C23.6328 24.6855 23.0469 25.1738 22.3145 25.1738C10.0098 25.125 0 15.1152 0 2.81055C0 2.07812 0.439453 1.49219 1.17188 1.3457L6.10352 0.173828C6.78711 0.0273438 7.51953 0.417969 7.8125 1.05273L10.1074 6.375C10.3516 7.00977 10.2051 7.74219 9.66797 8.13281L7.03125 10.2812C8.69141 13.6504 11.4258 16.3848 14.8438 18.0449L16.9922 15.4082C17.3828 14.9199 18.1152 14.7246 18.75 14.9688L24.0723 17.2637C24.707 17.6055 25.0977 18.3379 24.9512 19.0215Z" fill="#83CD20"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="latest-contact-us-2-media-content-contact-text">
                                        <span>Requesting A Call:</span>
                                        <a href="tel:6295550129">
                                            <h6>(629) 555-0129</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="latest-contact-us-2-media-content-contact">
                                    <div class="latest-contact-us-2-media-content-contact-icon">
                                        <a href="contact">
                                            <svg width="25" height="19" viewBox="0 0 25 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M22.6562 0.25C23.9258 0.25 25 1.32422 25 2.59375C25 3.375 24.6094 4.05859 24.0234 4.49805L13.4277 12.457C12.8418 12.8965 12.1094 12.8965 11.5234 12.457L0.927734 4.49805C0.341797 4.05859 0 3.375 0 2.59375C0 1.32422 1.02539 0.25 2.34375 0.25H22.6562ZM10.5957 13.7266C11.7188 14.5566 13.2324 14.5566 14.3555 13.7266L25 5.71875V15.875C25 17.6328 23.584 19 21.875 19H3.125C1.36719 19 0 17.6328 0 15.875V5.71875L10.5957 13.7266Z" fill="#83CD20"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="latest-contact-us-2-media-content-contact-text">
                                        <span>E-mail</span>
                                        <a href="mailto:info.rrdevs@gmail.com">
                                            <h6>info@example.com</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="latest-contact-us-2-media-content-contact">
                                    <div class="latest-contact-us-2-media-content-contact-icon">
                                        <a href="contact">
                                            <svg width="19" height="26" viewBox="0 0 19 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.20312 24.5391C5.66406 21.3652 0 13.7969 0 9.5C0 4.32422 4.15039 0.125 9.375 0.125C14.5508 0.125 18.75 4.32422 18.75 9.5C18.75 13.7969 13.0371 21.3652 10.498 24.5391C9.91211 25.2715 8.78906 25.2715 8.20312 24.5391ZM9.375 12.625C11.084 12.625 12.5 11.2578 12.5 9.5C12.5 7.79102 11.084 6.375 9.375 6.375C7.61719 6.375 6.25 7.79102 6.25 9.5C6.25 11.2578 7.61719 12.625 9.375 12.625Z" fill="#83CD20"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="latest-contact-us-2-media-content-contact-text">
                                        <span>Location</span>
                                        <a href="https://maps.app.goo.gl/R8Y6ZY6s1KrcGWc67">
                                            <h6>6391 Elgin St. Celina, <br> Delaware 10299</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="media-content wow fadeInLeft animated" data-wow-delay=".6s">
                                <div class="latest-contact-us-2-media-content-contact">
                                    <div class="latest-contact-us-2-media-content-contact-text">
                                        <span>Monday</span>
                                        <h5>
                                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 20.5C4.45312 20.5 0 16.0469 0 10.5C0 4.99219 4.45312 0.5 10 0.5C15.5078 0.5 20 4.99219 20 10.5C20 16.0469 15.5078 20.5 10 20.5ZM9.0625 10.5C9.0625 10.8125 9.21875 11.125 9.45312 11.2812L13.2031 13.7812C13.6328 14.0938 14.2188 13.9766 14.4922 13.5469C14.8047 13.1172 14.6875 12.5312 14.2578 12.2188L10.9375 10.0312V5.1875C10.9375 4.67969 10.5078 4.25 9.96094 4.25C9.45312 4.25 9.02344 4.67969 9.02344 5.1875L9.0625 10.5Z" fill="#83CD20"/>
                                            </svg>
                                            9 am - 8 pm
                                        </h5>
                                    </div>
                                </div>
                                <div class="latest-contact-us-2-media-content-contact">
                                    <div class="latest-contact-us-2-media-content-contact-text">
                                        <span>Tuesday-Friday</span>
                                        <h5>
                                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 20.5C4.45312 20.5 0 16.0469 0 10.5C0 4.99219 4.45312 0.5 10 0.5C15.5078 0.5 20 4.99219 20 10.5C20 16.0469 15.5078 20.5 10 20.5ZM9.0625 10.5C9.0625 10.8125 9.21875 11.125 9.45312 11.2812L13.2031 13.7812C13.6328 14.0938 14.2188 13.9766 14.4922 13.5469C14.8047 13.1172 14.6875 12.5312 14.2578 12.2188L10.9375 10.0312V5.1875C10.9375 4.67969 10.5078 4.25 9.96094 4.25C9.45312 4.25 9.02344 4.67969 9.02344 5.1875L9.0625 10.5Z" fill="#83CD20"/>
                                            </svg>
                                            9 am - 8 pm
                                        </h5>
                                    </div>
                                </div>
                                <div class="latest-contact-us-2-media-content-contact">
                                    <div class="latest-contact-us-2-media-content-contact-text">
                                        <span>Saturday</span>
                                        <h5>
                                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 20.5C4.45312 20.5 0 16.0469 0 10.5C0 4.99219 4.45312 0.5 10 0.5C15.5078 0.5 20 4.99219 20 10.5C20 16.0469 15.5078 20.5 10 20.5ZM9.0625 10.5C9.0625 10.8125 9.21875 11.125 9.45312 11.2812L13.2031 13.7812C13.6328 14.0938 14.2188 13.9766 14.4922 13.5469C14.8047 13.1172 14.6875 12.5312 14.2578 12.2188L10.9375 10.0312V5.1875C10.9375 4.67969 10.5078 4.25 9.96094 4.25C9.45312 4.25 9.02344 4.67969 9.02344 5.1875L9.0625 10.5Z" fill="#83CD20"/>
                                            </svg>
                                            9 am - 8 pm
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content" data-tilt>
                                <img src="web-assets/imgs/concact/contact-tap-img3.png" alt="img not found">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane second-pane fade " id="nav-3" role="tabpanel" aria-labelledby="nav-3-tab" tabindex="0">
                        <div class="rr-fea-product d-flex justify-content-between">
                            <div class="media-content has--line wow fadeInLeft animated" data-wow-delay=".4s">
                                <div class="latest-contact-us-2-media-content-contact">
                                    <div class="latest-contact-us-2-media-content-contact-icon">
                                        <a href="contact">
                                            <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M24.9512 19.0215L23.7793 23.9531C23.6328 24.6855 23.0469 25.1738 22.3145 25.1738C10.0098 25.125 0 15.1152 0 2.81055C0 2.07812 0.439453 1.49219 1.17188 1.3457L6.10352 0.173828C6.78711 0.0273438 7.51953 0.417969 7.8125 1.05273L10.1074 6.375C10.3516 7.00977 10.2051 7.74219 9.66797 8.13281L7.03125 10.2812C8.69141 13.6504 11.4258 16.3848 14.8438 18.0449L16.9922 15.4082C17.3828 14.9199 18.1152 14.7246 18.75 14.9688L24.0723 17.2637C24.707 17.6055 25.0977 18.3379 24.9512 19.0215Z" fill="#83CD20"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="latest-contact-us-2-media-content-contact-text">
                                        <span>Requesting A Call:</span>
                                        <a href="tel:6295550129">
                                            <h6>(629) 555-0129</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="latest-contact-us-2-media-content-contact">
                                    <div class="latest-contact-us-2-media-content-contact-icon">
                                        <a href="contact">
                                            <svg width="25" height="19" viewBox="0 0 25 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M22.6562 0.25C23.9258 0.25 25 1.32422 25 2.59375C25 3.375 24.6094 4.05859 24.0234 4.49805L13.4277 12.457C12.8418 12.8965 12.1094 12.8965 11.5234 12.457L0.927734 4.49805C0.341797 4.05859 0 3.375 0 2.59375C0 1.32422 1.02539 0.25 2.34375 0.25H22.6562ZM10.5957 13.7266C11.7188 14.5566 13.2324 14.5566 14.3555 13.7266L25 5.71875V15.875C25 17.6328 23.584 19 21.875 19H3.125C1.36719 19 0 17.6328 0 15.875V5.71875L10.5957 13.7266Z" fill="#83CD20"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="latest-contact-us-2-media-content-contact-text">
                                        <span>E-mail</span>
                                        <a href="mailto:info.rrdevs@gmail.com">
                                            <h6>info@example.com</h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="latest-contact-us-2-media-content-contact">
                                    <div class="latest-contact-us-2-media-content-contact-icon">
                                        <a href="contact">
                                            <svg width="19" height="26" viewBox="0 0 19 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.20312 24.5391C5.66406 21.3652 0 13.7969 0 9.5C0 4.32422 4.15039 0.125 9.375 0.125C14.5508 0.125 18.75 4.32422 18.75 9.5C18.75 13.7969 13.0371 21.3652 10.498 24.5391C9.91211 25.2715 8.78906 25.2715 8.20312 24.5391ZM9.375 12.625C11.084 12.625 12.5 11.2578 12.5 9.5C12.5 7.79102 11.084 6.375 9.375 6.375C7.61719 6.375 6.25 7.79102 6.25 9.5C6.25 11.2578 7.61719 12.625 9.375 12.625Z" fill="#83CD20"/>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="latest-contact-us-2-media-content-contact-text">
                                        <span>Location</span>
                                        <a href="https://maps.app.goo.gl/R8Y6ZY6s1KrcGWc67">
                                            <h6>6391 Elgin St. Celina, <br> Delaware 10299</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="media-content wow fadeInLeft animated" data-wow-delay=".6s">
                                <div class="latest-contact-us-2-media-content-contact">
                                    <div class="latest-contact-us-2-media-content-contact-text">
                                        <span>Monday</span>
                                        <h5>
                                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 20.5C4.45312 20.5 0 16.0469 0 10.5C0 4.99219 4.45312 0.5 10 0.5C15.5078 0.5 20 4.99219 20 10.5C20 16.0469 15.5078 20.5 10 20.5ZM9.0625 10.5C9.0625 10.8125 9.21875 11.125 9.45312 11.2812L13.2031 13.7812C13.6328 14.0938 14.2188 13.9766 14.4922 13.5469C14.8047 13.1172 14.6875 12.5312 14.2578 12.2188L10.9375 10.0312V5.1875C10.9375 4.67969 10.5078 4.25 9.96094 4.25C9.45312 4.25 9.02344 4.67969 9.02344 5.1875L9.0625 10.5Z" fill="#83CD20"/>
                                            </svg>
                                            9 am - 8 pm
                                        </h5>
                                    </div>
                                </div>
                                <div class="latest-contact-us-2-media-content-contact">
                                    <div class="latest-contact-us-2-media-content-contact-text">
                                        <span>Tuesday-Friday</span>
                                        <h5>
                                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 20.5C4.45312 20.5 0 16.0469 0 10.5C0 4.99219 4.45312 0.5 10 0.5C15.5078 0.5 20 4.99219 20 10.5C20 16.0469 15.5078 20.5 10 20.5ZM9.0625 10.5C9.0625 10.8125 9.21875 11.125 9.45312 11.2812L13.2031 13.7812C13.6328 14.0938 14.2188 13.9766 14.4922 13.5469C14.8047 13.1172 14.6875 12.5312 14.2578 12.2188L10.9375 10.0312V5.1875C10.9375 4.67969 10.5078 4.25 9.96094 4.25C9.45312 4.25 9.02344 4.67969 9.02344 5.1875L9.0625 10.5Z" fill="#83CD20"/>
                                            </svg>
                                            9 am - 8 pm
                                        </h5>
                                    </div>
                                </div>
                                <div class="latest-contact-us-2-media-content-contact">
                                    <div class="latest-contact-us-2-media-content-contact-text">
                                        <span>Saturday</span>
                                        <h5>
                                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 20.5C4.45312 20.5 0 16.0469 0 10.5C0 4.99219 4.45312 0.5 10 0.5C15.5078 0.5 20 4.99219 20 10.5C20 16.0469 15.5078 20.5 10 20.5ZM9.0625 10.5C9.0625 10.8125 9.21875 11.125 9.45312 11.2812L13.2031 13.7812C13.6328 14.0938 14.2188 13.9766 14.4922 13.5469C14.8047 13.1172 14.6875 12.5312 14.2578 12.2188L10.9375 10.0312V5.1875C10.9375 4.67969 10.5078 4.25 9.96094 4.25C9.45312 4.25 9.02344 4.67969 9.02344 5.1875L9.0625 10.5Z" fill="#83CD20"/>
                                            </svg>
                                            9 am - 8 pm
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content" data-tilt>
                                <img src="web-assets/imgs/concact/contact-tap-img4.png" alt="img not found">
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </section>



    <div class="loading-form">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2072.3321391295694!2d-0.06033822414424932!3d51.51470191017085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876033fa1dcac25%3A0xbf7189596412308!2sZain%20Global%20UK%20LTD!5e1!3m2!1sen!2sbd!4v1758650491643!5m2!1sen!2sbd" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div id="scroll-percentage"><span id="scroll-percentage-value"></span></div>
<!--scrollup-->
</main>

@endsection
