<!-- Header area start -->
<header>
    <div id="header-sticky" class="header__area header-1 gray-bg">
        <div class="header-container">
            <div class="mega__menu-wrapper p-relative">
                <div class="header__main">
                    <div class="header__left">
                        <div class="header__logo">
                            <a href="{{ '/' }}">
                                <div class="logo">
                                    <img src="public/web-assets/imgs/logo/theaccity.png" alt="logo not found">
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="header__middle">
                        <div class="mean__menu-wrapper d-none d-xl-block">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="active">
                                            <a href="{{ '/' }}">Home</a>
                                        </li>
                                        <li>
                                            <a href="/about-us">About Us</a>
                                        </li>
                                        <!--<li class="">
                                            <a href="/about-us">About Us</a>
                                            <ul class="submenu">
                                                <li><a href="/team">Team Members</a></li>
                                                <li><a href="/contact">Location</a></li>
                                                <li><a href="/visa">Visa Consultancy</a></li>
                                                <li><a href="/visa-offers">visa-offers</a></li>
                                                <li><a href="/coaching">coaching</a></li>
                                                <li><a href="/countrie">Countries</a></li>
                                                <li><a href="/gallery">Photo Gallery</a></li>
                                                <li><a href="/gallery">Video Gallery</a></li>
                                                <li><a href="/story">Success Story</a></li>
                                                <li><a href="/faq">faq</a></li>
                                                <li><a href="/contact">Contact</a></li>
                                            </ul>
                                        </li>-->
                                        <li><a href="/courses">Courses</a></li>
                                        <li><a href="university-partners">University Partners</a></li>
                                        <li><a href="agents">Agents</a></li>
                                        
                                        <li class="has-dropdown ">
                                            <a href="support-a-students">Student Support</a>
                                            <ul class="submenu">
                                                
                                                @foreach($menus as $menu)
                                                    <li class="has-dropdown">
                                                        <a href="student-support/{{ $menu->slug }}/{{ $menu->id }}">{{ $menu->name }}</a>
                                                        
                                                        @if($menu->submenus->count())
                                                            <ul class="submenu">
                                                                @foreach($menu->submenus as $submenu)
                                                                    <li>
                                                                        <a href="student-support-details/{{ $submenu->id }}/{{ $submenu->slug }}">{{ $submenu->name }}</a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        
                                        
                                        <li><a href="/news-and-blogs">News & Blogs</a></li>
                                        <li><a href="/contact">Contact</a></li>
                                        
                                        <!--<li class="has-dropdown ">
                                            <a href="javascript:void(0)">Page</a>
                                            <ul class="submenu">
                                                <li><a href="/pricing">pricing</a></li>
                                                <li><a href="/coaching-details">coaching details</a></li>
                                                <li><a href="/countrie-details">Countries details</a></li>
                                                <li><a href="/404">404 Page</a></li>
                                            </ul>
                                        </li>-->
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="header__right">
                        <div class="header__action d-flex align-items-center">
                            <div class="header__btn-wrap d-none d-sm-inline-flex">
                                <a href="contact" class="rr-btn">Message to Us <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <div class="header__hamburger ml-20 d-xl-none">
                                <div class="sidebar__toggle">
                                    <button class="bar-icon">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="popup-search-box">
    <div class="box-inner-wrap d-flex align-items-center">
        <form id="form" action="#" method="get" role="search">
            <input id="popup-search" type="text" name="s" placeholder="Type keywords here...">
        </form>
        <div class="search-close"><i class="fa-sharp fa-regular fa-xmark"></i></div>
    </div>
</div>
<!-- Header area end -->