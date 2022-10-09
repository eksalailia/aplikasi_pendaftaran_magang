<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $table = 'pendaftaran';
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'bidang_id',
        'tahun_akademik',
        'jurusan',
        'durasi',
        'peserta1',
        'peserta2',
        'peserta3',
        'resume',
        'proposal',
        'status'
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
