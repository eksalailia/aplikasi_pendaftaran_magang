<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $table = 'profile';
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'no_tlp',
        'email',
        'foto'
    ];
}
