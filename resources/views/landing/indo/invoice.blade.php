@extends('home')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Our Products</p>
            <h1 class="mb-5">Our Dairy Products For Healthy Living</h1>
        </div>
        <div class="row gx-4">
            <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="product-item">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ asset('landing/img/product-1.jpg') }}" alt="">
                    </div>
                    <div class="text-center p-4">
                       <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Product</th>
                                    <th>Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $transaksi as $data )
                                    <tr>
                                        <td>{{ Auth::user()->name }}</td>
                                        <td>{{ $transaksi->name }}</td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                       </table>
                       <button type="submit" class="btn btn-primary">Pay</button>
                    </div>
                </div>
            </div>
@endsection
