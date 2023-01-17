<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('jenengku')</title>
    <style>
        *{
            padding: 20px;
            background: #e0e0e0;
        }
        .link{
            text-decoration: none;
            border-radius: 20px;
            background: #e0e0e0;
            margin-right: 10px;
            box-shadow:  -3px 3px 12px #bebebe,
             3px -3px 12px #ffffff;
        }
        .link:hover{

            color: white;

        }
        .link:active{
            background: #e0e0e0;
            color: white;
            box-shadow:inset  -3px 3px 12px #bebebe,
            inset 3px -3px 12px #ffffff;
        }
    </style>
</head>
<body>
    <a class="link" href="{{ url('/') }}">Dashboard</a>
    <a class="link" href="{{ url('/tambah') }}">Tambah Data Barang</a>
    <a class="link" href="{{ url('/lihat') }}">Lihat  Data Barang</a>
    <a class="link" href="{{ url('/hapus') }}">Hapus  Data Barang</a>
    <a class="link" href="{{ url('/perbarui') }}">Perbarui  Data Barang</a>

    @yield('isi')
</body>
</html>