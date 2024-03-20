<footer class="ftco-footer ftco-footer-2 ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Company</h2>
                    <p>Musheeda is a leading digital transformation company, we have leveraged advanced digital
                        technology solutions with industry transformation to large enterprises and public sectors for
                        more than a decade.</p>
                    <ul class="ftco-footer-social list-unstyled mt-2">
                        <li class="ftco-animate"><a href="https://twitter.com/musheeda9" target="_blank"><span
                                    class="fa fa-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.facebook.com/profile.php?id=100092385110895"
                                target="_blank"><span class="fa fa-facebook"></span></a>
                        </li>
                        <li class="ftco-animate"><a href="https://www.instagram.com/musheeda9/" target="_blank"><span
                                    class="fa fa-instagram"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Useful Links</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home.about') }}" class="d-block">About Us</a></li>
                        <li><a href="{{ route('home.contact') }}" class="d-block">Contact Us</a></li>
                        <li><a href="{{ route('home.blogs') }}" class="d-block">Blog</a></li>
                        <li><a href="#" class="d-block">Privacy &amp; Policy</a></li>
                        <li><a href="#" class="d-block">Terms &amp; Conditions</a></li>
                        {{-- @if (getStaticPages()->isNotEmpty())
                            @foreach (getStaticPages() as $item)
                                <li><a href="{{ route('home.page', $item->slug) }}">{{ $item->name }}</a></li>
                            @endforeach
                        @endif --}}
                    </ul>
                </div>
            </div>
            {{-- <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Useful Links</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home.blogs') }}" class="d-block">Blog</a></li>
                        <li><a href="#" class="d-block">Privacy &amp; Policy</a></li>
                        <li><a href="#" class="d-block">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
            </div> --}}
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon fa fa-map marker"></span><span class="text">137, Nai Basti, Naugawan
                                    Sadat, Amroha (UP), India.</span></li>
                            <li><a href="tel://7533825583"><span class="icon fa fa-phone"></span><span
                                        class="text">+91
                                        7533825583</span></a></li>
                            <li><a href="mailto:info@musheeda.com"><span
                                        class="icon fa fa-paper-plane pr-4"></span><span
                                        class="text">info@musheeda.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template
                    is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                        target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>
