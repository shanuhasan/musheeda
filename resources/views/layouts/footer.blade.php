<footer class="ftco-footer ftco-footer-2 ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-footer-logo">MUSHEEDA<span> Solutions</span></h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                        there live the blind texts.</p>
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
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Company</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home.about') }}" class="d-block">About Us</a></li>
                        <li><a href="{{ route('home.contact') }}" class="d-block">Contact Us</a></li>
                        {{-- @if (getStaticPages()->isNotEmpty())
                            @foreach (getStaticPages() as $item)
                                <li><a href="{{ route('home.page', $item->slug) }}">{{ $item->name }}</a></li>
                            @endforeach
                        @endif --}}
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Useful Links</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home.blogs') }}" class="d-block">Blog</a></li>
                        <li><a href="#" class="d-block">Privacy &amp; Policy</a></li>
                        <li><a href="#" class="d-block">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon fa fa-map marker"></span><span class="text">137, Nai Basti, Naugawan
                                    Sadat, Amroha (UP), India.</span></li>
                            <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+91
                                        7533825583</span></a></li>
                            <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span
                                        class="text">info@musheeda.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p>
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved</a>
                </p>
            </div>
        </div>
    </div>
</footer>
