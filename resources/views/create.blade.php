<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Create Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1 align="center">Tambah Data Siswa</h1>
    <div class="container" mx-5>
    <form action="{{ route('store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="nis" class="form-label">NIS</label>
        <input type="text" name="nis" class="form-control" id="nis" placeholder="NIS">
    </div>
    <div class="mb-3">
        <label for="nisn" class="form-label">NISN</label>
        <input type="text" name="nisn" class="form-control" id="nisn" placeholder="NISN">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">NAMA</label>
        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap">
    </div>
    <div class="mb-3">
        <label for="kelas" class="form-label">KELAS</label>
        <input type="text" name="kelas" class="form-control" id="kelas" placeholder="Kelas">
    </div>
    <div class="mb-3">
        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
        <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin" placeholder="Laki-laki/Perempuan">
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea name="alamat" class="form-control" id="alamat" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="no_hp" class="form-label">No.Hp</label>
        <input type="text" name="no_hp" class="form-control" id="no_hp" placeholder="08**********">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Tambahakan</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>