<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('judul')</title>
</head>
<body>
    <a href="/">Dashboard</a>
    <a href="/tambah">Tambah Data</a>
    <a href="/tampil">Tampil Data</a>
    <a href="/hapus">Hapus Data</a>
    <a href="/perbarui">Perbarui</a>
    @yield('isi')
</body>
</html>