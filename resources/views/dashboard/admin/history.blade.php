@extends('dashboard.app')

@section('content')
<section class="section dashboard">
    <div class="row">
        <div class="col-lg-12">
            <div class="card info-card">
                <div class="card-body pt-4 pb-0">
                    <table class="table table-bordered table-hover">
                        <thead class="table-dark">
                            <th class="w-25">#</th>
                            <th class="w-25">User Name</th>
                            <th class="w-25">Admin Name</th>
                            <th class="w-25">Image</th>
                        </thead>
                        <tbody>
                            @foreach ($report as $key => $data)
                                <tr>
                                    <td valign="middle">{{ $key + 1 }}</td>
                                    <td valign="middle">{{ $data->name }}</td>
                                    <td valign="middle">{{ $data->admin_name }}</td>
                                    <td valign="middle">
                                        <img src="{{ asset($data->image ) }}" alt="image" class="img-thumbnail w-100" srcset="">
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
