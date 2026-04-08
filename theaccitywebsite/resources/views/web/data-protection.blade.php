@extends('web_layouts.app')

@section('wrapper')
<!-- Body main wrapper start -->
<main>


  <div class="breadcrumb__area dark-green breadcrumb-space overflow-hidden custom-width position-relative z-1" data-background="web-assets/responsibility/data-protection.jpg">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__title-wrapper mb-15 mb-sm-10 mb-xs-5">
                            <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">Data Protection</h1>
                        </div>
                        <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                            <nav>
                                <ul>
                                    <li><span><a href="/">Home</a></span></li>
                                    <li class="active"><span>Data Protection</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--faq 5-->
        <section class="faq-5__area ask-question p-relative overflow-hidden section-space">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-5__thumb">
                        <div class="faq-5__thumb-shape upDown-bottom">
                            <img src="web-assets/responsibility/data-protection.jpg" alt="img not found">
                        </div>
                        <div class="faq-5__thumb-media">
                            <img src="web-assets/responsibility/data-protection.jpg" alt="img not found">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section__title-wrapper mb-40">
                        <h6 class="section__title-wrapper-black-subtitle mb-10 wow fadeInLeft animated" data-wow-delay=".2s">Data Protection</h6>
                        <h2 class="section__title-wrapper-title wow fadeInLeft animated" data-wow-delay=".3s">Securing Privacy and  <br> Confidential Information.</h2>
                    </div>
                    <div class="ask-question__faq">
                        <div class="accordion" id="accordionExample">
                            @foreach($dps as $com)
                            <div class="accordion-item ask-question__faq-item faq-5__item wow fadeInLeft animated" data-wow-delay=".4s">
                                <h5 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_{{ $com['id'] }}" aria-expanded="true" aria-controls="collapseThree">
                                        {{ $com['question'] }}
                                    </button>
                                </h5>
                                <div id="collapse_{{ $com['id'] }}" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
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


</main>
@endsection
