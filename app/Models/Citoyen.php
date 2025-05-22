<?php

namespace App\Models;

use App\Http\Helpers\CodeGenerator;
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

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($citoyen) {
            if (empty($citoyen->code)) {
                $citoyen->code = CodeGenerator::genererCodeCitoyen();
            }
        });
    }
}
