@extends('template.layout')

@section('title')
    Product Service
@endsection

@section('content')
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 border-bottom shadow-sm fixed-top" style="background-color: #151515;">
        <h5 class="my-0 mr-md-auto font-weight-normal text-light title-logo">S.Mot</h5>
        <nav class="my-2 my-md-0 mr-md-3 menu-select">
            <a class="p-2 text-light" href="/main">HOME</a>
            <a class="p-2 text-light menu-select-active" href="/service?product=Rem">SERVIS</a>
            <a class="p-2 text-light" href="/buy_sparepart">BELI SPAREPART</a>
            <a class="p-2 text-light" href="/order">DAFTAR ANTRIAN</a>
            <a class="p-2 text-light" href="/buying">DAFTAR PEMBELIAN</a>
            <a class="p-2 text-light" href="/order_service">PESAN JADWAL</a>
        </nav>
        <a href="/logout"><button type="button" class="btn btn-outline-danger">Logout</button></a>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center mb-5 mt-5 border-bottom">
        <h1 class="display-4">PRODUK SERVIS</h1>
        <h5>Pilih jenis layanan anda</h5>
    </div>

    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="col-md-12" style="justify-content: space-between !important;">
                <div class="row">
                    <div class="col-md-3 text-left">
                    @foreach($category as $value_category)
                        @if($param == $value_category->category)
                        <a class="left-menu-category text-yellow" href="?product={{$value_category->category}}">{{$value_category->category}}</a></br>
                        @else
                        <a class="left-menu-category" href="?product={{$value_category->category}}">{{$value_category->category}}</a></br>
                        @endif
                    @endforeach
                    </div>
                    <div class="col-md-9 shadow rounded-lg">
                        <div class="row text-left">
                        @foreach($service as $value_service)
                            <div class="col-md-4 p-3">
                                <div class="service-place" style="background-image: url('/storage/app/public/img/1.jpg');">
                                <img src="/storage/app/public/img/1.jpg" alt="">
                                    <h1 class="price-service"><strong>Rp. {{$value_service->price}}</strong></h1>
                                    <h1 class="title-service text-truncate"><strong>{{$value_service->service_name}}</strong></h1>
                                    <h1 class="desc-service text-break mt-3"><strong>{{$value_service->description}}</strong></h1>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
