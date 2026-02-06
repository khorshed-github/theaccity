@extends('web_layouts.app')

@section('wrapper')
<!-- Body main wrapper start -->
<main>
<style>
        .section-space {
            padding-top: 30px !important;
        }
        .program-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            border: none;
            background: linear-gradient(to bottom, #ffffff 85%, #f8fafc 100%);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .program-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
        .logo-section {
            margin:12px;
            padding: 10px 10px 5px;
            background: linear-gradient(to right, #76e79e, #76bb65);
            display: flex;
            align-items: center;
            border-bottom: 2px solid #83cd20;
            border-radius: 10px;
        }
        .university-logo {
            background: #ffffff;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 1px solid #6dd1c3;
            padding: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-right: 20px;
        }
        .university-logo i {
            font-size: 40px;
            color: #2c5282;
        }
        .university-header {
            color: white;
        }
        .university-header h5 {
            font-weight: 300;
            letter-spacing: 1.5px;
            margin-bottom: 5px;
            font-size: 0.9rem;
        }
        .university-header h2 {
            font-weight: 700;
            font-size: 1.5rem;
            margin: 0;
        }
        .card-body {
            padding: 30px;
        }
        .card-title {
            color: #1a202c;
            font-weight: 700;
            margin-bottom: 25px;
            font-size: 1.9rem;
            line-height: 1.3;
            position: relative;
            padding-bottom: 15px;
        }
        .card-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 70px;
            height: 4px;
            background: linear-gradient(to right, #3182ce, #00b5d8);
            border-radius: 2px;
        }
        .card-text {
            color: #4a5568;
            font-size: 1.1rem;
            line-height: 1.7;
            margin-bottom: 30px;
        }
        .highlight {
            color: #2d3748;
            font-weight: 600;
            background: linear-gradient(transparent 60%, rgba(49, 130, 206, 0.15) 40%);
            padding: 0 3px;
        }
        .btn-learn {
            background: linear-gradient(to right, #48bd51, #244e04);
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            font-size: 14px;
            box-shadow: 0 4px 10px rgba(49, 130, 206, 0.3);
            position: relative;
            overflow: hidden;
        }
        .btn-learn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 15px rgba(49, 130, 206, 0.4);
        }
        .btn-learn:active {
            transform: translateY(1px);
        }
        .btn-learn::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -60%;
            width: 20px;
            height: 200%;
            background: rgba(255, 255, 255, 0.3);
            transform: rotate(25deg);
            transition: all 0.4s;
        }
        .btn-learn:hover::after {
            left: 120%;
        }
        .card-footer {
            background-color: #f8fafc;
            border-top: 1px solid #edf2f7;
            padding: 20px 30px;
            color: #4a5568;
            font-weight: 500;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }
        .location-icon {
            color: #3182ce;
            margin-right: 10px;
            font-size: 1.2rem;
        }
        .divider {
            color: #cbd5e0;
            margin: 0 15px;
        }
        .badge {
            background: #e6f7ff;
            color: #3182ce;
            font-weight: 600;
            padding: 8px 15px;
            border-radius: 20px;
            margin-left: auto;
        }
        
        @media (max-width: 768px) {
            .logo-section {
                flex-direction: column;
                text-align: center;
                padding: 25px 20px;
            }
            .university-logo {
                margin-right: 0;
                margin-bottom: 15px;
            }
            .card-title {
                font-size: 1.6rem;
            }
            .card-text {
                font-size: 1rem;
            }
            .card-footer {
                flex-direction: column;
                align-items: flex-start;
            }
            .badge {
                margin-left: 0;
                margin-top: 15px;
            }
            .divider {
                display: none;
            }
            .location-item {
                display: block;
                width: 100%;
                margin-bottom: 8px;
            }
           
        }
        
        .btn-apply {
            background: linear-gradient(to right, #ff416c, #ff4b2b);
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 700;
            transition: all 0.4s ease;
            border: none;
            font-size: 1.1rem;
            box-shadow: 0 8px 20px rgba(255, 75, 43, 0.4);
            position: relative;
            overflow: hidden;
            letter-spacing: 0.5px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        
        .btn-apply:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 12px 25px rgba(255, 75, 43, 0.5);
        }
        
        .btn-apply:active {
            transform: translateY(2px);
        }
        
        .btn-apply::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -60%;
            width: 20px;
            height: 200%;
            background: rgba(255, 255, 255, 0.4);
            transform: rotate(25deg);
            transition: all 0.6s;
        }
        
        .btn-apply:hover::after {
            left: 120%;
        }
        
        .btn-apply i {
            margin-left: 12px;
            transition: transform 0.3s ease;
        }
        
        .btn-apply:hover i {
            transform: translateX(5px);
        }
    </style>
<style>
    .location-item {
    position: relative;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    cursor: pointer;
}

.location-icon {
    color: #666;
    margin-right: 5px;
}

.location-count {
    background: #e0e0e0;
    border-radius: 10px;
    padding: 0 6px;
    font-size: 0.8em;
    color: #555;
}

.all-locations {
    position: relative;
    top: 100%;
    left: 0;
    background: white;
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    z-index: 10;
    display: none;
    min-width: 150px;
    white-space: nowrap;
}

.location-item:hover .all-locations {
    display: block;
    cursor: pointer;
}
    </style>
    <div class="breadcrumb__area dark-green breadcrumb-space overflow-hidden custom-width position-relative z-1" data-background="public/web-assets/imgs/breadcrumb/course-bg.jpg">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__title-wrapper mb-15 mb-sm-10 mb-xs-5">
                            <h1 class="breadcrumb__title color-white wow fadeInLeft animated" data-wow-delay=".2s">Courses</h1>
                        </div>
                        <div class="breadcrumb__menu wow fadeInLeft animated" data-wow-delay=".4s">
                            <nav>
                                <ul>
                                    <li><span><a href="/">Home</a></span></li>
                                    <li class="active"><span>Courses</span></li>
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
                <div class="col-12">
                    <div class="section__title-wrapper text-center mb-2">
                        <h2 class="section__title-wrapper-title wow fadeInLeft animated" data-wow-delay=".3s">FIND YOUR PERFECT COURSE</h2>
                        <h6 class="section__title-wrapper-subtitle mt-10 wow fadeInLeft animated" data-wow-delay=".2s">Discover programs tailored to your academic goals and career aspirations</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="rr-fea-product__tab-3 product-filter-area-review">
                        <div class="all-button d-flex overflow-x-scroll" style="">
                            @foreach($country as $values)
                            <button class="wow fadeInLeft animated m-2" data-wow-delay=".4s">
                                <span class="button">
                                    <span class="text-nowrap">{{ $values['name'] }}</span>
                                </span>
                            </button>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar__widget wow fadeInLeft animated" data-wow-delay=".4s">
                            <h5 class="sidebar__widget-title mb-2">Find a course</h5>
                            <div class="sidebar__widget-search">
                                <div class="search__bar position-relative">
                                    <input type="text" id="search" placeholder="Search Course">
                                    <div class="icon">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </div>
                                    <ul class="list-group mt-2" id="suggestions"></ul>
                                </div>
                            </div>
                            <p>Type to filter courses by name</p>
                        </div>
                        
                        <div id="result" class="mt-3"></div>

                        <div class="sidebar__widget wow fadeInLeft animated" data-wow-delay=".5s">
                            <h5 class="sidebar__widget-title">University</h5>
                            <div class="d-flex flex-wrap mt-4">
                                <!-- Each image container takes 50% width -->
                                 @foreach($university as $values)
                                <div class="mb-4 align-items-center wow fadeInLeft animated" style="width: 50%;" data-wow-delay=".2s">
                                  <div class="pe-2" data-tilte>
                                        <img 
                                            style="height: 80px; object-fit: contain;"
                                            class="img-thumbnail"
                                            src="{{ asset('public/assets/images/University/' . $values['file_name']) }}"
                                            alt="{{ $values['name'];}}"
                                        >
                                  </div>
                                </div>
                                  @endforeach
                            </div>
                        </div>
                        <div class="sidebar__widget wow fadeInLeft animated" data-wow-delay=".7s">
                            <h5 class="sidebar__widget-title">Location</h5>
                            <div class="sidebar__widget-tags mt-20">
                                <div class="tags">
                                       @foreach($location as $values)
                                    <a href="#">{{ $values['name'];}}</a>
                                       @endforeach
                                </div>
                            </div>
                        </div>
                        
                        <div class="sidebar__widget wow fadeInLeft animated" data-wow-delay=".7s">
                            <h5 class="sidebar__widget-title">Subject Type</h5>
                            <div class="sidebar__widget-tags mt-20">
                                <div class="tags">
                                        @foreach($subject as $values)
                                    <a href="#">{{ $values['name'];}}</a>
                                        @endforeach
                                </div>
                            </div>
                        </div>
                        
                        <div class="sidebar__widget wow fadeInLeft animated" data-wow-delay=".7s">
                            <h5 class="sidebar__widget-title">Course Level</h5>
                            <div class="sidebar__widget-tags mt-20">
                                <div class="tags">
                                        @foreach($course as $values)
                                    <a href="#">{{ $values['name'];}}</a>
                                        @endforeach
                                </div>
                            </div>
                        </div>
                        
                        <div class="sidebar__widget wow fadeInLeft animated" data-wow-delay=".7s">
                            <h5 class="sidebar__widget-title">Intake</h5>
                            <div class="sidebar__widget-tags mt-20">
                                <div class="tags">
                                    @foreach($months as $month)
                                        <a href="#">{{ $month }}</a>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        
                        <div class="coaching-details__widget mt-30 wow fadeInLeft animated" data-wow-delay="1.6s">
                        <div class="coaching-details__widget-icon">
                            <svg width="41" height="42" viewBox="0 0 41 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M39.9219 31.2344L38.0469 39.125C37.8125 40.2969 36.875 41.0781 35.7031 41.0781C16.0156 41 0 24.9844 0 5.29688C0 4.125 0.703125 3.1875 1.875 2.95312L9.76562 1.07812C10.8594 0.84375 12.0312 1.46875 12.5 2.48438L16.1719 11C16.5625 12.0156 16.3281 13.1875 15.4688 13.8125L11.25 17.25C13.9062 22.6406 18.2812 27.0156 23.75 29.6719L27.1875 25.4531C27.8125 24.6719 28.9844 24.3594 30 24.75L38.5156 28.4219C39.5312 28.9688 40.1562 30.1406 39.9219 31.2344Z" fill="white"/>
                            </svg> 
                        </div>
                        <h3 class="mt-15">GET TOUCH</h3>
                        <a href="tel:+629555-0129">(629) 555-0129</a>
                    </div>
                    </div>
                </div>
                    <div class="col-lg-8">
                        
                        @foreach($courseDetails as $courseValue)
                        
                        <div class="program-card mt-4">
                        <!-- Logo Section -->
                        
                        <div class="logo-section">
                            <div class="university-logo">
                                <img 
                                      class="rounded"
                                       src="{{ asset('public/assets/images/University/' . $courseValue->university_logo) }}"
                                      alt="{{ $courseValue->university_name }}"
                                    >
                            </div>
                            <div class="university-header">
                                <h2>{!! $courseValue->university_name !!}</h2>
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <h2 class="card-title">{{ $courseValue->title }}</h2>
                            <p class="card-text">
                                {!! $courseValue->shot_desc !!}
                            </p>
                            <button class="btn btn-learn" data-bs-toggle="modal" data-bs-target="#courseDetailsModal_{{ $courseValue->id }}">
                                Learn More <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                            <button class="btn btn-apply">
                                    Apply Now <i class="fas fa-arrow-right ms-2"></i>
                                </button>
                        </div>
                        
                        <div class="card-footer">
                            
                            
                            <div class="location-item" title="@foreach($courseValue->locations as $loc){{ $loc }}@if(!$loop->last), @endif @endforeach">
                                <i class="fas fa-map-marker-alt location-icon"></i>
                                <span class="first-location">{{ $courseValue->locations[0] ?? '' }}</span>
                                @if(count($courseValue->locations) > 1)
                                    <span class="location-count">+{{ count($courseValue->locations) - 1 }}</span>
                                    <div class="all-locations">
                                        @foreach($courseValue->locations as $loc)
                                            <i class="fas fa-map-marker-alt location-icon"></i> <span>{{ $loc }}</span><br>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            
                            
                            <div class="divider">|</div>
                            
                            
                             <div class="location-item" title="@foreach($courseValue->locations as $int){{ $int }}@if(!$loop->last), @endif @endforeach">
                                <i class="fa-solid fa-calendar-clock location-icon"></i>
                                <span class="first-location">{{ $courseValue->intakes[0] ?? '' }}</span>
                                @if(count($courseValue->locations) > 1)
                                    <span class="location-count">+{{ count($courseValue->intakes) - 1 }}</span>
                                    <div class="all-locations">
                                        @foreach($courseValue->intakes as $int)
                                            <i class="fa-solid fa-calendar-clock location-icon"></i> <span>{{ $int }}</span><br>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            
                            <div class="badge">
                                <i class="fas fa-link me-1"></i> Delivery Mode: {!! $courseValue->delivery_mode !!}
                            </div>
                            <div class="badge bg-warning">
                               <i class="fas fa-star me-1"></i> Entry Route: {!! $courseValue->entry_route !!}
                            </div>
                            
                        </div>
                    </div>
                    
                        @endforeach
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Brand area start -->
    <section class="main-brand__area section-space-bottom">
        <div class="brand__area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="swiper brand__active wow fadeIn" data-wow-delay=".3s">
                            <div class="swiper-wrapper">
                                
                                 @foreach($university as $values)
                                 <div class="swiper-slide">
                                    <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".1s">
                                        <div class="brand__thumb">
                                            <img class="img-fluid" src="{{ asset('public/assets/images/University/' . $values['file_name']) }}" alt="{{ $values['name'];}}">
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
    <!-- Brand area end -->
    
    <!-- Button trigger modal -->


<!-- Modal -->
 @foreach($courseDetails as $courseValue)
 
    <div class="modal fade" id="courseDetailsModal_{{ $courseValue->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header w-100">
            <div class="logo-section" style="background:#fafafa;">
            <div class="">
                <img style="height: 80px; width: 75%; object-fit: contain; margin-right:10px;" 
                      class="img-thumbnail"
                      src="public/web-assets/imgs/university/roehampton-logo-trans.svg"
                      alt="img not found"
                    >
            </div>
            <div>
                <h4>{!! $courseValue->title !!}</h4>
                <p>{!! $courseValue->university_name !!}</p>
            </div>
        </div>
      </div>
      <div class="modal-body">
            <div class="accordion" id="accordionExample">
               <div class="accordion-item">
                   <h2 class="accordion-header" id="headingOne">
                       <button class="accordion-button h4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Requirements
                       </button>
                   </h2>
                   <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                       <div class="accordion-body">
                           <p>{!! $courseValue->requirement !!}</p>
                       </div>
                   </div>
               </div>
               <div class="accordion-item">
                   <h2 class="accordion-header" id="headingOne2">
                       <button class="accordion-button collapsed h4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="false" aria-controls="collapseOne2">
                        Schedule
                       </button>
                   </h2>
                   <div id="collapseOne2" class="accordion-collapse collapse" aria-labelledby="headingOne2" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>{!! $courseValue->schedule !!}</p>
                    </div>
                   </div>
               </div>
               <div class="accordion-item">
                   <h2 class="accordion-header" id="headingOne3">
                       <button class="accordion-button collapsed h4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne3" aria-expanded="false" aria-controls="collapseOne3">
                        Fees
                       </button>
                   </h2>
                   <div id="collapseOne3" class="accordion-collapse collapse" aria-labelledby="headingOne3" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>{!! $courseValue->fees !!}</p>
                    </div>
                   </div>
               </div>
               <div class="accordion-item">
                   <h2 class="accordion-header" id="headingOne4">
                       <button class="accordion-button collapsed h4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne4" aria-expanded="false" aria-controls="collapseOne4">
                        Interview
                       </button>
                   </h2>
                   <div id="collapseOne4" class="accordion-collapse collapse" aria-labelledby="headingOne4" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>{!! $courseValue->interview !!}</p>
                    </div>
                   </div>
               </div>
               
           </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-learn" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-apply">Apply Now</button>
      </div>
    </div>
  </div>
</div>
 @endforeach
 
 <script>
     $(document).ready(function() {
    $('.location-item').hover(
        function() {
            $(this).find('.all-locations').fadeIn(200);
        },
        function() {
            $(this).find('.all-locations').fadeOut(200);
        }
    );
});
 </script>
</main>
@endsection