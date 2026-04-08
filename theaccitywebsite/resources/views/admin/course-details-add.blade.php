
@extends("admin_layouts.app")

@section("style")
<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection

@section("wrapper")
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Website Information</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Course Details Form</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">                    
                    <a href="course-details" class="btn btn-primary">Course Details List</a>                   
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <div class="card border-top border-0 border-4 border-primary">
                        <div class="card-body p-5">
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-image me-1 font-22 text-primary"></i>
                                </div>
                                <h5 class="mb-0 text-primary">Course Details Form</h5>
                            </div>
                            <hr>     
                             <div class="card mt-4">
                                <div class="card-body">
                             <form id="CourseDetailsForm" method="POST" enctype="multipart/form-data">
                                @csrf <!-- Add CSRF token for security -->
                                <input type="hidden" id="id" name="id"> 
                                <div class="mb-3">
                                    <label for="menu" class="form-lebel fw-semibold">Country</label>
                                    <select name="country_id" id="country_id" class="form-control country" required>
                                        <option value="">Select</option>
                                        @foreach($country as $m)
                                        <option value="{{$m->id}}">{{$m->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold">Location</label>
                                    <div id="location_container" class="d-flex flex-wrap gap-3">
                                        <!-- Checkboxes will be dynamically appended here -->
                                    </div>
                                </div>
                                <!--<div class="mb-3">
                                    <label for="menu" class="form-label fw-semibold">Location</label>
                                    <select name="location_id" id="location_id" class="form-control location"></select>
                                </div>-->
                                
                                <div class="mb-3">
                                    <label for="menu" class="form-lebel fw-semibold">University</label>
                                    <select name="university_id" id="university_id" class="form-control" required>
                                        <option value="">Select</option>
                                        @foreach($university as $m)
                                        <option value="{{$m->id}}">{{$m->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="menu" class="form-lebel fw-semibold">Subject</label>
                                    <select name="subject_id" id="subject_id" class="form-control" required>
                                        <option value="">Select</option>
                                        @foreach($subject as $m)
                                        <option value="{{$m->id}}">{{$m->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="menu" class="form-lebel fw-semibold">Course</label>
                                    <select name="course_id" id="course_id" class="form-control" required>
                                        <option value="">Select</option>
                                        @foreach($course as $m)
                                        <option value="{{$m->id}}">{{$m->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fw-bold fw-semibold">Intake</label>
                                    <div class="d-flex flex-wrap gap-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="January" id="january" name="intake[]">
                                            <label class="form-check-label" for="january">January</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="February" id="february" name="intake[]">
                                            <label class="form-check-label" for="february">February</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="March" id="march" name="intake[]">
                                            <label class="form-check-label" for="march">March</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="April" id="april" name="intake[]">
                                            <label class="form-check-label" for="april">April</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="May" id="may" name="intake[]">
                                            <label class="form-check-label" for="may">May</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="June" id="june" name="intake[]">
                                            <label class="form-check-label" for="june">June</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="July" id="july" name="intake[]">
                                            <label class="form-check-label" for="july">July</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="August" id="august" name="intake[]">
                                            <label class="form-check-label" for="august">August</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="September" id="september" name="intake[]">
                                            <label class="form-check-label" for="september">September</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="October" id="october" name="intake[]">
                                            <label class="form-check-label" for="october">October</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="November" id="november" name="intake[]">
                                            <label class="form-check-label" for="november">November</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="December" id="december" name="intake[]">
                                            <label class="form-check-label" for="december">December</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label fw-bold fw-semibold">Delivery Mode</label>
                                    <div class="d-flex flex-wrap gap-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Online" id="Online" name="delivery_mode[]">
                                            <label class="form-check-label" for="Online">Online</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Blended" id="Blended" name="delivery_mode[]">
                                            <label class="form-check-label" for="Blended">Blended</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="In-Campus" id="In-Campus" name="delivery_mode[]">
                                            <label class="form-check-label" for="In-Campus">In Campus</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label fw-bold fw-semibold">Entry Route</label>
                                    <div class="d-flex flex-wrap gap-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Standard" id="Standard" name="entry_route[]">
                                            <label class="form-check-label" for="Standard">Standard</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Non-standard" id="Non-standard" name="entry_route[]">
                                            <label class="form-check-label" for="Non-standard">Non-standard</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="Experience" id="Experience" name="entry_route[]">
                                            <label class="form-check-label" for="Experience">Experience</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label fw-bold fw-semibold">Course Duration</label>
                                    <div class="d-flex flex-wrap gap-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1" id="1" name="course_duration[]">
                                            <label class="form-check-label" for="1">1 Year</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="2" id="2" name="course_duration[]">
                                            <label class="form-check-label" for="2">2 Years</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="3" id="3" name="course_duration[]">
                                            <label class="form-check-label" for="3">3 Years</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="4" id="4" name="course_duration[]">
                                            <label class="form-check-label" for="4">4 Years</label>
                                        </div>
                                        
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="5" id="5" name="course_duration[]">
                                            <label class="form-check-label" for="5">5 Years</label>
                                        </div>
                                        
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="6" id="6" name="course_duration[]">
                                            <label class="form-check-label" for="6">6 Years</label>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="mb-4">
                                    <label for="ass" class="form-label fw-semibold">Assessment Required</label>
                                    <div class="input-group">
                                        <input type="text" 
                                               class="form-control border-2 py-2" 
                                               name="assessment_required" 
                                               id="assessment_required" 
                                               placeholder="Enter Assessment Required here...">
                                        </div>
                                </div>
                                
                                
                                
                                <div class="mb-4">
                                    <label for="title" class="form-label fw-semibold">Title</label>
                                    <div class="input-group">
                                        <input type="text" 
                                               class="form-control border-2 py-2" 
                                               name="title" 
                                               id="title" 
                                               placeholder="Enter your title here..." 
                                               required
                                               aria-describedby="titleHelp">
                                        </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="shot_desc" class="form-label fw-semibold">Description</label>
                                    <textarea class="form-control shot_desc" name="shot_desc" id="editor5" rows="3" placeholder="Enter Description"></textarea>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="requirement" class="form-label fw-semibold">Requirement Standard route Details</label>
                                    <textarea class="form-control requirement" name="requirement" id="editor1" rows="3" placeholder="Enter Requirement Standard route Details"></textarea>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="requirement2" class="form-label fw-semibold">Requirement Non Standard route Details</label>
                                    <textarea class="form-control requirement2" name="requirement2" id="editor6" rows="3" placeholder="Enter Requirement Non Standard route Details"></textarea>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="shot_desc" class="form-label fw-semibold">Schedule Details</label>
                                    <textarea class="form-control schedule" name="schedule" id="editor2" rows="3" placeholder="Enter Schedule"></textarea>
                                </div>
                                <div class="mb-3"> 
                                    <label for="shot_desc" class="form-label fw-semibold">Fees Details</label>
                                    <textarea class="form-control fees" name="fees" id="editor3" rows="3" placeholder="Enter Fees"></textarea>
                                </div>
                                <div class="mb-4">
                                    <label for="editor4" class="form-label fw-semibold mb-2">
                                        <i class="bi bi-chat-left-text me-2"></i> <!-- Bootstrap Icon -->
                                        Interview Details
                                    </label>
                                    <div class="border rounded-3 bg-light-subtle overflow-hidden">
                                        <textarea class="form-control border-0 shadow-none bg-transparent p-3 interview" 
                                                  name="interview" 
                                                  id="editor4" 
                                                  rows="5" 
                                                  placeholder="Enter the interview transcript or details here..."
                                                  style="min-height: 150px; resize: vertical;"></textarea>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="course_link" class="form-label fw-semibold">Course Link</label>
                                    <div class="input-group">
                                        <input type="text" 
                                               class="form-control border-2 py-2" 
                                               name="course_link" 
                                               id="course_link" 
                                               placeholder="Enter Course Link here...">
                                        </div>
                                </div>
                                <div class="mb-4">
                                    <label for="course_link2" class="form-label fw-semibold">Prospectus download link</label>
                                    <div class="input-group">
                                        <input type="text" 
                                               class="form-control border-2 py-2" 
                                               name="course_link2" 
                                               id="course_link2" 
                                               placeholder="Enter Prospectus download link here...">
                                        </div>
                                </div>
                                <div class="success_msg"></div>
                                <div class="error_msg"></div>
                                <button type="button" class="btn btn-primary mt-3" id="CourseDetailsSaveBtn">Save</button>
                            </form>
                            </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!--end row-->
          
        </div>
    </div>
@endsection
