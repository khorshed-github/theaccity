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
                            <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">University Partners</h1>
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
    
<section class="choice__area section-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__title-wrapper text-center mb-70">
                        <h6 class="section__title-wrapper-center-subtitle mb-10 wow fadeInLeft animated" data-wow-delay=".2s">University You Can Visit</h6>
                        <h2 class="section__title-wrapper-title wow fadeInLeft animated" data-wow-delay=".3s">Select the University of <br> Your Choice</h2>
                    </div>
                </div>
            </div>
            <div class="row mb-minus-30">
                
                 @foreach($university as $values)
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                    <div class="choice__item mb-30">
                        <!--<div class="choice__item-icon">
                            <img src="{{ asset('assets/images/University/' . $values['file_name']) }}"
                                            alt="{{ $values['name'];}}">
                        </div>-->
                        <h3 class="choice__item-title"><a href="#">{{ $values['name'];}}</a></h3>
                        <!--<p class="choice__item-dec">Nulla ut elemen tum sapien</p>
                        <a class="choice__item-btn" href="countrie.html">Apply Now <i class="fa-solid fa-arrow-right"></i></a>-->
                    </div>
                </div>
                 @endforeach
                
                
            </div>
        </div>
    </section>

</main>
@endsection
