<html>
<head>
    <title>Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Daftar Hotel</h1>
        <a href="{{ route('kamar.create') }}" class="btn btn-primary mb-3">Tambah Hotel</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama Hotel</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kamars as $kamar)
                    <tr>
                        <td>{{ $kamar->nama_kamar }}</td>
                        <td>{{ $kamar->alamat }}</td>
                        <td>{{ $kamar->telepon }}</td>
                        <td>
                            <a href="{{ route('kamar.show', $kamar->kamar_id) }}" class="btn btn-primary">Lihat</a>
                            <a href="{{ route('kamar.edit', $kamar->kamar_id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('kamar.destroy', $kamar->kamar_id) }}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kamar ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
