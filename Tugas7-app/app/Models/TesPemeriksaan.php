<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TesPemeriksaan extends Model
{
    use HasFactory;
    protected $table = 'tes_pemeriksaan';
    protected $fillable = ['nama', 'tanggal_pemeriksaan', 'usia', 'jenis_kelamin'];
}
