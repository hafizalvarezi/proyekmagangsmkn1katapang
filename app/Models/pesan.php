<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesan extends Model
{
    protected $table = 'pesan';
    protected $fillable = [
        'namleng',
        'kls',
        'email',
        'pesan',
    ];
    public $timestamps=false;
}