<?php

namespace App\Http\Helpers;

use Illuminate\Support\Facades\DB;

class CodeGenerator
{
    public static function genererCodeCitoyen(string $prefix, $table)
    {
        $annee = date('Y');

        $dernierCode = DB::table($table)
            ->where('code', 'like', "$prefix-$annee-%")
            ->orderByDesc('code')
            ->value('code');

        if ($dernierCode) {
            $lastNumber = (int)substr($dernierCode, -6);
            $newNumber = str_pad($lastNumber + 1, 6, '0', STR_PAD_LEFT);
        } else {
            $newNumber = '000001';
        }

        return "$prefix-$annee-$newNumber";
    }
}
