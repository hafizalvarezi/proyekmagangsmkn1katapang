<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadGambar extends Model
{
    protected $table = "UploadGambar";
    protected $primaryKey = "id";
    protected $fillable = ['id','gambar','nuptk','nama','mapel',];
}
