@extends('web_layouts.app')
@section('title', 'TheAccity | Study Abroad & UK University Admission Consultants in London')
@section('meta_description', 'Expert guidance for UK home and international students. Get help with course selection, university applications, student finance, SOPs and study abroad admissions from our London team.')

@section('wrapper')

    <main>
        <h1 class="visually-hidden">Premier Global Education & Study Abroad Consultant in London - The Accity</h1>
        <!-- Banner area start -->
        <section class="banner__area banner-4 p-relative">
            <div class="swiper banner-4__active p-relative">
                <div class="swiper-wrapper">

                    @foreach($sliders as $slider)
                        <div class="swiper-slide">
                            <div class="banner-4__shapes">
                                <div class="banner-4__shapes-shape-1 upDown" data-animation="pixfix-fadeInLeft"
                                    data-delay="1000ms" data-duration="1200ms">
                                    <img src="{{ asset('assets/images/sliders/' . $slider->file_name) }}" alt="{{ $slider->title }}">
                                </div>
                            </div>
                            <div class="banner banner__space banner-4__space">
                                <div class="banner__thumb-bg banner-4__thumb-bg"
                                    data-background="{{ asset('assets/images/sliders/' . $slider->file_name) }}"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="banner__content banner-4__content p-relative z-index-1">
                                                <h2 class="banner__title banner-4__title" data-animation="pixfix-fadeInUp"
                                                    data-delay="1000ms" data-duration="1200ms">{{ $slider['title'] }}</h2>
                                                <p data-animation="pixfix-fadeInUp" data-delay="1200ms" data-duration="1400ms">
                                                    {!! $slider['shot_desc'] !!}</p>
                                                <div class="banner-home-2__btn__wrapper-2 banner-4__btn-wrapper"
                                                    data-animation="pixfix-fadeInUp" data-delay="1400ms" data-duration="1600ms">
                                                   <a href="student/login"
                                                        class="rr-btn btn-hover-white banner-4__btn-wrapper-btn">Get Started<i
                                                            class="fa-solid fa-arrow-right"></i></a>
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
                                        <img src="{{ asset($settings['about_image_1'] ?? 'web-assets/imgs/home-4/about-4-img-1.png') }}"
                                            class="img-fluid" alt="The Accity Global Education Office">
                                    </div>
                                </div>
                                <div class="about-us-2__wrapper-media-image-2">
                                    <img class="leftRight" src="web-assets/imgs/home-4/about-4-plane-img.png"
                                        alt="Global Study Abroad Illustration">
                                </div>
                            </div>
                            <div class="about-us-2__wrapper-media about-4__wrapper-media d-flex">
                                <div class="about-us-2__wrapper-media__counter">
                                    <h3 class="about-us-2__wrapper-media__counter-title"><span class="odometer"
                                            data-count="{{ $settings['years_of_experience'] ?? '15' }}">0</span>+</h3>
                                    <p>Years Of Experience</p>
                                </div>
                                <div class="about-us-2__wrapper-media-image-3 img-wrap">
                                    <img src="{{ asset($settings['about_image_2'] ?? 'web-assets/imgs/home-4/about-4-img-2.png') }}"
                                        class="img-fluid" alt="Students receiving guidance from The Accity">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content about-4__content">

                            <style>
                                .home-about-spec-list { list-style: none; padding: 0; margin: 14px 0 18px; }
                                .home-about-spec-list li { display: flex; align-items: center; gap: 10px; padding: 7px 0; font-size: 15px; color: #374151; border-bottom: 1px solid #f1f4f9; }
                                .home-about-spec-list li:last-child { border-bottom: none; }
                                .home-about-spec-list li i { color: #DA3A34; font-size: 13px; flex-shrink: 0; }
                                .home-about-tagline { background: linear-gradient(135deg, #212958, #DA3A34); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: 700; font-size: 15px; margin: 14px 0 22px; display: block; line-height: 1.5; }
                            </style>

                            <div class="section__title-wrapper mb-15">
                                <h2 class="section__title-wrapper-title wow fadeInLeft animated" data-wow-delay=".5s">
                                    Empowering Futures Through <span style="color:#DA3A34;">Global Education</span>
                                </h2>
                            </div>

                            <p class="wow fadeInLeft animated" data-wow-delay=".6s" style="text-align:justify;">
                                TheAccity is a trusted international education consultancy dedicated to supporting both international and UK home students in accessing high-quality academic opportunities.
                            </p>

                            <p class="wow fadeInLeft animated" data-wow-delay=".7s"
                               style="font-weight:700; color:#212958; font-size:13px; text-transform:uppercase; letter-spacing:0.5px; margin: 14px 0 4px;">
                                We Specialise In:
                            </p>
                            <ul class="home-about-spec-list wow fadeInLeft animated" data-wow-delay=".75s">
                                <li><i class="fa-solid fa-circle-check"></i> <a href="{{ url('university-partners') }}" style="color: inherit; text-decoration: none;">UK University &amp; College Admissions</a></li>
                                <li><i class="fa-solid fa-circle-check"></i> <a href="{{ url('international-recruitment') }}" style="color: inherit; text-decoration: none;">International Study Destinations</a></li>
                                <li><i class="fa-solid fa-circle-check"></i> <a href="{{ url('courses') }}" style="color: inherit; text-decoration: none;">Foundation &amp; Top-Up Programs</a></li>
                                <li><i class="fa-solid fa-circle-check"></i> <a href="{{ url('visa') }}" style="color: inherit; text-decoration: none;">Visa &amp; Compliance Guidance</a></li>
                                <li><i class="fa-solid fa-circle-check"></i> <a href="{{ url('uk-home-students') }}" style="color: inherit; text-decoration: none;">Student Finance &amp; Funding Support</a></li>
                            </ul>

                            <p class="wow fadeInLeft animated" data-wow-delay=".8s" style="text-align:justify;">
                                Our approach is student-centric, transparent, and results-driven. We provide a comprehensive suite of services including university selection based on academic profile and career goals, meticulous application processing, personal statement editing, and mock interviews for visa preparation. We simplify complex processes and provide end-to-end support — from the initial course selection to final enrolment and pre-departure briefings.
                            </p>

                            <p class="wow fadeInLeft animated" data-wow-delay=".82s" style="text-align:justify;">
                                Whether you're a UK home student looking for the right undergraduate degree or an international postgraduate student navigating visa requirements, TheAccity ensures your journey is smooth and successful. Our partnerships with top-tier global universities mean we stay updated on the latest entry requirements and scholarship opportunities, giving our students a competitive edge.
                            </p>

                            <span class="home-about-tagline wow fadeInLeft animated" data-wow-delay=".85s">
                                At TheAccity, we don't just process applications — we build personalized academic pathways that shape successful global careers and futures.
                            </span>

                            <div class="about__btn about-4__btn wow fadeInLeft animated" data-wow-delay=".9s">
                                <a href="about-us" class="rr-btn">Read More<i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- âœ… Academic Journey CTA Section -->
        <section class="academic-cta__area p-relative overflow-hidden"
            style="background: linear-gradient(135deg, #212958 0%, #1a1f45 50%, #212958 100%); padding: 80px 0;">

            <!-- Decorative background shapes -->
            <div
                style="position:absolute; top:-60px; left:-60px; width:220px; height:220px; border-radius:50%; background:rgba(218,58,52,0.08); pointer-events:none;">
            </div>
            <div
                style="position:absolute; bottom:-80px; right:-40px; width:300px; height:300px; border-radius:50%; background:rgba(218,58,52,0.06); pointer-events:none;">
            </div>
            <div
                style="position:absolute; top:20px; right:15%; width:14px; height:14px; border-radius:50%; background:#DA3A34; opacity:0.35; pointer-events:none;">
            </div>
            <div
                style="position:absolute; bottom:30px; left:20%; width:9px; height:9px; border-radius:50%; background:#DA3A34; opacity:0.25; pointer-events:none;">
            </div>

            <div class="container" style="position:relative; z-index:1;">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-lg-8">

                        <!-- Small badge -->
                        <div class="wow fadeInDown animated" data-wow-delay=".2s" style="margin-bottom:18px;">
                            <span
                                style="display:inline-block; background:rgba(255,255,255,0.12); border:1px solid rgba(255,255,255,0.2); color:#fff; font-size:13px; font-weight:600; letter-spacing:2px; text-transform:uppercase; padding:6px 20px; border-radius:50px;">
                                ðŸŽ“ Start Your Journey Today
                            </span>
                        </div>

                        <!-- Heading -->
                        <h2 class="wow fadeInUp animated" data-wow-delay=".3s"
                            style="color:#fff; font-size:40px; font-weight:700; line-height:1.2; margin-bottom:18px;">
                            Ready to Start Your <span style="color:#DA3A34;">Academic Journey?</span>
                        </h2>

                        <!-- Subtext -->
                        <p class="wow fadeInUp animated" data-wow-delay=".4s"
                            style="color:rgba(255,255,255,0.78); font-size:17px; max-width:560px; margin:0 auto 40px auto; line-height:1.7;">
                            Speak to our expert advisors today and take the first step toward your future. We're here to
                            guide you every step of the way.
                        </p>

                        <!-- CTA Buttons -->
                        <div class="wow fadeInUp animated d-flex flex-wrap justify-content-center gap-3"
                            data-wow-delay=".5s" style="gap:16px;">

                            <!-- Apply Now (â†’ student login/registration) -->
                            <a href="student/login"
                                style="display:inline-flex; align-items:center; gap:8px; background:#DA3A34; color:#fff; font-size:15px; font-weight:700; padding:14px 28px; border-radius:8px; text-decoration:none; transition:all 0.3s ease; box-shadow:0 6px 22px rgba(218,58,52,0.45);"
                                onmouseover="this.style.background='#bf2f2a'; this.style.transform='translateY(-3px)'; this.style.boxShadow='0 12px 30px rgba(218,58,52,0.6)';"
                                onmouseout="this.style.background='#DA3A34'; this.style.transform='translateY(0)'; this.style.boxShadow='0 6px 22px rgba(218,58,52,0.45)';">
                                <i class="fa-solid fa-paper-plane"></i> Apply Now
                            </a>

                            <!-- Book a Free Consultation -->
                            <a href="contact"
                                style="display:inline-flex; align-items:center; gap:8px; background:transparent; color:#fff; font-size:15px; font-weight:700; padding:13px 28px; border-radius:8px; text-decoration:none; border:2px solid rgba(255,255,255,0.5); transition:all 0.3s ease;"
                                onmouseover="this.style.background='rgba(255,255,255,0.12)'; this.style.borderColor='#fff'; this.style.transform='translateY(-2px)';"
                                onmouseout="this.style.background='transparent'; this.style.borderColor='rgba(255,255,255,0.5)'; this.style.transform='translateY(0)';">
                                <i class="fa-solid fa-calendar-check"></i> Book a Free Consultation
                            </a>

                            <!-- Explore Courses -->
                            <a href="courses"
                                style="display:inline-flex; align-items:center; gap:8px; background:rgba(255,255,255,0.1); color:#fff; font-size:15px; font-weight:700; padding:13px 28px; border-radius:8px; text-decoration:none; border:2px solid rgba(255,255,255,0.15); transition:all 0.3s ease;"
                                onmouseover="this.style.background='rgba(255,255,255,0.2)'; this.style.borderColor='rgba(255,255,255,0.4)'; this.style.transform='translateY(-2px)';"
                                onmouseout="this.style.background='rgba(255,255,255,0.1)'; this.style.borderColor='rgba(255,255,255,0.15)'; this.style.transform='translateY(0)';">
                                <i class="fa-solid fa-book-open"></i> Explore Courses
                            </a>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- End Academic Journey CTA Section -->

        <!-- ✅ Why Choose Us Section -->
        <section class="why-choose-us section-space bg-gray p-relative overflow-hidden">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section__title-wrapper mb-40">
                            <h6 class="section__title-wrapper-black-subtitle mb-10 wow fadeInLeft animated" data-wow-delay=".2s">Why Choose Us?</h6>
                            <h2 class="section__title-wrapper-title wow fadeInLeft animated" data-wow-delay=".3s">Your Trusted Partner in <span style="color:#DA3A34;">Global Education</span></h2>
                        </div>
                        <div class="why-choose-us__content wow fadeInLeft animated" data-wow-delay=".4s">
                            <div class="why-item d-flex align-items-start gap-3 mb-30" style="background:#fff; padding:20px; border-radius:12px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
                                <div class="why-icon" style="width:50px; height:50px; background:rgba(218,58,52,0.1); border-radius:50%; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                                    <i class="fa-solid fa-graduation-cap" style="color:#DA3A34; font-size:20px;"></i>
                                </div>
                                <div class="why-text">
                                    <h4 style="font-size:18px; color:#212958; margin-bottom:8px;">Expert Academic Consultation</h4>
                                    <p style="margin-bottom:0; font-size:14px; line-height:1.6;">Our advisors have years of experience in the UK education sector, providing tailored advice for both Home and International students.</p>
                                </div>
                            </div>
                            <div class="why-item d-flex align-items-start gap-3 mb-30" style="background:#fff; padding:20px; border-radius:12px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
                                <div class="why-icon" style="width:50px; height:50px; background:rgba(33,41,88,0.1); border-radius:50%; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                                    <i class="fa-solid fa-file-invoice" style="color:#212958; font-size:20px;"></i>
                                </div>
                                <div class="why-text">
                                    <h4 style="font-size:18px; color:#212958; margin-bottom:8px;">End-to-End Support</h4>
                                    <p style="margin-bottom:0; font-size:14px; line-height:1.6;">From initial assessment and university selection to visa compliance and post-arrival support, we handle it all.</p>
                                </div>
                            </div>
                            <div class="why-item d-flex align-items-start gap-3 mb-30" style="background:#fff; padding:20px; border-radius:12px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
                                <div class="why-icon" style="width:50px; height:50px; background:rgba(218,58,52,0.1); border-radius:50%; display:flex; align-items:center; justify-content:center; flex-shrink:0;">
                                    <i class="fa-solid fa-handshake" style="color:#DA3A34; font-size:20px;"></i>
                                </div>
                                <div class="why-text">
                                    <h4 style="font-size:18px; color:#212958; margin-bottom:8px;">High Success Rate</h4>
                                    <p style="margin-bottom:0; font-size:14px; line-height:1.6;">We pride ourselves on our high success rate for university admissions and student visa approvals globally.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="why-choose-us__image wow fadeInRight animated" data-wow-delay=".5s" style="position:relative;">
                            <img src="web-assets/imgs/concact/contact-left-img.png" alt="Why Choose The Accity" style="width:100%; border-radius:20px; box-shadow: 0 10px 40px rgba(0,0,0,0.1);">
                            <div class="experience-badge" style="position:absolute; bottom:30px; left:30px; background:#212958; color:#fff; padding:20px; border-radius:15px; border-left:5px solid #DA3A34;">
                                <h3 style="color:#fff; margin-bottom:0; font-size:24px;">15+ Years</h3>
                                <p style="margin-bottom:0; font-size:14px; opacity:0.8;">of Academic Excellence</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Why Choose Us Section -->

        <!--cta 4-->
        <!--<section class="cta-4">
            <div class="cta-4__bg" data-background="web-assets/imgs/home-4/cta-4.png"></div>
            <div class="container">
                <div class="row">
                    <div class="cta-4__wrapper">
                        <div class="cta-4__text">
                            <h3 class="cta-4__text-title">We <span>Counsel</span> Students to <br> Get Study</h3>
                        </div>
                        <div class="cta-4__icon">
                            <a class="popup-video video-btn" href="https://www.youtube.com/watch?v=kXgJei4u-TA"
                                data-effect="mfp-move-from-top vertical-middle">
                                <svg width="34" height="38" viewBox="0 0 34 38" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M33.0574 19.0006L0 37.7629V0.238281L33.0574 19.0006Z" fill="#034833" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->

 <!--visit / Universities Section – Redesigned-->
        <style>
            /* ===== University Section ===== */
            .univ-section {
                background: linear-gradient(160deg, #f8f9ff 0%, #eef0f8 100%);
                padding: 90px 0 80px;
                position: relative;
                overflow: hidden;
            }
            .univ-section::before {
                content: '';
                position: absolute;
                top: -120px; right: -120px;
                width: 380px; height: 380px;
                border-radius: 50%;
                background: radial-gradient(circle, rgba(33,41,88,0.07) 0%, transparent 70%);
                pointer-events: none;
            }
            .univ-section::after {
                content: '';
                position: absolute;
                bottom: -100px; left: -80px;
                width: 280px; height: 280px;
                border-radius: 50%;
                background: radial-gradient(circle, rgba(218,58,52,0.06) 0%, transparent 70%);
                pointer-events: none;
            }

            /* Header */
            .univ-badge {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                background: linear-gradient(135deg, rgba(33,41,88,0.1), rgba(218,58,52,0.1));
                border: 1px solid rgba(33,41,88,0.15);
                color: #212958;
                font-size: 12px;
                font-weight: 700;
                letter-spacing: 2px;
                text-transform: uppercase;
                padding: 7px 20px;
                border-radius: 50px;
                margin-bottom: 18px;
            }
            .univ-badge span { color: #DA3A34; }
            .univ-title {
                font-size: 38px;
                font-weight: 800;
                color: #212958;
                line-height: 1.25;
                margin-bottom: 8px;
            }
            .univ-title em { font-style: normal; color: #DA3A34; }
            .univ-subtitle {
                color: #6b7280;
                font-size: 16px;
                max-width: 520px;
            }
            .univ-divider {
                display: flex;
                align-items: center;
                gap: 14px;
                margin: 28px 0 48px;
            }
            .univ-divider-line {
                flex: 1;
                height: 2px;
                background: linear-gradient(90deg, #DA3A34, rgba(218,58,52,0));
                border-radius: 2px;
            }
            .univ-divider-dot {
                width: 10px; height: 10px;
                border-radius: 50%;
                background: #DA3A34;
                flex-shrink: 0;
            }

            /* Grid */
            .univ-grid {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
                gap: 24px;
            }

            /* Card */
            .univ-card {
                background: #fff;
                border-radius: 18px;
                border: 1.5px solid rgba(33,41,88,0.07);
                box-shadow: 0 4px 20px rgba(33,41,88,0.06);
                padding: 30px 20px 22px;
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 16px;
                text-align: center;
                transition: transform 0.32s ease, box-shadow 0.32s ease, border-color 0.32s ease;
                cursor: default;
                position: relative;
                overflow: hidden;
            }
            .univ-card::before {
                content: '';
                position: absolute;
                inset: 0;
                background: linear-gradient(135deg, rgba(33,41,88,0.03), rgba(218,58,52,0.03));
                opacity: 0;
                transition: opacity 0.32s ease;
                border-radius: 18px;
            }
            .univ-card:hover {
                transform: translateY(-8px);
                box-shadow: 0 16px 40px rgba(33,41,88,0.14);
                border-color: rgba(218,58,52,0.3);
            }
            .univ-card:hover::before { opacity: 1; }

            /* Logo wrapper */
            .univ-logo-wrap {
                width: 88px; height: 88px;
                border-radius: 50%;
                overflow: hidden;
                background: #f0f2f8;
                border: 3px solid rgba(33,41,88,0.1);
                display: flex;
                align-items: center;
                justify-content: center;
                flex-shrink: 0;
                transition: border-color 0.3s ease;
            }
            .univ-card:hover .univ-logo-wrap {
                border-color: rgba(218,58,52,0.4);
            }
            .univ-logo-wrap img {
                width: 100%; height: 100%;
                object-fit: contain;
                padding: 6px;
            }

            /* Fallback avatar */
            .univ-avatar {
                width: 88px; height: 88px;
                border-radius: 50%;
                background: linear-gradient(135deg, #212958, #DA3A34);
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 32px;
                font-weight: 800;
                color: #fff;
                flex-shrink: 0;
                border: 3px solid rgba(255,255,255,0.2);
                box-shadow: 0 6px 20px rgba(218,58,52,0.25);
                transition: box-shadow 0.3s ease;
                letter-spacing: -1px;
            }
            .univ-card:hover .univ-avatar {
                box-shadow: 0 10px 30px rgba(218,58,52,0.4);
            }

            /* Name badge */
            .univ-name {
                font-size: 14px;
                font-weight: 700;
                color: #212958;
                line-height: 1.4;
                background: linear-gradient(135deg, rgba(33,41,88,0.06), rgba(218,58,52,0.06));
                border: 1px solid rgba(33,41,88,0.1);
                border-radius: 50px;
                padding: 6px 16px;
                width: 100%;
                transition: background 0.3s ease, color 0.3s ease;
            }
            .univ-card:hover .univ-name {
                background: linear-gradient(135deg, #212958, #DA3A34);
                color: #fff;
                border-color: transparent;
            }

            /* Empty state */
            .univ-empty {
                text-align: center;
                padding: 60px 20px;
                color: #9ca3af;
                font-size: 16px;
            }

            @media (max-width: 767px) {
                .univ-grid { grid-template-columns: repeat(auto-fill, minmax(150px, 1fr)); gap: 16px; }
                .univ-title { font-size: 28px; }
                .univ-section { padding: 60px 0 50px; }
            }

            /* See More Button */
            .univ-seemore-btn {
                display: inline-flex;
                align-items: center;
                gap: 10px;
                background: linear-gradient(135deg, #212958, #2d3680);
                color: #fff !important;
                font-size: 15px;
                font-weight: 700;
                padding: 15px 34px;
                border-radius: 50px;
                text-decoration: none;
                box-shadow: 0 8px 28px rgba(33,41,88,0.3);
                transition: all 0.33s ease;
                letter-spacing: 0.3px;
            }
            .univ-seemore-btn:hover {
                background: linear-gradient(135deg, #DA3A34, #bf2f2a);
                box-shadow: 0 12px 36px rgba(218,58,52,0.45);
                transform: translateY(-3px);
                color: #fff !important;
            }
            .univ-seemore-count {
                background: rgba(255,255,255,0.18);
                border: 1px solid rgba(255,255,255,0.3);
                border-radius: 50px;
                font-size: 12px;
                font-weight: 700;
                padding: 3px 10px;
                letter-spacing: 0.5px;
            }
            .univ-seemore-btn:hover .univ-seemore-count {
                background: rgba(255,255,255,0.25);
            }
        </style>

        <section class="univ-section">
            <div class="container" style="position:relative; z-index:1;">

                <!-- Section Header -->
                <div class="wow fadeInUp animated" data-wow-delay=".15s">
                    <div class="univ-badge">
                        🎓 <span>Partner</span> Institutions
                    </div>
                    <h2 class="univ-title">
                        Universities You <em>Can Visit</em>
                    </h2>
                    <p class="univ-subtitle">
                        Explore our wide network of prestigious universities across the UK and beyond.
                    </p>
                    <div class="univ-divider">
                        <div class="univ-divider-dot"></div>
                        <div class="univ-divider-line"></div>
                    </div>
                </div>

                <!-- University Grid -->
                @if($university && count($university) > 0)
                    @php $totalUniv = count($university); $showUniv = $university->take(10); @endphp
                    <div class="univ-grid">
                        @foreach($showUniv as $index => $unv)
                            @php
                                $hasLogo = !empty($unv->file_name);
                                $logoPath = $hasLogo ? public_path('assets/images/University/' . $unv->file_name) : null;
                                $logoExists = $hasLogo && file_exists($logoPath);
                                $initial = mb_strtoupper(mb_substr(trim($unv->name ?? 'U'), 0, 1));
                                $delay = number_format(0.1 + ($index % 8) * 0.08, 2);
                            @endphp
                            <div class="univ-card wow fadeInUp animated" data-wow-delay="{{ $delay }}s">
                                @if($logoExists)
                                    <div class="univ-logo-wrap">
                                        <img src="{{ asset('assets/images/University/' . $unv->file_name) }}"
                                             alt="{{ $unv->name }}" loading="lazy">
                                    </div>
                                @else
                                    <div class="univ-avatar">{{ $initial }}</div>
                                @endif
                                <div class="univ-name">{{ $unv->name }}</div>
                            </div>
                        @endforeach
                    </div>

                    {{-- See More button (only if more than 10) --}}
                    @if($totalUniv > 10)
                    <div class="text-center wow fadeInUp animated" data-wow-delay=".5s" style="margin-top: 48px;">
                        <a href="{{ url('university-partners') }}"
                           class="univ-seemore-btn">
                            <i class="fa-solid fa-building-columns"></i>
                            See All Universities
                            <span class="univ-seemore-count">+{{ $totalUniv - 10 }} more</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                    @endif

                @else
                    <div class="univ-empty">
                        <i class="fa-solid fa-building-columns" style="font-size:48px; color:#e5e7eb; display:block; margin-bottom:12px;"></i>
                        No universities listed yet. Check back soon!
                    </div>
                @endif

            </div>
        </section>
        <!--end Universities Section-->

        <!--team-4-->
        <section class="team-4__area section-space bg-gray p-relative">
            <div class="team-4__shape">
                <img src="web-assets/imgs/home-4/team-4-bg-shape.png" alt="img not found">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section__title-wrapper text-center mb-60  mb-xs-30">
                            <h6 class="section__title-wrapper-center-subtitle mb-10 wow fadeInLeft animated"
                                data-wow-delay=".2s">Professional people</h6>
                            <h2 class="section__title-wrapper-title wow fadeInLeft animated" data-wow-delay=".3s">Meet Our
                                Expert Consultatns</h2>
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
                                            <li><a href="https://www.pinterest.com/"><i
                                                        class="fa-brands fa-pinterest-p"></i></a></li>
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
        <section
            class="latest-counter__area overflow-hidden p-relative z-1 pt-100 pb-90 pt-xs-30 pb-xs-60 latest-counter-bg">
            <div class="latest-counter__shapes">
                <div class="shape-1 upDown">
                    <img src="web-assets/imgs/home-5/counter-plane-img.png" alt="Travel and Study Illustration">
                </div>
                <div class="shape-2">
                    <img src="web-assets/imgs/home-5/counter-bg-shape.png" alt="Background Graphic">
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
                                <img src="web-assets/imgs/home-5/faq-circle-plane-shape.png" alt="FAQ Support Illustration">
                            </div>
                            <div class="faq-5__thumb-media">
                                <img src="web-assets/imgs/faq/hero_image.svg" alt="Support Specialist Answering Questions">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section__title-wrapper mb-40">
                            <h6 class="section__title-wrapper-black-subtitle mb-10 wow fadeInLeft animated"
                                data-wow-delay=".2s">Have Any Questions?</h6>
                            <h2 class="section__title-wrapper-title wow fadeInLeft animated" data-wow-delay=".3s">Your
                                Questions, Our Answers</h2>
                        </div>
                        <div class="ask-question__faq">
                            <div class="accordion" id="accordionExample">
                                @foreach($qas as $com)
                                    <div class="accordion-item ask-question__faq-item faq-5__item wow fadeInLeft animated"
                                        data-wow-delay=".4s">
                                        <h5 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse_{{ $com['id'] }}" aria-expanded="true"
                                                aria-controls="collapseThree">
                                                {{ $com['question'] }}
                                            </button>
                                        </h5>
                                        <div id="collapse_{{ $com['id'] }}" class="accordion-collapse collapse"
                                            aria-labelledby="heading_{{ $com['id'] }}" data-bs-parent="#accordionExample">
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
                                                <img src="{{ asset('assets/images/sliders/' . $testi->file_name) }}"
                                                    alt="Student Testimonial Profile">
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
                            <span class="section-title2__wrapper-subtitle wow fadeInLeft animated" data-wow-delay=".2s">News
                                & Blog Post</span>
                            <h2 class="section-title2__wrapper-title  wow fadeInLeft animated" data-wow-delay=".3s">Latest
                                Insight from News & Blog</h2>
                        </div>
                        <div class="section-title2__bunews-and-blogstton blog-4__button wow fadeInLeft animated"
                            data-wow-delay=".4s">
                            <a class="rr-btn" href="news-and-blogs">See All News & Blog <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="row mb-minus-30">

                    @foreach($blogs as $blog)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="blog-4__item mb-30">
                                <div class="blog-4__item-thumb">
                                    <img src="{{ asset('assets/images/news/' . $blog->file_name) }}" alt="{{ $blog->title }}">
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
                                    <a class="blog-4__item-content-btn"
                                        href="news/{{ $blog['id'] }}/{{ urlencode(str_replace(' ', '-', $blog['title'])) }}">Read
                                        More <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
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
                                                    <a href="#">
                                                        <img class="img-fluid" src="{{ asset('assets/images/University/' . $unv->file_name) }}" alt="{{ $unv['name'] }}">
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