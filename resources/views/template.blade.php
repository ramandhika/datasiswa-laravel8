<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Data Siswa</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand bg-dark">
        <ul class="nav">
            <li><a href="{{ url('/beranda') }}" class="nav-link text-warning">Home</a></li>
            <li><a href="{{ url('/data-siswa') }}" class="nav-link text-warning">Data Siswa</a></li>
            <li><a href="{{ url('/info-kegiatan') }}" class="nav-link text-warning"> Info Kegiatan</a></li>
        </ul>
    </nav>
        @yield('content')
    <!-- Akhir Navbar -->
    <footer class="fixed-bottom bg-warning">
        <div class="text-center">(c) 2020 Copyright : SMA 404</div>
    </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
</script>

</html>
