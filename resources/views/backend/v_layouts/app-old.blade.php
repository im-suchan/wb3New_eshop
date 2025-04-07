<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Toko Online</title>
=======
    <title>tokoonline</title>
>>>>>>> 565bb27 (First commit)
</head>

<body>
    <a href="{{ route('backend.beranda') }}">Beranda</a> |
    <a href="#">User</a> |
<<<<<<< HEAD
    <a href="#">Keluar</a>
=======
    <a href="" onclick="event.preventDefault(); document.getElementById('keluar-app').submit();">Keluar</a>
>>>>>>> 565bb27 (First commit)
    <p></p>
    <!-- @yieldAwal -->
    @yield('content')
    <!-- @yieldAkhir-->
<<<<<<< HEAD

    <!-- Keluar APP -->
    <form id="keluar-app" action="{{ route('backend.logout') }}" method="POST" class="d-none">
    @csrf
    </form>
    <!-- KeluarApp end -->
</body>

</html>
=======
    <!-- keluarApp -->
    <form id="keluar-app" action="{{ route('backend.logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <!-- keluarAppEnd -->
</body>

</html>
>>>>>>> 565bb27 (First commit)
