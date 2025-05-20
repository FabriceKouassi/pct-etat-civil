<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citoyen extends Model
{
    use HasFactory;
    protected $table = 'citoyens';

    protected $fillable = [
        'nom',
        'prenoms',
        'sexe',
        'date_naissance',
        'lieu_naissance',
    ];
}
