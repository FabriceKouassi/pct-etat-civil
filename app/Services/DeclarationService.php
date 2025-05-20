<?php

namespace App\Services;

class DeclarationService
{
    public function index()
    {
        $config = [
            'title' => 'Déclarations',
            'pIndex' => 'declaration'
        ];

        return view('back.declaration.index', $config);
    }
}
