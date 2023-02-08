@extends('home')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Our Products</p>
            <h1 class="mb-5">Our Dairy Products For Healthy Living</h1>
        </div>
        @foreach ($transaction as $data)
        <div class="row gx-4 my-4">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-2 text-center">
                                <img src="{{ $data->image == null ? asset('landing/img/product-3.jpg') : asset($data->image) }}" alt="image" class="img-thumbnail w-100">
                            </div>

                            <div class="col-lg-8">
                                <div class="my-5">
                                    <h3>{{ $data->name }}</h3>
                                    <h5>{{ $data->total_price }}</h5>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="position-absolute top-0 end-0 my-3">
                                    @if ($data->status == "Paid")
                                        <span class="badge bg-success mx-3">{{ $data->status }}</span>
                                    @elseif ($data->status == "Unpaid")
                                        <span class="badge bg-danger mx-3">{{ $data->status }}</span>
                                    @endif
                                </div>
                                <div class="position-absolute bottom-0 end-0 my-3">
                                    <a href="{{ route('transaction.detailinvoice', $data->id) }}" class="mx-3 btn btn-info">Show</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
