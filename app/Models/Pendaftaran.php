<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $table = 'pendaftaran';

    protected $fillable = [
        'user_id',
        'bidang_id',
        'email',
        'tahun_akademik',
        'jurusan',
        'durasi',
        'tgl_mulai',
        'tgl_selesai',
        'peserta1',
        'peserta2',
        'peserta3',
        'resume',
        'tanggal',
        'tgl_review',
        'proposal',
        'status',
        'status_aktivasi',
        'tgl_aktivasi'
    ];

    public function user()
    {
    	return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function bidang()
    {
    	return $this->belongsTo('App\Models\Bidang', 'bidang_id', 'id');
    }
}
