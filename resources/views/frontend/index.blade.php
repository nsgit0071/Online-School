
<x-main>


    <x-slot:title>NSIT School</x-slot:title>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////
                          START SECTION 2 - THE INTRO SECTION
/////////////////////////////////////////////////////////////////////////////////////////////////////-->
@foreach($header as $head)
<section @if($head->display == 0) style="display: none" @endif id="home" class="intro-section">
    <div class="container">
        <div class="row align-items-center text-white">
            <!-- START THE CONTENT FOR THE INTRO  -->
            <div class="col-md-6 intros text-start">
                <h1 class="display-2">
                    <span class="display-2--intro">{{ $head->heading }}</span>
                    <span class="display-2--description lh-base">
             {{ $head->paragraph }}
            </span>
                </h1>
                <button type="button" class="rounded-pill btn-rounded">{{ $head->button_text }}
                    <span><i class="fas fa-arrow-right"></i></span>
                </button>
            </div>
            <!-- START THE CONTENT FOR THE VIDEO -->
            <div class="col-md-6 intros text-end">
                <div class="video-box">
                    <img src="{{asset('frontend_assets/images/arts/intro-section-illustration.png')}}" alt="video illutration"
                         class="img-fluid">
                    <a href="{{ $head->Youtube_link }}" class="glightbox position-absolute top-50 start-50 translate-middle">
              <span>
                <i class="fas fa-play-circle"></i>
              </span>
                        <span class="border-animation border-animation--border-1"></span>
                        <span class="border-animation border-animation--border-2"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffffff" fill-opacity="1"
              d="M0,160L48,176C96,192,192,224,288,208C384,192,480,128,576,133.3C672,139,768,213,864,202.7C960,192,1056,96,1152,74.7C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
</section>

    @endforeach
    @foreach($abouts as $about)
