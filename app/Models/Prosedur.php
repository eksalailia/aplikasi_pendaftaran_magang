<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prosedur extends Model
{
    use HasFactory;

    public $table = "prosedur";
    protected $fillable = [
        'judul', 'isi', 'foto'];
}
