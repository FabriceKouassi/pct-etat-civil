<?php

namespace App\Services;

class AuthService
{
    public function showForm()
    {
        $params = [
            'title' => 'Authentification',
            'pIndex' => 'authentification',
        ];

        return view('front.auth.index', $params);
    }

    public function restore()
    {
        $params = [
            'title' => 'Restaurer le mot de passe',
            'pIndex' => 'restore',
        ];

        return view('front.auth.restorePassword', $params);
    }
}
