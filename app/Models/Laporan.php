<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    protected $table = 'laporan';

    protected $fillable = [
        'user_id',
        'mentor_id',
        'anggota',
        'judul',
        'isi'
    ];

    public function user()
    {
    	return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function users()
    {
    	return $this->belongsTo('App\Models\User', 'mentor_id', 'id');
    }
}
