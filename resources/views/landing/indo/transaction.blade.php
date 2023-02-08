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
                            <form action="{{ route('store') }}" method="post">
                                @csrf
                                <div class="mb-3 text-center">
                                    <img src="{{ $product->image == null ? asset('landing/img/product-3.jpg') : asset($product->image) }}" alt="image" class="img-thumbnail w-25">
                                </div>
                                <div class="mb-3">
                                    <input type="hidden" name="productid" value="{{ $product->id }}">
                                    <label for="exampleFormControlInput1" class="form-label">Product Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" value="{{ $product->name }}" />
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Product Price</label>
                                    <input type="text" name="price" class="form-control price" id="exampleFormControlInput1" readonly value="{{ $product->price }}" />
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                    <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="5" readonly>{{ $product->description }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Qty</label>
                                    <input type="text" name="qty" class="form-control qty" id="exampleFormControlInput1" placeholder="0" />
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Total Price</label>
                                    <input type="text" name="totalprice" class="form-control total" id="exampleFormControlInput1" readonly />
                                </div>

                                <input type="submit" value="Transaction" class="btn btn-primary" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $('.qty').on('keyup', function(){
            var price = $('.price').val();
            var qty = $(this).val();
            var total = (price * qty);

            $('.total').val(total).trigger('change');
        });
    </script>
@endsection
