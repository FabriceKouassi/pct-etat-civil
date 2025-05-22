<?php

namespace App\Models;

use App\Http\Helpers\CodeGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Naissance extends Model
{
    use HasFactory;
    protected $table = 'naissances';
    protected $fillable = [
        'code',
        'pere_id',
        'mere_id',
        'enfant_id',
    ];

    public function naissance_pere():BelongsTo
    {
        return $this->belongsTo(Citoyen::class, 'pere_id');
    }
    public function naissance_mere():BelongsTo
    {
        return $this->belongsTo(Citoyen::class, 'mere_id');
    }
    public function naissance_enfant():BelongsTo
    {
        return $this->belongsTo(Citoyen::class, 'enfant_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($citoyen) {
            if (empty($citoyen->code)) {
                $citoyen->code = CodeGenerator::genererCodeCitoyen('EXT', 'naissances');
            }
        });
    }
}
