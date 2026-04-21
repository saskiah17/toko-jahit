<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">➕ Tambah Data Jahitan</h2>

    <form action="/jahitan" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nama Pelanggan</label>
            <input type="text" name="nama_pelanggan" class="form-control">
        </div>

        <div class="mb-3">
            <label>Jenis Jahitan</label>
            <input type="text" name="jenis_jahitan" class="form-control">
        </div>

        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control">
        </div>

        <button class="btn btn-success">Simpan</button>
        <a href="/jahitan" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>