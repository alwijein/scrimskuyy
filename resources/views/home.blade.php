@extends('layouts.appScrim')

@section('content')
    <header class="masthead">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center gradient-buttons">
                <h1 class="mx-auto my-0 text-uppercase">Pubg Scrims</h1>
                <h2 class="text-white-50 mx-auto mt-2 mb-5">Melakukan scrim, turnament pubg mobile lebih mudah dengan sistem
                    cerdas</h2>
                <a class="btn btn-warning js-scroll-trigger" href="{{ route('scrims.create') }}">MULAI SEKARANG</a>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="about-section text-center" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-white mb-4">Lakukan Scrim Untuk Squad Kalian</h2>
                    <p class="text-white-50">
                        dengan menggunakan website ini kalian dapat dengan mudah melakukan perhitungan, pendaftaran squad,
                        untuk melakukan scrim melalui website ini atau dengan mendowload aplikasi mobile
                        <a href="{{ URL::asset('https://startbootstrap.com/template-overviews/grayscale/') }}">disini</a>
                        . kami sangat berharap dengan adanya wewbsite dan aplikasi ini dunia esport dapat berkembang lebih
                        cepat.
                    </p>
                </div>
            </div>
            <img class="img-fluid" src="{{ URL::asset('startbootstrap-grayscale-gh-pages/assets/img/ipad-pubg.png') }}"
                alt="" />
        </div>
    </section>
    <!-- Projects-->
    <section class="projects-section bg-light" id="projects">
        <div class="container">
            <!-- Featured Project Row-->
            <div class="row align-items-center no-gutters mb-4 mb-lg-5">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0"
                        src="{{ URL::asset('startbootstrap-grayscale-gh-pages/assets/img/side-right-login.jpg') }}" alt="" /></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>Hitung Point Otomatis </h4>
                        <p class="text-black-50 mb-0">Grayscale is open source and MIT licensed. This means you can use it
                            for any project - even commercial projects! Download it, customize it, and publish your website!
                        </p>
                    </div>
                </div>
            </div>
            <!-- Project One Row-->
            <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                <div class="col-lg-6"><img class="img-fluid"
                        src="{{ URL::asset('startbootstrap-grayscale-gh-pages/assets/img/pubg001.jpg') }}" alt="" />
                </div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white">Dapat Melihat Riwayat Scrims</h4>
                                <p class="mb-0 text-white-50">An example of where you can put an image of a project, or
                                    anything else, along with a description.</p>
                                <hr class="d-none d-lg-block mb-0 ml-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project Two Row-->
            <div class="row justify-content-center no-gutters">
                <div class="col-lg-6"><img class="img-fluid"
                        src="{{ URL::asset('startbootstrap-grayscale-gh-pages/assets/img/pubg002.jpg') }}" alt="" />
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-white">Buat Sertifika Otomatis</h4>
                                <p class="mb-0 text-white-50">Another example of a project with its respective description.
                                    These sections work well responsively as well, try this theme on a small screen!</p>
                                <hr class="d-none d-lg-block mb-0 mr-0" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Signup-->
    <section class="signup-section" id="signup">
        <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <form class="form-inline d-flex">
                            <a class="btn btn-danger mx-auto" href="https://www.patreon.com/user?u=43812853">Support on Patreon</a>
                        </form>
                        <br>
                        <h2 class="text-white mb-5">and get some awesome rewards !</h2>
                    </div>
            </div>
    </section>
    <!-- Contact-->
    <section class="contact-section bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Address</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50">Jl. Pencari Jodoh</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Email</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50"><a href="#!">alwijein@gmail.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Phone</h4>
                            <hr class="my-4" />
                            <div class="small text-black-50">+62 877-5356-4897</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="social d-flex justify-content-center">
                <a class="mx-2" href="https://www.instagram.com/alwi_jein/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a class="mx-2" href="https://www.facebook.com/Ninja.Expansin/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a class="mx-2" href="https://github.com/alwijein" target="_blank"><i class="fab fa-github"></i></a>
            </div>
        </div>
        <footer class="footer bg-black small text-center text-white-50">
            <div class="container">Copyright©scrimskuy.com. All rights reserved.</div>
        </footer>
    </section>


@endsection

