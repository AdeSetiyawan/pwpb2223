<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('namamu')</title>
    <style>
        .navbar {
            color : black;
            padding: 10px;
        }
        .navbar a{
            color:black;
            border:solid 2px black;
            border-radius: 50px 0px 50px 0px;
            padding: 5px 20px 5px 20px;
            text-decoration: none;
        }
        .navbar a:hover{
            background-color: blue;
            color: yellow;
            border: solid 2px blue;
        }
        .navbar a:active{
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <div class="banner" >banner</div>
    <div class="navbar">
        <a href="{{ url('/') }}">Dashboard</a>
        <a href="{{ url('/tambah') }}">Tambah Data Barang</a> 
        <a href="{{ url('/tampil') }}">Tampil Data Barang</a> 
        <a href="{{ url('/hapus') }}">Hapus Data Barang</a>
        <a href="{{ url('/perbaharui') }}">Perbaharui Data Barang</a>
    </div>

    <div class="sidebar">Sidebar</div>
    <div class="isi">@yield('isi')</div>
    <div class="footer">copyright &copy 2023 Maryoko</div>
</body>
</html>