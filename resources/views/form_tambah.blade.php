<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    @extends ('layouts.app')
</head>
<body>
    @section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Siswa</h3>
            </div>
            <div class="card-body">
                <a href="{{ route('siswa.index') }}" class="btn btn-primary">Kembali</a>
                <form action="{{ route('siswa.store') }}" method="POST">
                    @csrf
                    <ul class="list-group">
                        Nama <input type="text" name="nama" required>
                        NIS <input type="text" name="nis" required>
                        Tanggal Lahir <input type="date" name="tgl_lahir" required>
                    </ul>
                    <input type="submit" value="Simpan Data" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>
