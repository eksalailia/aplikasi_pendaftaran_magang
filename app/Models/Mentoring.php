<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentoring extends Model
{
    use HasFactory;
    protected $table = 'mentoring';
    public $timestamps = true;

    protected $fillable = [
        'id',
        'user_id',
        'mentori_id',
        'anggota',
        'jurusan',
        'semester',
        'universitas'
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
