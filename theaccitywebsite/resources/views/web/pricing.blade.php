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
                            <h1 class="breadcrumb__title color-white wow fadeInLeft animated" data-wow-delay=".2s">Pricing Tables</h1>
                        </div>
                        <div class="breadcrumb__menu wow fadeInLeft animated" data-wow-delay=".3s">
                            <nav>
                                <ul>
                                    <li><span><a href="/">Home</a></span></li>
                                    <li class="active"><span>Pricing Tables</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--pricing-->
    <section class="pricing__area pt-100 section-space-bottom">
        <div class="container">
            <div class="row mb-minus-30">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="pricing__item mb-30 wow fadeInLeft animated" data-wow-delay=".2s">
                        <div class="pricing__item-title">
                            <h3>Stater  Plan</h3>
                        </div>
                        <div class="pricing__item-content">
                            <div class="pricing__item-content-dolar">
                                <h2>$19<span>/mo</span></h2>
                            </div>
                            <div class="pricing__item-content-list mt-30">
                                <ul>
                                    <li><i class="fa-solid fa-check"></i>Mistakes To Avoid</li>
                                    <li><i class="fa-solid fa-check"></i>Your Startup</li>
                                    <li><i class="fa-solid fa-check"></i>Knew About Fonts</li>
                                    <li><i class="fa-solid fa-check"></i>Knew About Fonts</li>
                                </ul>
                                <div class="pricing__item-content-list-btn mt-40">
                                    <a href="pricing">Buy Plan<i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="pricing__item mb-30 wow fadeInLeft animated" data-wow-delay=".3s">
                        <div class="pricing__item-title">
                            <h3>Basic Plan</h3>
                        </div>
                        <div class="pricing__item-content">
                            <div class="pricing__item-content-dolar">
                                <h2>$29<span>/mo</span></h2>
                            </div>
                            <div class="pricing__item-content-list mt-30">
                                <ul>
                                    <li><i class="fa-solid fa-check"></i>Mistakes To Avoid</li>
                                    <li><i class="fa-solid fa-check"></i>Your Startup</li>
                                    <li><i class="fa-solid fa-check"></i>Knew About Fonts</li>
                                    <li><i class="fa-solid fa-check"></i>Knew About Fonts</li>
                                </ul>
                                <div class="pricing__item-content-list-btn mt-40">
                                    <a href="pricing">Buy Plan<i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="pricing__item mb-30 wow fadeInLeft animated" data-wow-delay=".4s">
                        <div class="pricing__item-title">
                            <h3>Premium Plan</h3>
                        </div>
                        <div class="pricing__item-content">
                            <div class="pricing__item-content-dolar">
                                <h2>$89<span>/mo</span></h2>
                            </div>
                            <div class="pricing__item-content-list mt-30">
                                <ul>
                                    <li><i class="fa-solid fa-check"></i>Mistakes To Avoid</li>
                                    <li><i class="fa-solid fa-check"></i>Your Startup</li>
                                    <li><i class="fa-solid fa-check"></i>Knew About Fonts</li>
                                    <li><i class="fa-solid fa-check"></i>Knew About Fonts</li>
                                </ul>
                                <div class="pricing__item-content-list-btn mt-40">
                                    <a href="pricing">Buy Plan<i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="pricing__item mb-30 wow fadeInLeft animated" data-wow-delay=".5s">
                        <div class="pricing__item-title">
                            <h3>Popular Plan</h3>
                        </div>
                        <div class="pricing__item-content">
                            <div class="pricing__item-content-dolar">
                                <h2>$49<span>/mo</span></h2>
                            </div>
                            <div class="pricing__item-content-list mt-30">
                                <ul>
                                    <li><i class="fa-solid fa-check"></i>Mistakes To Avoid</li>
                                    <li><i class="fa-solid fa-check"></i>Your Startup</li>
                                    <li><i class="fa-solid fa-check"></i>Knew About Fonts</li>
                                    <li><i class="fa-solid fa-check"></i>Knew About Fonts</li>
                                </ul>
                                <div class="pricing__item-content-list-btn mt-40">
                                    <a href="pricing">Buy Plan<i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="pricing__item mb-30 wow fadeInLeft animated" data-wow-delay=".6s">
                        <div class="pricing__item-title">
                            <h3>Master Plan</h3>
                        </div>
                        <div class="pricing__item-content">
                            <div class="pricing__item-content-dolar">
                                <h2>$57<span>/mo</span></h2>
                            </div>
                            <div class="pricing__item-content-list mt-30">
                                <ul>
                                    <li><i class="fa-solid fa-check"></i>Mistakes To Avoid</li>
                                    <li><i class="fa-solid fa-check"></i>Your Startup</li>
                                    <li><i class="fa-solid fa-check"></i>Knew About Fonts</li>
                                    <li><i class="fa-solid fa-check"></i>Knew About Fonts</li>
                                </ul>
                                <div class="pricing__item-content-list-btn mt-40">
                                    <a href="pricing">Buy Plan<i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="pricing__item mb-30 wow fadeInLeft animated" data-wow-delay=".7s">
                        <div class="pricing__item-title">
                            <h3>Gold Plan</h3>
                        </div>
                        <div class="pricing__item-content">
                            <div class="pricing__item-content-dolar">
                                <h2>$99<span>/mo</span></h2>
                            </div>
                            <div class="pricing__item-content-list mt-30">
                                <ul>
                                    <li><i class="fa-solid fa-check"></i>Mistakes To Avoid</li>
                                    <li><i class="fa-solid fa-check"></i>Your Startup</li>
                                    <li><i class="fa-solid fa-check"></i>Knew About Fonts</li>
                                    <li><i class="fa-solid fa-check"></i>Knew About Fonts</li>
                                </ul>
                                <div class="pricing__item-content-list-btn mt-40">
                                    <a href="pricing">Buy Plan<i class="fa-solid fa-arrow-right"></i></a>
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
