@extends('web_layouts.app')
@section('title', 'UK University Admission & Student Finance Support for Home Students | TheAccity')
@section('meta_description', 'Expert guidance for UK home students. Get help with course selection, university applications, and Student Finance England (SFE) support from our London team.')

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
                                    UK Home Students Recruitment</h1>
                            </div>
                            <div class="breadcrumb__menu wow fadeInLeft animated" data-wow-delay=".3s">
                                <nav>
                                    <ul>
                                        <li><span><a href="/">Home</a></span></li>
                                        <li class="active"><span>UK Home Students</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ✅ 01. Info Summary Section -->
        <section class="about-us-2__area section-space">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-us-2__wrapper-media d-flex">
                            <div class="img-wrap">
                                <div class="about-us-2__wrapper-media-image-1">
                                    <img src="{{ asset('web-assets/imgs/home-4/about-4-img-1.png') }}" class="img-fluid" alt="Home Students Guidance">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section__title-wrapper mb-30">
                            <h6 class="section__title-wrapper-black-subtitle mb-10 wow fadeInLeft animated" data-wow-delay=".2s">Tailored for Locals</h6>
                            <h2 class="section__title-wrapper-title wow fadeInLeft animated" data-wow-delay=".3s">Empowering <span style="color:#DA3A34;">UK Home Students</span> for Success</h2>
                        </div>
                        <div class="about-us-2__content">
                            <p class="mb-20 wow fadeInLeft animated" data-wow-delay=".4s">Navigating the UK university system as a home student can be overwhelming. From choosing the right institution to securing Student Finance England (SFE) funding, TheAccity is here to simplify your journey.</p>
                            <p class="mb-25 wow fadeInLeft animated" data-wow-delay=".5s">We help UK residents unlock their potential by matching them with programs that offer not just academic excellence, but also financial sustainability and career growth.</p>
                            
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="feature-item p-3 border rounded shadow-sm">
                                        <i class="fa-solid fa-check-circle text-danger me-2"></i> Foundation Steps
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="feature-item p-3 border rounded shadow-sm">
                                        <i class="fa-solid fa-check-circle text-danger me-2"></i> Degree Top-ups
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="feature-item p-3 border rounded shadow-sm">
                                        <i class="fa-solid fa-check-circle text-danger me-2"></i> SFE Support
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="feature-item p-3 border rounded shadow-sm">
                                        <i class="fa-solid fa-check-circle text-danger me-2"></i> Fast Admissions
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ✅ 02. Student Finance Focus Section -->
        <section class="student-finance-area section-space bg-gray overflow-hidden">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-7">
                        <div class="finance-content p-relative z-1">
                            <div class="section__title-wrapper mb-30">
                                <h2 class="section__title-wrapper-title">Take the Financial Worry Out of <span style="color:#212958;">Learning</span></h2>
                            </div>
                            <p class="mb-25">Many UK students are eligible for full tuition fee loans and maintenance grants. At TheAccity, we provide expert guidance on:</p>
                            <ul class="finance-list list-unstyled mb-40">
                                <li class="mb-3 d-flex align-items-center gap-3">
                                    <div class="icon-circle bg-white text-danger shadow-sm d-flex align-items-center justify-content-center" style="width:40px; height:40px; border-radius:50%;"><i class="fa-solid fa-pound-sign"></i></div>
                                    <span><strong>SFE Application:</strong> Navigating the Student Finance England portal.</span>
                                </li>
                                <li class="mb-3 d-flex align-items-center gap-3">
                                    <div class="icon-circle bg-white text-danger shadow-sm d-flex align-items-center justify-content-center" style="width:40px; height:40px; border-radius:50%;"><i class="fa-solid fa-id-card"></i></div>
                                    <span><strong>Eligibility Check:</strong> Verifying residency and previous study history.</span>
                                </li>
                                <li class="mb-3 d-flex align-items-center gap-3">
                                    <div class="icon-circle bg-white text-danger shadow-sm d-flex align-items-center justify-content-center" style="width:40px; height:40px; border-radius:50%;"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                                    <span><strong>Evidence Submission:</strong> Ensuring your documents meet SFE requirements.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="finance-card shadow-lg p-5 bg-white text-center" style="border-radius:30px; border-bottom: 10px solid #DA3A34;">
                            <img src="{{ asset('web-assets/imgs/breadcrumb/breadcrumb.png') }}" class="img-fluid mb-20" style="border-radius:15px;" alt="Funding Support">
                            <h4 style="color:#212958;">Did you know?</h4>
                            <p>You may be entitled to up to <strong>£12,000+ per year</strong> in maintenance loans depending on your circumstances.</p>
                            <a href="/contact" class="rr-btn mt-20">Check My Eligibility</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ✅ 03. Roadmap Roadmap Section -->
        <section class="roadmap-area section-space pb-90">
            <div class="container">
                <div class="section__title-wrapper text-center mb-50">
                    <h2 class="section__title-wrapper-title">Your 4-Step <span style="color:#DA3A34;">Success Roadmap</span></h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="process-card text-center mb-30 p-4 border rounded shadow-hover">
                            <div class="num mb-15" style="font-size:40px; font-weight:800; color:rgba(33,41,88,0.1);">01</div>
                            <h5>Consultation</h5>
                            <p class="small">Speak with our advisors to choose the right course.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="process-card text-center mb-30 p-4 border rounded shadow-hover">
                            <div class="num mb-15" style="font-size:40px; font-weight:800; color:rgba(33,41,88,0.1);">02</div>
                            <h5>Admission</h5>
                            <p class="small">We handle the submission to your chosen University.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="process-card text-center mb-30 p-4 border rounded shadow-hover">
                            <div class="num mb-15" style="font-size:40px; font-weight:800; color:rgba(33,41,88,0.1);">03</div>
                            <h5>Funding Setup</h5>
                            <p class="small">Complete your SFE application with our support.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="process-card text-center mb-30 p-4 border rounded shadow-hover" style="border-bottom: 3px solid #DA3A34 !important;">
                            <div class="num mb-15" style="font-size:40px; font-weight:800; color:rgba(33,41,88,0.1);">04</div>
                            <h5>Enrolment</h5>
                            <p class="small">Receive your CAS/Confirmation and start classes!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ✅ 04. FAQ Section -->
        <section class="faq-area bg-gray section-space">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mb-40">
                        <h2 class="section__title-wrapper-title">Common Questions for <span style="color:#DA3A34;">Home Students</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-30">
                        <div class="faq-item shadow-sm p-4 bg-white rounded-3 h-100">
                            <h5>Can I study without recent qualifications?</h5>
                            <p class="mb-0 text-muted">Yes! Many of our partner institutions accept work experience and maturity as alternative entry requirements for foundation years.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-30">
                        <div class="faq-item shadow-sm p-4 bg-white rounded-3 h-100">
                            <h5>How long does student finance take?</h5>
                            <p class="mb-0 text-muted">Typically 6-8 weeks, but applying early with our guidance ensures you have your funds ready for the first day of university.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ✅ 05. Final CTA -->
        <section class="final-cta section-space overflow-hidden">
            <div class="container">
                <div class="cta-4__bg shadow-lg p-5 rounded-4 d-flex align-items-center justify-content-between flex-wrap gap-4" style="background:#212958; border-left: 10px solid #DA3A34;">
                    <div class="cta-text">
                        <h2 class="text-white mb-0">Don't Delay Your Future.</h2>
                        <p class="text-white-50 mb-0">Join 1,000+ UK students who started their journey with TheAccity.</p>
                    </div>
                    <div class="cta-btns">
                        <a href="/contact" class="rr-btn">Request a Call</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
