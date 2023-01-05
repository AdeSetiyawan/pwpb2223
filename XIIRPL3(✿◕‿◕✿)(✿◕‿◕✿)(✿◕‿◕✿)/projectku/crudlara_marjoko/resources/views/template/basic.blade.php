<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('judul')</title>
    <style>
        /* simbol ( . ) adalah class  */
        /* simbol ( # ) adalah id  */
        .container {
            display : grid;
            grid-template-columns:200px 500px ;
            grid-template-rows:auto;
            grid-template-areas:
                "banner banner"
                "navbar navbar"
                "sidebar contentutama"
                "footer footer"
            ;
        }
        .banner {
            grid-area:banner;
            border:solid 2px black;
        }
        .navbar{
            grid-area:navbar;
            border:solid 2px blue;
        }
        .sidebar{
            grid-area:sidebar;
            border:solid 2px red;
        }
        .contentutama{
            grid-area:contentutama;
            border:solid 2px yellow;
        }
        .footer{
            grid-area:footer;
            border:solid 2px whitesmoke;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="banner">
            Diisi gambar banner
        </div>
        <div class="navbar">
           ini diisi link menu
        </div>
        <div class="sidebar">
            @yield('sidebar')
        </div>
        <div class="contentutama">
            @yield('contentutama')
        </div>
        <div class="footer">
            Copyright &copy 2022 Marjoko
        </div>
    </div>
</body>
</html>