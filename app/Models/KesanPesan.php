<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KesanPesan extends Model
{
    use HasFactory;
    protected $table = 'kesanpesan';
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'instansi',
        'isi'
    ];
}
