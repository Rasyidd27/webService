<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemilik extends Model
{
    use HasFactory;
    protected $table = 'pemilik';

    protected $fillable = [
        'id',
        'nm_pemilik',
        'tgl_lahir',
        'alamat',
        'nik',
        'no_hp'
    ];
}
