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
        <a href="{{ route('hotel.create') }}" class="btn btn-primary mb-3">Tambah Hotel</a>
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
                @foreach ($hotels as $hotel)
                    <tr>
                        <td>{{ $hotel->nama_hotel }}</td>
                        <td>{{ $hotel->alamat }}</td>
                        <td>{{ $hotel->telepon }}</td>
                        <td>
                            <a href="{{ route('hotel.show', $hotel->hotel_id) }}" class="btn btn-primary">Lihat</a>
                            <a href="{{ route('hotel.edit', $hotel->hotel_id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('hotel.destroy', $hotel->hotel_id) }}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus hotel ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
