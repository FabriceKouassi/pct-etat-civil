<?php

namespace App\Models;

use App\Http\Helpers\CodeGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function naissances_pere(): HasMany
    {
        return $this->hasMany(Naissance::class, 'pere_id');
    }

    public function naissances_mere(): HasMany
    {
        return $this->hasMany(Naissance::class, 'mere_id');
    }

    public function naissances_enfant(): HasMany
    {
        return $this->hasMany(Naissance::class, 'enfant_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($citoyen) {
            if (empty($citoyen->code)) {
                $citoyen->code = CodeGenerator::genererCodeCitoyen('CIT', 'citoyens');
            }
        });
    }
}
