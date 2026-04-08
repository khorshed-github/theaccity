@extends('web_layouts.app')

@section('wrapper')
    <main>

        {{-- ======= HERO / BREADCRUMB ======= --}}
        <div class="breadcrumb__area dark-green breadcrumb-space overflow-hidden custom-width position-relative z-1"
            data-background="web-assets/imgs/bg/agents.jpg">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <div class="breadcrumb__title-wrapper mb-15 mb-sm-10 mb-xs-5">
                                <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">
                                    Become an Agent
                                </h1>
                            </div>
                            <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                                <nav>
                                    <ul>
                                        <li><span><a href="/">Home</a></span></li>
                                        <li class="active"><span>Agent Application</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ======= STYLES ======= --}}
        <style>
            /* ---- Intro Stats Bar ---- */
            .agent-stats-bar {
                background: linear-gradient(135deg, #212958 0%, #1a1f45 100%);
                padding: 40px 0;
                position: relative;
                overflow: hidden;
            }

            .agent-stats-bar::before {
                content: '';
                position: absolute;
                right: -100px;
                top: -100px;
                width: 350px;
                height: 350px;
                border-radius: 50%;
                background: rgba(218, 58, 52, 0.06);
                pointer-events: none;
            }

            .agent-stat-item {
                text-align: center;
                padding: 10px 20px;
                border-right: 1px solid rgba(255, 255, 255, 0.1);
            }

            .agent-stat-item:last-child {
                border-right: none;
            }

            .agent-stat-number {
                font-size: 36px;
                font-weight: 800;
                color: #DA3A34;
                line-height: 1;
                margin-bottom: 6px;
            }

            .agent-stat-label {
                font-size: 13px;
                color: rgba(255, 255, 255, 0.75);
                text-transform: uppercase;
                letter-spacing: 1px;
                font-weight: 600;
            }

            /* ---- Why Become Agent Section ---- */
            .why-agent__section {
                padding: 90px 0 70px;
                background: #f7f8fc;
                position: relative;
                overflow: hidden;
            }

            .why-agent__section::after {
                content: '';
                position: absolute;
                bottom: -80px;
                left: -80px;
                width: 260px;
                height: 260px;
                border-radius: 50%;
                background: radial-gradient(circle, rgba(33, 41, 88, 0.05) 0%, transparent 70%);
            }

            .benefit-card {
                background: #fff;
                border-radius: 20px;
                padding: 36px 28px;
                border: 1.5px solid rgba(33, 41, 88, 0.07);
                box-shadow: 0 4px 24px rgba(33, 41, 88, 0.06);
                transition: all 0.35s ease;
                position: relative;
                overflow: hidden;
                height: 100%;
            }

            .benefit-card::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 4px;
                height: 100%;
                background: linear-gradient(180deg, #212958, #DA3A34);
                border-radius: 4px 0 0 4px;
            }

            .benefit-card:hover {
                transform: translateY(-8px);
                box-shadow: 0 20px 50px rgba(33, 41, 88, 0.13);
                border-color: rgba(218, 58, 52, 0.25);
            }

            .benefit-icon {
                width: 64px;
                height: 64px;
                border-radius: 16px;
                background: linear-gradient(135deg, rgba(33, 41, 88, 0.1), rgba(218, 58, 52, 0.1));
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 26px;
                color: #212958;
                margin-bottom: 20px;
                transition: all 0.3s ease;
            }

            .benefit-card:hover .benefit-icon {
                background: linear-gradient(135deg, #212958, #DA3A34);
                color: #fff;
            }

            .benefit-title {
                font-size: 18px;
                font-weight: 700;
                color: #212958;
                margin-bottom: 10px;
            }

            .benefit-desc {
                font-size: 14px;
                color: #6b7280;
                line-height: 1.7;
                margin: 0;
            }

            /* ---- Process Steps ---- */
            .process-section {
                padding: 80px 0;
                background: #fff;
            }

            .process-step {
                display: flex;
                align-items: flex-start;
                gap: 24px;
                position: relative;
                padding-bottom: 40px;
            }

            .process-step:not(:last-child)::after {
                content: '';
                position: absolute;
                left: 24px;
                top: 56px;
                width: 2px;
                height: calc(100% - 56px);
                background: linear-gradient(180deg, #DA3A34 0%, rgba(218, 58, 52, 0.1) 100%);
            }

            .process-step-num {
                width: 50px;
                height: 50px;
                border-radius: 50%;
                background: linear-gradient(135deg, #212958, #DA3A34);
                color: #fff;
                font-size: 18px;
                font-weight: 800;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-shrink: 0;
                box-shadow: 0 6px 20px rgba(218, 58, 52, 0.35);
            }

            .process-step-content h4 {
                font-size: 17px;
                font-weight: 700;
                color: #212958;
                margin-bottom: 6px;
            }

            .process-step-content p {
                font-size: 14px;
                color: #6b7280;
                line-height: 1.7;
                margin: 0;
            }

            /* ---- Application Form ---- */
            .agent-form-section {
                padding: 90px 0;
                background: linear-gradient(135deg, #f7f8fc 0%, #eef0fa 100%);
                position: relative;
                overflow: hidden;
            }

            .agent-form-section::before {
                content: '';
                position: absolute;
                top: -120px;
                right: -120px;
                width: 400px;
                height: 400px;
                border-radius: 50%;
                background: radial-gradient(circle, rgba(218, 58, 52, 0.06) 0%, transparent 70%);
            }

            .agent-form-card {
                background: #fff;
                border-radius: 24px;
                padding: 50px 48px;
                box-shadow: 0 10px 60px rgba(33, 41, 88, 0.10);
                border: 1.5px solid rgba(33, 41, 88, 0.06);
                position: relative;
                z-index: 1;
            }

            @media (max-width: 576px) {
                .agent-form-card {
                    padding: 30px 20px;
                }
            }

            .agent-form-header {
                margin-bottom: 36px;
            }

            .agent-form-badge {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                background: linear-gradient(135deg, rgba(33, 41, 88, 0.08), rgba(218, 58, 52, 0.08));
                border: 1px solid rgba(33, 41, 88, 0.12);
                color: #212958;
                font-size: 12px;
                font-weight: 700;
                letter-spacing: 2px;
                text-transform: uppercase;
                padding: 7px 18px;
                border-radius: 50px;
                margin-bottom: 16px;
            }

            .agent-form-title {
                font-size: 32px;
                font-weight: 800;
                color: #212958;
                line-height: 1.25;
                margin-bottom: 12px;
            }

            .agent-form-subtitle {
                font-size: 15px;
                color: #6b7280;
                line-height: 1.7;
            }

            .agent-form-divider {
                height: 3px;
                width: 60px;
                background: linear-gradient(90deg, #DA3A34, rgba(218, 58, 52, 0.3));
                border-radius: 3px;
                margin: 18px 0 28px;
            }

            /* Form fields */
            .af-group {
                margin-bottom: 20px;
            }

            .af-label {
                display: block;
                font-size: 13px;
                font-weight: 700;
                color: #374151;
                margin-bottom: 8px;
                letter-spacing: 0.3px;
            }

            .af-label span {
                color: #DA3A34;
            }

            .af-input {
                width: 100%;
                height: 52px;
                border: 1.5px solid #e5e7eb;
                border-radius: 12px;
                padding: 0 16px 0 44px;
                font-size: 14px;
                color: #111827;
                background: #fafafa;
                transition: all 0.25s ease;
                outline: none;
            }

            .af-input:focus {
                border-color: #212958;
                background: #fff;
                box-shadow: 0 0 0 3px rgba(33, 41, 88, 0.08);
            }

            .af-input::placeholder {
                color: #9ca3af;
            }

            .af-field-wrap {
                position: relative;
            }

            .af-field-icon {
                position: absolute;
                left: 14px;
                top: 50%;
                transform: translateY(-50%);
                font-size: 15px;
                color: #9ca3af;
                pointer-events: none;
                transition: color 0.25s ease;
            }

            .af-field-wrap:focus-within .af-field-icon {
                color: #212958;
            }

            .af-section-label {
                font-size: 12px;
                font-weight: 800;
                text-transform: uppercase;
                letter-spacing: 2px;
                color: #DA3A34;
                padding: 14px 0 6px;
                border-top: 1px solid #f1f4f9;
                margin: 8px 0 14px;
            }

            .af-submit-btn {
                display: inline-flex;
                align-items: center;
                gap: 10px;
                background: linear-gradient(135deg, #212958, #2d3680);
                color: #fff;
                font-size: 16px;
                font-weight: 700;
                padding: 16px 40px;
                border-radius: 12px;
                border: none;
                cursor: pointer;
                width: 100%;
                justify-content: center;
                margin-top: 10px;
                transition: all 0.3s ease;
                box-shadow: 0 8px 28px rgba(33, 41, 88, 0.25);
                letter-spacing: 0.3px;
            }

            .af-submit-btn:hover {
                background: linear-gradient(135deg, #DA3A34, #bf2f2a);
                box-shadow: 0 12px 36px rgba(218, 58, 52, 0.4);
                transform: translateY(-2px);
            }

            .af-privacy-note {
                text-align: center;
                margin-top: 16px;
                font-size: 12px;
                color: #9ca3af;
            }

            .af-privacy-note i {
                color: #22c55e;
                margin-right: 4px;
            }

            /* Alert Styles */
            .af-alert-success {
                background: linear-gradient(135deg, #d1fae5, #a7f3d0);
                border: 1.5px solid #34d399;
                border-radius: 12px;
                padding: 16px 20px;
                margin-bottom: 24px;
                display: flex;
                align-items: center;
                gap: 12px;
                color: #065f46;
                font-weight: 600;
                font-size: 14px;
            }

            .af-alert-success i {
                font-size: 20px;
                color: #059669;
                flex-shrink: 0;
            }

            .af-alert-error {
                background: linear-gradient(135deg, #fee2e2, #fecaca);
                border: 1.5px solid #f87171;
                border-radius: 12px;
                padding: 16px 20px;
                margin-bottom: 24px;
                color: #7f1d1d;
                font-size: 14px;
            }

            .af-alert-error ul {
                margin: 0;
                padding-left: 16px;
            }

            /* Sidebar Info */
            .agent-info-card {
                background: linear-gradient(135deg, #212958 0%, #1a1f45 100%);
                border-radius: 20px;
                padding: 36px 30px;
                color: #fff;
                position: sticky;
                top: 100px;
            }

            .agent-info-card h4 {
                font-size: 20px;
                font-weight: 700;
                color: #fff;
                margin-bottom: 6px;
            }

            .agent-info-card p {
                font-size: 14px;
                color: rgba(255, 255, 255, 0.7);
                line-height: 1.7;
                margin-bottom: 24px;
            }

            .agent-info-item {
                display: flex;
                align-items: center;
                gap: 14px;
                padding: 14px 0;
                border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            }

            .agent-info-item:last-child {
                border-bottom: none;
            }

            .agent-info-icon {
                width: 42px;
                height: 42px;
                border-radius: 10px;
                background: rgba(255, 255, 255, 0.1);
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 18px;
                flex-shrink: 0;
            }

            .agent-info-text strong {
                display: block;
                font-size: 14px;
                font-weight: 700;
                color: #fff;
                margin-bottom: 2px;
            }

            .agent-info-text span {
                font-size: 13px;
                color: rgba(255, 255, 255, 0.6);
            }

            .agent-contact-btn {
                display: flex;
                align-items: center;
                gap: 10px;
                background: #DA3A34;
                color: #fff;
                font-size: 14px;
                font-weight: 700;
                padding: 14px 24px;
                border-radius: 10px;
                text-decoration: none;
                margin-top: 24px;
                transition: all 0.3s ease;
                justify-content: center;
            }

            .agent-contact-btn:hover {
                background: #bf2f2a;
                color: #fff;
                transform: translateY(-2px);
            }

            /* Section titles */
            .section-tag {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                background: linear-gradient(135deg, rgba(218, 58, 52, 0.1), rgba(33, 41, 88, 0.1));
                border: 1px solid rgba(218, 58, 52, 0.2);
                color: #DA3A34;
                font-size: 12px;
                font-weight: 700;
                letter-spacing: 2px;
                text-transform: uppercase;
                padding: 6px 16px;
                border-radius: 50px;
                margin-bottom: 14px;
            }

            .section-main-title {
                font-size: 36px;
                font-weight: 800;
                color: #212958;
                line-height: 1.25;
                margin-bottom: 12px;
            }

            .section-main-title em {
                font-style: normal;
                color: #DA3A34;
            }

            @media (max-width: 767px) {
                .section-main-title {
                    font-size: 26px;
                }

                .agent-form-title {
                    font-size: 24px;
                }
            }
        </style>

        {{-- ======= STATS BAR ======= --}}
        <div class="agent-stats-bar">
            <div class="container">
                <div class="row g-0">
                    <div class="col-6 col-md-3">
                        <div class="agent-stat-item">
                            <div class="agent-stat-number">50+</div>
                            <div class="agent-stat-label">Active Agents</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="agent-stat-item">
                            <div class="agent-stat-number">20+</div>
                            <div class="agent-stat-label">Countries</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="agent-stat-item">
                            <div class="agent-stat-number">1000+</div>
                            <div class="agent-stat-label">Students Placed</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="agent-stat-item">
                            <div class="agent-stat-number">15+</div>
                            <div class="agent-stat-label">Years Experience</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ======= WHY BECOME AN AGENT ======= --}}
        <section class="why-agent__section">
            <div class="container" style="position:relative; z-index:1;">

                <div class="text-center mb-55 wow fadeInUp animated" data-wow-delay=".15s">
                    <div class="section-tag">🤝 Partnership Benefits</div>
                    <h2 class="section-main-title">Why Partner with <em>TheAccity?</em></h2>
                    <p style="font-size:16px; color:#6b7280; max-width:560px; margin:0 auto; line-height:1.7;">
                        Join our global network of trusted agents and help students achieve their academic dreams while
                        growing your business.
                    </p>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp animated" data-wow-delay=".1s">
                        <div class="benefit-card">
                            <div class="benefit-icon"><i class="fa-solid fa-hand-holding-dollar"></i></div>
                            <h3 class="benefit-title">Competitive Commission</h3>
                            <p class="benefit-desc">Earn attractive commissions for every successful student enrollment. Our
                                transparent payment structure ensures timely and reliable payouts.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp animated" data-wow-delay=".2s">
                        <div class="benefit-card">
                            <div class="benefit-icon"><i class="fa-solid fa-headset"></i></div>
                            <h3 class="benefit-title">Dedicated Support</h3>
                            <p class="benefit-desc">Access a dedicated agent support team ready to assist you and your
                                students throughout the entire application and enrollment process.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp animated" data-wow-delay=".3s">
                        <div class="benefit-card">
                            <div class="benefit-icon"><i class="fa-solid fa-building-columns"></i></div>
                            <h3 class="benefit-title">Wide University Network</h3>
                            <p class="benefit-desc">Access to 100+ UK universities and colleges, giving your students a
                                wealth of academic options across diverse programs and levels.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp animated" data-wow-delay=".4s">
                        <div class="benefit-card">
                            <div class="benefit-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                            <h3 class="benefit-title">Training & Resources</h3>
                            <p class="benefit-desc">Receive comprehensive training materials, marketing resources, and
                                regular updates about courses, fees, and visa requirements.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp animated" data-wow-delay=".5s">
                        <div class="benefit-card">
                            <div class="benefit-icon"><i class="fa-solid fa-file-certificate"></i></div>
                            <h3 class="benefit-title">Official Partnership Certificate</h3>
                            <p class="benefit-desc">Receive an official agent certification that enhances your credibility
                                and demonstrates your trusted partnership with TheAccity.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp animated" data-wow-delay=".6s">
                        <div class="benefit-card">
                            <div class="benefit-icon"><i class="fa-solid fa-chart-line-up"></i></div>
                            <h3 class="benefit-title">Business Growth</h3>
                            <p class="benefit-desc">Leverage our brand recognition and marketing support to expand your
                                reach and grow your student recruitment business significantly.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ======= HOW IT WORKS ======= --}}
        <section class="process-section">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-5 wow fadeInLeft animated" data-wow-delay=".2s">
                        <div class="section-tag">📋 Application Process</div>
                        <h2 class="section-main-title">How to <em>Get Started?</em></h2>
                        <p style="font-size:15px; color:#6b7280; line-height:1.7; margin-bottom:32px;">
                            Becoming a TheAccity agent is simple and straightforward. Follow these 4 easy steps to start
                            your partnership journey.
                        </p>

                        <div class="process-step wow fadeInLeft animated" data-wow-delay=".3s">
                            <div class="process-step-num">1</div>
                            <div class="process-step-content">
                                <h4>Submit Your Application</h4>
                                <p>Fill in the agent application form with your personal and organizational details. It
                                    takes less than 5 minutes.</p>
                            </div>
                        </div>
                        <div class="process-step wow fadeInLeft animated" data-wow-delay=".4s">
                            <div class="process-step-num">2</div>
                            <div class="process-step-content">
                                <h4>Application Review</h4>
                                <p>Our team reviews your application within 2–3 business days, verifying your details and
                                    assessing your suitability.</p>
                            </div>
                        </div>
                        <div class="process-step wow fadeInLeft animated" data-wow-delay=".5s">
                            <div class="process-step-num">3</div>
                            <div class="process-step-content">
                                <h4>Interview & Confirmation</h4>
                                <p>We'll contact you directly to discuss the partnership terms, answer your questions and
                                    confirm the collaboration.</p>
                            </div>
                        </div>
                        <div class="process-step wow fadeInLeft animated" data-wow-delay=".6s">
                            <div class="process-step-num">4</div>
                            <div class="process-step-content">
                                <h4>Start Recruiting Students</h4>
                                <p>Once approved, you'll receive your agent portal access, official certificate, and
                                    marketing materials to begin immediately.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 wow fadeInRight animated" data-wow-delay=".25s">
                        {{-- ======= APPLICATION FORM ======= --}}
                        <div class="agent-form-card">
                            <div class="agent-form-header">
                                <div class="agent-form-badge"><i class="fa-solid fa-paper-plane"></i> Agent Application
                                </div>
                                <h2 class="agent-form-title">Apply to Become an Agent</h2>
                                <p class="agent-form-subtitle">Complete the form below and our team will review your
                                    application and get in touch with you shortly.</p>
                                <div class="agent-form-divider"></div>
                            </div>

                            {{-- Alerts --}}
                            @if(session('success'))
                                <div class="af-alert-success">
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span>{{ session('success') }}</span>
                                </div>
                            @endif
                            @if($errors->any())
                                <div class="af-alert-error">
                                    <ul class="mb-0">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('applications.store') }}" method="POST" id="agentApplicationForm">
                                @csrf

                                {{-- Personal Info --}}
                                <div class="af-section-label">Personal Information</div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="af-group">
                                            <label class="af-label">Full Name <span>*</span></label>
                                            <div class="af-field-wrap">
                                                <i class="fa-solid fa-user af-field-icon"></i>
                                                <input class="af-input" type="text" name="name" placeholder="Your full name"
                                                    value="{{ old('name') }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="af-group">
                                            <label class="af-label">Phone Number <span>*</span></label>
                                            <div class="af-field-wrap">
                                                <i class="fa-solid fa-phone af-field-icon"></i>
                                                <input class="af-input" type="text" name="number"
                                                    placeholder="+44 0000 000000" value="{{ old('number') }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="af-group">
                                            <label class="af-label">Email Address <span>*</span></label>
                                            <div class="af-field-wrap">
                                                <i class="fa-solid fa-envelope af-field-icon"></i>
                                                <input class="af-input" type="email" name="email"
                                                    placeholder="your@email.com" value="{{ old('email') }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="af-group">
                                            <label class="af-label">Occupation</label>
                                            <div class="af-field-wrap">
                                                <i class="fa-solid fa-briefcase af-field-icon"></i>
                                                <input class="af-input" type="text" name="occupation"
                                                    placeholder="e.g. Education Consultant" value="{{ old('occupation') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="af-group">
                                            <label class="af-label">Country <span>*</span></label>
                                            <div class="af-field-wrap">
                                                <i class="fa-solid fa-globe af-field-icon"></i>
                                                <input class="af-input" type="text" name="country"
                                                    placeholder="Your country" value="{{ old('country') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="af-group">
                                            <label class="af-label">Full Address <span>*</span></label>
                                            <div class="af-field-wrap">
                                                <i class="fa-solid fa-location-dot af-field-icon"></i>
                                                <input class="af-input" type="text" name="address"
                                                    placeholder="Your full address" value="{{ old('address') }}" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Organization Info --}}
                                <div class="af-section-label">Organization Details (Optional)</div>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="af-group">
                                            <label class="af-label">Organization Name</label>
                                            <div class="af-field-wrap">
                                                <i class="fa-solid fa-building af-field-icon"></i>
                                                <input class="af-input" type="text" name="organization"
                                                    placeholder="Your organization" value="{{ old('organization') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="af-group">
                                            <label class="af-label">Website</label>
                                            <div class="af-field-wrap">
                                                <i class="fa-solid fa-link af-field-icon"></i>
                                                <input class="af-input" type="url" name="website"
                                                    placeholder="https://yourwebsite.com" value="{{ old('website') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="af-submit-btn" id="agentSubmitBtn">
                                    <i class="fa-solid fa-paper-plane"></i>
                                    Submit Application
                                </button>
                                <p class="af-privacy-note">
                                    <i class="fa-solid fa-shield-check"></i>
                                    Your information is safe and will never be shared with third parties.
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ======= CHOOSE US / FEATURES SECTION ======= --}}
        <section style="background: #f7f8fc; padding: 80px 0;">
            <div class="container">
                <div class="text-center mb-55 wow fadeInUp animated" data-wow-delay=".15s">
                    <div class="section-tag">⭐ Why TheAccity</div>
                    <h2 class="section-main-title">What We <em>Offer Our Agents</em></h2>
                </div>
                <div class="row g-4">
                    <div class="col-xl-3 col-md-6 wow fadeInUp animated" data-wow-delay=".1s">
                        <div style="background:#fff; border-radius:16px; padding:30px 24px; text-align:center; border:1.5px solid rgba(33,41,88,0.07); box-shadow:0 4px 20px rgba(33,41,88,0.05); height:100%; transition:all 0.3s ease;"
                            onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='0 16px 40px rgba(33,41,88,0.12)';"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 20px rgba(33,41,88,0.05)';">
                            <div
                                style="width:60px; height:60px; border-radius:50%; background:linear-gradient(135deg,rgba(33,41,88,0.1),rgba(218,58,52,0.1)); display:flex; align-items:center; justify-content:center; margin:0 auto 16px; font-size:24px; color:#212958;">
                                <i class="fa-solid fa-users-between-lines"></i>
                            </div>
                            <h4 style="font-size:17px; font-weight:700; color:#212958; margin-bottom:8px;">Direct Interviews
                            </h4>
                            <p style="font-size:13px; color:#6b7280; line-height:1.7; margin:0;">We facilitate direct
                                university interviews for your students, improving their chances significantly.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 wow fadeInUp animated" data-wow-delay=".2s">
                        <div style="background:#fff; border-radius:16px; padding:30px 24px; text-align:center; border:1.5px solid rgba(33,41,88,0.07); box-shadow:0 4px 20px rgba(33,41,88,0.05); height:100%; transition:all 0.3s ease;"
                            onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='0 16px 40px rgba(33,41,88,0.12)';"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 20px rgba(33,41,88,0.05)';">
                            <div
                                style="width:60px; height:60px; border-radius:50%; background:linear-gradient(135deg,rgba(33,41,88,0.1),rgba(218,58,52,0.1)); display:flex; align-items:center; justify-content:center; margin:0 auto 16px; font-size:24px; color:#212958;">
                                <i class="fa-solid fa-bolt-lightning"></i>
                            </div>
                            <h4 style="font-size:17px; font-weight:700; color:#212958; margin-bottom:8px;">Faster Processing
                            </h4>
                            <p style="font-size:13px; color:#6b7280; line-height:1.7; margin:0;">Our streamlined process
                                ensures quick turnaround times for applications, keeping students on track.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 wow fadeInUp animated" data-wow-delay=".3s">
                        <div style="background:#fff; border-radius:16px; padding:30px 24px; text-align:center; border:1.5px solid rgba(33,41,88,0.07); box-shadow:0 4px 20px rgba(33,41,88,0.05); height:100%; transition:all 0.3s ease;"
                            onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='0 16px 40px rgba(33,41,88,0.12)';"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 20px rgba(33,41,88,0.05)';">
                            <div
                                style="width:60px; height:60px; border-radius:50%; background:linear-gradient(135deg,rgba(33,41,88,0.1),rgba(218,58,52,0.1)); display:flex; align-items:center; justify-content:center; margin:0 auto 16px; font-size:24px; color:#212958;">
                                <i class="fa-solid fa-passport"></i>
                            </div>
                            <h4 style="font-size:17px; font-weight:700; color:#212958; margin-bottom:8px;">Visa Assistance
                            </h4>
                            <p style="font-size:13px; color:#6b7280; line-height:1.7; margin:0;">Expert visa guidance for
                                your students, ensuring a smooth and successful visa application journey.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 wow fadeInUp animated" data-wow-delay=".4s">
                        <div style="background:#fff; border-radius:16px; padding:30px 24px; text-align:center; border:1.5px solid rgba(33,41,88,0.07); box-shadow:0 4px 20px rgba(33,41,88,0.05); height:100%; transition:all 0.3s ease;"
                            onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='0 16px 40px rgba(33,41,88,0.12)';"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 20px rgba(33,41,88,0.05)';">
                            <div
                                style="width:60px; height:60px; border-radius:50%; background:linear-gradient(135deg,rgba(33,41,88,0.1),rgba(218,58,52,0.1)); display:flex; align-items:center; justify-content:center; margin:0 auto 16px; font-size:24px; color:#212958;">
                                <i class="fa-solid fa-piggy-bank"></i>
                            </div>
                            <h4 style="font-size:17px; font-weight:700; color:#212958; margin-bottom:8px;">Cost-Effective
                            </h4>
                            <p style="font-size:13px; color:#6b7280; line-height:1.7; margin:0;">No upfront fees to join our
                                network. We invest in our agents' success through free training and support.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <script>
        // Simple submit button loading state
        document.getElementById('agentApplicationForm').addEventListener('submit', function () {
            var btn = document.getElementById('agentSubmitBtn');
            btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Submitting...';
            btn.disabled = true;
        });
    </script>

@endsection