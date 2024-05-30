@extends('layouts.app')
@section('title', 'About Us')
@section('about', 'active')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('front-assets/images/bg_3.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">About Us</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home.index') }}">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>About us <i
                                class="fa fa-chevron-right"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-lg-6 heading-section text-center ftco-animate">
                    <h2 class="mb-4">More than <span>2+</span> years we provide <span>IT Solution</span></h2>
                    {{-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="services-2 text-center">
                        <div class="icon">
                            <span class="flaticon-web-programming"></span>
                        </div>
                        <div class="text">
                            <h3>Web Development</h3>
                            <p>Our developers are skilled in the most advanced backend technologies to form a robust
                                software base. We guarantee you fully scalable, secure, and interactive web applications
                                matching your business requirements.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('front-assets/images/services.svg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-4">
                    <div class="services-2 text-center">
                        <div class="icon">
                            <span class="flaticon-secure"></span>
                        </div>
                        <div class="text">
                            <h3>Front-end & Full Stack</h3>
                            <p>We use the latest front-end and full-stack solutions to meet the rapidly changing dynamics of
                                your business needs. We assure you of interactive web fronts to keep you ahead in your game.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter ftco-section ftco-no-pt img" id="section-counter">
        <div class="container">
            <div class="row no-gutters d-flex">
                <div class="col-md-6 d-flex">
                    <div class="img d-flex align-self-stretch"
                        style="background-image:url('{{ asset('front-assets/images/about.jpg') }}');"></div>
                </div>
                <div class="col-md-6 p-3 pl-md-5 py-5 bg-primary">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section heading-section-white ftco-animate">
                            <h2 class="mb-4">Consult us here in <span>Musheeda Solution</span></h2>
                            {{-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p> --}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 mb-4">
                                <div class="text">
                                    <strong class="number" data-number="750">0</strong>
                                    <span>Project Complete</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 mb-4">
                                <div class="text">
                                    <strong class="number" data-number="568">0</strong>
                                    <span>Happy Clients</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 mb-4">
                                <div class="text">
                                    <strong class="number" data-number="478">0</strong>
                                    <span>Business Partners</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 mb-4">
                                <div class="text">
                                    <strong class="number" data-number="780">0</strong>
                                    <span>IT Consultant</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-no-pb testimony-section"
        style="background-image: url('{{ asset('front-assets/images/bg_1.jpg') }}');">
        <div class="overlay-1"></div>
        <div class="container-fluid">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <h2 class="mb-4">Our Team</h2>
                    <p class="mb-4">We are a leading software development company. We are a team of
                        hard-working and experienced developers, designers, and everyone else crucial for
                        transforming your business ideas into reality. </p>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12 testimonial">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap d-flex align-items-stretch"
                                style="background-image: url('{{ asset('front-assets/images/testimony-2.jpg') }}');">
                                <div class="overlay"></div>
                                <div class="text">
                                    <div class="line"></div>
                                    {{-- <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p> --}}
                                    <p class="name">MOHD QASIM</p>
                                    <span class="position">Software Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex align-items-stretch"
                                style="background-image: url('{{ asset('front-assets/images/testimony-5.jpg') }}');">
                                <div class="overlay"></div>
                                <div class="text">
                                    <div class="line"></div>
                                    {{-- <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p> --}}
                                    <p class="name">SHAHNAWAJ</p>
                                    <span class="position">Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap d-flex align-items-stretch"
                                style="background-image: url('{{ asset('front-assets/images/testimony-5.jpg') }}');">
                                <div class="overlay"></div>
                                <div class="text">
                                    <div class="line"></div>
                                    {{-- <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts.</p> --}}
                                    <p class="name">MD Yasin</p>
                                    <span class="position">UI / UX Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="ftco-section bg-light ftco-faqs">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-md-last">
                    <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0"
                        style="background-image:url('{{ asset('front-assets/images/about.jpg') }}');">
                    </div>
                    <div class="d-flex mt-3">
                        <div class="img img-2 mr-md-2 w-100"
                            style="background-image:url('{{ asset('front-assets/images/about-1.jpg') }}');"></div>
                        <div class="img img-2 ml-md-2 w-100"
                            style="background-image:url('{{ asset('front-assets/images/about-2.jpg') }}');"></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="heading-section mb-5 mt-5 mt-lg-0">
                        <h2 class="mb-3">Frequently Asks Questions</h2>
                    </div>
                    <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
                        <div class="card">
                            <div class="card-header p-0" id="headingOne">
                                <h2 class="mb-0">
                                    <button href="#collapseOne"
                                        class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                        data-parent="#accordion" data-toggle="collapse" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        <p class="mb-0">How can we help your business?</p>
                                        <i class="fa" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>
                            <div class="collapse show" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
                                <div class="card-body py-3 px-0">
                                    <ol>
                                        <li>Far far away, behind the word mountains</li>
                                        <li>Consonantia, there live the blind texts</li>
                                        <li>When she reached the first hills of the Italic Mountains</li>
                                        <li>Bookmarksgrove, the headline of Alphabet Village</li>
                                        <li>Separated they live in Bookmarksgrove right</li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header p-0" id="headingTwo" role="tab">
                                <h2 class="mb-0">
                                    <button href="#collapseTwo"
                                        class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                        data-parent="#accordion" data-toggle="collapse" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        <p class="mb-0">How long does it take to build a website?</p>
                                        <i class="fa" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>
                            <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="card-body py-3 px-0">
                                    <ol>
                                        <li>Far far away, behind the word mountains</li>
                                        <li>Consonantia, there live the blind texts</li>
                                        <li>When she reached the first hills of the Italic Mountains</li>
                                        <li>Bookmarksgrove, the headline of Alphabet Village</li>
                                        <li>Separated they live in Bookmarksgrove right</li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header p-0" id="headingThree" role="tab">
                                <h2 class="mb-0">
                                    <button href="#collapseThree"
                                        class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                        data-parent="#accordion" data-toggle="collapse" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <p class="mb-0">Can I help your IT Solution for business?</p>
                                        <i class="fa" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>
                            <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="card-body py-3 px-0">
                                    <ol>
                                        <li>Far far away, behind the word mountains</li>
                                        <li>Consonantia, there live the blind texts</li>
                                        <li>When she reached the first hills of the Italic Mountains</li>
                                        <li>Bookmarksgrove, the headline of Alphabet Village</li>
                                        <li>Separated they live in Bookmarksgrove right</li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header p-0" id="headingFour" role="tab">
                                <h2 class="mb-0">
                                    <button href="#collapseFour"
                                        class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link"
                                        data-parent="#accordion" data-toggle="collapse" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        <p class="mb-0">What are those requirements for ITSolutions?</p>
                                        <i class="fa" aria-hidden="true"></i>
                                    </button>
                                </h2>
                            </div>
                            <div class="collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="card-body py-3 px-0">
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right
                                        at the coast of the Semantics, a large language ocean.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