<section @if($about->display == 0) style="display: none" @endif id="services" class="services">
    <div class="container">
        <div class="row text-center">
            <h1 class="display-3 fw-bold">{{ $about->heading_main }}</h1>
            <div class="heading-line mb-1"></div>
        </div>
        <!-- START THE DESCRIPTION CONTENT  -->
        <div class="row pt-2 pb-2 mt-0 mb-3">
            <div class="col-md-6 border-right">
                <div class="bg-white p-3">
                    <h2 class="fw-bold text-capitalize text-center">
                        {{ $about->heading }}
                    </h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bg-white p-4 text-start">
                    <p class="fw-light">
                        {{ $about->paragraph }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- START THE CONTENT FOR THE SERVICES  -->
    <div class="container">

        <!-- START THE WEB DEVELOPMENT CONTENT  -->
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-start">
                <div class="services__pic">
                    <img src="{{ asset('storage/' .$about->photo) }}" alt="web development illustration"
                         class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
                <div class="services__content">
                    <div class="{{ $about->about_icon }}"></div>
                    <h3 class="display-3--title mt-1">{{ $about->about_heading }}</h3>
                    <p class="lh-lg">
                       {{ $about->paragraph_about }}
                    </p>
                    <a style="text-decoration: none" href="{{ route('main') }}#portfolio"> <button type="button" class="rounded-pill btn-rounded border-primary">{{ $about->button_text }}
                        <span><i class="fas fa-arrow-right"></i></span>
                    </button>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
    @endforeach

<!-- ////////////////////////////////////////////////////////////////////////////////////////////////--}}
{{--                             START SECTION 5 - THE TESTIMONIALS--}}
 <--/////////////////////////////////////////////////////////////////////////////////////////////////////-->
    @foreach($newCourse as $newCourses)
    <section @if($newCourses->display == 0) style="display: none" @endif id="testimonials" class="testimonials">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
                  d="M0,96L48,128C96,160,192,224,288,213.3C384,203,480,117,576,117.3C672,117,768,203,864,202.7C960,203,1056,117,1152,117.3C1248,117,1344,203,1392,245.3L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
            </path>
        </svg>
        <div class="container">
            <div class="row text-center text-white">
                <h1 class="display-3 fw-bold">{{ $newCourses->head }}</h1>
                <hr style="width: 100px; height: 3px; " class="mx-auto">
                <p class="lead pt-1">
                    {{ $newCourses->paragraph }}
                </p>
                <div class="timer">
                    <div class="promotion__timer">
                        <div class="timer">
                            <div class="timer__block">
                                <span id="days">99</span>
                                kun
                            </div>
                            <div class="timer__block">
                                <span id="hours">09</span>
                                soat
                            </div>
                            <div class="timer__block">
                                <span id="minutes">99</span>
                                daqiqa
                            </div>
                            <div class="timer__block">
                                <span id="seconds">09</span>
                                soniya
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- START THE CAROUSEL CONTENT  -->
            <div class="row align-items-center">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- CAROUSEL ITEM 1 -->

                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
                  d="M0,96L48,128C96,160,192,224,288,213.3C384,203,480,117,576,117.3C672,117,768,203,864,202.7C960,203,1056,117,1152,117.3C1248,117,1344,203,1392,245.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>

    @endforeach

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////
                            START SECTION 7 - THE PORTFOLIO
//////////////////////////////////////////////////////////////////////////////////////////////////////-->

<section  id="portfolio" class="portfolio">
    @foreach($courseHead as $courseHeads)
    <div class="container">
        <div @if($courseHeads->status == 0) style="display: none" @endif class="row text-center mt-5">
            <h1 class="display-3 fw-bold text-capitalize">{{ $courseHeads->heading }}</h1>
            <div class="heading-line"></div>
            <p class="lead">
                {{ $courseHeads->paragraph }}
            </p>
        </div>
        @endforeach
        <div class="ns_main_card">
            <!-- 1 -->
@foreach($course as $courses)
            <div @if($courses->display == 0) style="display: none" @endif class="card_ns_first">
                <div class="card">
                    <div class="card-img">
                        <img src="{{ asset('storage/' .$courses->photo) }}" alt="">
                    </div>
                    <div class="card-info">
                        <p class="text-title">{{ $courses->heading }} </p>
                        <p class="text-body">
                            {{ Str::limit($courses->paragraph_view , '90' , '...')  }}
                        </p>
                    </div>

                    <a href="{{ route('view' , ['id' => $courses->id]) }}"> <button class="itbutton">Malumot</button>
                    </a>
                    <div class="card-footer">
                        <span class="text-title">{{ $courses->prise }}</span>
                        <div class="card-button_flex">
                            <!-- Buttom second first -->
                            <div class="card-button_ns">
                                <i class="fa fa-info-circle"></i>
                            </div>
                            <!-- Buttom second -->
                            <a href="{{ route('tasdiq')}}">
                            <div class="card-button">
                                <svg class="svg-icon" viewBox="0 0 20 20">
                                    <path
                                        d="M17.72,5.011H8.026c-0.271,0-0.49,0.219-0.49,0.489c0,0.271,0.219,0.489,0.49,0.489h8.962l-1.979,4.773H6.763L4.935,5.343C4.926,5.316,4.897,5.309,4.884,5.286c-0.011-0.024,0-0.051-0.017-0.074C4.833,5.166,4.025,4.081,2.33,3.908C2.068,3.883,1.822,4.075,1.795,4.344C1.767,4.612,1.962,4.853,2.231,4.88c1.143,0.118,1.703,0.738,1.808,0.866l1.91,5.661c0.066,0.199,0.252,0.333,0.463,0.333h8.924c0.116,0,0.22-0.053,0.308-0.128c0.027-0.023,0.042-0.048,0.063-0.076c0.026-0.034,0.063-0.058,0.08-0.099l2.384-5.75c0.062-0.151,0.046-0.323-0.045-0.458C18.036,5.092,17.883,5.011,17.72,5.011z">
                                    </path>
                                    <path
                                        d="M8.251,12.386c-1.023,0-1.856,0.834-1.856,1.856s0.833,1.853,1.856,1.853c1.021,0,1.853-0.83,1.853-1.853S9.273,12.386,8.251,12.386z M8.251,15.116c-0.484,0-0.877-0.393-0.877-0.874c0-0.484,0.394-0.878,0.877-0.878c0.482,0,0.875,0.394,0.875,0.878C9.126,14.724,8.733,15.116,8.251,15.116z">
                                    </path>
                                    <path
                                        d="M13.972,12.386c-1.022,0-1.855,0.834-1.855,1.856s0.833,1.853,1.855,1.853s1.854-0.83,1.854-1.853S14.994,12.386,13.972,12.386z M13.972,15.116c-0.484,0-0.878-0.393-0.878-0.874c0-0.484,0.394-0.878,0.878-0.878c0.482,0,0.875,0.394,0.875,0.878C14.847,14.724,14.454,15.116,13.972,15.116z">
                                    </path>
                                </svg>
                            </div>
                            </a>
                        </div>

                    </div>

                </div>

            </div>
            @endforeach

        </div>
    </div>
        </div>
</section>

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////
                     START SECTION 6 - THE FAQ
//////////////////////////////////////////////////////////////////////////////////////////////////////-->

<section id="faq" class="faq">
    <div class="container">
        <div class="row text-center">
            <h1 class="display-3 fw-bold text-uppercase">Savollar</h1>
            <div class="heading-line">
                Eng ko'p berilgan savollar
            </div>
            <p class="lead"></p>
        </div>
        <!-- ACCORDION CONTENT  -->

        <div class="row mt-5">
            <div class="col-md-12">
                <div class="accordion" id="accordionExample">
                    <!-- ACCORDION ITEM 1 -->
                    @foreach($faq as $faqs)
                    <!-- ACCORDION ITEM 2 -->
                    <div class="accordion-item shadow mb-3" @if($faqs->status == 0) style="display: none" @endif>
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo{{ $faqs->id }}" aria-expanded="false" aria-controls="collapseTwo">
{{ $faqs->link }}
                            </button>
                        </h2>
                        <div id="collapseTwo{{ $faqs->id }}" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {!! $faqs->paragraph !!}
                              </div>
                          </div>
                      </div>
                      <!-- ACCORDION ITEM 3 -->
                    @endforeach
                  </div>
              </div>

          </div>
      </div>
  </section>

  <!-- //////////////////////////////////////////////////////////////////////////////////////////////
                             START SECTION 3 - THE CAMPANIES SECTION
  ////////////////////////////////////////////////////////////////////////////////////////////////////-->

  <section id="campanies" class="campanies">
      <div class="container">
          <div class="row text-center">
              <h4 class="fw-bold lead mb-3">Hamkorlar</h4>
              <div class="heading-line mb-5"></div>
          </div>
      </div>
      <!-- START THE CAMPANIES CONTENT  -->
      <div class="container">
          <div class="row">
              @foreach($company as $companies)
              <div class="col-md-4 col-lg-2" @if($companies->status == 0) style="display: none" @endif>
                  <div class="campanies__logo-box shadow-sm">
                      <img src="{{asset('storage/' .$companies->photo)}}" alt="{{ $companies->photo }}"
                         title="{{ $companies->title }}" class="img-fluid">
                </div>
            </div>
              @endforeach
        </div>
    </div>
</section>

<!-- //////////////////////////////////////////////////////////////////////////////////////////////
                     START SECTION 4 - THE SERVICES
///////////////////////////////////////////////////////////////////////////////////////////////////-->

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////
            START SECTION 8 - GET STARTED
/////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    @foreach($messageHead as $message_h)
<section id="contact" class="get-started">
    <div class="container">
        <div class="row text-center">
            <h1 class="display-3 fw-bold text-capitalize">{{ $message_h->main_paragraph }}</h1>
            <div class="heading-line"></div>
            <p class="lh-lg">
                {{ $message_h->btn_text }}
            </p>
        </div>

        <!-- START THE CTA CONTENT  -->
        <div class="row text-white">
            <div class="col-12 col-lg-6 gradient shadow p-3">
                <div class="cta-info w-100">
                    <h4 class="display-4 fw-bold">{{ $message_h->heading }}</h4>
                    <p class="lh-lg">
                       {{ $message_h->paragraph }}
                    </p>
                    <h3 class="display-3--brief">{{ $message_h->message_heading }}</h3>

                </div>
            </div>
            @endforeach
            <div class="col-12 col-lg-6 bg-white shadow p-3">
                <div class="form w-100 pb-2">
                    @auth()
                    <h4 class="display-3--title mb-5">

                    </h4>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{route('message.store')}}" method="POST" class="row">
