@extends('home')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Our Products</p>
            <h1 class="mb-5">Our Dairy Products For Healthy Living</h1>
        </div>
        {{-- @if ($snapToken = Session::get('snapToken'))
            {{ $snapToken }}
        @endif --}}
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
                                    <th>Customer Name</th>
                                    <th>Product</th>
                                    <th>Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ Auth::user()->name }}</td>
                                    <td>{{ $transaksi->customer_name }}</td>
                                    <td>{{ $productIndo->name }}</td>
                                    <td>{{ $transaksi->total_price }}</td>
                                </tr>
                            </tbody>
                       </table>
                       <button id="pay-button" class="btn btn-primary">Pay!</button>
                    </div>
                </div>
            </div>

@endsection
@section('js')
<script>
    // For example trigger on button clicked, or any time you need
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
      // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
      window.snap.pay('{!! Session::get("snapToken") !!}', {
        onSuccess: function(result){
          /* You may add your own implementation here */
          alert("payment success!"); console.log(result);
        },
        onPending: function(result){
          /* You may add your own implementation here */
          alert("wating your payment!"); console.log(result);
        },
        onError: function(result){
          /* You may add your own implementation here */
          alert("payment failed!"); console.log(result);
        },
        onClose: function(){
          /* You may add your own implementation here */
          alert('you closed the popup without finishing the payment');
        }
      })
    });
  </script>
@endsection
