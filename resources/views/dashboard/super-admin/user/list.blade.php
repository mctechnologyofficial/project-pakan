@extends('dashboard.app')

@section('content')
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card info-card">
                    <div class="card-title text-end px-4 pb-0 pt-4">
                        <a href="{{ route('user-create') }}" class="btn btn-outline-success">+ Add new user</a>
                    </div>
                    <div class="card-body pt-4 pb-0">
                        <table class="table table-bordered table-hover">
                            <thead class="table-dark">
                                <th>#</th>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Email</th>
                                <th>Country</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($user as $key => $data)
                                    <tr>
                                        <td valign="middle">{{ $key + 1 }}</td>
                                        <td valign="middle">{{ $data->name }}</td>
                                        <td valign="middle">{{ $data->roles->first()->name }}</td>
                                        <td valign="middle">{{ $data->email }}</td>
                                        <td valign="middle">{{ $data->country }}</td>
                                        <td valign="middle" class="d-grid gap-2">
                                            <form action="{{ route('user-destroy', $data->id) }}" method="post" class="d-grid">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-outline-danger btn-block">Delete</button>
                                            </form>
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
