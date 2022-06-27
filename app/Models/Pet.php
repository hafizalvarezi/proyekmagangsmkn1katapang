<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $table = "Pet";
    protected $fillable=[
        'jenis',
        'harga',
        'deskripsi',
        'foto',
    ];
    public $timestamps=true;
}
