<!-- Header area start -->
<header>
    <div id="header-sticky" class="header__area header-1 gray-bg">
        <div class="header-container">
            <div class="mega__menu-wrapper p-relative">
                <div class="header__main">
                    <div class="header__left">
                        <div class="header__logo">
                            <a href="{{ url('/') }}">
                                <div class="logo">
                                    <img src="{{ asset($settings['site_logo'] ?? 'web-assets/imgs/logo/theaccity.png') }}" alt="{{ $settings['site_name'] ?? 'Theaccity' }}">
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
                                            <a href="{{ url('/') }}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/about-us') }}">About Us</a>
                                        </li>
                                        <li><a href="{{ url('/courses') }}">Courses</a></li>
                                        <li><a href="{{ url('/university-partners') }}">University Partners</a></li>
                                        <li><a href="{{ url('/agents') }}">Agents</a></li>
                                        
                                        <li class="has-dropdown ">
                                            <a href="{{ url('/support-a-students') }}">Student Support</a>
                                            <ul class="submenu">
                                                
                                                @foreach($menus as $menu)
                                                    <li class="has-dropdown">
                                                        <a href="{{ url('/student-support/' . $menu->slug . '/' . $menu->id) }}">{{ $menu->name }}</a>
                                                        
                                                        @if($menu->submenus->count())
                                                            <ul class="submenu">
                                                                @foreach($menu->submenus as $submenu)
                                                                    <li>
                                                                        <a href="{{ url('/student-support-details/' . $submenu->id . '/' . $submenu->slug) }}">{{ $submenu->name }}</a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        
                                        
                                        <li><a href="{{ url('/news-and-blogs') }}">News & Blogs</a></li>
                                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="header__right">
                        <div class="header__action d-flex align-items-center">
                            <div class="header__btn-wrap d-none d-sm-inline-flex">
                                <a href="{{ url('/contact') }}" class="rr-btn">Message to Us <i class="fa-solid fa-arrow-right"></i></a>
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