@extends('home')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('landing/img/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8 text-start">
                                    <p class="fs-4 text-white">Welcome to MahirFarm</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Mahir Qurban Domba Terbaik</h1>
                                    <a href="{{ route('register') }}" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInRight">Qurban Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('landing/img/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-8 text-end">
                                    <p class="fs-4 text-white">Welcome to MahirFarm</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Amanah Dan Terpercaya</h1>
                                    <a href="" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInLeft">Qurban Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5" id="aboutus">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6">
                    <div class="row g-2">
                        <div class="col-6 position-relative wow fadeIn" data-wow-delay="0.7s">
                            <div class="about-experience bg-secondary rounded">
                                <h1 class="display-1 mb-0">19</h1>
                                <small class="fs-5 fw-bold">Years Experience</small>
                            </div>
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid rounded" src="{{ asset('landing/img/domba5.jfif') }}">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid rounded" src="{{ asset('landing/img/domba9.jfif') }}">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.5s">
                            <img class="img-fluid rounded" src="{{ asset('landing/img/domba8.jfif') }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="section-title bg-white text-start text-primary pe-3">About Us</p>
                    <h1 class="mb-4">Founder Spirit</h1>
                    <p class="mb-4">Bersyukur Telah Memiliki Keyakinan Apa Yang Diyakini Terjadi</p>
                    <div class="row g-5 pt-2 mb-5">
                        <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="{{ asset('landing/img/service.png') }}" alt="">
                            <h5 class="mb-3">Visions & Missions</h5>
                            <span>Lorem ipsum dolor sit amet.
                            </span>
                        </div>
                        <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="{{ asset('landing/img/product.png') }}" alt="">
                            <h5 class="mb-3">History</h5>
                            <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic, nesciunt!</span>
                        </div>
                    </div>
                    <a class="btn btn-secondary rounded-pill py-3 px-5" href="">Explore More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title bg-white text-start text-primary pe-3">Why Us!</p>
                    <h1 class="mb-4">Alasan Berqurban di Mahir Qurban </h1>
                    <p class="mb-4">Karena kami memiliki beberapa kelebihan diantaranya :</p>
                    <p><i class="bi bi-card-checklist text-primary me-3" style="color: green; font-size: 20px;"></i>Berkualitas Dan Telah Memenuhi Syarat</p>
                    <p><i class="bi bi-wallet2 text-primary me-3" style="color: green; font-size: 20px;"></i>Pembayaran Mudah</p>
                    <p><i class="bi bi-receipt-cutoff text-primary me-3" style="color: green; font-size: 20px;"></i>Bukti Kurban</p>
                    <p><i class="bi bi-award text-primary me-3" style="color: green; font-size: 20px;"></i>Penyembelih Berstandar Nasional</p>
                    <a class="btn btn-secondary rounded-pill py-3 px-5 mt-3" href="{{ route('register') }}">Qurban Sekarang</a>
                </div>
                <div class="col-lg-6">
                    <div class="rounded overflow-hidden">
                        <div class="row g-0">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="text-center bg-primary py-5 px-4">
                                    <img class="img-fluid mb-4" src="{{ asset('landing/img/experience.png') }}" alt="">
                                    <h1 class="display-6 text-white" data-toggle="counter-up">19</h1>
                                    <span class="fs-5 fw-semi-bold text-secondary">Years Experience</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="text-center bg-secondary py-5 px-4">
                                    <img class="img-fluid mb-4" src="{{ asset('landing/img/award.png') }}" alt="">
                                    <h1 class="display-6" data-toggle="counter-up">183</h1>
                                    <span class="fs-5 fw-semi-bold text-primary">Award Winning</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="text-center bg-secondary py-5 px-4">
                                    <img class="img-fluid mb-4" src="{{ asset('landing/img/animal.png') }}" alt="">
                                    <h1 class="display-6" data-toggle="counter-up">2619</h1>
                                    <span class="fs-5 fw-semi-bold text-primary">Total Animals</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <div class="text-center bg-primary py-5 px-4">
                                    <img class="img-fluid mb-4" src="{{ asset('landing/img/client.png') }}" alt="">
                                    <h1 class="display-6 text-white" data-toggle="counter-up">51940</h1>
                                    <span class="fs-5 fw-semi-bold text-secondary">Happy Clients</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Banner Start -->
    <div class="container-fluid banner my-5 py-5" id="produk" data-parallax="scroll" data-image-src="{{ asset('landing/img/rumput.jfif') }}">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-4">
                            <img class="img-fluid rounded" src="{{ asset('landing/img/domba1.jfif') }}" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h2 class="text-white mb-3">Domba Superior</h2>
                            <p class="text-white mb-4">Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                            <a class="btn btn-secondary rounded-pill py-2 px-4" href="{{ route('register') }}">Qurban sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-4">
                            <img class="img-fluid rounded" src="{{ asset('landing/img/banner-2.jpg') }}" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h2 class="text-white mb-3">Domba Premium</h2>
                            <p class="text-white mb-4">Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                            <a class="btn btn-secondary rounded-pill py-2 px-4" href="{{ route('register') }}">Qurban Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->


     <!-- Product Start -->
     <div class="container-xxl py-5" id="support">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Cara berqurban</p>
                <h1 class="mb-5">Cara Berqurban Di Sebar Qurban</h1>
            </div>
            <div class="row gx-4">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('landing/img/login.png') }}"alt="">
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="">Daftar atau Login</a>
                            <span class="text-primary me-1">Klik Login Sesuai Dengan Akun Yang Telah Kamu Daftarkan Atau Lakukan Registrasi Dengan Email Mu</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('landing/img/transaksi.png') }}" alt="">
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="">Transaksi</a>
                            <span class="text-primary me-1">Pilih Hewan Qurban Kamu Dan Isi Data Pengkurban</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('landing/img/checkout.png') }}" alt="">
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="">Metode Pembayaran</a>
                            <span class="text-primary me-1">Pilih Metode Pembayaran Yang Sesuai </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('landing/img/sukses.png') }}" alt="">
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="">Selesai</a>
                            <span class="text-primary me-1">Selamat Kamu Telah Menunaikan Ibadah Qurban.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->

    <!-- Gallery Start -->
    <div class="container-xxl py-5 px-0">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Our Gallery</p>
                <h1 class="mb-5">Gallery Penerima Manfaat</h1>
            </div>
        <div class="row g-0">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="{{ asset('landing/img/gallery-5.jpg') }}" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('landing/img/gallery-5.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="{{ asset('landing/img/gallery-1.jpg') }}" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('landing/img/gallery-1.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="{{ asset('landing/img/gallery-2.jpg') }}" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('landing/img/gallery-2.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="{{ asset('landing/img/gallery-6.jpg') }}" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('landing/img/gallery-6.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="{{ asset('landing/img/gallery-7.jpg') }}" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('landing/img/gallery-7.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="{{ asset('landing/img/gallery-3.jpg') }}" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('landing/img/gallery-3.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="{{ asset('landing/img/gallery-4.jpg') }}" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('landing/img/gallery-4.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="{{ asset('landing/img/gallery-8.jpg') }}" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('landing/img/gallery-8.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Testimonial</p>
                <h1 class="mb-5">Apa Kata Mereka Tentang Mahir Farm</h1>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-img">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('landing/img/testimonial-1.jpg') }}" alt="">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('landing/img/testimonial-2.jpg') }}" alt="">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('landing/img/testimonial-3.jpg') }}" alt="">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('landing/img/testimonial-4.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item">
                            <img class="img-fluid mb-3" src="{{ asset('landing/img/testimonial-1.jpg') }}" alt="">
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <h5>Client Name</h5>
                            <span class="text-primary">Profession</span>
                        </div>
                        <div class="testimonial-item">
                            <img class="img-fluid mb-3" src="{{ asset('landing/img/testimonial-2.jpg') }}" alt="">
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <h5>Client Name</h5>
                            <span class="text-primary">Profession</span>
                        </div>
                        <div class="testimonial-item">
                            <img class="img-fluid mb-3" src="{{ asset('landing/img/testimonial-3.jpg') }}" alt="">
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <h5>Client Name</h5>
                            <span class="text-primary">Profession</span>
                        </div>
                        <div class="testimonial-item">
                            <img class="img-fluid mb-3" src="{{ asset('landing/img/testimonial-4.jpg')}}" alt="">
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <h5>Client Name</h5>
                            <span class="text-primary">Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
