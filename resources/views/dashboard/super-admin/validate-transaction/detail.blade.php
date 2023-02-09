@extends('dashboard.app')

@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card info-card">
                    <div class="card-body pt-4 pb-0">
                        <form action="{{ route('proofpayment.update', $payment->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Transaction ID</label>
                                <input type="text" name="transactionid" class="form-control" id="exampleFormControlInput1" readonly value="{{ $payment->id }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Image</label><br>
                                <img id="exampleFormControlInput1" src="{{ asset($payment->file) }}" class="img-thumbnail w-50" alt="">
                            </div>

                            <input type="submit" name="btnaccept" value="Accept" class="btn btn-outline-success">
                            <input type="submit" name="btnreject" value="Reject" class="btn btn-outline-danger">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
