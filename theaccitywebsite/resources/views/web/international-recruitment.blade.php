@extends('web_layouts.app')
@section('title', 'International Student Recruitment & Study Abroad Consultancy | TheAccity')
@section('meta_description', 'Global education consultancy for international students. Get expert help with UK university admissions, visa guidance, and study abroad pathways from our London team.')

@section('wrapper')
    <main>
        <!-- Breadcrumb area start -->
        <div class="breadcrumb__area dark-green breadcrumb-space overflow-hidden custom-width position-relative z-1"
            data-background="{{ asset('web-assets/imgs/bg/breadcrumb-bg.jpg') }}">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <div class="breadcrumb__title-wrapper mb-15">
                                <h1 class="breadcrumb__title color-white wow fadeInLeft animated" data-wow-delay=".2s">
                                    International Student Recruitment</h1>
                            </div>
                            <div class="breadcrumb__menu wow fadeInLeft animated" data-wow-delay=".3s">
                                <nav>
                                    <ul>
                                        <li><span><a href="/">Home</a></span></li>
                                        <li class="active"><span>International Recruitment</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ✅ 01. Global Vision Section -->
        <section class="international-vision-area section-space overflow-hidden">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="vision-thumb p-relative">
                            <img src="{{ asset('web-assets/imgs/home-4/about-4-img-2.png') }}" class="img-fluid rounded-4 shadow-lg" alt="Global Students">
                            <div class="experience-badge bg-white shadow p-3 rounded-3 d-flex align-items-center gap-2" style="position:absolute; top:20px; right:-20px; border-left:4px solid #DA3A34;">
                                <i class="fa-solid fa-earth-americas text-danger"></i>
                                <span class="fw-bold">Global Presence</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="section__title-wrapper mb-30">
                            <h6 class="section__title-wrapper-black-subtitle mb-10 wow fadeInLeft animated" data-wow-delay=".2s">Your Gateway to the UK</h6>
                            <h2 class="section__title-wrapper-title wow fadeInLeft animated" data-wow-delay=".3s">Simplify Your <span style="color:#DA3A34;">Global Education</span> Journey</h2>
                        </div>
                        <p class="mb-20">TheAccity is a premier educational consultancy based in London, dedicated to aiding international students in achieving their academic dreams at world-class UK institutions.</p>
                        <p class="mb-30">We provide expert, end-to-end guidance from the first consultation through to your arrival on campus. Our high visa success rate and extensive university network make us the preferred partner for global students.</p>
                        
                        <div class="stats-row d-flex gap-4 flex-wrap">
                            <div class="stat-item">
                                <h3 class="mb-0" style="color:#212958;">98%</h3>
                                <p class="small text-muted mb-0">Visa Success Rate</p>
                            </div>
                            <div class="stat-item">
                                <h3 class="mb-0" style="color:#212958;">50+</h3>
                                <p class="small text-muted mb-0">University Partners</p>
                            </div>
                            <div class="stat-item">
                                <h3 class="mb-0" style="color:#212958;">1k+</h3>
                                <p class="small text-muted mb-0">Students Placed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ✅ 02. Expert Services Modal Section (Grid) -->
        <section class="expert-services section-space bg-gray">
            <div class="container">
                <div class="section__title-wrapper text-center mb-50">
                    <h2 class="section__title-wrapper-title">Comprehensive <span style="color:#212958;">International Services</span></h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card-modern p-45 bg-white rounded-4 shadow-hover h-100 transition-3">
                            <div class="icon mb-25"><i class="fa-solid fa-passport text-danger" style="font-size:32px;"></i></div>
                            <h4>Visa & CAS Support</h4>
                            <p class="mb-0">Precise guidance on Tier 4 (Student) visa requirements, CAS letter acquisition, and BRP compliance.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card-modern p-45 bg-white rounded-4 shadow-hover h-100 transition-3">
                            <div class="icon mb-25"><i class="fa-solid fa-language text-danger" style="font-size:32px;"></i></div>
                            <h4>English Language Prep</h4>
                            <p class="mb-0">Assistance with IELTS, PTE, and SELT test preparation ensuring you meet university standard entry levels.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card-modern p-45 bg-white rounded-4 shadow-hover h-100 transition-3">
                            <div class="icon mb-25"><i class="fa-solid fa-plane-departure text-danger" style="font-size:32px;"></i></div>
                            <h4>Pre-Departure Briefing</h4>
                            <p class="mb-0">Comprehensive webinars and sessions to prepare you for life, culture, and academic rigour in the UK.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ✅ 03. Global Timeline RoadMap -->
        <section class="timeline-area section-space pb-90 overflow-hidden">
            <div class="container">
                <div class="section__title-wrapper text-center mb-70">
                    <h2 class="section__title-wrapper-title">The Student <span style="color:#DA3A34;">Success Path</span></h2>
                </div>
                <!-- Interactive Timeline Style -->
                <div class="d-none d-lg-block p-relative" style="height:2px; background:rgba(33,41,88,0.1); width:80%; margin: 0 auto 50px;">
                    <div style="position:absolute; width:15px; height:15px; background:#DA3A34; border-radius:50%; top:-6px; left:0;"></div>
                    <div style="position:absolute; width:15px; height:15px; background:#DA3A34; border-radius:50%; top:-6px; left:33%;"></div>
                    <div style="position:absolute; width:15px; height:15px; background:#DA3A34; border-radius:50%; top:-6px; left:66%;"></div>
                    <div style="position:absolute; width:15px; height:15px; background:#DA3A34; border-radius:50%; top:-6px; right:0;"></div>
                </div>
                <div class="row text-center">
                    <div class="col-lg-3 col-md-6 mb-30">
                        <h5 style="color:#212958;">1. Counselling</h5>
                        <p class="small px-3">Profile evaluation and choosing the ideal university based on your goals.</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <h5 style="color:#212958;">2. Admission</h5>
                        <p class="small px-3">Filing applications and securing your Offer Letter and CAS from the university.</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <h5 style="color:#212958;">3. Visa Filing</h5>
                        <p class="small px-3">Meticulous documentation and interview prep for your student visa application.</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-30">
                        <h5 style="color:#212958;">4. Arrival</h5>
                        <p class="small px-3">Post-visa support including travel guidance and university enrolment.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ✅ 04. International Student FAQs -->
        <section class="intl-faq-area bg-gray section-space">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                         <img src="{{ asset('web-assets/imgs/faq/hero_image.svg') }}" class="img-fluid mb-40" alt="FAQ Support">
                    </div>
                    <div class="col-lg-7">
                        <div class="section__title-wrapper mb-40">
                            <h2 class="section__title-wrapper-title">International <span style="color:#DA3A34;">Student FAQs</span></h2>
                        </div>
                        <div class="accordion" id="intlFaq">
                            <div class="accordion-item mb-15 border-0 rounded-4 shadow-sm overflow-hidden">
                                <h2 class="accordion-header">
                                    <button class="accordion-button bg-white fw-bold py-4" type="button" data-bs-toggle="collapse" data-bs-target="#q1">
                                        Can I work while studying in the UK?
                                    </button>
                                </h2>
                                <div id="q1" class="accordion-collapse collapse show" data-bs-parent="#intlFaq">
                                    <div class="accordion-body bg-white pt-0">
                                        Most international students on a Student Visa can work up to 20 hours per week during term time and full-time during vacations.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-15 border-0 rounded-4 shadow-sm overflow-hidden">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed bg-white fw-bold py-4" type="button" data-bs-toggle="collapse" data-bs-target="#q2">
                                        What is the Graduate Route (PSW)?
                                    </button>
                                </h2>
                                <div id="q2" class="accordion-collapse collapse" data-bs-parent="#intlFaq">
                                    <div class="accordion-body bg-white pt-0">
                                        After completing your degree, you can apply for a Graduate Visa, allowing you to stay and work in the UK for 2 years (3 years for PhD graduates).
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ✅ 05. Global CTA -->
        <section class="global-cta-area section-space overflow-hidden">
            <div class="container">
                <div class="cta-box-intl p-55 rounded-5 shadow-lg text-center p-relative z-1" style="background: linear-gradient(135deg, #212958, #DA3A34);">
                    <h2 class="text-white mb-20">Your UK Adventure Starts Here!</h2>
                    <p class="text-white opacity-75 mb-40 mx-auto" style="max-width:600px;">Don't navigate the complex international admission process alone. Let our London experts guide you to your dream university.</p>
                    <a href="/contact" class="rr-btn" style="background:#fff !important; color:#DA3A34 !important; font-weight:800;">Get My Free Assessment</a>
                </div>
            </div>
        </section>
    </main>
@endsection
