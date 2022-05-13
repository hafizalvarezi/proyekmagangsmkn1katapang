<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table = 'murid';
    protected $fillable = [
        'nis',
        'nama',
        'askol',
        'jkel',
        'jrs',
        'ttg',
        'bulan',
        'tahun',
    ];
    public $timestamps=false;
}
