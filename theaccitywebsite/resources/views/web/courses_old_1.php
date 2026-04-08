@extends('web_layouts.app')

@section('wrapper')
<!-- Body main wrapper start -->
<main>
<style>
        .product-filter-area-review .button{
            padding: 7px 20px;
            font-size: 18px;
        }
        .course-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 24px;
            overflow: hidden;
            background: white;
        }
        
        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 10px rgba(0, 0, 0, 0.12);
        }
        
        .course-header {
            padding: 10px 14px 0;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .course-title {
            font-size: 20px;
            font-weight: 600;
            color: #2c3e50;
            text-decoration: none;
            transition: color 0.2s ease;
        }
        
        .course-title:hover {
            color: #3498db;
        }
        
        .course-body {
            padding: 10px 14px;
        }
        
        .course-details {
            color: #5a6c7d;
            font-size: 0.95rem;
        }
        .location{
            font-size:14px;
        }
        .location-tag {
            display: inline-block;
            background-color: #e8f4fd;
            color: #2980b9;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 14px;
            margin-right: 8px;
            margin-bottom: 8px;
        }
        
        .university-name {
            font-weight: 600;
            color: #2c3e50;
            font-size:14px;
        }
        
        
        
        .btn-learn:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(52, 152, 219, 0.3);
        }
        
        .card-icon {
            color: #3498db;
            margin-right: 8px;
        }
        
        
        
        @media (max-width: 768px) {
            .course-body .row > div {
                margin-bottom: 10px;
            }
            
            .btn-learn {
                width: 100%;
            }
        }
    </style>
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
       
        .card-body {
            padding: 30px;
            padding-top:0px;
        }
        .card-title {
            color: #1a202c;
            font-weight: 500;
            font-size: 16px;
            position: relative;
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
            padding: 6px 20px;
            border-radius: 30px;
            font-weight: 400;
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
            padding: 6px 20px;
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
    
<style>
.modal-content {
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
}

.modal-header {
  padding: 1.2rem 1.5rem;
  border-bottom: 1px solid rgba(255, 255, 255, 0.2);
}

.modal-body {
  padding: 1.5rem;
}

.form-label {
  margin-bottom: 0.5rem;
  color: #333;
}

.input-group-text {
  background-color: #f8f9fa;
  border-right: none;
}

.form-control, .form-select {
  border-left: none;
  padding: 0.75rem;
  transition: all 0.3s ease;
}

.form-control:focus, .form-select:focus {
  box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.15);
  border-color: #86b7fe;
}

