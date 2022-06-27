<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    protected $table = "Kontak";
    protected $fillable=[
        'id',
        'name',
        'email',
        'phone',
        'subject',
        'message',
    ];
    public $timestamps=true;
}
