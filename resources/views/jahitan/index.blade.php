<!DOCTYPE html>
<html>
<head>
    <title>Toko Jahit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">🧵 Data Toko Jahit</h2>

    <a href="/jahitan/create" class="btn btn-primary mb-3">+ Tambah Data</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Nama</th>
                <th>Jenis Jahitan</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $d)
            <tr>
                <td>{{ $d->nama_pelanggan }}</td>
                <td>{{ $d->jenis_jahitan }}</td>
                <td>Rp {{ number_format($d->harga) }}</td>
                <td>
                    <a href="/jahitan/{{ $d->id }}/edit" class="btn btn-warning btn-sm">Edit</a>

                    <form action="/jahitan/{{ $d->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>