<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna2';
    protected $fillable = ['nama', 'jenis_kelamin', 'tanggal_lahir', 'alamat'];
}
