@extends('web_layouts.app')
@section('title', 'Contact TheAccity | Education & Study Abroad Consultants in London')
@section('meta_description', 'Get in touch with our expert advisors in London. Reach out for help with university admissions, student finance, and study abroad guidance.')

@section('wrapper')
    <!-- Body main wrapper start -->
    <main>

        <div class="breadcrumb__area dark-green breadcrumb-space overflow-hidden custom-width position-relative z-1"
            data-background="web-assets/imgs/bg/contactusbg.jpg">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <div class="breadcrumb__title-wrapper mb-15 mb-sm-10 mb-xs-5">
                                <h1 class="breadcrumb__title color-white wow fadeInLeft animated" data-wow-delay=".2s">
                                    Contact Us</h1>
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



        {{-- ============================================================
        HEAD OFFICE QUICK INFO BAR
        ============================================================ --}}
        <section class="contact-quick-info-section py-60"
            style="background: linear-gradient(135deg, #212958 0%, #1a2044 100%);">
            <div class="container">
                <div class="row justify-content-center" style="padding: 20px 0px;">
                    <!-- Phone -->
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-quick-card d-flex align-items-center gap-3 wow fadeInUp animated"
                            data-wow-delay=".1s">
                            <div class="contact-quick-icon">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M24.9512 19.0215L23.7793 23.9531C23.6328 24.6855 23.0469 25.1738 22.3145 25.1738C10.0098 25.125 0 15.1152 0 2.81055C0 2.07812 0.439453 1.49219 1.17188 1.3457L6.10352 0.173828C6.78711 0.0273438 7.51953 0.417969 7.8125 1.05273L10.1074 6.375C10.3516 7.00977 10.2051 7.74219 9.66797 8.13281L7.03125 10.2812C8.69141 13.6504 11.4258 16.3848 14.8438 18.0449L16.9922 15.4082C17.3828 14.9199 18.1152 14.7246 18.75 14.9688L24.0723 17.2637C24.707 17.6055 25.0977 18.3379 24.9512 19.0215Z"
                                        fill="#DA3A34" />
                                </svg>
                            </div>
                            <div class="contact-quick-text">
                                <span class="contact-quick-label">Call Us Today</span>
                                <a href="tel:+4402081435507" class="contact-quick-value">+44 0208 1435507</a>
                                <a href="tel:+447808223229" class="contact-quick-value">+44 7808 223229</a>
                            </div>
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-quick-card d-flex align-items-center gap-3 wow fadeInUp animated"
                            data-wow-delay=".2s">
                            <div class="contact-quick-icon">
                                <svg width="25" height="19" viewBox="0 0 25 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22.6562 0.25C23.9258 0.25 25 1.32422 25 2.59375C25 3.375 24.6094 4.05859 24.0234 4.49805L13.4277 12.457C12.8418 12.8965 12.1094 12.8965 11.5234 12.457L0.927734 4.49805C0.341797 4.05859 0 3.375 0 2.59375C0 1.32422 1.02539 0.25 2.34375 0.25H22.6562ZM10.5957 13.7266C11.7188 14.5566 13.2324 14.5566 14.3555 13.7266L25 5.71875V15.875C25 17.6328 23.584 19 21.875 19H3.125C1.36719 19 0 17.6328 0 15.875V5.71875L10.5957 13.7266Z"
                                        fill="#DA3A34" />
                                </svg>
                            </div>
                            <div class="contact-quick-text">
                                <span class="contact-quick-label">Send an Email</span>
                                <a href="mailto:info@theaccity.com" class="contact-quick-value">info@theaccity.com</a>
                                <a href="mailto:support@theaccity.com" class="contact-quick-value">support@theaccity.com</a>
                            </div>
                        </div>
                    </div>
                    <!-- Address -->
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-quick-card d-flex align-items-center gap-3 wow fadeInUp animated"
                            data-wow-delay=".3s">
                            <div class="contact-quick-icon">
                                <svg width="19" height="26" viewBox="0 0 19 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.20312 24.5391C5.66406 21.3652 0 13.7969 0 9.5C0 4.32422 4.15039 0.125 9.375 0.125C14.5508 0.125 18.75 4.32422 18.75 9.5C18.75 13.7969 13.0371 21.3652 10.498 24.5391C9.91211 25.2715 8.78906 25.2715 8.20312 24.5391ZM9.375 12.625C11.084 12.625 12.5 11.2578 12.5 9.5C12.5 7.79102 11.084 6.375 9.375 6.375C7.61719 6.375 6.25 7.79102 6.25 9.5C6.25 11.2578 7.61719 12.625 9.375 12.625Z"
                                        fill="#DA3A34" />
                                </svg>
                            </div>
                            <div class="contact-quick-text">
                                <span class="contact-quick-label">Head Office</span>
                                <a href="https://www.google.com/maps/search/?api=1&query=251-253+Commercial+Road+London+E1+2BT" target="_blank"
                                    class="contact-quick-value">Room G2-G4, Ground Floor, 251-253 Commercial Road, London,
                                    E1 2BT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ============================================================
        GLOBAL OFFICES SECTION
        ============================================================ --}}
        <section class="global-offices-section section pt-90 pb-90 overflow-hidden" style="background: #f8f9fc;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section__title-wrapper text-center mb-60 wow fadeInUp animated" data-wow-delay=".1s">
                            <h6 class="section__title-wrapper-subtitle mb-10">Our Global Presence</h6>
                            <h2 class="section__title-wrapper-title">Our Offices Around <br> the World</h2>
                            <p class="mt-15" style="color:#666; max-width:560px; margin-left:auto; margin-right:auto;">
                                We are proud to serve clients across multiple continents. Find the office nearest to you and
                                get in touch.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row g-4">

                    {{-- UAE Office --}}
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp animated" data-wow-delay=".1s">
                        <div class="office-card h-100">
                            <div class="office-card__flag">
                                <span class="office-flag-emoji">🇦🇪</span>
                                <span class="office-badge">UAE</span>
                            </div>
                            <div class="office-card__body">
                                <h4 class="office-card__title">UAE Office</h4>
                                <p class="office-card__subtitle">Abu Dhabi</p>
                                <div class="office-card__info">
                                    <div class="office-info-item">
                                        <span class="office-info-icon">
                                            <svg width="14" height="18" viewBox="0 0 19 26" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.20312 24.5391C5.66406 21.3652 0 13.7969 0 9.5C0 4.32422 4.15039 0.125 9.375 0.125C14.5508 0.125 18.75 4.32422 18.75 9.5C18.75 13.7969 13.0371 21.3652 10.498 24.5391C9.91211 25.2715 8.78906 25.2715 8.20312 24.5391ZM9.375 12.625C11.084 12.625 12.5 11.2578 12.5 9.5C12.5 7.79102 11.084 6.375 9.375 6.375C7.61719 6.375 6.25 7.79102 6.25 9.5C6.25 11.2578 7.61719 12.625 9.375 12.625Z"
                                                    fill="#DA3A34" />
                                            </svg>
                                        </span>
                                        <span>Put 0 15 SEC SHS Al Shamkha, Abu Dhabi, UAE</span>
                                    </div>
                                    <div class="office-info-item">
                                        <span class="office-info-icon">
                                            <svg width="15" height="13" viewBox="0 0 25 19" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M22.6562 0.25C23.9258 0.25 25 1.32422 25 2.59375C25 3.375 24.6094 4.05859 24.0234 4.49805L13.4277 12.457C12.8418 12.8965 12.1094 12.8965 11.5234 12.457L0.927734 4.49805C0.341797 4.05859 0 3.375 0 2.59375C0 1.32422 1.02539 0.25 2.34375 0.25H22.6562ZM10.5957 13.7266C11.7188 14.5566 13.2324 14.5566 14.3555 13.7266L25 5.71875V15.875C25 17.6328 23.584 19 21.875 19H3.125C1.36719 19 0 17.6328 0 15.875V5.71875L10.5957 13.7266Z"
                                                    fill="#DA3A34" />
                                            </svg>
                                        </span>
                                        <a href="mailto:info@zainglobal.co.uk">info@zainglobal.co.uk</a>
                                    </div>
                                    <div class="office-info-item">
                                        <span class="office-info-icon">
                                            <svg width="15" height="15" viewBox="0 0 26 26" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M24.9512 19.0215L23.7793 23.9531C23.6328 24.6855 23.0469 25.1738 22.3145 25.1738C10.0098 25.125 0 15.1152 0 2.81055C0 2.07812 0.439453 1.49219 1.17188 1.3457L6.10352 0.173828C6.78711 0.0273438 7.51953 0.417969 7.8125 1.05273L10.1074 6.375C10.3516 7.00977 10.2051 7.74219 9.66797 8.13281L7.03125 10.2812C8.69141 13.6504 11.4258 16.3848 14.8438 18.0449L16.9922 15.4082C17.3828 14.9199 18.1152 14.7246 18.75 14.9688L24.0723 17.2637C24.707 17.6055 25.0977 18.3379 24.9512 19.0215Z"
                                                    fill="#DA3A34" />
                                            </svg>
                                        </span>
                                        <a href="tel:+971562828656">+971 562 828 656</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Nigeria Office --}}
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp animated" data-wow-delay=".2s">
                        <div class="office-card h-100">
                            <div class="office-card__flag">
                                <span class="office-flag-emoji">🇳🇬</span>
                                <span class="office-badge">Nigeria</span>
                            </div>
                            <div class="office-card__body">
                                <h4 class="office-card__title">Nigeria Office</h4>
                                <p class="office-card__subtitle">Lagos</p>
                                <div class="office-card__info">
                                    <div class="office-info-item">
                                        <span class="office-info-icon">
                                            <svg width="14" height="18" viewBox="0 0 19 26" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.20312 24.5391C5.66406 21.3652 0 13.7969 0 9.5C0 4.32422 4.15039 0.125 9.375 0.125C14.5508 0.125 18.75 4.32422 18.75 9.5C18.75 13.7969 13.0371 21.3652 10.498 24.5391C9.91211 25.2715 8.78906 25.2715 8.20312 24.5391ZM9.375 12.625C11.084 12.625 12.5 11.2578 12.5 9.5C12.5 7.79102 11.084 6.375 9.375 6.375C7.61719 6.375 6.25 7.79102 6.25 9.5C6.25 11.2578 7.61719 12.625 9.375 12.625Z"
                                                    fill="#DA3A34" />
                                            </svg>
                                        </span>
                                        <span>Square Plaza, 131 Obafemi Awolowo Wy, Off Alausa, Ikeja 100271, Lagos,
                                            Nigeria</span>
                                    </div>
                                    <div class="office-info-item">
                                        <span class="office-info-icon">
                                            <svg width="15" height="13" viewBox="0 0 25 19" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M22.6562 0.25C23.9258 0.25 25 1.32422 25 2.59375C25 3.375 24.6094 4.05859 24.0234 4.49805L13.4277 12.457C12.8418 12.8965 12.1094 12.8965 11.5234 12.457L0.927734 4.49805C0.341797 4.05859 0 3.375 0 2.59375C0 1.32422 1.02539 0.25 2.34375 0.25H22.6562ZM10.5957 13.7266C11.7188 14.5566 13.2324 14.5566 14.3555 13.7266L25 5.71875V15.875C25 17.6328 23.584 19 21.875 19H3.125C1.36719 19 0 17.6328 0 15.875V5.71875L10.5957 13.7266Z"
                                                    fill="#DA3A34" />
                                            </svg>
                                        </span>
                                        <a href="mailto:nigeria@zainglobal.co.uk">nigeria@zainglobal.co.uk</a>
                                    </div>
                                    <div class="office-info-item">
                                        <span class="office-info-icon">
                                            <svg width="15" height="15" viewBox="0 0 26 26" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M24.9512 19.0215L23.7793 23.9531C23.6328 24.6855 23.0469 25.1738 22.3145 25.1738C10.0098 25.125 0 15.1152 0 2.81055C0 2.07812 0.439453 1.49219 1.17188 1.3457L6.10352 0.173828C6.78711 0.0273438 7.51953 0.417969 7.8125 1.05273L10.1074 6.375C10.3516 7.00977 10.2051 7.74219 9.66797 8.13281L7.03125 10.2812C8.69141 13.6504 11.4258 16.3848 14.8438 18.0449L16.9922 15.4082C17.3828 14.9199 18.1152 14.7246 18.75 14.9688L24.0723 17.2637C24.707 17.6055 25.0977 18.3379 24.9512 19.0215Z"
                                                    fill="#DA3A34" />
                                            </svg>
                                        </span>
                                        <a href="tel:+2347012029574">+234 701 202 9574</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- India Hyderabad Office --}}
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp animated" data-wow-delay=".3s">
                        <div class="office-card h-100">
                            <div class="office-card__flag">
                                <span class="office-flag-emoji">🇮🇳</span>
                                <span class="office-badge">India</span>
                            </div>
                            <div class="office-card__body">
                                <h4 class="office-card__title">India Office</h4>
                                <p class="office-card__subtitle">Hyderabad</p>
                                <div class="office-card__info">
                                    <div class="office-info-item">
                                        <span class="office-info-icon">
                                            <svg width="14" height="18" viewBox="0 0 19 26" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.20312 24.5391C5.66406 21.3652 0 13.7969 0 9.5C0 4.32422 4.15039 0.125 9.375 0.125C14.5508 0.125 18.75 4.32422 18.75 9.5C18.75 13.7969 13.0371 21.3652 10.498 24.5391C9.91211 25.2715 8.78906 25.2715 8.20312 24.5391ZM9.375 12.625C11.084 12.625 12.5 11.2578 12.5 9.5C12.5 7.79102 11.084 6.375 9.375 6.375C7.61719 6.375 6.25 7.79102 6.25 9.5C6.25 11.2578 7.61719 12.625 9.375 12.625Z"
                                                    fill="#DA3A34" />
                                            </svg>
                                        </span>
                                        <span>Office No.102B, 1st Floor, V V Vintage Boulevard, Raj Bhavan Rd, Somajiguda,
                                            Hyderabad, Telangana 500082</span>
                                    </div>
                                    <div class="office-info-item">
                                        <span class="office-info-icon">
                                            <svg width="15" height="13" viewBox="0 0 25 19" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M22.6562 0.25C23.9258 0.25 25 1.32422 25 2.59375C25 3.375 24.6094 4.05859 24.0234 4.49805L13.4277 12.457C12.8418 12.8965 12.1094 12.8965 11.5234 12.457L0.927734 4.49805C0.341797 4.05859 0 3.375 0 2.59375C0 1.32422 1.02539 0.25 2.34375 0.25H22.6562ZM10.5957 13.7266C11.7188 14.5566 13.2324 14.5566 14.3555 13.7266L25 5.71875V15.875C25 17.6328 23.584 19 21.875 19H3.125C1.36719 19 0 17.6328 0 15.875V5.71875L10.5957 13.7266Z"
                                                    fill="#DA3A34" />
                                            </svg>
                                        </span>
                                        <div>
                                            <a href="mailto:ragini@zainglobal.co.uk">ragini@zainglobal.co.uk</a><br>
                                            <a href="mailto:bhavesh@zainglobal.co.uk">bhavesh@zainglobal.co.uk</a>
                                        </div>
                                    </div>
                                    <div class="office-info-item">
                                        <span class="office-info-icon">
                                            <svg width="15" height="15" viewBox="0 0 26 26" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M24.9512 19.0215L23.7793 23.9531C23.6328 24.6855 23.0469 25.1738 22.3145 25.1738C10.0098 25.125 0 15.1152 0 2.81055C0 2.07812 0.439453 1.49219 1.17188 1.3457L6.10352 0.173828C6.78711 0.0273438 7.51953 0.417969 7.8125 1.05273L10.1074 6.375C10.3516 7.00977 10.2051 7.74219 9.66797 8.13281L7.03125 10.2812C8.69141 13.6504 11.4258 16.3848 14.8438 18.0449L16.9922 15.4082C17.3828 14.9199 18.1152 14.7246 18.75 14.9688L24.0723 17.2637C24.707 17.6055 25.0977 18.3379 24.9512 19.0215Z"
                                                    fill="#DA3A34" />
                                            </svg>
                                        </span>
                                        <a href="tel:+917793939648">+91 779 393 9648</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- India Mumbai Office --}}
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp animated" data-wow-delay=".4s">
                        <div class="office-card h-100">
                            <div class="office-card__flag">
                                <span class="office-flag-emoji">🇮🇳</span>
                                <span class="office-badge">India</span>
                            </div>
                            <div class="office-card__body">
                                <h4 class="office-card__title">India Office</h4>
                                <p class="office-card__subtitle">Mumbai</p>
                                <div class="office-card__info">
                                    <div class="office-info-item">
                                        <span class="office-info-icon">
                                            <svg width="14" height="18" viewBox="0 0 19 26" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.20312 24.5391C5.66406 21.3652 0 13.7969 0 9.5C0 4.32422 4.15039 0.125 9.375 0.125C14.5508 0.125 18.75 4.32422 18.75 9.5C18.75 13.7969 13.0371 21.3652 10.498 24.5391C9.91211 25.2715 8.78906 25.2715 8.20312 24.5391ZM9.375 12.625C11.084 12.625 12.5 11.2578 12.5 9.5C12.5 7.79102 11.084 6.375 9.375 6.375C7.61719 6.375 6.25 7.79102 6.25 9.5C6.25 11.2578 7.61719 12.625 9.375 12.625Z"
                                                    fill="#DA3A34" />
                                            </svg>
                                        </span>
                                        <span>315, Morya Estate, KL Walawalkar Marg, Veera Desai Industrial Estate, Andheri
                                            West, Mumbai 400053</span>
                                    </div>
                                    <div class="office-info-item">
                                        <span class="office-info-icon">
                                            <svg width="15" height="13" viewBox="0 0 25 19" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M22.6562 0.25C23.9258 0.25 25 1.32422 25 2.59375C25 3.375 24.6094 4.05859 24.0234 4.49805L13.4277 12.457C12.8418 12.8965 12.1094 12.8965 11.5234 12.457L0.927734 4.49805C0.341797 4.05859 0 3.375 0 2.59375C0 1.32422 1.02539 0.25 2.34375 0.25H22.6562ZM10.5957 13.7266C11.7188 14.5566 13.2324 14.5566 14.3555 13.7266L25 5.71875V15.875C25 17.6328 23.584 19 21.875 19H3.125C1.36719 19 0 17.6328 0 15.875V5.71875L10.5957 13.7266Z"
                                                    fill="#DA3A34" />
                                            </svg>
                                        </span>
                                        <a href="mailto:india@zainglobal.co.uk">india@zainglobal.co.uk</a>
                                    </div>
                                    <div class="office-info-item">
                                        <span class="office-info-icon">
                                            <svg width="15" height="15" viewBox="0 0 26 26" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M24.9512 19.0215L23.7793 23.9531C23.6328 24.6855 23.0469 25.1738 22.3145 25.1738C10.0098 25.125 0 15.1152 0 2.81055C0 2.07812 0.439453 1.49219 1.17188 1.3457L6.10352 0.173828C6.78711 0.0273438 7.51953 0.417969 7.8125 1.05273L10.1074 6.375C10.3516 7.00977 10.2051 7.74219 9.66797 8.13281L7.03125 10.2812C8.69141 13.6504 11.4258 16.3848 14.8438 18.0449L16.9922 15.4082C17.3828 14.9199 18.1152 14.7246 18.75 14.9688L24.0723 17.2637C24.707 17.6055 25.0977 18.3379 24.9512 19.0215Z"
                                                    fill="#DA3A34" />
                                            </svg>
                                        </span>
                                        <a href="tel:+918779373134">+91 877 937 3134</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Bangladesh Chattogram Office --}}
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp animated" data-wow-delay=".5s">
                        <div class="office-card h-100">
                            <div class="office-card__flag">
                                <span class="office-flag-emoji">🇧🇩</span>
                                <span class="office-badge">Bangladesh</span>
                            </div>
                            <div class="office-card__body">
                                <h4 class="office-card__title">Bangladesh Office</h4>
                                <p class="office-card__subtitle">Chattogram</p>
                                <div class="office-card__info">
                                    <div class="office-info-item">
                                        <span class="office-info-icon">
                                            <svg width="14" height="18" viewBox="0 0 19 26" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.20312 24.5391C5.66406 21.3652 0 13.7969 0 9.5C0 4.32422 4.15039 0.125 9.375 0.125C14.5508 0.125 18.75 4.32422 18.75 9.5C18.75 13.7969 13.0371 21.3652 10.498 24.5391C9.91211 25.2715 8.78906 25.2715 8.20312 24.5391ZM9.375 12.625C11.084 12.625 12.5 11.2578 12.5 9.5C12.5 7.79102 11.084 6.375 9.375 6.375C7.61719 6.375 6.25 7.79102 6.25 9.5C6.25 11.2578 7.61719 12.625 9.375 12.625Z"
                                                    fill="#DA3A34" />
                                            </svg>
                                        </span>
                                        <span>Salam Heights, 4th Floor (Flat: 3B, Lift-5), House: 01, Road No: 01, South
                                            Khulshi, Chattogram, Bangladesh</span>
                                    </div>
                                    <div class="office-info-item">
                                        <span class="office-info-icon">
                                            <svg width="15" height="13" viewBox="0 0 25 19" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M22.6562 0.25C23.9258 0.25 25 1.32422 25 2.59375C25 3.375 24.6094 4.05859 24.0234 4.49805L13.4277 12.457C12.8418 12.8965 12.1094 12.8965 11.5234 12.457L0.927734 4.49805C0.341797 4.05859 0 3.375 0 2.59375C0 1.32422 1.02539 0.25 2.34375 0.25H22.6562ZM10.5957 13.7266C11.7188 14.5566 13.2324 14.5566 14.3555 13.7266L25 5.71875V15.875C25 17.6328 23.584 19 21.875 19H3.125C1.36719 19 0 17.6328 0 15.875V5.71875L10.5957 13.7266Z"
                                                    fill="#DA3A34" />
                                            </svg>
                                        </span>
                                        <a
                                            href="mailto:international.bd@zainglobal.co.uk">international.bd@zainglobal.co.uk</a>
                                    </div>
                                    <div class="office-info-item">
                                        <span class="office-info-icon">
                                            <svg width="15" height="15" viewBox="0 0 26 26" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M24.9512 19.0215L23.7793 23.9531C23.6328 24.6855 23.0469 25.1738 22.3145 25.1738C10.0098 25.125 0 15.1152 0 2.81055C0 2.07812 0.439453 1.49219 1.17188 1.3457L6.10352 0.173828C6.78711 0.0273438 7.51953 0.417969 7.8125 1.05273L10.1074 6.375C10.3516 7.00977 10.2051 7.74219 9.66797 8.13281L7.03125 10.2812C8.69141 13.6504 11.4258 16.3848 14.8438 18.0449L16.9922 15.4082C17.3828 14.9199 18.1152 14.7246 18.75 14.9688L24.0723 17.2637C24.707 17.6055 25.0977 18.3379 24.9512 19.0215Z"
                                                    fill="#DA3A34" />
                                            </svg>
                                        </span>
                                        <a href="tel:+8801632818852">+880 1632 818 852</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Bangladesh Dhaka Office --}}
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp animated" data-wow-delay=".6s">
                        <div class="office-card h-100">
                            <div class="office-card__flag">
                                <span class="office-flag-emoji">🇧🇩</span>
                                <span class="office-badge">Bangladesh</span>
                            </div>
                            <div class="office-card__body">
                                <h4 class="office-card__title">Bangladesh Office</h4>
                                <p class="office-card__subtitle">Dhaka</p>
                                <div class="office-card__info">
                                    <div class="office-info-item">
                                        <span class="office-info-icon">
                                            <svg width="14" height="18" viewBox="0 0 19 26" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.20312 24.5391C5.66406 21.3652 0 13.7969 0 9.5C0 4.32422 4.15039 0.125 9.375 0.125C14.5508 0.125 18.75 4.32422 18.75 9.5C18.75 13.7969 13.0371 21.3652 10.498 24.5391C9.91211 25.2715 8.78906 25.2715 8.20312 24.5391ZM9.375 12.625C11.084 12.625 12.5 11.2578 12.5 9.5C12.5 7.79102 11.084 6.375 9.375 6.375C7.61719 6.375 6.25 7.79102 6.25 9.5C6.25 11.2578 7.61719 12.625 9.375 12.625Z"
                                                    fill="#DA3A34" />
                                            </svg>
                                        </span>
                                        <span>1st Floor, Haveli Complex, Walton Building, Near Jamuna Future Shopping Mall,
                                            Bashundhara, Dhaka</span>
                                    </div>
                                    <div class="office-info-item">
                                        <span class="office-info-icon">
                                            <svg width="15" height="13" viewBox="0 0 25 19" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M22.6562 0.25C23.9258 0.25 25 1.32422 25 2.59375C25 3.375 24.6094 4.05859 24.0234 4.49805L13.4277 12.457C12.8418 12.8965 12.1094 12.8965 11.5234 12.457L0.927734 4.49805C0.341797 4.05859 0 3.375 0 2.59375C0 1.32422 1.02539 0.25 2.34375 0.25H22.6562ZM10.5957 13.7266C11.7188 14.5566 13.2324 14.5566 14.3555 13.7266L25 5.71875V15.875C25 17.6328 23.584 19 21.875 19H3.125C1.36719 19 0 17.6328 0 15.875V5.71875L10.5957 13.7266Z"
                                                    fill="#DA3A34" />
                                            </svg>
                                        </span>
                                        <a href="mailto:dhaka@zainglobal.co.uk">dhaka@zainglobal.co.uk</a>
                                    </div>
                                    <div class="office-info-item">
                                        <span class="office-info-icon">
                                            <svg width="15" height="15" viewBox="0 0 26 26" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M24.9512 19.0215L23.7793 23.9531C23.6328 24.6855 23.0469 25.1738 22.3145 25.1738C10.0098 25.125 0 15.1152 0 2.81055C0 2.07812 0.439453 1.49219 1.17188 1.3457L6.10352 0.173828C6.78711 0.0273438 7.51953 0.417969 7.8125 1.05273L10.1074 6.375C10.3516 7.00977 10.2051 7.74219 9.66797 8.13281L7.03125 10.2812C8.69141 13.6504 11.4258 16.3848 14.8438 18.0449L16.9922 15.4082C17.3828 14.9199 18.1152 14.7246 18.75 14.9688L24.0723 17.2637C24.707 17.6055 25.0977 18.3379 24.9512 19.0215Z"
                                                    fill="#DA3A34" />
                                            </svg>
                                        </span>
                                        <a href="tel:+8801302523589">+880 1302 523 589</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>{{-- /row --}}
            </div>
        </section>

        {{-- ============================================================
        MAP SECTION
        ============================================================ --}}
        <div class="loading-form">
            <div class="sk-three-bounce">
                <div class="sk-child sk-bounce1"></div>
                <div class="sk-child sk-bounce2"></div>
                <div class="sk-child sk-bounce3"></div>
            </div>
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2072.3321391295694!2d-0.06033822414424932!3d51.51470191017085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876033fa1dcac25%3A0xbf7189596412308!2sZain%20Global%20UK%20LTD!5e1!3m2!1sen!2sbd!4v1758650491643!5m2!1sen!2sbd"
                width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        {{-- ============================================================
        CONTACT FORM + HEAD OFFICE INFO SECTION
        ============================================================ --}}
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
                                <h6 class="section__title-wrapper-black-subtitle mb-10 wow fadeInLeft animated"
                                    data-wow-delay=".2s">Contact Information
                                    <svg width="14" height="12" viewBox="0 0 14 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_3843_1169)">
                                            <path d="M4.92578 10.3748L6.49623 9.68052L5.62583 9.07031L4.92578 10.3748Z"
                                                fill="#DA3A34" />
                                            <path d="M4.92578 10.3743L5.00073 8L13.9088 0L5.66505 9.1113L4.92578 10.3743Z"
                                                fill="#DA3A34" />
                                            <path d="M5 8L13.908 0L0 6.22704L5 8Z" fill="#DA3A34" />
                                            <path d="M5.66406 9.1113L9.95686 12L13.9078 0L5.66406 9.1113Z" fill="#212958" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_3843_1169">
                                                <rect width="13.908" height="12" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </h6>
                                <h2 class="section__title-wrapper-title wow fadeInLeft animated" data-wow-delay=".3s">Tell
                                    us your question or inquiry.</h2>
                            </div>

                            <div class="contact-us__form-wrapper">
                                @if(session('success'))
                                    <div class="alert alert-success" id="successMessage">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <form class="contact-us__form" id="contact-us__form" method="POST"
                                    action="{{ route('contact.store') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="contact-us__input">
                                                <span>Your Email</span>
                                                <input name="email" id="email" type="email" placeholder="Your Email"
                                                    required>
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
                                                <textarea name="textarea" id="textarea" cols="30" rows="10"
                                                    placeholder="Write Message.."></textarea>
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
        <div id="scroll-percentage"><span id="scroll-percentage-value"></span></div>
        <!--scrollup-->
    </main>

    {{-- ============================================================
    OFFICE CARD STYLES
    ============================================================ --}}

    <style>
        /* ---- Quick Info Bar ---- */
        .contact-quick-card {
            background: rgba(255, 255, 255, 0.07);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 14px;
            padding: 22px 24px;
            transition: background .3s, transform .3s;
        }

        .contact-quick-card:hover {
            background: rgba(255, 255, 255, 0.14);
            transform: translateY(-4px);
        }

        .contact-quick-icon {
            width: 52px;
            height: 52px;
            background: rgba(218, 58, 52, 0.15);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .contact-quick-text {
            display: flex;
            flex-direction: column;
            gap: 3px;
        }

        .contact-quick-label {
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.5);
        }

        .contact-quick-value,
        .contact-quick-value a {
            font-size: 14px;
            font-weight: 600;
            color: #fff;
            text-decoration: none;
            transition: color .2s;
        }

        .contact-quick-value:hover {
            color: #DA3A34;
        }

        /* ---- Office Card ---- */
        .office-card {
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 24px rgba(33, 41, 88, 0.08);
            border: 1px solid #edf0f7;
            transition: box-shadow .3s, transform .3s;
            display: flex;
            flex-direction: column;
        }

        .office-card:hover {
            box-shadow: 0 12px 40px rgba(33, 41, 88, 0.16);
            transform: translateY(-6px);
        }

        .office-card__flag {
            background: linear-gradient(135deg, #212958 0%, #1a2044 100%);
            padding: 20px 24px 16px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .office-flag-emoji {
            font-size: 36px;
            line-height: 1;
        }

        .office-badge {
            background: rgba(218, 58, 52, 0.9);
            color: #fff;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.2px;
            text-transform: uppercase;
            padding: 4px 12px;
            border-radius: 50px;
        }

        .office-card__body {
            padding: 24px;
            flex: 1;
        }

        .office-card__title {
            font-size: 18px;
            font-weight: 700;
            color: #212958;
            margin-bottom: 4px;
        }

        .office-card__subtitle {
            font-size: 13px;
            font-weight: 600;
            color: #DA3A34;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 18px;
        }

        .office-card__info {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .office-info-item {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            font-size: 14px;
            color: #555;
            line-height: 1.55;
        }

        .office-info-icon {
            width: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 2px;
            flex-shrink: 0;
        }

        .office-info-item a {
            color: #444;
            text-decoration: none;
            transition: color .2s;
        }

        .office-info-item a:hover {
            color: #DA3A34;
        }
    </style>


@endsection