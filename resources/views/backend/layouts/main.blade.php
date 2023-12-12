<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NSIT </title>
    <link rel="icon" type="image/png" href="{{ asset('Ns.png') }}"/>

    <!-- Custom fonts for this template-->
@include('backend.layouts.css')

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">NS Admin <sup>1</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="index.html">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
               aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Site</span>
            </a>

            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Custom Components:</h6>
                    <a class="collapse-item" href="{{ route('backend_nav') }}">Nav</a>
                    <a class="collapse-item" href="{{ route('logo') }}">Logo Size</a>
                    <a class="collapse-item" href="{{ route('backend_header') }}">Header</a>
                    <a class="collapse-item" href="{{ route('backend_about') }}">About</a>
                    <a class="collapse-item" href="{{ route('backend_courseHead_index') }}">Course Header</a>
                    <a class="collapse-item" href="{{ route('backend_company_index') }}">Company</a>
                    <a class="collapse-item" href="{{ route('backend_messageHead_index') }}">Message Head</a>
                    <a class="collapse-item" href="{{ route('backend_footer_index') }}">Footer</a>

                </div>
            </div>
        </li>


        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('backend_course_index') }}">
                <i class="fas fa-fw fa-table"></i>
                <span>Course</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('backend_category_index') }}">
                <i class="fas fa-fw fa-table"></i>
                <span>Category</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('backend_faq_index') }}">
                <i class="fas fa-fw fa-table"></i>
                <span>Faq</span></a>
        </li>
        <hr class="sidebar-divider d-none d-md-block">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('backend_message') }}">
                <i class="fas fa-fw fa-table"></i>
                <span>Messages</span></a>
        </li>
        <hr class="sidebar-divider d-none d-md-block">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('backend_user') }}">
                <i class="fas fa-fw fa-table"></i>
                <span>User</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('mycourse') }}">
                <i class="fas fa-fw fa-table"></i>
                <span>My course</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('newCourse') }}">
                <i class="fas fa-fw fa-table"></i>
                <span>newCourse</span></a>
        </li>
        <!-- Divider -->


        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <!-- Sidebar Message -->
        <div class="sidebar-card d-none d-lg-flex">
            <img class="sidebar-card-illustration mb-2" src="{{ asset('backend_assets/img/undraw_rocket.svg')}}"
                 alt="...">
            <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components,
                and more!</p>
            <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to
                Pro!</a>
        </div>

    </ul>
    <!-- End of Sidebar -->
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>


                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">



                    <!-- Nav Item - Messages -->


                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::guard('admin')->user()->name }}</span>
                            <img class="img-profile rounded-circle"
                                 src="{{asset('backend_assets/img/undraw_profile.svg')}}">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">

                            <div class="dropdown-divider"></div>


                            <a class="dropdown-item" href="{{ route('admin.logout') }}"  data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
{{ $slot  }}
@include('backend.layouts.script')

</body>

</html>
