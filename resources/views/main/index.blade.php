@extends('template.layout')

@section('title')
    Home Page
@endsection

@section('content')
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 border-bottom shadow-sm fixed-top" style="background-color: #151515;">
        <h5 class="my-0 mr-md-auto font-weight-normal text-light title-logo">S.Mot</h5>
        <nav class="my-2 my-md-0 mr-md-3 menu-select">
            <a class="p-2 text-light menu-select-active" href="/main">HOME</a>
            <a class="p-2 text-light" href="/service?product=Rem">SERVIS</a>
            <a class="p-2 text-light" href="/buy_sparepart">BELI SPAREPART</a>
            <a class="p-2 text-light" href="/order">DAFTAR ANTRIAN</a>
            <a class="p-2 text-light" href="/buying">DAFTAR PEMBELIAN</a>
            <a class="p-2 text-light" href="/order_service">PESAN JADWAL</a>
        </nav>
        <a href="/logout"><button type="button" class="btn btn-outline-danger">Logout</button></a>
    </div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/Image-1.svg" alt="" style="height: 300px; width: 100%; object-fit: cover;">

            <div class="container">
            <div class="carousel-caption text-left">
                <h1>Example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/Image-2.svg" alt="" style="height: 300px; width: 100%; object-fit: cover;">
            <div class="container">
            <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/Image-3.svg" alt="" style="height: 300px; width: 100%; object-fit: cover;">
            <div class="container">
            <div class="carousel-caption text-right">
                <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
            </div>
        </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center mb-5 mt-5">
        <h1 class="display-4">KATEGORI SERVICE</h1>
    </div>

    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="col-md-12" style="justify-content: space-between !important;">
                <div class="row">
                    @foreach($category as $value_category)
                        <div class="col-md-3" style="cursor: pointer;">
                            <a class="menu-category text-decoration-none" href="/service?product={{$value_category->category}}">
                                <div class="place-menu-category col-md-12 pt-4 pb-3">
                                    <img src="/img/Waste.svg" alt="" style="width: 15%;">
                                    <h3 class="mt-4 text-decoration-none text-bold text-dark">{{$value_category->category}}</h3>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center mb-5 mt-5">
        <h1 class="display-4">TESTIMONIAL</h1>
    </div>

    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="col-md-12" style="justify-content: space-between !important;">
                <div class="row">
                    <div class="col-md-3">
                        <div class="place-menu-category br-yellow col-md-12 pt-1 pb-2">
                            <p class="mt-4 text-decoration-none text-bold text-dark"><strong>"Sangat cepat dan baik pelayanannya."</strong></p>
                            <p class="mt-2 text-decoration-none text-bold text-dark">- Samsul Bahri</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="place-menu-category br-yellow col-md-12 pt-1 pb-2">
                            <p class="mt-4 text-decoration-none text-bold text-dark"><strong>"Sangat cepat dan baik pelayanannya."</strong></p>
                            <p class="mt-2 text-decoration-none text-bold text-dark">- Samsul Bahri</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="place-menu-category br-yellow col-md-12 pt-1 pb-2">
                            <p class="mt-4 text-decoration-none text-bold text-dark"><strong>"Sangat cepat dan baik pelayanannya."</strong></p>
                            <p class="mt-2 text-decoration-none text-bold text-dark">- Samsul Bahri</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="place-menu-category br-yellow col-md-12 pt-1 pb-2">
                            <p class="mt-4 text-decoration-none text-bold text-dark"><strong>"Sangat cepat dan baik pelayanannya."</strong></p>
                            <p class="mt-2 text-decoration-none text-bold text-dark">- Samsul Bahri</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center mb-5 mt-5">
        <h1 class="display-4">TESTIMONIAL</h1>
    </div>

    <div class="map-place" style="display: flex;">
        <img src="/img/Map.svg" alt="" style="border-top-right-radius: 6px; border-bottom-right-radius: 6px;">
        <div class="desc-place-map shadow-sm">
            <h1>KUNJUNGI BENGKEL KAMI :</h1>
            <h3>Jl. Raya Terusan Wisnuwardana Blok 23A Madyopuro, Kedungkandang, Kota Malang</h3>
            <h3 class="mt-5">Telepone : 0894563218</h3>
            <h3>Email : support@rrservice.com</h3>
        </div>
    </div>
</body>
@endsection
