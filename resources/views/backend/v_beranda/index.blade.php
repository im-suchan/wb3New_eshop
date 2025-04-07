@extends('backend.v_layouts.app')
@section('content')
<<<<<<< HEAD
<!-- contentAwal -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body border-top">
                <h5 class="card-title"> {{$judul}}</h5>
=======
    <!-- contentAwal -->
    <div class="col-12">
        <div class="card">
            <div class="card-body border-top">
                <h5 class="card-title"> {{ $judul }}</h5>
>>>>>>> 565bb27 (First commit)
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading"> Selamat Datang, {{ Auth::user()->nama }}</h4>
                    Aplikasi Toko Online dengan hak akses yang anda miliki sebagai
                    <b>
<<<<<<< HEAD
                        @if (Auth::user()->role ==1)
                        Super Admin
                        @elseif(Auth::user()->role ==0)
                        Admin
=======
                        @if (Auth::user()->role == 1)
                            Super Admin
                        @elseif(Auth::user()->role == 0)
                            Admin
>>>>>>> 565bb27 (First commit)
                        @endif
                    </b>
                    ini adalah halaman utama dari aplikasi Web Programming. Studi Kasus
                    Toko Online.
                    <hr>
                    <p class="mb-0">Kuliah..? BSI Aja !!!</p>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
</div>
<!-- contentAkhir -->
@endsection
=======
    </div>

    <!-- contentAkhir -->
@endsection
>>>>>>> 565bb27 (First commit)
