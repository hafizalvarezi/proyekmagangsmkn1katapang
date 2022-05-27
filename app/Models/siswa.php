<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class siswa extends Model
{
    protected $table = 'murid';
    protected $primaryKey = "id";
    protected $fillable = ['id','nis','nama','jkel','jrs','ttg','bulan','tahun'];
    protected $timestamp=false;

    public function keuangan()
    {   
        return $this->hasMany('App\Models\Keuangan');
    }
}
