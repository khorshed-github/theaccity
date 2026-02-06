<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="public/assets/images/jamaat_l.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h6 style="font-size: 18px;" class="logo-text">Admin Panel</h6>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="admin_dashboard" class="">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li class="menu-label">Courses Info</li>
        <li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class="bx bx-category"></i>
				</div>
				<div class="menu-title">Courses Info</div>
			</a>
			<ul>
            <li> <a href="{{ url('country') }}"><i class="bx bx-world"></i> Country Info </a></li>
            <li> <a href="{{ url('location') }}"><i class="bx bx-world"></i> Location Info </a></li>
            <li> <a href="{{ url('university') }}"><i class="bx bx-building"></i> University Info </a></li>
            <li> <a href="{{ url('subject') }}"><i class="bx bx-book"></i> Subject Type </a></li>
            <li> <a href="{{ url('course') }}"><i class="bx bx-book"></i> Course Info </a></li>
            <li> <a href="{{ url('course-details-add') }}"><i class="bx bx-book"></i> Add Course Details </a></li>
            <li> <a href="{{ url('course-details') }}"><i class="bx bx-book"></i> View Course Details </a></li>
        </ul>
        </li>
        
        <li class="menu-label">Students Support</li>
        <li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class="bx bx-category"></i>
				</div>
				<div class="menu-title">Student Support</div>
			</a>
			<ul>
            <li> <a href="{{ url('menu') }}"><i class="bx bx-right-arrow-alt"></i> Menu </a></li>
            <li> <a href="{{ url('submenu') }}"><i class="bx bx-right-arrow-alt"></i> Submenu Info </a></li>
            <li> <a href="{{ url('student-support') }}"><i class="bx bx-right-arrow-alt"></i> Student Support Info </a></li>
        </ul>
        </li>
        
        
        <li class="menu-label">Our Responsibility</li>
        <li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class="bx bx-category"></i>
				</div>
				<div class="menu-title">Responsibility</div>
			</a>
			<ul>
            <li> <a href="{{ url('qa') }}"><i class="bx bx-world"></i> Add Responsibility </a></li>
        </ul>
        </li>
        
        <li class="menu-label">Home Page Content</li>
        <li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class="bx bx-category"></i>
				</div>
				<div class="menu-title">Page Content</div>
			</a>
			<ul>
            <li> <a href="{{ url('sliders') }}"><i class="bx bx-world"></i> Add Page Content </a></li>
        </ul>
        </li>
        
        <li class="menu-label">News & Blogs</li>
        <li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class="bx bx-category"></i>
				</div>
				<div class="menu-title">News & Blogs</div>
			</a>
			<ul>
            <li> <a href="{{ url('news') }}"><i class="bx bx-right-arrow-alt"></i> Add News/Blogs </a></li>
        </ul>
        </li>
        
        <li><a href="{{ url('album') }}">
            <div class="parent-icon"><i class="bx bx-image"></i></div>
                <div class="menu-title"> Photo Gallery</div>
             </a>
        </li>
        <li class="menu-label">From Web Request</li>
        
        <li><a href="{{ url('apply-course-request') }}">
            <div class="parent-icon"><i class="bx bx-user-circle"></i></div>
                <div class="menu-title"> Courses Request</div>
             </a>
        </li>
        
        <li><a href="{{ url('agents-request') }}">
            <div class="parent-icon"><i class="bx bx-user-circle"></i></div>
                <div class="menu-title"> Agents Request</div>
             </a>
        </li>
        <li><a href="{{ url('contact-request') }}">
            <div class="parent-icon"><i class="bx bx-user-circle"></i></div>
                <div class="menu-title"> Contact Request</div>
             </a>
        </li>
        <li><a href="{{ url('subscribe-request') }}">
            <div class="parent-icon"><i class="bx bx-user-circle"></i></div>
                <div class="menu-title"> Subscription Request</div>
             </a>
        </li>
        
        
        
        <!--<li> <a href="{{ url('photo-gallery') }}"><i class="bx bx-image"></i> Photo Gallery </a></li>-->
        <!--<li> <a href="{{ url('video-gallery-admin') }}"><i class="bx bx-video"></i> Video Gallery </a></li>-->
        
        
        
        @if($globalinfo->type == 1 )
        <li><a href="user-profile">
            <div class="parent-icon"><i class="bx bx-user-circle"></i></div>
                <div class="menu-title"> User Profile</div>
             </a>
        </li>
        @endif
        <li><a class="dropdown-item d-flex align-items-center" href="/logout"><i class="bx bx-log-out-circle"></i> <span>Logout</span></a></li>
   </ul>
    <!--end navigation-->
</div>
