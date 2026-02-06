@extends('web_layouts.app')

@section('wrapper')
<!-- Body main wrapper start -->

<main>
    <div class="breadcrumb__area dark-green breadcrumb-space overflow-hidden custom-width position-relative z-1" data-background="web-assets/imgs/bg/supportsbg.jpg">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__title-wrapper mb-15 mb-sm-10 mb-xs-5">
                            <h1 class="breadcrumb__title color-white wow fadeInLeft animated" data-wow-delay=".2s">Support A Student</h1>
                        </div>
                        <div class="breadcrumb__menu wow fadeInLeft animated" data-wow-delay=".4s">
                            <nav>
                                <ul>
                                    <li><span><a href="index-2.html">Home</a></span></li>
                                    <li class="active"><span>Support A Student</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--blog-details-->
    <section class="blog__area section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @foreach($news as $n)
                        <div class="blog__content">
                        <div class="blog__content-thumb">
                            <img src="{{ asset('assets/images/student-support/' . $n->file_name) }}" alt="img not found">
                        </div>
                        <ul class="blog__content-meta mt-20 d-flex wow fadeInLeft animated" data-wow-delay=".2s">
                            <li><a href="#"><svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.375 7.625C8.64844 7.625 10.5 9.47656 10.5 11.75C10.5 12.1719 10.1484 12.5 9.75 12.5H0.75C0.328125 12.5 0 12.1719 0 11.75C0 9.47656 1.82812 7.625 4.125 7.625H6.375ZM1.125 11.375H9.35156C9.16406 9.89844 7.89844 8.75 6.375 8.75H4.125C2.57812 8.75 1.3125 9.89844 1.125 11.375ZM5.25 6.5C3.58594 6.5 2.25 5.16406 2.25 3.5C2.25 1.85938 3.58594 0.5 5.25 0.5C6.89062 0.5 8.25 1.85938 8.25 3.5C8.25 5.16406 6.89062 6.5 5.25 6.5ZM5.25 1.625C4.19531 1.625 3.375 2.46875 3.375 3.5C3.375 4.55469 4.19531 5.375 5.25 5.375C6.28125 5.375 7.125 4.55469 7.125 3.5C7.125 2.46875 6.28125 1.625 5.25 1.625Z" fill="#111214"/>
                                </svg>
                                 {{$n->author}} </a></li>
                                 <li><span><svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.5625 2H6.9375V1.0625C6.9375 0.757812 7.17188 0.5 7.5 0.5C7.80469 0.5 8.0625 0.757812 8.0625 1.0625V2H9C9.82031 2 10.5 2.67969 10.5 3.5V11C10.5 11.8438 9.82031 12.5 9 12.5H1.5C0.65625 12.5 0 11.8438 0 11V3.5C0 2.67969 0.65625 2 1.5 2H2.4375V1.0625C2.4375 0.757812 2.67188 0.5 3 0.5C3.30469 0.5 3.5625 0.757812 3.5625 1.0625V2ZM1.125 6.3125H3V5H1.125V6.3125ZM1.125 7.4375V8.9375H3V7.4375H1.125ZM4.125 7.4375V8.9375H6.375V7.4375H4.125ZM7.5 7.4375V8.9375H9.375V7.4375H7.5ZM9.375 5H7.5V6.3125H9.375V5ZM9.375 10.0625H7.5V11.375H9C9.1875 11.375 9.375 11.2109 9.375 11V10.0625ZM6.375 10.0625H4.125V11.375H6.375V10.0625ZM3 10.0625H1.125V11C1.125 11.2109 1.28906 11.375 1.5 11.375H3V10.0625ZM6.375 5H4.125V6.3125H6.375V5Z" fill="#111214"/>
                                    </svg>                                    
                                    {{ $n->created_at->format('d F, Y') }}</span>
                                </li>
                            </ul>
                        <div class="blog__content-text mt-20">
                            <h2 class="blog__content-text-title wow fadeInLeft animated" data-wow-delay=".3s"><a href="{{ url('student-support-details/'.$n->id.'/'.Str::slug($n->title)) }}">{{$n->title}}</a></h2>
                            <p class=" wow fadeInLeft animated" data-wow-delay=".8s">{!! $n->title !!}</p>
                            <a href="{{ url('student-support-details/'.$n->id.'/'.Str::slug($n->title)) }}" class="rr-btn mt-40 wow fadeInLeft animated mb-10" data-wow-delay="1s">Learn More
                                <svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.7266 5.37891L10.2266 8.87891C9.89844 9.23438 9.32422 9.23438 8.99609 8.87891C8.64062 8.55078 8.64062 7.97656 8.99609 7.64844L10.9922 5.625H0.875C0.382812 5.625 0 5.24219 0 4.75C0 4.23047 0.382812 3.875 0.875 3.875H10.9922L8.99609 1.87891C8.64062 1.55078 8.64062 0.976562 8.99609 0.648438C9.32422 0.292969 9.89844 0.292969 10.2266 0.648438L13.7266 4.14844C14.082 4.47656 14.082 5.05078 13.7266 5.37891Z" fill="white"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar__widget wow fadeInLeft animated" data-wow-delay=".4s">
                            <h5 class="sidebar__widget-title mb-30">Search Here </h5>

                            <div class="sidebar__widget-search">
                                <div class="search__bar position-relative">
                                    <input type="text" id="search" placeholder="Search">
                                    <div class="icon">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar__widget wow fadeInLeft animated" data-wow-delay=".5s">
                            <h5 class="sidebar__widget-title">Popular Post</h5>
                            <div class="sidebar-post__wrapper mt-20">
                                @foreach($visit as $v)
                                <div class="sidebar-post">
                                    <a href="{{ url('student-support-details/'.$v->id.'/'.Str::slug($v->title)) }}" class="sidebar-post_thumb">
                                        <img src="{{ asset('assets/images/student-support/' . $v->file_name) }}" alt="post">
                                    </a>

                                    <div class="sidebar-post_content">
                                        <ul class="post-meta">
                                            <li>
                                                <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.5625 2H6.9375V1.0625C6.9375 0.757812 7.17188 0.5 7.5 0.5C7.80469 0.5 8.0625 0.757812 8.0625 1.0625V2H9C9.82031 2 10.5 2.67969 10.5 3.5V11C10.5 11.8438 9.82031 12.5 9 12.5H1.5C0.65625 12.5 0 11.8438 0 11V3.5C0 2.67969 0.65625 2 1.5 2H2.4375V1.0625C2.4375 0.757812 2.67188 0.5 3 0.5C3.30469 0.5 3.5625 0.757812 3.5625 1.0625V2ZM1.125 6.3125H3V5H1.125V6.3125ZM1.125 7.4375V8.9375H3V7.4375H1.125ZM4.125 7.4375V8.9375H6.375V7.4375H4.125ZM7.5 7.4375V8.9375H9.375V7.4375H7.5ZM9.375 5H7.5V6.3125H9.375V5ZM9.375 10.0625H7.5V11.375H9C9.1875 11.375 9.375 11.2109 9.375 11V10.0625ZM6.375 10.0625H4.125V11.375H6.375V10.0625ZM3 10.0625H1.125V11C1.125 11.2109 1.28906 11.375 1.5 11.375H3V10.0625ZM6.375 5H4.125V6.3125H6.375V5Z" fill="#83CD20"/>
                                                </svg>
                                                {{ date('F d, Y',strtotime($v->created_at))}}
                                            </li>
                                        </ul>
                                        <a href="student-support-details/{{$v->id}}/{!!Str::slug($v->title) !!}"><h3 class="title rr-fw-medium">{!! $v->title !!}</h3></a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="sidebar__widget wow fadeInLeft animated" data-wow-delay=".6s">
                            <h5 class="sidebar__widget-title sidebar__widget-title__have-bar">Category</h5>

                            <div class="sidebar__widget-category">
                                @foreach($submenu as $name)
                                <a class="mt-20" href="/student-support/{{ Str::slug($name->name) }}/{{$name->id}}"><span><svg xmlns="http://www.w3.org/2000/svg" width="5" height="5" viewBox="0 0 5 5" fill="none">
                                    </svg> {{ $name->name}}</span><span>{{$name->total_news}}</span>
                                </a>
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
