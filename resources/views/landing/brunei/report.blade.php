@extends('home')

@section('content')
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Gallery</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Gallery Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Gallery</p>
            <h1 class="mb-5">Galery Pengiriman Brunei</h1>
        </div>
        <div class="row g-0">
            <div class="col-lg-12">
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <th class="w-25">#</th>
                        <th class="w-25">Admin name</th>
                        <th class="w-50">Image</th>
                    </thead>
                    <tbody>
                        @foreach ($report as $key => $item)
                            <tr>
                                <td valign="middle">{{ $key + 1 }}</td>
                                <td valign="middle">{{ $item->admin_name }}</td>
                                <td valign="middle" align="center">
                                    <img src="{{ asset($item->image) }}" class="img-thumbnail w-75" alt="">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
