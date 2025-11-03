<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id';
    protected $fillable = [
    'nama',
    'nim',
    'email',
    'jurusan',
    'alamat'
    ];
}
