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
        'menu_id',
        'nama_pembeli',
        'alamat',
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
