<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table = 'murid';
    protected $primaryKey = "id";
    protected $fillable = ['id','nis','nama','jkel','jrs','ttg','bulan','tahun','keuangan_id'];
    protected $timestamp=false;

    public function keuangan()
    {   
        return $this->belongsTo(Keuangan::class);
    }
}
