@extends('web_layouts.app')
@section('title', 'Partner Universities & Colleges in the UK | TheAccity')
@section('meta_description', 'View our extensive network of partner universities and colleges across the UK. We help you find the right institution for your academic goals.')

@section('wrapper')
    <main>

        {{-- ===== Breadcrumb / Hero ===== --}}
        <div class="breadcrumb__area dark-green breadcrumb-space overflow-hidden custom-width position-relative z-1"
            data-background="web-assets/imgs/breadcrumb/breadcrumb.png">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <div class="breadcrumb__title-wrapper mb-15 mb-sm-10 mb-xs-5">
                                <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">
                                    University Partners</h1>
                            </div>
                            <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                                <nav>
                                    <ul>
                                        <li><span><a href="/">Home</a></span></li>
                                        <li class="active"><span>University Partners</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ===== Styles ===== --}}
        <style>
            /* ── Page wrapper ── */
            .up-page {
                background: linear-gradient(160deg, #f7f8ff 0%, #edf0f8 100%);
                padding: 80px 0 100px;
                position: relative;
                overflow: hidden;
            }

            .up-page::before {
                content: '';
                position: absolute;
                top: -160px;
                right: -160px;
                width: 440px;
                height: 440px;
                border-radius: 50%;
                background: radial-gradient(circle, rgba(33, 41, 88, 0.06) 0%, transparent 70%);
                pointer-events: none;
            }

            .up-page::after {
                content: '';
                position: absolute;
                bottom: -120px;
                left: -100px;
                width: 340px;
                height: 340px;
                border-radius: 50%;
                background: radial-gradient(circle, rgba(218, 58, 52, 0.05) 0%, transparent 70%);
                pointer-events: none;
            }

            /* ── Section header ── */
            .up-header {
                text-align: center;
                margin-bottom: 50px;
            }

            .up-badge {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                background: linear-gradient(135deg, rgba(33, 41, 88, 0.09), rgba(218, 58, 52, 0.09));
                border: 1px solid rgba(33, 41, 88, 0.14);
                color: #212958;
                font-size: 12px;
                font-weight: 700;
                letter-spacing: 2px;
                text-transform: uppercase;
                padding: 7px 22px;
                border-radius: 50px;
                margin-bottom: 16px;
            }

            .up-badge em {
                font-style: normal;
                color: #DA3A34;
            }

            .up-main-title {
                font-size: 40px;
                font-weight: 800;
                color: #212958;
                line-height: 1.2;
                margin-bottom: 10px;
            }

            .up-main-title span {
                color: #DA3A34;
            }

            .up-subtitle {
                color: #6b7280;
                font-size: 16px;
                max-width: 520px;
                margin: 0 auto 28px;
            }

            .up-count-badge {
                display: inline-flex;
                align-items: center;
                gap: 7px;
                background: #212958;
                color: #fff;
                font-size: 13px;
                font-weight: 700;
                padding: 7px 20px;
                border-radius: 50px;
                margin-bottom: 30px;
            }

            .up-count-badge span {
                color: #DA3A34;
            }

            /* ── Search bar ── */
            .up-search-wrap {
                max-width: 480px;
                margin: 0 auto 50px;
                position: relative;
            }

            .up-search-wrap input {
                width: 100%;
                padding: 14px 50px 14px 22px;
                border-radius: 50px;
                border: 2px solid rgba(33, 41, 88, 0.12);
                background: #fff;
                font-size: 15px;
                color: #212958;
                outline: none;
                transition: border-color 0.3s ease, box-shadow 0.3s ease;
                box-shadow: 0 4px 18px rgba(33, 41, 88, 0.07);
            }

            .up-search-wrap input:focus {
                border-color: #DA3A34;
                box-shadow: 0 6px 24px rgba(218, 58, 52, 0.15);
            }

            .up-search-wrap input::placeholder {
                color: #9ca3af;
            }

            .up-search-wrap .up-search-icon {
                position: absolute;
                right: 18px;
                top: 50%;
                transform: translateY(-50%);
                color: #DA3A34;
                font-size: 16px;
                pointer-events: none;
            }

            /* ── Grid ── */
            .up-grid {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
                gap: 28px;
            }

            /* ── Card ── */
            .up-card {
                background: #fff;
                border-radius: 20px;
                border: 1.5px solid rgba(33, 41, 88, 0.07);
                box-shadow: 0 4px 22px rgba(33, 41, 88, 0.06);
                padding: 34px 22px 26px;
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 16px;
                text-align: center;
                transition: transform 0.32s ease, box-shadow 0.32s ease, border-color 0.32s ease;
                position: relative;
                overflow: hidden;
            }

            .up-card::after {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 4px;
                background: linear-gradient(90deg, #212958, #DA3A34);
                opacity: 0;
                transition: opacity 0.32s ease;
            }

            .up-card:hover {
                transform: translateY(-9px);
                box-shadow: 0 20px 48px rgba(33, 41, 88, 0.13);
                border-color: rgba(218, 58, 52, 0.25);
            }

            .up-card:hover::after {
                opacity: 1;
            }

            /* ── Logo circle ── */
            .up-logo-wrap {
                width: 96px;
                height: 96px;
                border-radius: 50%;
                overflow: hidden;
                background: #f0f2f9;
                border: 3px solid rgba(33, 41, 88, 0.08);
                display: flex;
                align-items: center;
                justify-content: center;
                flex-shrink: 0;
                transition: border-color 0.3s ease, box-shadow 0.3s ease;
            }

            .up-card:hover .up-logo-wrap {
                border-color: rgba(218, 58, 52, 0.35);
                box-shadow: 0 6px 22px rgba(218, 58, 52, 0.15);
            }

            .up-logo-wrap img {
                width: 100%;
                height: 100%;
                object-fit: contain;
                padding: 8px;
            }

            /* ── Avatar fallback ── */
            .up-avatar {
                width: 96px;
                height: 96px;
                border-radius: 50%;
                background: linear-gradient(135deg, #212958 0%, #DA3A34 100%);
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 34px;
                font-weight: 800;
                color: #fff;
                flex-shrink: 0;
                box-shadow: 0 6px 22px rgba(218, 58, 52, 0.22);
                transition: box-shadow 0.3s ease, transform 0.3s ease;
                letter-spacing: -1px;
            }

            .up-card:hover .up-avatar {
                box-shadow: 0 12px 32px rgba(218, 58, 52, 0.38);
                transform: scale(1.04);
            }

            /* ── Name ── */
            .up-card-name {
                font-size: 15px;
                font-weight: 700;
                color: #212958;
                line-height: 1.4;
            }

            /* ── Apply button ── */
            .up-apply-btn {
                display: inline-flex;
                align-items: center;
                gap: 7px;
                background: linear-gradient(135deg, #212958, #2d3680);
                color: #fff !important;
                font-size: 13px;
                font-weight: 700;
                padding: 10px 22px;
                border-radius: 50px;
                text-decoration: none;
                border: none;
                box-shadow: 0 4px 14px rgba(33, 41, 88, 0.25);
                transition: all 0.3s ease;
                margin-top: 4px;
                letter-spacing: 0.3px;
            }

            .up-apply-btn:hover {
                background: linear-gradient(135deg, #DA3A34, #bf2f2a);
                box-shadow: 0 8px 24px rgba(218, 58, 52, 0.4);
                transform: translateY(-2px);
                color: #fff !important;
            }

            .up-apply-btn i {
                font-size: 11px;
            }

            /* ── Empty / No results ── */
            .up-no-result {
                display: none;
                text-align: center;
                padding: 70px 20px;
                color: #9ca3af;
                font-size: 16px;
                grid-column: 1 / -1;
            }

            .up-no-result i {
                font-size: 52px;
                display: block;
                margin-bottom: 14px;
                color: #e5e7eb;
            }

            /* ── Divider ── */
            .up-divider {
                display: flex;
                align-items: center;
                gap: 14px;
                margin: 0 auto 44px;
                max-width: 360px;
            }

            .up-divider-line {
                flex: 1;
                height: 2px;
                background: linear-gradient(90deg, rgba(218, 58, 52, 0), #DA3A34, rgba(218, 58, 52, 0));
                border-radius: 2px;
            }

            .up-divider-dot {
                width: 10px;
                height: 10px;
                border-radius: 50%;
                background: #DA3A34;
                flex-shrink: 0;
            }

            /* ── Responsive ── */
            @media (max-width: 767px) {
                .up-grid {
                    grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
                    gap: 18px;
                }

                .up-main-title {
                    font-size: 28px;
                }

                .up-page {
                    padding: 55px 0 70px;
                }
            }

            @media (max-width: 480px) {
                .up-grid {
                    grid-template-columns: repeat(2, 1fr);
                    gap: 14px;
                }
            }
        </style>

        {{-- ===== Main Section ===== --}}
        <section class="up-page">
            <div class="container" style="position:relative; z-index:1;">

                {{-- Header --}}
                <div class="up-header wow fadeInUp animated" data-wow-delay=".1s">
                    <div class="up-badge">🎓 <em>Partner</em> Institutions</div>
                    <h2 class="up-main-title">Our University <span>Partners</span></h2>
                    <p class="up-subtitle">Explore our network of prestigious universities across the UK and beyond. Find
                        your perfect institution and take the first step.</p>

                    @php $total = count($university); @endphp
                    <div class="up-count-badge">
                        <i class="fa-solid fa-building-columns"></i>
                        <span>{{ $total }}</span> Partner {{ $total == 1 ? 'University' : 'Universities' }} Available
                    </div>
                </div>

                {{-- Divider --}}
                <div class="up-divider wow fadeIn animated" data-wow-delay=".25s">
                    <div class="up-divider-line"></div>
                    <div class="up-divider-dot"></div>
                    <div class="up-divider-line"></div>
                </div>

                {{-- Search --}}
                <div class="up-search-wrap wow fadeInDown animated" data-wow-delay=".2s">
                    <input type="text" id="univSearch" placeholder="Search university by name…" autocomplete="off">
                    <i class="fa-solid fa-magnifying-glass up-search-icon"></i>
                </div>

                {{-- Grid --}}
                @if($university && $total > 0)
                    <div class="up-grid" id="univGrid">
                        @foreach($university as $i => $values)
                            @php
                                $hasLogo = !empty($values->file_name);
                                $logoPath = $hasLogo ? public_path('assets/images/University/' . $values->file_name) : null;
                                $logoExists = $hasLogo && file_exists($logoPath);
                                $initial = mb_strtoupper(mb_substr(trim($values->name ?? 'U'), 0, 1));
                                $delay = number_format(0.08 + ($i % 12) * 0.06, 2);
                            @endphp
                            <div class="up-card wow fadeInUp animated" data-wow-delay="{{ $delay }}s"
                                data-name="{{ strtolower($values->name) }}">

                                @if($logoExists)
                                    <div class="up-logo-wrap">
                                        <img src="{{ asset('assets/images/University/' . $values->file_name) }}"
                                            alt="{{ $values->name }}" loading="lazy">
                                    </div>
                                @else
                                    <div class="up-avatar">{{ $initial }}</div>
                                @endif

                                <div class="up-card-name">{{ $values->name }}</div>

                                <a href="{{ url('student/login') }}" class="up-apply-btn">
                                    Apply Now <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        @endforeach

                        {{-- No result placeholder (shown by JS) --}}
                        <div class="up-no-result" id="noResult">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            No universities match "<strong id="noResultTerm"></strong>"
                        </div>
                    </div>
                @else
                    <div style="text-align:center; padding:80px 20px; color:#9ca3af;">
                        <i class="fa-solid fa-building-columns"
                            style="font-size:56px; display:block; margin-bottom:16px; color:#e5e7eb;"></i>
                        No universities listed yet. Check back soon!
                    </div>
                @endif

            </div>
        </section>

        {{-- Live Search Script --}}
        <script>
            (function () {
                const input = document.getElementById('univSearch');
                const grid = document.getElementById('univGrid');
                const noResult = document.getElementById('noResult');
                const noTerm = document.getElementById('noResultTerm');
                if (!input || !grid) return;

                input.addEventListener('input', function () {
                    const q = this.value.trim().toLowerCase();
                    let visible = 0;
                    grid.querySelectorAll('.up-card').forEach(function (card) {
                        if (card.id === 'noResult') return;
                        const name = card.dataset.name || '';
                        const show = !q || name.includes(q);
                        card.style.display = show ? '' : 'none';
                        if (show) visible++;
                    });
                    if (noResult) {
                        noResult.style.display = (visible === 0) ? 'block' : 'none';
                        if (noTerm) noTerm.textContent = this.value;
                    }
                });
            })();
        </script>


        {{-- ===== Related Services / Backlinks ===== --}}
        <section class="related-services-area section-space bg-gray" style="padding: 80px 0; background: #f8f9fa;">
            <div class="container">
                <div class="section__title-wrapper text-center mb-50">
                    <h2 class="section__title-wrapper-title">Explore Our <span style="color:#DA3A34;">Services</span></h2>
                    <p class="mt-15">Learn more about how we can support your academic journey beyond university selection.</p>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-link-card p-4 bg-white rounded shadow-sm text-center h-100" style="border-bottom: 3px solid #212958;">
                            <i class="fa-solid fa-house-user mb-20" style="font-size: 32px; color: #DA3A34;"></i>
                            <h4>UK Home Students</h4>
                            <p class="small">Admission & Finance support for UK residents.</p>
                            <a href="{{ url('uk-home-students') }}" class="mt-10 d-inline-block fw-bold text-decoration-none" style="color: #212958;">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-link-card p-4 bg-white rounded shadow-sm text-center h-100" style="border-bottom: 3px solid #212958;">
                            <i class="fa-solid fa-globe mb-20" style="font-size: 32px; color: #DA3A34;"></i>
                            <h4>International Recruitment</h4>
                            <p class="small">Global education pathways & visa guidance.</p>
                            <a href="{{ url('international-recruitment') }}" class="mt-10 d-inline-block fw-bold text-decoration-none" style="color: #212958;">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-link-card p-4 bg-white rounded shadow-sm text-center h-100" style="border-bottom: 3px solid #212958;">
                            <i class="fa-solid fa-book-open mb-20" style="font-size: 32px; color: #DA3A34;"></i>
                            <h4>Academic Courses</h4>
                            <p class="small">Explore thousands of courses at our partner unis.</p>
                            <a href="{{ url('courses') }}" class="mt-10 d-inline-block fw-bold text-decoration-none" style="color: #212958;">View Courses <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection