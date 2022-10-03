<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    use HasFactory;
    protected $table = 'bidang';
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'keterangan'
    ];

    public function pendaftaran()
{
    return $this->hasOne(Pendaftaran::class);
}
}
