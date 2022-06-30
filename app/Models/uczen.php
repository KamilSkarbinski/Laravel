<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class uczen extends Model
{
    protected $fillable=[
        'imie',
        'nazwisko',
        'nr_pesel'
    ];
    use HasFactory;
}
