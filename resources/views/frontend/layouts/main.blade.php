<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'IT school' }}</title>
    <link rel="icon" type="image/png" href="{{ asset('Ns.png') }}"/>

    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/style.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/fontawesome/css/brands.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/fontawesome/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/fontawesome/css/regular.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/assets/fontawesome/css/solid.css')}}">
    <!-- Font Awesome End -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
</head>

<body>
<!-- ////////////////////////////////////////////////////////////////////////////////////////
                             START SECTION 1 - THE NAVBAR SECTION
/////////////////////////////////////////////////////////////////////////////////////////////-->
@foreach($navbar = \App\Models\Navbar::all() as $nav)
<nav @if($nav->display == 1) style="z-index: 2; " @endif @if($nav->display === 0) style="display: none" @endif class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">

    <div class="container">
        <a class="navbar-brand" href="{{ route('main') }}">

            <img
                @foreach(\App\Models\Logo::all() as $logo)
                style="width: {{$logo->width}}px;height: {{$logo->height}}px"
                @endforeach
                class="ns_logo" src="{{ asset('storage/' .$nav->logo) }}" alt="logo {{$nav->logo}}">

        </a>


        <button class=" navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('main') }}#home">{{ $nav->first_link }}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('main') }}#services">{{ $nav->second_link }}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('main') }}#testimonials">{{ $nav->third_link }}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('main') }}#faq">{{ $nav->fourth_link }}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('main') }}#portfolio">{{ $nav->fifth_link }}</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('main') }}#contact">{{ $nav->sixth_link }}</a>
                </li>
            </ul>
            <div class="ns_main">
                <div class="ns_btn_main">
                    <div class="ns_position">
                        <!-- <button class="nsbtn"> <i class="fas fa-phone-alt"></i></button> -->
                        <a href="{{ route('dashboard') }}">  <button class="nsbtn"> <i class="fas fa-user"></i></button></a>
                    </div>
                </div>

                <div class="ns_btn_main">
                    <div class="ns_position">
                        @auth()
                            <div class="btn-group">
                                <button class="nsbtn dropdown-toggle" type="button"data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-phone-alt"></i>
                                </button>
                                <ul class="dropdown-menu" style="margin: 5px -50px;">
                                    <li style="color: cyan">Bog'lanish:</li>
                                    <li style="color: #555">id:&nbsp; <b>77{{Auth()->user()->id}}</b></li>
                                    <li ><a class="dropdown-item" style=" color:black" href="tel:{{ $nav->phone_number }}"><i class="fas fa-phone"></i>{{ $nav->phone_number }}</a></li>

                                </ul>
                            </div>
                        @else
                            <!-- Example single danger button -->
                            <div class="btn-group">
                                <button class="nsbtn dropdown-toggle" type="button"data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-phone-alt"></i>
                                </button>
                                <ul class="dropdown-menu" style="margin: 0px 20px;">
                                    <li style="color: cyan">Ro'yxatdan o'ting:</li>
                                    <li ><a class="dropdown-item" style=" color:black" href="{{ route('register') }}"><i class="fas fa-sign-in"></i> Registratsiya</a></li>

                                </ul>
                            </div>

                        @endauth
                        <!-- <button class="nsbtn"> <i class="fas fa-user"></i></button> -->
                    </div>
                </div>
            </div>
        </div>


    </div>

</nav>
@endforeach
<div class="loader ">
    <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
        <div class="dot3"></div>
    </div>
</div>
@if(Session::has('error'))
    <div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                Hello, world! This is a toast message.
            </div>
            <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
@endif
{{ $slot }}

<!-- ///////////////////////////////////////////////////////////////////////////////////////////
                         START SECTION 9 - THE FOOTER
///////////////////////////////////////////////////////////////////////////////////////////////-->
@foreach(\App\Models\Footer::all() as $footer)
<footer @if($footer->display == 0) style="display:none;" @endif class="footer">
    <!-- START THE SOCIAL MEDIA CONTENT  -->
    <div class="footer-sm" style="background-color: #212121;">
        <div class="container">
            <div class="row py-4 text-center text-white">
                <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                    {{ $footer->main_heading }}
                </div>
                <div class="col-lg-7 col-md-6">
                    <a href="{{ $footer->telegram_link }}"><i class="fab fa-telegram"></i></a>
                    <a href="{{ $footer->youtube_link }}"><i class="fab fa-youtube"></i></a>
                    <a href="{{ $footer->insta_link }}"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- START THE CONTENT FOR THE CAMPANY INFO -->
    <div class="container mt-5">
        <div class="row text-white justify-content-center mt-3 pb-3">
            <div class="col-12 col-sm-6 col-lg-6 mx-auto">
                <h5 @if($footer->phone_status == 0) style="display: none" @endif class="text-capitalize fw-bold">{{ $footer->phone }}</h5>
                <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
                <p class="lh-lg">
                 {{ $footer->paragraph }}
                </p>
            </div>
            @foreach(\App\Models\Navbar::all() as $nav)
            <div @if($nav->display == 1) style="z-index: 2; " @endif @if($nav->display === 0) style="display: none" @endif  class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
                <h5 class="text-capitalize fw-bold">Havolalar</h5>
                <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
                <ul class="list-inline campany-list">
                    <li><a href="#">{{ $nav->first_link }}</a></li>
                    <li><a href="#">{{ $nav->second_link }}</a></li>
                    <li><a href="#">{{ $nav->third_link }}</a></li>
                    <li><a href="#">{{ $nav->fourt_link }}</a></li>
                    <li><a href="#">{{$nav->sixth_link }}</a></li>
                </ul>
            </div>
            @endforeach
            <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
                <h5 class="text-capitalize fw-bold"></h5>
                <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
                <ul class="list-inline campany-list">
                    <li><a href="{{ route('dashboard') }}"> Sizning Akkauntingiz</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Registratsiya</a></li>

                </ul>
            </div>

        </div>
    </div>

    <!-- START THE COPYRIGHT INFO  -->
    <div class="footer-bottom pt-5 pb-5">
        <div class="container">
            <div class="row text-center text-white">
                <div class="col-12">
                    <div class="footer-bottom__copyright">
                      Nsit <a href="#"> school</a> | Created by <a href="https://t.me/ns_0071"
                                                                                      target="_blank">Nurmuhammad</a><br><br>

                      {{ $footer->created_by }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
@endforeach
<!-- BACK TO TOP BUTTON  -->
<a href="#" style="z-index: 1;" class="shadow btn-primary rounded-circle back-to-top">
    <i class="fas fa-chevron-up"></i>
</a>




<script src="{{asset('frontend_assets/assets/vendors/js/glightbox.min.js')}}"></script>
<script src="{{asset('frontend_assets/assets/js/app.js')}}"></script>

<script type="text/javascript">
    const lightbox = GLightbox({
        'touchNavigation': true,
        'type': 'video',
        'source': 'youtube', //vimeo, youtube or local
        'width': 900,
        'autoPlayVideos': 'true',
    });

</script>
<script src="{{asset('frontend_assets/assets/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>
