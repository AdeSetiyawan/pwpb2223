<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_jualbarang extends Model
{
    use HasFactory;

    protected $fillable =['namaUkuran','lebarDada','tinggiBadan','keterangan'];
    // agar field dapat diisi
}
