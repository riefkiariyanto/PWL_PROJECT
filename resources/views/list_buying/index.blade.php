@extends('template.layout')

@section('title')
    List Buying Sparepart
@endsection

@section('content')
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 border-bottom shadow-sm fixed-top" style="background-color: #151515;">
        <h5 class="my-0 mr-md-auto font-weight-normal text-light title-logo">S.Mot</h5>
        <nav class="my-2 my-md-0 mr-md-3 menu-select">
            <a class="p-2 text-light" href="/main">HOME</a>
            <a class="p-2 text-light" href="/service?product=Rem">SERVIS</a>
            <a class="p-2 text-light" href="/buy_sparepart">BELI SPAREPART</a>
            <a class="p-2 text-light" href="/order">DAFTAR ANTRIAN</a>
            <a class="p-2 text-light menu-select-active" href="/buying">DAFTAR PEMBELIAN</a>
            <a class="p-2 text-light" href="/order_service">PESAN JADWAL</a>
        </nav>
        <a href="/logout"><button type="button" class="btn btn-outline-danger">Logout</button></a>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center mb-5 mt-5 border-bottom">
        <h1 class="display-4">DAFTAR PEMBELI</h1>
        <h5>Lihat list pembelian anda, dan download PDF dan tunjukan ke bengkel.</h5>
    </div>

    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="col-md-12" style="justify-content: space-between !important;">
                <div class="row">
                    <table class="table">
                        <thead class="thead-yellow">
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Customer</th>
                            <th scope="col">Barang</th>
                            <th scope="col">Jumlah Barang</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sparepart as $value_sparepart)
                                <tr>
                                    <th scope="row">{{$value_sparepart->id_sparepart}}</th>
                                    <td>{{$value_sparepart->name}}</td>
                                    <td>{{$value_sparepart->object}}</td>
                                    <td>{{$value_sparepart->amount}}</td>
                                    <td>{{$value_sparepart->description}}</td>
                                    <td>
                                        <a href="/details?id={{$value_sparepart->id_sparepart}}">
                                            <button class="btn btn-dark pt-1 pb-1" style="font-size: 10px;">
                                                Detail Pembelian
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</body>
@endsection
