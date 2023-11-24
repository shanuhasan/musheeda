@extends('layouts.app')
@section('title', $page->name)
@section($page->name, 'active')
@section('content')

    @if ($page->slug == 'contact-us')
        <div class="contact mt-70">
            <div class="container">
                <div class="section-header">
                    <h2>{{ $page->name }}</h2>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form">
                            <form class="contactForm">
                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                        <input type="text" class="form-control" placeholder="Your Name" />
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <input type="email" class="form-control" placeholder="Your Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject" />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                                </div>
                                <div><button class="btn" type="submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26361250.667320687!2d-113.75533773453304!3d36.24128894212527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sbd!4v1574923227698!5m2!1sen!2sbd"
                                frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="single mt-70">
            <div class="container">
                <div class="section-header">
                    <h2>{{ $page->name }}</h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="single-img">
                            <img src="{{ asset('front-assets/img/single.jpg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="single-content">
                            {!! $page->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif


@endsection

@section('script')
    <script type="text/javascript">
        $("#contactForm").submit(function(e) {
            e.preventDefault();
            $("button[type='submit']").prop('disabled', true);
            $.ajax({
                type: "post",
                url: "{{ route('home.sendContactEmail') }}",
                data: $(this).serializeArray(),
                dataType: "json",
                success: function(response) {
                    var errors = response.errors;
                    $("button[type='submit']").prop('disabled', false);
                    if (response.status == false) {
                        $('.with-errors').removeClass('invalid-feedback').html('');
                        $('input[type="text"],input[type="email"]').removeClass('is-invalid');

                        $.each(errors, function(key, val) {
                            $('#' + key).addClass('is-invalid').siblings('p').addClass(
                                'invalid-feedback').html(val);
                        });
                    } else {
                        $('.with-errors').removeClass('invalid-feedback').html('');
                        $('input[type="text"],input[type="email"]').removeClass('is-invalid');

                        window.location.href = "{{ route('home.page', $page->slug) }}";
                    }
                },
                error: function(jQXHR, exception) {
                    console.log('Something went wrong');
                }
            });
        })
    </script>
@endsection
