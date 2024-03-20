@extends('layouts.app')
@section('title', 'Services')
@section('services', 'active')
@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('front-assets/images/bg_3.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Services</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Services <i
                                class="fa fa-chevron-right"></i></span></p>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section services-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-6 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Our Exclusive <span>IT Solution</span> Services</h2>
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
    </section>

    <section class="ftco-section ftco-no-pt">
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
                            <h3><a href="project.html">Best Solution for Information Technology</a></h3>
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
                            <h3><a href="project.html">Creative Idea Build Up</a></h3>
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
                            <h3><a href="project.html">Web Design Concept &amp; Web Analysis</a></h3>
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
                            <h3><a href="project.html">Strategy for Enduring Customer Relationships</a></h3>
                        </div>
                        <a href="{{ asset('front-assets/images/work-4.jpg') }}"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
