@extends('home')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Our Products</p>
            <h1 class="mb-5">Our Dairy Products For Healthy Living</h1>
        </div>
        <div class="row gx-4">
            @foreach ($productIndo as $data)
                <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="product-item">
                        <div class="position-relative text-center mt-4">
                            <img class="img-thumbnail w-50" src="{{ $data->image == null ? asset('landing/img/product-3.jpg') : asset($data->image) }}" alt="">
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="">{{ $data->name }}</a>
                            <span class="text-primary me-1">{{ $data->price }}</span><br><br>
                            <a href="{{ route('produk', $data->id) }}" class="btn btn-primary">Buy</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
