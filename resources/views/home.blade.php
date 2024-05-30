@extends('layouts.app')
@section('title', 'Home')
@section('home', 'active')
@section('content')
    <div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('front-assets/images/bg_1.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
                <div class="col-md-8 ftco-animate mt-5 pt-md-5" data-scrollax=" properties: { translateY: '70%' }">
                    {{-- <div class="row">
                        <div class="col-md-7">
                            <p class="mb-4 pl-md-5 line" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                            </p>
                        </div>
                    </div> --}}
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Top-Rated Software
                        Development Company
                    </h1>
                    <p><a href="{{ route('home.about') }}" class="btn btn-primary px-4 py-3">Read more</a></p>
                </div>
            </div>
        </div>
    </div>

    {{-- <section class="ftco-intro">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-7">
                    <div class="row no-gutters d-flex align-items-stretch">
                        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                            <div class="services-1">
                                <div class="line"></div>
                                <div class="icon"><span class="flaticon-bolt"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Information Technology Consultancy</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                            <div class="services-1 color-1">
                                <div class="line"></div>
                                <div class="icon"><span class="flaticon-light-bulb"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Product Design Strategy</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                            <div class="services-1 color-2">
                                <div class="line"></div>
                                <div class="icon"><span class="flaticon-cyber"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Cyber Security &amp; Web Development</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-lg-6 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Our Expertise</h2>
                    <p>We have a team of diverse technical experts and developers with a skill
                        set of the most advanced technologies and frameworks.</p>
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

    {{-- <section class="ftco-counter img" id="section-counter">
        <div class="container">
            <div class="row no-gutters d-flex">
                <div class="col-md-6 d-flex">
                    <div class="img d-flex align-self-stretch"
                        style="background-image:url('{{ asset('front-assets/images/about.jpg') }}');"></div>
                </div>
                <div class="col-md-6 p-3 pl-md-5 py-5 bg-primary">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section heading-section-white ftco-animate">
                            <h2 class="mb-4">Consult Us</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia
                            </p>
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
    </section> --}}

    {{-- <section class="ftco-section services-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-6 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Our Exclusive Services</h2>
                </div>
            </div>
            <div class="row d-flex no-gutters">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="line"></div>
                        <div class="icon"><span class="flaticon-web-programming"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Web Development</h3>
                            <p> 203 Fake St. Mountain View, San Francisco, California, USA</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="line"></div>
                        <div class="icon"><span class="flaticon-stats"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Database Analysis</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="line"></div>
                        <div class="icon"><span class="flaticon-secure"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Server Security</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="line"></div>
                        <div class="icon"><span class="flaticon-presentation"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">UX/UI Strategy</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="ftco-section ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Our Strategic <span>Work</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <div class="img">
                            <img src="{{ asset('front-assets/images/work-1.jpg') }}" class="img-fluid"
                                alt="Colorlib Template">
                        </div>
                        <div class="text text-center">
                            <span>Web Development</span>
                            <h3><a href="javascript:void(0);">Best Solution for Information Technology</a></h3>
                        </div>
                        <a href="{{ asset('front-assets/images/work-1.jpg') }}"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <div class="img">
                            <img src="{{ asset('front-assets/images/work-2.jpg') }}" class="img-fluid"
                                alt="Colorlib Template">
                        </div>
                        <div class="text text-center">
                            <span>Web Application</span>
                            <h3><a href="javascript:void(0);">Creative Idea Build Up</a></h3>
                        </div>
                        <a href="{{ asset('front-assets/images/work-2.jpg') }}"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <div class="img">
                            <img src="{{ asset('front-assets/images/work-3.jpg') }}" class="img-fluid"
                                alt="Colorlib Template">
                        </div>
                        <div class="text text-center">
                            <span>Web Development</span>
                            <h3><a href="javascript:void(0);">Web Design Concept &amp; Web Analysis</a></h3>
                        </div>
                        <a href="{{ asset('front-assets/images/work-3.jpg') }}"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <div class="img">
                            <img src="{{ asset('front-assets/images/work-4.jpg') }}" class="img-fluid"
                                alt="Colorlib Template">
                        </div>
                        <div class="text text-center">
                            <span>UI/UX Strategy</span>
                            <h3><a href="javascript:void(0);">Strategy for Enduring Customer Relationships</a></h3>
                        </div>
                        <a href="{{ asset('front-assets/images/work-4.jpg') }}"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

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
                                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove
                                        right at the coast of the Semantics, a large language ocean.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


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

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>Read our latest blog</h2>
                </div>
            </div>
            <div class="row d-flex">
                @if ($blogs->isNotEmpty())
                    @foreach ($blogs as $item)
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="blog-entry justify-content-end">
                                <a href="{{ route('home.blogs.view', $item->slug) }}" class="block-20"
                                    style="background-image: url('{{ asset('uploads/blogs/' . $item->image) }}');">
                                </a>
                                <div class="text mt-3 float-right d-block">
                                    <div class="d-flex align-items-center pt-2 mb-4 topp">
                                        <div class="one">
                                            <span class="day">{{ date('d', strtotime($item->created_at)) }}</span>
                                        </div>
                                        <div class="two pl-1">
                                            <span class="yr">{{ date('Y', strtotime($item->created_at)) }}</span>
                                            <span class="mos">{{ date('F', strtotime($item->created_at)) }}</span>
                                        </div>
                                    </div>
                                    <h3 class="heading"><a
                                            href="{{ route('home.blogs.view', $item->slug) }}">{{ $item->title }}</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <section class="ftco-appointment ftco-section img"
        style="background-image: url('{{ asset('front-assets/images/bg_2.jpg') }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 half ftco-animate">
                    <h2 class="mb-4">Contact Us</h2>
                    <form action="" class="appointment contactForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                            <select name="" id="" class="form-control">
                                                <option value="">Services</option>
                                                <option value="">Web Development</option>
                                                <option value="">Database Analysis</option>
                                                <option value="">Server Security</option>
                                                <option value="">UX/UI Strategy</option>
                                                <option value="">Branding</option>
                                                <option value="">Applications</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="button" value="Send message" class="btn btn-primary py-3 px-4">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
