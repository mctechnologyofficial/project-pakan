@extends('home')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Our Products</p>
            <h1 class="mb-5">Our Dairy Products For Healthy Living</h1>
        </div>
        <div class="row gx-4">
            <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="product-item">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('landing/img/product-3.jpg') }}" alt="">
                    </div>
                    <div class="text-center p-4">
                        <a class="d-block h5" href="">Dairy Products</a>
                        <span class="text-primary me-1">$19.00</span><br><br>
                        <button type="submit" class="btn btn-primary">Buy!</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="product-item">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('landing/img/product-4.jpg') }}" alt="">
                    </div>
                    <div class="text-center p-4">
                        <a class="d-block h5" href="">Organic Food</a>
                        <span class="text-primary me-1">$19.00</span><br><br>
                        <button type="submit" class="btn btn-primary">Buy!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
