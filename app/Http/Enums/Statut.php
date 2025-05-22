<?php

namespace App\Http\Enums;

class Statut
{
    public const VIVANT = 'vivant';
    public const DECEDE = 'decede';

    public static function All(): array
    {
        return [
            self::VIVANT,
            self::DECEDE,
        ];
    }
}
