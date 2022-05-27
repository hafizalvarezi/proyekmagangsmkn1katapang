<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table = 'Siswa';
    protected $fillable = ['id','nis','nama','jkel','jrs','ttg','bulan','tahun'];
    public $timestamps=false;

    public function Keuangan(){
        return $this->hasMany('App\Models\Keuangan');
    }

}