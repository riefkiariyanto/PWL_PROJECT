@extends('template.layout')

@section('title')
    Pesanan
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
            <a class="p-2 text-light" href="/buying">DAFTAR PEMBELIAN</a>
            <a class="p-2 text-light" href="/order_service">PESAN JADWAL</a>
        </nav>
        <a href="/logout"><button type="button" class="btn btn-outline-danger">Logout</button></a>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center mb-5 mt-5 border-bottom">
        <h1 class="display-4">DETAIL PESANAN</h1>
        <h5>Klik tombol PDF untuk mendownload kartu.</h5>
    </div>

    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="col-md-12" style="justify-content: space-between !important;" align="center">
                <div class="col-md-6" style="justify-content: space-between !important;">
                    <table class="table" id="data_payment">
                        <thead>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach($sparepart as $value_sparepart)
                                <tr>
                                    <th scope="row">Nama :</th>
                                    <td>{{$value_sparepart->name}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">No. Telp :</th>
                                    <td>{{$value_sparepart->no_telp}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Barang :</th>
                                    <td>{{$value_sparepart->object}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Jumlah Pembelian :</th>
                                    <td>{{$value_sparepart->amount}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Deskripsi :</th>
                                    <td>{{$value_sparepart->description}}</td>
                                </tr>
                                <tr>
                                    <th scope="row"></th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">CATATAN :</th>
                                    <td>Bawa pada saat ke bengkel</td>
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