.btn-primary {
  background: linear-gradient(135deg, #0d6efd, #0a58ca);
  border: none;
  font-weight: 600;
  transition: all 0.3s ease;
}

.btn-primary:hover {
  background: linear-gradient(135deg, #0a58ca, #084298);
  transform: translateY(-2px);
  box-shadow: 0 4px 12px rgba(13, 110, 253, 0.3);
}

.text-muted {
  font-size: 0.9rem;
}

.input-group:focus-within .input-group-text {
  background-color: #e9ecef;
  border-color: #86b7fe;
}

.fa {
  width: 16px;
}
</style>
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
                                    <input type="text" id="search" placeholder="Search Course Title">
                                    <div class="icon">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="result" class="mt-3"></div>
                       
                        <div class="sidebar__widget wow fadeInLeft animated" data-wow-delay=".2s">
                            <h5 class="sidebar__widget-title">University</h5>
                            <div class="sidebar__widget-tags mt-20">
                                <div class="tags">
                                        @foreach($university as $values)
                                        <button class="btn-apply btn-sm btn university_search" data-id="{{ $values['id']; }}">{{ $values['name'];}}</button>
                                        @endforeach
                                        <button class="btn-apply btn-sm btn university_search" data-id="all">Show All</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sidebar__widget wow fadeInLeft animated" data-wow-delay=".7s">
                            <h5 class="sidebar__widget-title">Location</h5>
                            <div class="sidebar__widget-tags mt-20">
                                <div class="tags">
                                       @foreach($location as $values)
                                    <button class="btn-learn btn-sm btn location_search" data-location="{{ $values['name']; }}">{{ $values['name'];}}</button>
                                       @endforeach
                                    <button class="btn-learn btn-sm btn location_search" data-location="all">Show All</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sidebar__widget wow fadeInLeft animated" data-wow-delay=".7s">
                            <h5 class="sidebar__widget-title">Intake</h5>
                            <div class="sidebar__widget-tags mt-20">
                                <div class="tags">
                                    @foreach($months as $month)
                                        <button class="btn btn-sm btn-apply intakes_search" data-intake="{{ $month }}">{{ $month }}</a>
                                    @endforeach
                                    <button class="btn-apply btn-sm btn intakes_search" data-intake="all">Show All</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sidebar__widget wow fadeInLeft animated" data-wow-delay=".7s">
                            <h5 class="sidebar__widget-title">Popular Subjects</h5>
                            <div class="sidebar__widget-tags mt-20">
                                <div class="tags">
                                        @foreach($subject as $values)
                                    <button class="btn btn-sm btn-learn">{{ $values['name'];}}</button>
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
                    <div class="col-lg-8 mt-4" id="courseListArea">
                            @foreach($courseDetails as $courseValue)
                                <div class="course-card" data-university="{{ $courseValue->university_id }}" data-locations='@json($courseValue->locations, JSON_HEX_APOS)'  data-intakes='@json($courseValue->intakes, JSON_HEX_APOS)'>
                                    <div class="course-header">
                                        <a href="#" class="course-title">
                                           <i class="fas fa-link card-icon"></i> {{ $courseValue->title }}
                                        </a>
                                    </div>
                                    <div class="course-body">
                                        <div class="row align-items-center">
                                            <div class="col-md-8">
                                                <div class="course-details">
                                                    <div class="locations_container">
                                                        <div class="">
                                                            <span class="font-weight-bold university-name">Locations:</span>
                                                            @foreach($courseValue->locations as $loc)
                                                            <span class="font-weight-bold location">{{ $loc }},</span>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="intakes-container">
                                                        <div class="">
                                                            <span class="font-weight-bold university-name">Intakes:</span>
                                                            @foreach($courseValue->intakes as $int)
                                                            <span class="font-weight-bold location">{{ $int }},</span>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="university-name">
                                                        University: {!! $courseValue->university_name !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 text-md-end">
                                                <button class="btn btn-learn" data-bs-toggle="modal" data-bs-target="#courseDetailsModal_{{ $courseValue->id }}">
                                                    More Details <i class="fas fa-arrow-right ms-2"></i>
                                                </button>
                                                <button type="button" class="btn btn-apply btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#courseDetailsModalApply"> Apply Now <i class="fa fa-step-forward ms-2" aria-hidden="true"></i></button>
                                            </div>
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
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
    <div class="modal-content">
          <div class="modal-header bg-light d-flex justify-content-between align-items-center">
            <h4 class="m-0 fw-bold"><i class="fa fa-bell" aria-hidden="true"></i> {!! $courseValue->title !!}</h4>
            <div>
              <button type="button" class="btn btn-learn btn-sm" data-bs-dismiss="modal">
                <i class="fa fa-close" aria-hidden="true"></i> Close
              </button>
              <button type="button" class="btn btn-apply btn-sm mt-2" data-bs-toggle="modal" data-bs-target="#courseDetailsModalApply"> Apply Now <i class="fa fa-step-forward ms-2" aria-hidden="true"></i></button>
            </div>
          </div>
      <div class="modal-body">
        <div class="card-body">
            <p class="m-0"><span class="card-title">Course:</span> {!! $courseValue->course_name !!}</p>
            <p class="m-0"><span class="card-title">Uiversity:</span> {!! $courseValue->university_name !!}</p>
            <!--<p class="m-0"><span class="card-title">Subject:</span> {!! $courseValue->subject_name !!}</p>-->
            <p class="m-0"><span class="card-title">Assessment Required:</span> {!! $courseValue->assessment_required !!}</p>
            <div class="locations-container d-flex">
                <span class="card-title me-2">Locations:</span>
                @foreach($courseValue->locations as $loc)
                <div class="location me-2">
                    <i class="fa fa-map-marker me-1"></i>  {{ $loc }}
                </div>
                @endforeach
            </div>
            
            <div class="locations-container d-flex">
                <span class="card-title me-2">Intakes:</span>
                    @foreach($courseValue->intakes as $int)
                    <div class="location me-2">
                        <i class="fa-solid fa-calendar-clock location-icon"></i> <span>{{ $int }}</span>
                    </div>
                    @endforeach
            </div>
            
            <p class="m-0"><span class="card-title">Course Duration:</span> {!! $courseValue->durations !!}</p>
                            
            <div class="locations-container d-flex">
                <span class="card-title me-2">Delivery Mode:</span>
                @if(!empty($courseValue->delivery))
                    @foreach($courseValue->delivery as $del)
                    <div class="location me-2">
                        <i class="fas fa-link me-1"></i>  {{ $del }}
                    </div>
                    @endforeach
                @endif
            </div>
            <div class="locations-container d-flex">
                <span class="card-title me-2">Entry Route:</span>
                @if(!empty($courseValue->emptyroute))
                    @foreach($courseValue->emptyroute as $route)
                    <div class="location me-2">
                       <i class="fas fa-star me-1"></i> {{ $route }}
                    </div>
                    @endforeach
                @endif
            </div>

            <p>{!! $courseValue->shot_desc !!}</p>
  
            <div class="accordion" id="accordionExample">
               <div class="accordion-item">
                   <h2 class="accordion-header" id="headingOne">
                       <button class="accordion-button h6" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Requirements
                       </button>
                   </h2>
                   <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                       <div class="accordion-body">
                            <nav>
                                 <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                    				<button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Standard Route</button>
                    				<button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Non Standard Route</button>
                    			</div>
                    		</nav>
                    		<div class="tab-content p-3 border bg-light" id="nav-tabContent">
                    			<div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    				 <p>{!! $courseValue->requirement !!}</p>
                    			</div>
                    			<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    				 <p>{!! $courseValue->requirement2 !!}</p>
                    			</div>
                    			
                    		</div>
                       </div>
                   </div>
               </div>
               <div class="accordion-item">
                   <h2 class="accordion-header" id="headingOne2">
                       <button class="accordion-button collapsed h6" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="false" aria-controls="collapseOne2">
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
                       <button class="accordion-button collapsed h6" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne3" aria-expanded="false" aria-controls="collapseOne3">
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
                       <button class="accordion-button collapsed h6" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne4" aria-expanded="false" aria-controls="collapseOne4">
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
           
           
            <div class="mt-2">
                @if(!empty( $courseValue->course_link))
                <div class="badge bg-primary text-white">
                    <i class="fa fa-globe me-1"></i>  <a href="{!! $courseValue->course_link !!}" target="_blank">Direct Course Link</a>
                </div>
                @endif
                @if(!empty( $courseValue->course_link2))
                <div class="badge bg-info text-white">
                    <i class="fa fa-file" aria-hidden="true"></i> <a href="{!! $courseValue->course_link2 !!}" target="_blank">Prospectus download link</a>
                </div>
                @endif
            </div>
            </div>
      </div>
    </div>
  </div>
</div>
 @endforeach
 
<div class="modal fade" id="courseDetailsModalApply" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-info text-white d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
          <i class="fa fa-graduation-cap me-2" aria-hidden="true"></i>
          <h4 class="m-0 fw-bold">Apply to Study in the UK</h4>
        </div>
        <div>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
      </div>
      <div class="modal-body p-4">
        <div class="form-wrap">
          <form id="survey-form">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="name" class="form-label fw-semibold">Full Name <span class="text-danger">*</span></label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                  <input type="text" name="name" id="name" placeholder="Enter your full name" class="form-control" required>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="number" class="form-label fw-semibold">Phone Number <span class="text-danger">*</span></label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fa fa-phone" aria-hidden="true"></i></span>
                  <input type="text" name="number" id="number" placeholder="Enter your phone number" class="form-control" required>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="email" class="form-label fw-semibold">Email Address <span class="text-danger">*</span></label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                  <input type="email" name="email" id="email" placeholder="Enter your email address" class="form-control" required>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="country" class="form-label fw-semibold">Country of Residence <span class="text-danger">*</span></label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fa fa-globe" aria-hidden="true"></i></span>
                  <input type="text" name="country" id="country" placeholder="Enter your country" class="form-control" required>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="contactDay" class="form-label fw-semibold">Preferred Day of Contact <span class="text-danger">*</span></label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                  <select name="contactDay" id="contactDay" class="form-select" required>
                    <option disabled selected value="">Select available day</option>
                    <option value="saturday">Saturday</option>
                    <option value="sunday">Sunday</option>
                    <option value="monday">Monday</option>
                    <option value="tuesday">Tuesday</option>
                    <option value="wednesday">Wednesday</option>
                    <option value="thursday">Thursday</option>
                    <option value="friday">Friday</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="contactTime" class="form-label fw-semibold">Preferred Time of Contact <span class="text-danger">*</span></label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fa fa-clock" aria-hidden="true"></i></span>
                  <select name="contactTime" id="contactTime" class="form-select" required>
                    <option disabled selected value="">Select available time</option>
                    <option value="10:00-11:00">10:00 AM - 11:00 AM</option>
                    <option value="11:00-12:00">11:00 AM - 12:00 PM</option>
                    <option value="13:00-14:00">01:00 PM - 02:00 PM</option>
                    <option value="14:00-15:00">02:00 PM - 03:00 PM</option>
                    <option value="15:00-16:00">03:00 PM - 04:00 PM</option>
                    <option value="16:00-17:00">04:00 PM - 05:00 PM</option>
                    <option value="17:00-18:00">05:00 PM - 06:00 PM</option>
                    <option value="18:00-19:00">06:00 PM - 07:00 PM</option>
                  </select>
                </div>
              </div>
            </div>
            
            <div class="d-grid mt-4">
              <button type="submit" id="submit" class="btn btn-info btn-lg py-2">
                <i class="fa fa-paper-plane me-2" aria-hidden="true"></i> Submit Application
              </button>
            </div>
            
            <div class="text-center mt-4">
              <div class="border-top pt-3">
                <p class="text-muted mb-2">Submit your details to begin your study journey in the UK</p>
                <small class="text-muted">We'll contact you on your preferred day and time</small>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>



 
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