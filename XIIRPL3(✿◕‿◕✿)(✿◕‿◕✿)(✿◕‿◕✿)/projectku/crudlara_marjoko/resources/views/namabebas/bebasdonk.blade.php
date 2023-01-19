<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('namamu')</title>
</head>
<body>
    <!-- basic url -   {{ url ('/') }} -->
    <a href="{{ url ('/') }}">Dashboard</a> | 
    <a href="{{ url ('/tambah') }}">Tambah Data Barang</a>
    <hr>
    <!-- isinya  -->
    @yield('isi')
    <hr>
    copyright &copy 2023 Design By Michel
    
</body>
</html>