@extends('template.layout')

@section('title')
    List Order
@endsection

@section('content')
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 border-bottom shadow-sm fixed-top" style="background-color: #151515;">
        <h5 class="my-0 mr-md-auto font-weight-normal text-light title-logo">S.Mot</h5>
        <nav class="my-2 my-md-0 mr-md-3 menu-select">
            <a class="p-2 text-light" href="/add_product">TAMBAH LAYANAN</a>
            <a class="p-2 text-light menu-select-active" href="/list">DAFTAR ANTRIAN</a>
        </nav>
        <a href="/logout"><button type="button" class="btn btn-outline-danger">Logout</button></a>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center mb-5 mt-5 border-bottom">
        <h1 class="display-4">DAFTAR ANTRIAN</h1>
        <h5>Lihat daftar antrian Anda. Pastikan datang tepat waktu :)</h5>
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
                            <th scope="col">Servis</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order as $value_order)
                                <tr>
                                    <th scope="row">{{$value_order->id_order}}</th>
                                    <td>{{$value_order->name}}</td>
                                    <td>{{$value_order->category_service}}</td>
                                    <td>{{$value_order->date}}</td>
                                    <td>{{$value_order->time}}</td>
                                    <td>
                                        <a href="/delete?id={{$value_order->id_order}}">
                                            <button class="btn btn-danger pt-1 pb-1" style="font-size: 10px;">
                                                Hapus
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
