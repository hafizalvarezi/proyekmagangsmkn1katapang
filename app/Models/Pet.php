<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $fillable = ['jenis', 'harga', 'deskripsi', 'foto'];
}