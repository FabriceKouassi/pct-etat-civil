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

    public function citoyensAll()
    {
        $config = [
            'title' => 'Liste de citoyens déclarés',
            'pIndex' => 'citoyens'
        ];

        return view('back.declaration.citoyens.all', $config);
    }
}
