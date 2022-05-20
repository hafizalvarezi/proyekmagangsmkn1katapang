<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class murid extends Model
{
    protected $table = 'akunsiswa';
     protected $fillable = [
         'nama',
         'email',
         'pass',
    ];
    protected $guarded = [];
    public $timestamps=false;
}
