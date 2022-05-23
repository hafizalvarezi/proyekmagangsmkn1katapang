<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class muridkas extends Model
{
    protected $table = "muridkas";
    protected $primaryKey = "id";
    protected $fillable = ['id','nis','nama','jkel','jrs','ttg','bulan','tahun','keuangan_id'];

    public function keuangan()
    {
        return $this->belongsTo(Keuangan::class);
    }
}
