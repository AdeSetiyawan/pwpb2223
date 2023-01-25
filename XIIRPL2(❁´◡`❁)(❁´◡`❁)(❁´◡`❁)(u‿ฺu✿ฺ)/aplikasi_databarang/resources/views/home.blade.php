<h1 align="center">
    Selamat Datang di Beranda Data Barang PT Maju Mundur Rugi ra Rugi
</h1>
<hr>
<p align="center">
    Ini adalah sistem informasi data barang PT Maju Mundur Rugi Ra Rugi. Silahkan gunakan sebaik-baiknya.
</p>
<hr>
<p align="right">
    <i>Admin</i>
</p>

<form action="{{url('/send')}}" method="post">
    @csrf
    <input type="text" name="namaUkuran" id="">
    <input type="text" name="lebarDada" id="">
    <input type="text" name="tinggiBadan" id="">
    <input type="text" name="keterangan" id="">
    <button type="submit">SIMPAN</button>
</form>

<?php
    foreach ($barang as $brg){
        echo $brg->namaUkuran;
        
        echo "--- <a href='".url('/hapus/'.$brg->id.'')."'>Hapus</a>";
        echo "<br>";
    }

?>