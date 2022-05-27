<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $table = 'pembelian';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'uploadgambar_id',
        'nama_pembeli',
        'alamat',
    ];

    public function uploadgambar()
    {
        return $this->belongsTo(Uploadgambar::class);
    }
}
