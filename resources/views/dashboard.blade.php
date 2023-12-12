<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>My Profile</title>
    <link rel="icon" type="image/png" href="{{ asset('Ns.png') }}"/>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('frontend_assets/profile/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend_assets/profile/assets/vendor/bootstrap/css/bootstrap.min.css') }} " rel="stylesheet">
    <link href="{{ asset('frontend_assets/profile/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend_assets/profile/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend_assets/profile/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{asset('frontend_assets/profile/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend_assets/profile/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend_assets/profile/profile.css') }}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: iPortfolio
    * Updated: Mar 10 2023 with Bootstrap v5.2.3
    * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
<div class="top">
    <a href="{{ route('main') }}" class="home_icon">
        <span>Bosh Sahifa</span> <i class="bi bi-house-door-fill"></i>
    </a>
</div>
<!-- ======= Header ======= -->
<header id="header" >
    <div class="d-flex flex-column">

        <div class="profile">
            @if(isset(Auth()->user()->photo))
            <img style="width: 100px;; height: 100px" src="{{ asset('storage/' .Auth()->user()->photo) }}" alt="" class="img-fluid rounded-circle">
            @else
                <img style="width: 100px;; height: 100px" src="https://images.unsplash.com/photo-1508247967583-7d982ea01526?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80" alt="" class="img-fluid rounded-circle">

            @endif
                <h1 class="text-light d-flex flex-column text-center ">{{ Auth()->user()->name }}</h1>

            <div class="social-links mt-3 text-center">
                <form action="{{ route('logout') }}" method="post" onsubmit="return confirm('Tizimidan chiqishga aminmisiz');">
                    @csrf
                     <button  class="btn btn-dark"><i class="bi bi-box-arrow-right"></i></button></a>

                </form>

            </div>
        </div>

        <nav id="navbar" class="nav-menu navbar">
            <ul>
                <li><a href="{{ route('main') }}" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Bosh Sahifa</span></a></li>
                <li><a href="/profile" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Profile</span></a></li>

            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->
<!--  -->
<sectio id="about" class="about">
    <div class="container">

        <div class="main-container">
            <div class="profile">
                <div class="profile-avatar">
                    @if(isset(Auth()->user()->photo))
                    <img src="{{ asset('storage/' .Auth()->user()->photo) }}" alt=""
                         class="profile-img">
                    @else
                        <img src="https://images.unsplash.com/photo-1508247967583-7d982ea01526?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80" alt=""
                             class="profile-img">
                    @endif
                    <div class="profile-name">{{ Auth()->user()->name }} </div>

                </div>

                <img
                    src="https://images.unsplash.com/photo-1508247967583-7d982ea01526?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80"
                    alt="" class="profile-cover">
                <div class="profile-menu" >
                </div>
            </div>
            <div class="timeline">
                <div class="timeline-left">
                    <div class="intro box">
                        <div class="intro-title">
                            Malumotlaringiz
                        </div>
                        <div class="info">
                            <div class="info-item">
                                <i class="bi bi-key"></i>                                 &nbsp;
                                 id: 77{{ Auth()->user()->id }}
                            </div>
                            <div class="info-item">
                                <i class="bi bi-person-circle"></i>
                                &nbsp;
                                {{ Auth()->user()->name }}
                            </div>
                            <div class="info-item">
                                <i class="bi bi-telephone"></i>
                                &nbsp;
                                Telefon raqam: {{ Auth()->user()->tel }}</a>
                            </div>
                            <div class="info-item">
                                <i class="bi bi-geo-alt"></i>
                                &nbsp;
                                @if( isset(Auth()->user()->city))
                                {{ Auth()->user()->city }} , {{ Auth()->user()->address }}
                                @else
                               Manzil yo'q
                                @endif
                            </div>
                            <div class="info-item">
                                <i class="bi bi-envelope"></i>
                                &nbsp;
                                {{ Auth()->user()->email }}
                            </div>

                        </div>
                    </div>

                    <div class="pages box">
                        <div class="intro-title">
                            Sizning Kurslaringiz
                        </div>
                        @if(isset(Auth()->user()->course))
                            @foreach(Auth()->user()->course as $course)
                                <div class="user">
                                    <img
                                        src="{{'storage/' .$course->photo}}"
                                        alt="" class="user-img">
                                    <div class="username">{{ $course->heading }}</div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

                <div class="timeline-right">

                    <div class="album box">
                        <div class="status-main">
                            @if(isset(Auth()->user()->photo))
                            <img src="{{ asset('storage/' .Auth()->user()->photo) }}"
                                 @else
                                <img src="https://images.unsplash.com/photo-1508247967583-7d982ea01526?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80"
                                 @endif

                                 class="status-img" />
                            <div class="album-detail">
                                <div class="album-title"><strong>Siz haqizda o'qituvchi fikri</strong>
                                </div>

                            </div>

                        </div>
                        @if(isset(Auth()->user()->teacher_message))
                        <div class="album-content">
                            {{ Auth()->user()->teacher_message }}
                        </div>
                        @else
                            <div class="album-content">
                              Fikr mavjud emas
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>

    </section>
    <!--  -->

    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend_assets/profile/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('frontend_assets/profile/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('frontend_assets/profile/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/profile/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/profile/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/profile/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/profile/assets/vendor/typed.js/typed.min.js') }}"></script>
    <script src="{{ asset('frontend_assets/profile/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('frontend_assets/profile/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('frontend_assets/profile/assets/js/main.js') }}"></script>

</body>

</html>
