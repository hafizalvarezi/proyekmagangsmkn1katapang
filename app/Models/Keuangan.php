<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    protected $table = 'keuangan';
    protected $fillable = ['id','harga','keterangan'];

    public function siswa(){
        return $this->hasOne(Siswa::class);
    }
}
