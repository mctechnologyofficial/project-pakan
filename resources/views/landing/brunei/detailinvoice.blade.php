@extends('home')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Our Products</p>
            <h1 class="mb-5">Our Dairy Products For Healthy Living</h1>
        </div>
        <div class="row gx-4">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('transaction.updateinvoice', $transaction->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Transaction ID</label>
                                <input type="text" name="transactionid" class="form-control" id="exampleFormControlInput1" readonly value="{{ $transaction->id }}" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Customer Name</label>
                                <input type="text" name="customer_name" class="form-control" id="exampleFormControlInput1" readonly value="{{ $transaction->customer_name }}" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">User Name</label>
                                <input type="text" name="username" class="form-control" id="exampleFormControlInput1" readonly value="{{ Auth::user()->name }}" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Product Name</label>
                                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" readonly value="{{ $product->name }}" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Product Price</label>
                                <input type="text" name="price" class="form-control price" id="exampleFormControlInput1" readonly value="{{ $product->price }}" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Qty</label>
                                <input type="text" name="qty" class="form-control qty" id="exampleFormControlInput1" placeholder="0" readonly value="{{ $transaction->qty }}" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Total Price</label>
                                <input type="text" name="totalprice" class="form-control total" id="exampleFormControlInput1" readonly value="{{ $transaction->total_price }}" />
                            </div>
                            @if ($transaction->status == "Unpaid")
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Proof of Payment</label>
                                    <input class="form-control" type="file" name="image" id="formFile" accept="image/*">
                                </div>
                                <input type="submit" value="Upload" class="btn btn-primary">
                            @else
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Proof of Payment</label>
                                    <input class="form-control" type="file" name="image" id="formFile" accept="image/*" disabled />
                                </div>
                                <input type="submit" value="Upload" class="btn btn-primary" disabled>
                            @endif

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
