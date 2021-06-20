@extends('template.layout')

@section('title')
    List Order
@endsection

@section('content')
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 border-bottom shadow-sm fixed-top" style="background-color: #151515;">
        <h5 class="my-0 mr-md-auto font-weight-normal text-light title-logo">S.Mot</h5>
        <nav class="my-2 my-md-0 mr-md-3 menu-select">
            <a class="p-2 text-light" href="#">HOME</a>
            <a class="p-2 text-light" href="#">SERVIS</a>
            <a class="p-2 text-light menu-select-active" href="#">DAFTAR ANTRIAN</a>
            <a class="p-2 text-light" href="#">PESAN JADWAL</a>
        </nav>
        <a class="btn btn-outline-primary" href="#">Sign up</a>
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
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>@mdo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</body>
@endsection
