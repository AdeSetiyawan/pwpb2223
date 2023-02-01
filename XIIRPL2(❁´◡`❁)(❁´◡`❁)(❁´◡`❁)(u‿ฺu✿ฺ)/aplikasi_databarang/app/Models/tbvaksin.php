<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbvaksin extends Model
{
    use HasFactory;

    protected $fillable = ['tempatVaksin','jenisVaksin','tanggalVaksin'];

}
