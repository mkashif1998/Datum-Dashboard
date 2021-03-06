<div class="header-style-1 iq-top-navbar">
    <div class="container-fluid container-md iq-navbar-custom">
        <nav class="navbar c-navbar navbar-expand-lg navbar-light px-0">
            <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                <i class="ri-menu-line wrapper-menu"></i>
                <a href="{{route('dashboard.1')}}" class="header-logo">

                    <img src="{{asset('images/white-logo-2.png')}}" class="img-fluid rounded-normal" alt="logo">

                </a>
            </div>
            <div class="d-flex align-items-center ml-auto">
                <div class="menu-horizontal">
                    <nav class="iq-sidebar-menu">
                        <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
                            <a href="{{route('dashboard.1')}}" class="header-logo">

                                <img src="{{asset('images/logo.png')}}" class="img-fluid rounded-normal light-logo"
                                    alt="logo">
                                <img src="{{asset('images/white-logo.png')}}"
                                    class="img-fluid rounded-normal darkmode-logo" alt="logo">

                            </a>
                            <div class="side-menu-bt-sidebar">
                                <i class="las la-bars wrapper-menu"></i>
                            </div>
                        </div>
                        <ul id="iq-sidebar-toggle" class="side-menu d-flex">
                            <li class="active">
                                <a href="#Dashboards" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                    <svg class="svg-icon" id="iq-dash" xmlns="http://www.w3.org/2000/svg" width="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 14 15 14 15 22"></polyline>
                                    </svg>
                                    <span class="ml-2">Dashboards</span>
                                    <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                                </a>
                                <ul id="Dashboards" class="iq-submenu sub-scrll collapse"
                                    data-parent="#iq-sidebar-toggle">
                                    <li class=" ">
                                        <a href="{{route('dashboard.1')}}" class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="iq-dash-1" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                                </svg>
                                            </i>
                                            <span>Dashboard 1</span>
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="{{route('dashboard.2')}}" class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="iq-dash-2" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                                                </svg>
                                            </i>
                                            <span>Dashboard 2</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{route('dashboard.3')}}" class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="iq-dash-3" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                            </i>
                                            <span>Dashboard 3</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="#ui" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                    <svg class="svg-icon" id="iq-ui-1" xmlns="http://www.w3.org/2000/svg" width="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-framer">
                                        <path d="M5 16V9h14V2H5l14 14h-7m-7 0l7 7v-7m-7 0h7"></path>
                                    </svg>
                                    <span class="ml-2">UI Elements</span>
                                    <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                                </a>
                                <ul id="ui" class="iq-submenu sub-scrll collapse" data-parent="#iq-sidebar-toggle">
                                    <li class=" ">
                                        <a href="{{route('ui.avatars')}}" class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="iq-ui-1-0" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </i>
                                            <span>Avatars</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{route('ui.alerts')}}" class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="iq-ui-1-1" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                                </svg>
                                            </i>
                                            <span>Alerts</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{route('ui.badges')}}" class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="iq-ui-1-2" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                                </svg>
                                            </i>
                                            <span>Badges</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{route('ui.breadcrumb')}}" class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="iq-ui-1-3" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                                </svg>
                                            </i>
                                            <span>Breadcrumb</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{route('ui.buttons')}}" class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" width="20" id="iq-ui-1-4"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" />
                                                </svg>
                                            </i>
                                            <span>Buttons</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{route('ui.buttongroup')}}" class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="iq-ui-1-5" width="20" heigth="20"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                                </svg>
                                            </i>
                                            <span>Buttons Group</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{route('ui.boxshadows')}}" class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="iq-ui-1-6" width="20"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                                </svg>
                                            </i>
                                            <span>Box Shadow</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{route('ui.colors')}}" class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="iq-ui-1-7" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                                </svg>
                                            </i>
                                            <span>Colors</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{route('ui.cards')}}" class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="iq-ui-1-8" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                                </svg>
                                            </i>
                                            <span>Cards</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{route('ui.carousel')}}" class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="iq-ui-1-9" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                                                </svg>
                                            </i>
                                            <span>Carousel</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{route('ui.grid')}}" class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="iq-ui-1-10" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                                </svg>
                                            </i>
                                            <span>Grid</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{route('ui.images')}}" class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="iq-ui-1-12" width="20"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                            </i>
                                            <span>Images</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{route('ui.listgroup')}}" class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="iq-ui-1-13" xmlns="http://www.w3.org/2000/svg"
                                                    width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-list">
                                                    <line x1="8" y1="6" x2="21" y2="6"></line>
                                                    <line x1="8" y1="12" x2="21" y2="12"></line>
                                                    <line x1="8" y1="18" x2="21" y2="18"></line>
                                                    <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                                    <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                                    <line x1="3" y1="18" x2="3.01" y2="18"></line>
                                                </svg>
                                            </i>
                                            <span>list Group</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{route('ui.media')}}" class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="iq-ui-1-14" width="20"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                                </svg>
                                            </i>
                                            <span>Media</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{route('ui.modal')}}" class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="iq-ui-1-15" xmlns="http://www.w3.org/2000/svg"
                                                    width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-columns">
                                                    <path
                                                        d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18">
                                                    </path>
                                                </svg>
                                            </i>
                                            <span>Modal</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{route('ui.notification')}}" class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="iq-ui-1-16" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                                </svg>
                                            </i>
                                            <span>Notifications</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{route('ui.pagination')}}" class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="iq-ui-1-17" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                                </svg>
                                            </i>
                                            <span>Pagination</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{route('ui.popovers')}}" class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="iq-ui-1-18" xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-circle-dotted" width="20"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <line x1="7.5" y1="4.21" x2="7.5" y2="4.22" />
                                                    <line x1="4.21" y1="7.5" x2="4.21" y2="7.51" />
                                                    <line x1="3" y1="12" x2="3" y2="12.01" />
                                                    <line x1="4.21" y1="16.5" x2="4.21" y2="16.51" />
                                                    <line x1="7.5" y1="19.79" x2="7.5" y2="19.8" />
                                                    <line x1="12" y1="21" x2="12" y2="21.01" />
                                                    <line x1="16.5" y1="19.79" x2="16.5" y2="19.8" />
                                                    <line x1="19.79" y1="16.5" x2="19.79" y2="16.51" />
                                                    <line x1="21" y1="12" x2="21" y2="12.01" />
                                                    <line x1="19.79" y1="7.5" x2="19.79" y2="7.51" />
                                                    <line x1="16.5" y1="4.21" x2="16.5" y2="4.22" />
                                                    <line x1="12" y1="3" x2="12" y2="3.01" />
                                                </svg>
                                            </i>
                                            <span>Popovers</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{route('ui.progressbars')}}" class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="iq-ui-1-19" xmlns="http://www.w3.org/2000/svg"
                                                    width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-hard-drive">
                                                    <line x1="22" y1="12" x2="2" y2="12"></line>
                                                    <path
                                                        d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                                                    </path>
                                                    <line x1="6" y1="16" x2="6.01" y2="16"></line>
                                                    <line x1="10" y1="16" x2="10.01" y2="16"></line>
                                                </svg>
                                            </i>
                                            <span>Progressbars</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{route('ui.typography')}}" class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="iq-ui-1-20" width="20"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
                                                </svg>
                                            </i>
                                            <span>Typography</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{route('ui.tabs')}}" class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="iq-ui-1-21" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                                                </svg>
                                            </i>
                                            <span>Tabs</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{route('ui.tooltips')}}" class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="iq-ui-1-22" xmlns="http://www.w3.org/2000/svg"
                                                    width="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M4 13v-8a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v8a2 2 0 0 0 6 0v-8a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v8a8 8 0 0 1 -16 0" />
                                                    <line x1="4" y1="8" x2="9" y2="8" />
                                                    <line x1="15" y1="8" x2="19" y2="8" />
                                                </svg>
                                            </i>
                                            <span>Tooltips</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{route('ui.video')}}" class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="iq-ui-1-23" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                                </svg>
                                            </i>
                                            <span>Video</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="#auth" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                    <svg class="svg-icon" id="iq-auth-1" width="20" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                                    </svg>
                                    <span class="ml-2">Authentication</span>
                                    <i class="ri-arrow-right-s-line iq-arrow-right"></i>
                                </a>
                                <ul id="auth" class="iq-submenu sub-scrll collapse" data-parent="#iq-sidebar-toggle">
                                    <li class=" ">
                                        <a href="{{route('auth.login')}}"  class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="iq-auth-1-1" width="20"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                                </svg>
                                            </i>
                                            <span>Login</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{route('auth.register')}}" class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="iq-auth-1-2" width="20"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                                </svg>
                                            </i>
                                            <span>Register</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{route('auth.recover-password')}}"  class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="iq-auth-1-3"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                                                </svg>
                                            </i>
                                            <span>Recover Password</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{route('auth.confirm-email')}}"  class="svg-icon">
                                            <i class="">
                                                <svg class="svg-icon" id="iq-auth-1-4"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
                                                </svg>
                                            </i>
                                            <span>Confirm Mail</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="d-flex align-items-center">
                    <div class="nav-item nav-icon change-mode">
                        <div class="custom-control custom-switch custom-switch-icon custom-control-inline">
                            <div class="custom-switch-inner">
                                <p class="mb-0"> </p>
                                <input type="checkbox" class="custom-control-input" id="dark-mode" data-active="true">
                                <label class="custom-control-label" for="dark-mode" data-mode="toggle">
                                    <span class="switch-icon-left">
                                        <svg class="svg-icon" id="h-moon" width="20" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                                        </svg>
                                    </span>
                                    <span class="switch-icon-right">
                                        <svg class="svg-icon" id="h-sun" width="20" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                        </svg>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-label="Toggle navigation">
                        <i class="ri-menu-3-line th-line"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav navbar-list align-items-center">

                            <li class="nav-item nav-icon search-content">
                                <a href="#" class="search-toggle text-primary rounded" id="dropdownSearch"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ri-search-line"></i>
                                </a>
                                <div class="iq-search-bar iq-sub-dropdown dropdown-menu"
                                    aria-labelledby="dropdownSearch">
                                    <form action="#" class="searchbox p-2">
                                        <div class="form-group mb-0 position-relative">
                                            <input type="text" class="text search-input font-size-12"
                                                placeholder="type here to search...">
                                            <a href="#" class="search-link"><i class="ri-search-line"></i></a>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item nav-icon dropdown">
                                <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="svg-icon text-white" id="iq-bell-1" width="20"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <span class="bg-primary count-mail"></span>
                                </a>
                                <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <div class="card shadow-none m-0 border-0">
                                        <div class="card-body p-0 ">
                                            <div class="cust-title p-3">
                                                <h5 class="mb-0">All Messages</h5>
                                            </div>
                                            <div class="p-3">
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center">
                                                        <div class="">
                                                            <img class="avatar-40 rounded-small"
                                                                src="{{asset('images/user/1.jpg')}}" alt="">
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0">Barry Emma Watson <small
                                                                    class="badge badge-success float-right">New</small>
                                                            </h6>
                                                            <small class="float-left font-size-12">12:00 PM</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center">
                                                        <div class="">
                                                            <img class="avatar-40 rounded-small"
                                                                src="{{asset('images/user/2.jpg')}}" alt="">
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                                            <small class="float-left font-size-12">20 Apr</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center">
                                                        <div class="">
                                                            <img class="avatar-40 rounded-small"
                                                                src="{{asset('images/user/3.jpg')}}" alt="">
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0 ">Why do we use it? <small
                                                                    class="badge badge-success float-right">New</small>
                                                            </h6>
                                                            <small class="float-left font-size-12">1:24 PM</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center">
                                                        <div class="">
                                                            <img class="avatar-40 rounded-small"
                                                                src="{{asset('images/user/4.jpg')}}" alt="">
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0">Variations Passages <small
                                                                    class="badge badge-success float-right">New</small>
                                                            </h6>
                                                            <small class="float-left font-size-12">5:45 PM</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center">
                                                        <div class="">
                                                            <img class="avatar-40 rounded-small"
                                                                src="{{asset('images/user/5.jpg')}}" alt="">
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                                            <small class="float-left font-size-12">1 day ago</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <a class="right-ic btn btn-primary btn-block position-relative p-2" href="#"
                                                role="button">
                                                <div class="dd-icon"><i class="las la-arrow-right mr-0"></i></div>
                                                View All
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item nav-icon dropdown">
                                <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="svg-icon text-white" id="iq-bell-2" xmlns="http://www.w3.org/2000/svg"
                                        width="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-bell">
                                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                    </svg>
                                    <span class="bg-primary"></span>
                                </a>
                                <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="card shadow-none m-0 border-0">
                                        <div class="card-body p-0 ">
                                            <div class="cust-title p-3">
                                                <h5 class="mb-0">All Notifications</h5>
                                            </div>
                                            <div class="p-3">
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center">
                                                        <div class="">
                                                            <img class="avatar-40 rounded-small"
                                                                src="{{asset('images/user/1.jpg')}}" alt="">
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0">Emma Watson Barry <small
                                                                    class="badge badge-success float-right">New</small>
                                                            </h6>
                                                            <p class="mb-0">95 MB</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center">
                                                        <div class="">
                                                            <img class="avatar-40 rounded-small"
                                                                src="{{asset('images/user/2.jpg')}}" alt="">
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0 ">New customer is join</h6>
                                                            <p class="mb-0">Cyst Barry</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center">
                                                        <div class="">
                                                            <img class="avatar-40 rounded-small"
                                                                src="{{asset('images/user/3.jpg')}}" alt="">
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0 ">Two customer is left</h6>
                                                            <p class="mb-0">Cyst Barry</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center">
                                                        <div class="">
                                                            <img class="avatar-40 rounded-small"
                                                                src="{{asset('images/user/4.jpg')}}" alt="">
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0 ">New Mail from Fenny <small
                                                                    class="badge badge-success float-right">New</small>
                                                            </h6>
                                                            <p class="mb-0">Cyst Barry</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <a class="right-ic btn btn-primary btn-block position-relative p-2" href="#"
                                                role="button">
                                                <div class="dd-icon"><i class="las la-arrow-right mr-0"></i></div>
                                                View All
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item mt-4 mt-lg-0 full-screen">
                                <a href="#" class="" id="btnFullscreen">
                                    <i class="max"><svg class="svg-icon  text-white" id="d-3-max" width="20"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-maximize">
                                            <path
                                                d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3">
                                            </path>
                                        </svg></i>
                                    <i class="min d-none"><svg class="svg-icon  text-white" id="d-3-min" width="20"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" class="feather feather-minimize">
                                            <path
                                                d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3">
                                            </path>
                                        </svg></i>
                                </a>
                            </li>

                            <li class="nav-item nav-icon dropdown">
                                <a href="#" class="nav-item nav-icon dropdown-toggle pr-2 search-toggle"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <img src="{{asset('images/user/1.jpg')}}" class="img-fluid avatar-rounded"
                                        alt="user">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <li class="dropdown-item d-flex svg-icon">
                                        <svg class="svg-icon mr-0 text-primary" id="h-01-p" width="20"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <a href="{{route('app.userdetail.userprofile')}}">My Profile</a>
                                    </li>
                                    <li class="dropdown-item d-flex svg-icon">
                                        <svg class="svg-icon mr-0 text-primary" id="h-02-p" width="20"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                        <a href="{{route('app.userdetail.profileedit')}}">Edit Profile</a>
                                    </li>
                                    <li class="dropdown-item d-flex svg-icon">
                                        <svg class="svg-icon mr-0 text-primary" id="h-03-p" width="20"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <a href="{{route('app.userdetail.accountsetting')}}">Account Settings</a>
                                    </li>
                                    <li class="dropdown-item d-flex svg-icon">
                                        <svg class="svg-icon mr-0 text-primary" id="h-04-p" width="20"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg>
                                        <a href="{{route('app.userdetail.privacysetting')}}">Privacy Settings</a>
                                    </li>
                                    <li class="dropdown-item  d-flex svg-icon border-top">
                                        <svg class="svg-icon mr-0 text-primary" id="h-05-p" width="20"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                        </svg>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a href="javascript:void(0)"
                                               onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                                {{ __('Log out') }}
                                            </a>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>
    </div>
</div>
