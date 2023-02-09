@extends('home')

@section('content')
    <div class="container">
        <div class="card">
            <form action="" method="post">
                @csrf
                <select class="form-select" name="reportid" aria-label="Default select example">
                    <option disabled selected>Open this select menu</option>
                    @foreach ($report as $r)
                        <option value="{{ $r->user->id }}">{{ $r->user->name }}</option>
                    @endforeach
                </select>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name Admin</label>
                    <input type="text" name="name_admin" class="form-control price" id="exampleFormControlInput1" />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Image</label>
                    <input type="file" name="gambar" class="form-control price" id="exampleFormControlInput1" />
                </div>

                <button type="submit" class="btn btn-primary">Transaksi</button>
                {{-- <input type="submit" value="Transaction" class="btn btn-primary" /> --}}
            </form>
        </div>
    </div>
@endsection
