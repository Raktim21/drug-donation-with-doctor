<div>
    <div class="logo-wrapper">
        <a href="{{ route('admin.drug-shops.index') }}">
            <img class="img-fluid for-light" src="{{ asset('frontend_assets/photos/Logo3.png') }}" alt="">
        </a>
        <div class="back-btn">
            <i class="fa fa-angle-left"></i>
        </div>
        {{-- <div class="toggle-sidebar">
            <i class="fa fa-cog status_toggle middle sidebar-toggle"> </i>
        </div> --}}
    </div>
    <div class="logo-icon-wrapper">
        <a href="{{ route('admin.drug-shops.index') }}">
            <img class="img-fluid" src="{{ asset('admin_dashboard/assets/images/logo/logo-icon1.png') }}" alt="">
        </a>
    </div>
    <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow">
            <i data-feather="arrow-left"></i>
        </div>
        
        <div id="sidebar-menu">
            <ul class="sidebar-links" id="simple-bar">
                <li class="back-btn">
                    <a href="{{ route('admin.drug-shops.index') }}">
                        <img class="img-fluid" src="{{ asset('admin_dashboard/assets/images/logo/logo-icon.png') }}" alt="">
                    </a>
                    <div class="mobile-back text-end">
                        <span>Back</span>
                        <i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                    </div>
                </li>
                {{-- <li class="sidebar-main-title">
                    <h6>Dashboard</h6>
                </li> --}}
                {{-- <li class="menu-box">
                    <ul>
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav active" href="{{ route('admin.dashboard') }}">
                                <i data-feather="home"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                    </ul>
                </li> --}}

                @can('user-list')
                    <li class="menu-box">
                        <ul>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                                    <i data-feather="users"></i>
                                    <span>Users</span>
                                </a>
                                <ul class="sidebar-submenu">
                                    <li>
                                        <a href="{{ route('admin.users.index') }}">List</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.users.create') }}">Create</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                @endcan
                

                @can('drug-list')
                    <li class="menu-box">
                        <ul>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav active" href="{{ route('admin.drug-shops.index') }}">
                                    <i data-feather="home"></i>
                                    <span>Drug Shop</span>
                                </a>
                            </li>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav active" href="{{ route('admin.drug-shops.my-order') }}">
                                    <i data-feather="home"></i>
                                    <span>My Orders</span>
                                </a>
                            </li>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav active" href="{{ route('admin.drug-shops.requests') }}">
                                    <i data-feather="home"></i>
                                    <span>My Requests</span>
                                </a>
                            </li>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav active" href="{{ route('user.drugs.index') }}">
                                    <i data-feather="home"></i>
                                    <span>My Drugs</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan


                @can('doctor-list')
                    <li class="menu-box">
                        <ul>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav active" href="{{ route('user.doctor.index') }}">
                                    <i data-feather="home"></i>
                                    <span>Doctors</span>
                                </a>
                            </li>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav active" href="{{ route('user.doctor.appointment.list') }}">
                                    <i data-feather="home"></i>
                                    <span>Appointments</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan


                @can('doctor-appointment-list')
                    <li class="menu-box">
                        <ul>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav active" href="{{ route('doctor.appointments.index') }}">
                                    <i data-feather="home"></i>
                                    <span>Requests</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan



                @can('drug-request-list')
                    <li class="menu-box">
                        <ul>
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav active" href="{{ route('admin.drug-requests.index') }}">
                                    <i data-feather="home"></i>
                                    <span>Drug Approvel</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                
            </ul>
        </div>

        <div class="right-arrow" id="right-arrow">
            <i data-feather="arrow-right"></i>
        </div>
    </nav>
</div>

<style>
    .logo-wrapper > a > img{
        width: 80px
    }
</style>
