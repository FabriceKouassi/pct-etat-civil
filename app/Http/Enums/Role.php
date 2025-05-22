<?php

namespace App\Http\Enums;

class Role
{
    public const ADMIN = 'admin';
    public const VISITOR = 'visiteur';

    public static function All(): array
    {
        return [
            self::ADMIN,
            self::VISITOR,
        ];
    }
}
