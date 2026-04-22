@extends('web_layouts.app')
@section('title', 'Career Opportunities | Join TheAccity Team')
@section('meta_description', 'Explore career opportunities at TheAccity. Join our team of expert education consultants and help students achieve their global academic dreams.')

@section('wrapper')
    <main>
        <div class="breadcrumb__area dark-green breadcrumb-space overflow-hidden custom-width position-relative z-1"
            data-background="{{ asset('web-assets/imgs/bg/career.jpg') }}">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <div class="breadcrumb__title-wrapper mb-15">
                                <h1 class="breadcrumb__title color-white wow fadeInLeft animated" data-wow-delay=".2s">
                                    Career Opportunities</h1>
                            </div>
                            <div class="breadcrumb__menu wow fadeInLeft animated" data-wow-delay=".3s">
                                <nav>
                                    <ul>
                                        <li><span><a href="/">Home</a></span></li>
                                        <li class="active"><span>Career</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="job-application-section section pt-100 pb-100 overflow-hidden">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="career-form-container">
                            <div class="section__title-wrapper mb-40 text-center">
                                <h2 class="section__title-wrapper-title">Job Application Form</h2>
                                <p class="mt-15">Please complete the form below and upload your CV to apply.</p>
                                <button type="button" class="rr-btn btn-transparent mt-20" data-bs-toggle="modal"
                                    data-bs-target="#jobOverviewModal">
                                    View Job Circular<span><i class="fa-regular fa-eye"></i></span>
                                </button>
                            </div>

                            @if(session('success'))
                                <div class="alert alert-success mb-30">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if($errors->any())
                                <div class="alert alert-danger mb-30">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('career.store') }}" method="post" enctype="multipart/form-data"
                                class="career-form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-25">
                                            <label for="fullName">Full Name *</label>
                                            <input type="text" id="fullName" name="fullName" class="form-control"
                                                value="{{ old('fullName') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-25">
                                            <label for="email">Email Address *</label>
                                            <input type="email" id="email" name="email" class="form-control"
                                                value="{{ old('email') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-25">
                                            <label for="phone">Phone Number *</label>
                                            <input type="tel" id="phone" name="phone" class="form-control"
                                                value="{{ old('phone') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-25">
                                            <label for="nationality">Nationality *</label>
                                            <input type="text" id="nationality" name="nationality" class="form-control"
                                                value="{{ old('nationality') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-25">
                                            <label for="address">Address *</label>
                                            <textarea id="address" name="address" rows="3" class="form-control"
                                                required>{{ old('address') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-25">
                                            <label for="immigration">Immigration Status / Share Code Details *</label>
                                            <textarea id="immigration" name="immigration" rows="3" class="form-control"
                                                required
                                                placeholder="Please provide your immigration status and share code details if applicable">{{ old('immigration') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-25">
                                            <label for="education">Education *</label>
                                            <textarea id="education" name="education" rows="4" class="form-control" required
                                                placeholder="Please include your qualifications, institution names, and years">{{ old('education') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-30">
                                            <label for="cv">Upload CV * (PDF, DOC, DOCX, Max 2MB)</label>
                                            <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="rr-btn">Submit Application<span><i
                                                    class="fa-regular fa-angle-right"></i></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Job Overview Modal -->
    <div class="modal fade" id="jobOverviewModal" tabindex="-1" aria-labelledby="jobOverviewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border-0 overflow-hidden" style="border-radius: 20px;padding: 20px;">
                <div class="modal-header border-0 pb-0" style="background: var(--brand-navy); color: #fff;">
                    <h5 class="modal-title h3 text-white" id="jobOverviewModalLabel">Job Circular</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-40">
                    <div class="job-circular-content">
                        <h4 class="mb-20" style="color: var(--brand-red);">Educational Consultant / Marketing Officer</h4>
                        <div class="job-info-grid mb-30">
                            <div class="job-info-item"><strong>Company:</strong> The ACCITY Ltd</div>
                            <div class="job-info-item"><strong>Location:</strong> London, UK</div>
                        </div>

                        <div class="job-section mb-30">
                            <h5 class="mb-10"><i class="fa-solid fa-briefcase me-2" style="color: var(--brand-red);"></i>
                                Job Overview</h5>
                            <p>The ACCITY Ltd is seeking a dynamic and results-driven Educational Consultant / Marketing
                                Officer with strong knowledge of the UK higher education landscape (Home and International).
                                The ideal candidate will be confident, well-spoken, and capable of generating and converting
                                leads into successful student enrollments.</p>
                        </div>

                        <div class="job-section mb-30">
                            <h5 class="mb-10"><i class="fa-solid fa-list-check me-2" style="color: var(--brand-red);"></i>
                                Key Responsibilities</h5>
                            <ul class="list-unstyled custom-list">
                                <li><i class="fa-solid fa-check me-2" style="color: var(--brand-red);"></i> Provide expert
                                    guidance on UK higher education opportunities</li>
                                <li><i class="fa-solid fa-check me-2" style="color: var(--brand-red);"></i> Conduct cold
                                    calling and outreach to prospective students</li>
                                <li><i class="fa-solid fa-check me-2" style="color: var(--brand-red);"></i> Convert
                                    inquiries into applications and close deals</li>
                                <li><i class="fa-solid fa-check me-2" style="color: var(--brand-red);"></i> Build
                                    relationships with students, agents, and partners</li>
                                <li><i class="fa-solid fa-check me-2" style="color: var(--brand-red);"></i> Promote services
                                    through marketing strategies</li>
                            </ul>
                        </div>

                        <div class="job-section mb-30">
                            <h5 class="mb-10"><i class="fa-solid fa-graduation-cap me-2"
                                    style="color: var(--brand-red);"></i> Requirements</h5>
                            <ul class="list-unstyled custom-list">
                                <li><i class="fa-solid fa-check me-2" style="color: var(--brand-red);"></i> Strong
                                    understanding of UK education systems</li>
                                <li><i class="fa-solid fa-check me-2" style="color: var(--brand-red);"></i> Excellent
                                    English communication skills</li>
                                <li><i class="fa-solid fa-check me-2" style="color: var(--brand-red);"></i> Confident,
                                    smart, and well-presented personality</li>
                                <li><i class="fa-solid fa-check me-2" style="color: var(--brand-red);"></i> Proven ability
                                    in sales and lead generation</li>
                                <li><i class="fa-solid fa-check me-2" style="color: var(--brand-red);"></i> Target-driven
                                    mindset</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 bg-light p-3">
                    <button type="button" class="rr-btn" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <style>
        .career-form-container {
            background: #fff;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
        }

        .career-form label {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
            color: var(--brand-navy);
            font-size: 14px;
        }

        .career-form .form-control {
            width: 100%;
            padding: 12px 20px;
            border: 1px solid #e1e1e1;
            border-radius: 8px;
            background: #f9f9f9;
            transition: all 0.3s;
            margin-left: 0 !important;
            /* Override theme default margin-left */
        }

        .career-form .form-control:focus {
            border-color: var(--brand-red);
            background: #fff;
            box-shadow: 0 0 10px rgba(218, 58, 52, 0.1);
        }

        .career-form textarea.form-control {
            height: auto !important;
        }

        .rr-btn.btn-transparent {
            background: transparent !important;
            border: 2px solid var(--brand-red) !important;
            color: var(--brand-red) !important;
        }

        .rr-btn.btn-transparent:hover {
            background: var(--brand-red) !important;
            color: #fff !important;
        }

        /* Modal Custom Styles */
        .job-info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            background: #f8f9fa;
            padding: 15px;
            border-radius: 10px;
            border-left: 4px solid var(--brand-red);
        }

        .custom-list li {
            margin-bottom: 8px;
            font-size: 15px;
        }

        @media (max-width: 767px) {
            .career-form-container {
                padding: 30px 20px;
            }
        }
    </style>
@endsection