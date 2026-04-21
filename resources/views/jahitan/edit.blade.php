<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">✏️ Edit Data</h2>

    <form action="/jahitan/{{ $data->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Pelanggan</label>
            <input type="text" name="nama_pelanggan" value="{{ $data->nama_pelanggan }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Jenis Jahitan</label>
            <input type="text" name="jenis_jahitan" value="{{ $data->jenis_jahitan }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga" value="{{ $data->harga }}" class="form-control">
        </div>

        <button class="btn btn-primary">Update</button>
        <a href="/jahitan" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>