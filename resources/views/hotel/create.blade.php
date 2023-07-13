<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1 class="mt-4">Create hotel</h1>

    <form method="POST" action="{{ route('hotel.store') }}">
        @csrf

        <div class="mb-3">
            <label for="nama" class="form-label">Name:</label>
            <input type="text" name="nama_hotel" id="nama_hotel" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat:</label>
            <input type="text" name="alamat" id="alamat" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Telepon:</label>
            <input type="text" name="telepon" id="telepon" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Hotel</button>
    </form>
</div>

</body>
</html>
