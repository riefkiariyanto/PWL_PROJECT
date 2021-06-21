@extends('template.layout')

@section('title')
    Form Service
@endsection

@section('content')
<body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 border-bottom shadow-sm fixed-top" style="background-color: #151515;">
        <h5 class="my-0 mr-md-auto font-weight-normal text-light title-logo">S.Mot</h5>
        <nav class="my-2 my-md-0 mr-md-3 menu-select">
            <a class="p-2 text-light" href="/main">HOME</a>
            <a class="p-2 text-light" href="/service?product=Rem">SERVIS</a>
            <a class="p-2 text-light" href="/order">DAFTAR ANTRIAN</a>
            <a class="p-2 text-light menu-select-active" href="/order_service">PESAN JADWAL</a>
        </nav>
        <a href="/logout"><button type="button" class="btn btn-outline-danger">Logout</button></a>
    </div>

    <div id="myCarousel" class=" slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/Image-4.svg" alt="" style="height: 300px; width: 100%; object-fit: cover;">

                <div class="container">
                    <div class="carousel-caption text-center">
                        <h1 class="text-yellow">JADWAL SERVIS</h1>
                        <p>Jadwal dan pesan waktu service Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="col-md-12 shadow-sm" style="justify-content: space-between !important; margin-top: -2%; background-color: #FFF; border-radius: 6px; text-align: center !important;">
                <h1 class="mt-3">FORM PENJADWALAN</h1>

                <form action="input_order_service" method="post">

                    @if(Session::get('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif

                    @if(Session::get('fail'))
                        <div class="alert alert-danger">
                            {{Session::get('fail')}}
                        </div>
                    @endif

                    @csrf
                    <input type="text" name="name" class="form-control mt-3" placeholder="Nama Lengkap">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control mt-3" placeholder="Email">
                        </div>

                        <div class="col-md-6">
                            <input type="text" name="telp" class="form-control mt-3" placeholder="No. Telpon">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="date" name="date" class="form-control mt-3" placeholder="Tanggal">
                        </div>

                        <div class="col-md-6">
                            <input type="time" name="time" class="form-control mt-3" placeholder="Waktu">
                        </div>
                    </div>
                    <input type="number" name="year" class="form-control mt-3" placeholder="Tahun Motor">
                    <input type="text" name="merk" class="form-control mt-3" placeholder="Merk Motor">
                    <input type="text" name="model" class="form-control mt-3" placeholder="Model Motor">
                    <select name="category" class="form-control mt-3" id="">
                        <option value="">Pilih Kategori Servis</option>
                        @foreach($category as $value_category)
                        <option value="{{$value_category->category}}">{{$value_category->category}}</option>
                        @endforeach
                    </select>
                    <input type="text" name="product" class="form-control mt-3" placeholder="Pilih Produk Servis">

                    <textarea name="desc" id="" cols="10" rows="5" class="form-control mt-3" placeholder="Deskripsi Tambahan"></textarea>

                    <input type="submit" value="Pesan" class="btn-yellow mt-4 mb-5">
                </form>
            </div>
        </div>

    </div>
</body>
@endsection