@csrf

                        <div class="col-lg-6 col-md mb-3">
                            <input  required type="text" name="name" value="{{ old('name') }}" placeholder="Ismingiz" id="inputFirstName"
                                   class="shadow form-control form-control-lg">
                        </div>
                        <div class="col-lg-6 col-md mb-3">
                            <input required type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Familiyangiz" id="inputLastName"
                                   class="shadow form-control form-control-lg">
                        </div>
                        <div class="col-lg-12 mb-3">
                            <input required type="text" name="subject" placeholder="Mavzu" value="{{old('subject')}}" id="inputEmail"
                                   class="shadow form-control form-control-lg">
                        </div>

                        <div class="col-lg-12 mb-3">
                <textarea required name="body" {{ old('body') }} placeholder="Matn" id="message" rows="8"
                          class="shadow form-control form-control-lg"></textarea>
                        </div>
                        <div class="text-center d-grid mt-1">

                            <button type="submit"  class="btn_ns_js btn btn-primary rounded-pill pt-3 pb-3">
                               Yuborish
                                <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                        @else

                            <div class="ns-center-ns">

                                <a href="{{ route('login') }}">  <button class="buttonns"> Login</button></a>
                                <a href="{{ route('register') }}"> <button class="buttonns">Registratsiya</button></a>
                            </div>
                        @endauth
                    </form>

                </div>
            </div>

        </div>
    </div>
</section>
</x-main>
@foreach(\App\Models\NewCourse::all() as $newCourses)
<script>
    const deadline = '{{ $newCourses->date }}'
</script>
@endforeach
