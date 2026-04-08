@extends('web_layouts.app')

@section('wrapper')
<!-- Body main wrapper start -->
<main>

    <div class="breadcrumb__area dark-green breadcrumb-space overflow-hidden custom-width position-relative z-1" data-background="web-assets/imgs/bg/gallery-bd.jpg">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__title-wrapper mb-15 mb-sm-10 mb-xs-5">
                            <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">Photo Gallery</h1>
                        </div>
                        <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                            <nav>
                                <ul>
                                    <li><span><a href="/">Home</a></span></li>
                                    <li class="active"><span>Photo Gallery</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--gallery-->
    <section class="gallery__area position-relative  pt-100 section-space-bottom overflow-hidden">
        <div class="container">
            <div class="row mb-minus-30">
                
                @foreach($gallery as $gal)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="gallery__item position-relative overflow-hidden">
                        <div class="gallery__media mb-30">
                            <img src="{{ asset('assets/images/Album/' . $gal['file_name']) }}" alt="img not found">
                        </div>
                        <div class="gallery__content">
                            <h3 class="gallery__title"><a href="gallery">{{ $gal['title']}}</a></h3>
                        </div>
                    </div>
                </div>
                @endforeach
                
                
            </div>
        </div>
    </section>


</main>
@endsection
