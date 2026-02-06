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
                            <h1 class="breadcrumb__title color-white wow fadeInLeft animated" data-wow-delay=".2s">404 Error </h1>
                        </div>
                        <div class="breadcrumb__menu wow fadeInLeft animated" data-wow-delay=".4s">
                            <nav>
                                <ul>
                                    <li><span><a href="index-2.html">Home</a></span></li>
                                    <li class="active"><span>404 Error</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="error pt-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="error__content">
                        <div class="section__title-wrapper text-center">
                            <h3 class="section__title mb-30 mb-xs-10 wow fadeInLeft animated" data-wow-delay=".2s">Oopps!Check Your Connection <br> and Try Again</h3>
                            <p class="mb-30 mb-sm-25 mb-xs-20 wow fadeInLeft animated" data-wow-delay=".4s">Eros justo, posuere loborti viverra laoreet matti ullamcorper posuere viverra .Aliquam eros justo, <br> posuere lobortis, viverra laoreet augue mattis fermentum ullamcorper viverra</p>
                            <div class="footer-form mb-60 wow fadeInLeft animated" data-wow-delay=".6s">
                                <form action="#" class="rr-subscribe-form">
                                    <input class="form-control" type="text" name="text" placeholder="Search Here">
                                    <input type="hidden" name="action" value="mailchimpsubscribe">
                                    <button class="submit">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.625 14.875C17.0938 15.375 17.0938 16.1562 16.625 16.6562C16.125 17.125 15.3438 17.125 14.8438 16.6562L11.125 12.9062C9.84375 13.75 8.28125 14.1875 6.59375 13.9688C3.71875 13.5625 1.40625 11.2188 1.03125 8.375C0.5 4.125 4.09375 0.53125 8.34375 1.0625C11.1875 1.4375 13.5312 3.75 13.9375 6.625C14.1562 8.3125 13.7188 9.875 12.875 11.125L16.625 14.875ZM3.46875 7.5C3.46875 9.71875 5.25 11.5 7.46875 11.5C9.65625 11.5 11.4688 9.71875 11.4688 7.5C11.4688 5.3125 9.65625 3.5 7.46875 3.5C5.25 3.5 3.46875 5.3125 3.46875 7.5Z" fill="white"/>
                                        </svg>
                                    </button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            <div class="error-btn-wrap pb-80">
                                <a href="index-2.html" class="rr-btn wow fadeInLeft animated" data-wow-delay=".8s">Back to Home</a>
                            </div>
                        </div>

                        <div class="error__content-media section-space-bottom">
                            <img class="upDown-bottom" src="web-assets/imgs/404/404.png" alt="image not found">
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>

</main>

@endsection
