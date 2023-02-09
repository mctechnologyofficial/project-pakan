@extends('dashboard.app')

@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card info-card">
                    <div class="card-body pt-4 pb-0">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <th class="w-25">#</th>
                                <th class="w-25">Transaction ID</th>
                                <th class="w-25">File</th>
                                <th class="w-50">Action</th>
                            </thead>
                            <tbody>
                                @foreach ($invoice as $key => $data)
                                    <tr>
                                        <td valign="middle">{{ $key + 1 }}</td>
                                        <td valign="middle">{{ $data->transaction_id }}</td>
                                        <td valign="middle" class="text-center">
                                            <img class="img-fluid w-50" src="{{ asset($data->file) }}" alt="">
                                        </td>
                                        <td valign="middle" class="d-grid">
                                            @if ($data->status == "Waiting to be accepted")
                                                <a href="{{ route('proofpayment.show', $data->id) }}" class="btn btn-outline-info">Edit</a>
                                            @elseif ($data->status == "Rejected")
                                                <a href="javascript:void(0)" class="btn btn-outline-danger">Rejected</a>
                                            @else
                                                <a href="javascript:void(0)" class="btn btn-outline-success">Accepted</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
