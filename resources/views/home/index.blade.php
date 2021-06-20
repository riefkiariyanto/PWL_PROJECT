@extends('template.layout')

@section('title')
    Home Page
@endsection

@section('content')
<body class="body-homepage">
    <img class="bg-homepage" src="/img/Background-Homepage.svg" alt="">

    <div class="main-homepage" align="center">
        <nav>
            <ul class="nav-name-logo">
                <li>S.Mot</li>
            </ul>

            <ul class="nav-name-menu">
                <li>HOME</li>
                <li>SERVIS</li>
                <li>DAFTAR ANTRIAN</li>
                <li>PESAN JADWAL</li>
            </ul>
        </nav>

        <h1>MOTORCYCLE REPAIR SERVICE</h1>
        <h2>Service Motor Terpercaya No 1 Di Indonesia</h2>

        <h3>Jam Buka Bengkel</h3>

        <div class="place-jadwal" align="center">
            <p>Senin-Kamis : 09.00-22.00 WIB</p>
            <p>Senin-Kamis : 09.00-22.00 WIB</p>
        </div>

        <h2>Jadwalkan motor Anda untuk diservis sekarang juga.</h2>

        <button>
            JADWAL
        </button>
    </div>
</body>
@endsection
