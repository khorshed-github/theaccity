@extends('web_layouts.app')

@section('wrapper')
<!-- Body main wrapper start -->
<main>
<style>
        body{
            font-family: sans-serif;
        }
        h6{
            font-family: sans-serif;
        }
        .product-filter-area-review .button {
                padding: 0px 10px !important;
                font-size: 14px !important;
                border-radius: 15px !important;
            }
        .product-filter-area-review .button{
            padding: 7px 20px;
            font-size: 18px;
        }
        .course-title {
            font-size: 16px;
            font-weight: 600;
            color: #2c3e50;
            transition: color 0.2s ease;
            font-family: sans-serif;
        }
        .card-title {
            color: #727272;
            font-weight: 500;
            font-size: 14px;
            position: relative;
            transition: color 0.2s ease;
            font-family: sans-serif;
        }
        .sidebar__widget {
            padding-top: 5px;
            padding-bottom: 5px;
            margin-bottom:5px !important;
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
         #CommonCardDesign {
            background: #fff;
            border: 1px solid #e5e5e5;
            border-radius: 12px;
            padding: 16px 20px;
            margin-bottom: 16px;
            transition: all 0.3s ease;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        }
        #CommonCardDesign:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .card-icon {
            color: #007bff;
            margin-right: 8px;
        }
  
    </style>
    <!--blog-details-->
    <section class="blog__area">
        <div class="container">
            <div class="row mt-2">
                <div class="col-12">
                    <div id="CommonCardDesign">
                        <div class="section__title-wrapper text-center mb-2">
                            <h3 class="wow fadeInLeft animated" data-wow-delay=".3s">FIND YOUR PERFECT COURSE</h3>
                            <h6 class="section__title-wrapper-subtitle mt-10 wow fadeInLeft animated" data-wow-delay=".2s">Discover programs tailored to your academic goals and career aspirations</h6>
                        </div>
                    
                    <div class="rr-fea-product__tab-3 product-filter-area-review">
                        <div class="all-button d-flex justify-content-center">
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
            </div>
            <div class="row">
                    <div class="col-lg-4">
                        <div class="sidebar" id="CommonCardDesign">
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
                                            <a class="university_search" data-id="{{ $values['id']; }}">{{ $values['name'];}}</a>
                                            @endforeach
                                            <a class="university_search" data-id="all">Show All</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sidebar__widget wow fadeInLeft animated" data-wow-delay=".7s">
                                <h5 class="sidebar__widget-title">Location</h5>
                                <div class="sidebar__widget-tags mt-20">
                                    <div class="tags">
                                           @foreach($location as $values)
                                            <a class="location_search" data-location="{{ $values['name']; }}">{{ $values['name'];}}</a>
                                           @endforeach
                                        <a class="location_search" data-location="all">Show All</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sidebar__widget wow fadeInLeft animated" data-wow-delay=".7s">
                                <h5 class="sidebar__widget-title">Intake</h5>
                                <div class="sidebar__widget-tags mt-20">
                                    <div class="tags">
                                        @foreach($months as $month)
                                            <a class="intakes_search" data-intake="{{ $month }}">{{ $month }}</a>
                                        @endforeach
                                        <a class="intakes_search" data-intake="all">Show All</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sidebar__widget wow fadeInLeft animated" data-wow-delay=".7s">
                                <h5 class="sidebar__widget-title">Popular Subjects</h5>
                                <div class="sidebar__widget-tags mt-20">
                                    <div class="tags">
                                            @foreach($subject as $values)
                                        <a class="">{{ $values['name'];}}</a>
                                            @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    <div class="col-lg-8" id="courseListArea">
                        
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                                    
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
                        <div id="CommonCardDesign">
                            @foreach($courseDetails as $courseValue)
                                <div class="course-card" 
                                     data-university="{{ $courseValue->university_id }}" 
                                     data-locations='@json($courseValue->locations, JSON_HEX_APOS)'  
                                     data-intakes='@json($courseValue->intakes, JSON_HEX_APOS)'>
                                    <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        @if(Auth::guard('student')->check())
                                        <a href="#"
                                           data-bs-toggle="modal" 
                                           data-bs-target="#courseDetailsModal_{{ $courseValue->id }}" 
                                           class="course-title text-decoration-none fw-bold text-dark">
                                           {{ $courseValue->title }}
                                        </a>
                                        @else
                                        <a href="{{ route('student.login') }}"
                                           class="course-title text-decoration-none fw-bold text-dark">
                                           {{ $courseValue->title }}
                                        </a>
                                        @endif
                                        <div class="d-flex flex-wrap"style="margin-top: -10px;">
                                            @foreach($courseValue->locations as $loc)
                                                <div class="me-2" style="font-size:13px;">
                                                    {{ $loc }},
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div>
                                        
                                        @if(Auth::guard('student')->check())
                                        <a class="btn btn-sm btn-info course-title text-decoration-none fw-bold text-dark" 
                                           href="#" 
                                           data-bs-toggle="modal" 
                                           data-bs-target="#courseDetailsModal_{{ $courseValue->id }}">
                                           More Details
                                        </a>
                                        @else
                                        <a class="btn btn-sm btn-info course-title text-decoration-none fw-bold text-dark" 
                                           href="{{ route('student.login') }}">
                                           More Details
                                        </a>
                                        @endif
                                        <a class="btn btn-sm btn-danger" 
                                           href="#" 
                                           data-bs-toggle="modal" 
                                           data-bs-target="#courseDetailsModalApply">
                                           Apply Now
                                        </a>
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
        <!-- Brand area start -->
    <section class="main-brand__area section-space-bottom">
        <div class="brand__area">
            <div class="container">
                <div class="row">
                    <div class="col-12" id="CommonCardDesign">
                        <div class="swiper brand__active wow fadeIn" data-wow-delay=".3s">
                            <div class="swiper-wrapper">
                                 @foreach($university as $values)
                                 <div class="swiper-slide">
                                    <div class="brand__item text-center  wow fadeIn animated" data-wow-delay=".1s">
                                        <div class="brand__thumb choice__item"> {{ $values['name'];}}
                                            <!--<img class="img-fluid" src="{{ asset('assets/images/University/' . $values['file_name']) }}" alt="{{ $values['name'];}}">-->
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
            <h6 class="m-0 fw-bold"> {!! $courseValue->title !!}</h6>
            <div>
              <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">
                <i class="fa fa-close" aria-hidden="true"></i> Close
              </button>
              <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#courseDetailsModalApply"> Apply Now <i class="fa fa-step-forward ms-2" aria-hidden="true"></i></button>
            </div>
          </div>
      <div class="modal-body">
        <div class="card-body" style="line-height: 18px;margin-top: -10px;color:#ccc !important;">
            <!--<p class="m-0"><span class="card-title">Course:</span> {!! $courseValue->course_name !!}</p>-->
            <p class="m-0"><span class="card-title">Uiversity: {!! $courseValue->university_name !!}</span></p>
            <!--<p class="m-0"><span class="card-title">Subject:</span> {!! $courseValue->subject_name !!}</p>-->
            <p class="m-0" style="margin-top: -5px !important;"><span class="card-title">Assessment Required: {!! $courseValue->assessment_required !!}</span></p>
            <div class="locations-container d-flex" style="margin-top: -2px !important;">
                <span class="card-title me-2">Locations:</span>
                @foreach($courseValue->locations as $loc)
                <div class="me-2 card-title">
                    <i class="fa fa-map-marker me-1"></i>  {{ $loc }}
                </div>
                @endforeach
            </div>
            
            <div class="locations-container d-flex">
                <span class="card-title me-2">Intakes:</span>
                    @foreach($courseValue->intakes as $int)
                    <div class="card-title me-2">
                         {{ $int }},
                    </div>
                    @endforeach
            </div>
            <p class="m-0" style="margin-top: -2px !important;"><span class="card-title">Course Duration: {!! $courseValue->durations !!}</span></p>
            <div class="locations-container d-flex" style="margin-top: -2px !important;">
                <span class="card-title me-2">Delivery Mode:</span>
                @if(!empty($courseValue->delivery))
                    @foreach($courseValue->delivery as $del)
                    <div class="card-title me-2">
                        {{ $del }},
                    </div>
                    @endforeach
                @endif
            </div>
            <div class="locations-container d-flex">
                <span class="card-title me-2">Entry Route:</span>
                @if(!empty($courseValue->emptyroute))
                    @foreach($courseValue->emptyroute as $route)
                    <div class="card-title me-2">
                        {{ $route }},
                    </div>
                    @endforeach
                @endif
            </div>

            <p class="card-title">{!! $courseValue->shot_desc !!}</p>
  
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
                    				 <p class="card-title">{!! $courseValue->requirement !!}</p>
                    			</div>
                    			<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    				 <p class="card-title">{!! $courseValue->requirement2 !!}</p>
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
                        <p class="card-title">{!! $courseValue->schedule !!}</p>
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
                        <p class="card-title">{!! $courseValue->fees !!}</p>
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
                        <p class="card-title">{!! $courseValue->interview !!}</p>
                    </div>
                   </div>
               </div>
                </div>
           
           
            <div class="mt-2">
                @if(!empty( $courseValue->course_link))
                <!--<div class="badge bg-primary text-white">
                    <i class="fa fa-globe me-1"></i>  <a href="{!! $courseValue->course_link !!}" target="_blank">Direct Course Link</a>
                </div>-->
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
          <form id="survey-form"  method="POST" action="{{ route('apply_course.store') }}">
               @csrf
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
                  <input type="text" name="phone" id="phone" placeholder="Enter your phone number" class="form-control" required>
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
                <label for="pref_day" class="form-label fw-semibold">Preferred Day of Contact <span class="text-danger">*</span></label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                  <select name="pref_day" id="pref_day" class="form-select" required>
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
                <label for="pref_time" class="form-label fw-semibold">Preferred Time of Contact <span class="text-danger">*</span></label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fa fa-clock" aria-hidden="true"></i></span>
                  <select name="pref_time" id="pref_time" class="form-select" required>
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
