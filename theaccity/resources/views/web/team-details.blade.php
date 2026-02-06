@extends('web_layouts.app')

@section('wrapper')
<!-- Body main wrapper start -->
<main>

    <div class="breadcrumb__area dark-green breadcrumb-space overflow-hidden custom-width position-relative z-1" data-background="web-assets/imgs/breadcrumb/breadcrumb.png">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__title-wrapper mb-15 mb-sm-10 mb-xs-5">
                            <h1 class="breadcrumb__title color-white wow fadeInLeft animated" data-wow-delay=".2s">Team Details</h1>
                        </div>
                        <div class="breadcrumb__menu wow fadeInLeft animated" data-wow-delay=".3s">
                            <nav>
                                <ul>
                                    <li><span><a href="/">Home</a></span></li>
                                    <li class="active"><span>Team Details</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--team-details-->
    <section class="teamdetail__area section-space">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="teamdetail__media" data-tilt>
                        <img src="web-assets/imgs/team-details/team-details-left-img.png" alt="img not found">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-6">
                    <div class="teamdetail__content wow fadeInLeft animated" data-wow-delay=".4s">
                        <h2 class="teamdetail__content-title mt-sm-20 mt-xs-15">Ashikur Rahman</h2>
                        <b>Medical Assistant</b>
                        <p>Eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, posuere lobortis, viverra laoreet augue mattis fermentum ullamcorper viverra laoreet Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere </p>
                        <div class="teamdetail__content-text mt-20">
                            <ul>
                                <li>Responsibility: <span>Visa Special</span></li>
                                <li>Experience: <span>10 years +</span></li>
                                <li>Email: <a href="mailto:adbs@gmail.com">adbs@gmail.com</a></li>
                                <li>Phone: <a href="tel:+9075550101">(907) 555-0101</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="teamdetail__description padding-t85">
                        <h3 class="teamdetail__description-title mb-20 wow fadeInLeft animated" data-wow-delay=".2s">Personal Experience</h3>
                        <p class="teamdetail__description-paragraph wow fadeInLeft animated" data-wow-delay=".3s">IELTS score is internationally recognized as an English Language proficiency requirement for higher education, in almost all countries including the USA, the United Kingdom, Australia, Canada, and New Zealand. The highest IELT Academic module test assesses whether you have adequate  possible band score is 9.0; most universities accept a score of 6.0 for undergraduate admission and 6.0-7.0 for graduate admission. There are two versions of the </p>
                        <p class=" wow fadeInLeft animated" data-wow-delay=".7s">IELTS score is internationally recognized as an English Language proficiency requirement for higher education, in almost all countries including the USA, the United Kingdom, Australia, Canada, and New Zealand. The highest IELT Academic module test assesses whether you have adequate  possible band score is 9.0; most universities accept a score of 6.0 for undergraduate admission and 6.0-7.0 for graduate admission. There are two versions of the </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="teamdetail__progress pt-30">
                        <div class="teamdetail__progress-wrapper d-grid">
                            <h3 class="teamdetail__progress-wrapper-title pb-30 wow fadeInLeft animated" data-wow-delay=".4s">Professional Skill</h3>
                            <div class="teamdetail__progress-wrapper-item fix wow fadeIn animated">
                                <div class="teamdetail__progress-wrapper-item-content d-flex justify-content-between">
                                    <span class="span-title">Devoloping process</span>
                                    <span class="left-side">70%</span>
                                </div>

                                <div class="progress d-flex">
                                    <div class="progress-bar wow slideInLeft" data-wow-delay="0s" data-wow-duration=".8s" role="progressbar" data-width="70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>

                            <div class="teamdetail__progress-wrapper-item fix wow fadeIn animated">
                                <div class="teamdetail__progress-wrapper-item-content d-flex justify-content-between">
                                    <span class="span-title">Power Design</span>
                                    <span class="left-side">60%</span>
                                </div>

                                <div class="progress d-flex">
                                    <div class="progress-bar wow slideInLeft" data-wow-delay="0s" data-wow-duration=".8s" role="progressbar" data-width="60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>

                            <div class="teamdetail__progress-wrapper-item fix wow fadeIn animated">
                                <div class="teamdetail__progress-wrapper-item-content d-flex justify-content-between">
                                    <span class="span-title">Comfort Functionality</span>
                                    <span class="left-side">50%</span>
                                </div>

                                <div class="progress d-flex">
                                    <div class="progress-bar wow slideInLeft" data-wow-delay="0s" data-wow-duration=".8s" role="progressbar" data-width="50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="teamdetail__from pt-30">
                        <div class="teamdetail__from-content">
                            <h3 class="teamdetail__from-content-title wow fadeInLeft animated" data-wow-delay=".2s">Contact Me</h3>
                            <p class=" wow fadeInLeft animated" data-wow-delay=".4s">By using form u agree with the message sorage, you</p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="teamdetail__from-content-input wow fadeInLeft animated" data-wow-delay=".3s">
                                        <input name="name" id="name" type="text" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="teamdetail__from-content-input wow fadeInLeft animated" data-wow-delay=".4s">
                                        <input name="email" id="email" type="email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="teamdetail__from-content-textarea wow fadeInLeft animated" data-wow-delay=".5s">
                                        <textarea name="textarea" id="textarea" cols="30" rows="10" placeholder="Write Message.."></textarea>
                                    </div>
                                </div>
                                <div class="teamdetail__from-content-button d-flex justify-content-between pt-30">
                                    <div class="live-comment-widget__agree wow fadeInLeft animated" data-wow-delay=".6s">
                                        <input type="checkbox" class="form-check-input" id="agree">
                                        <label class="form-check-label" for="agree">Save my name email</label>
                                    </div>
                                    <a href="contact" class="teamdetail__from-content-button-btn wow fadeInLeft animated" data-wow-delay=".7s">Post comment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
