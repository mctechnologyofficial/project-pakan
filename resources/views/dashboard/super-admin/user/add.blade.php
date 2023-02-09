@extends('dashboard.app')

@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card info-card">
                    <div class="card-body pt-4 pb-0">
                        <form action="{{ route('user-store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="exampleFormControlTextarea1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                                <input type="text" name="password" class="form-control" id="exampleFormControlTextarea1">
                            </div>
                            <div class="mb-5">
                                <label for="exampleFormControlTextarea1" class="form-label">Country</label>
                                <select class="form-control" name="country" id="exampleFormControlTextarea1">
                                    <option value="" selected disabled>Choose country</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                </select>
                            </div>

                            <input type="submit" value="Save" class="btn btn-outline-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
