<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    protected $table = "keuangan";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','nis','nama','harga','keterangan'];

    public function muridkas()
    {
        return $this->hasOne(muridkas::class);
    }
}
