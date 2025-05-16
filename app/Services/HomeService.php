<?php

namespace App\Services;

class HomeService
{
    public function home()
    {
        $config = [
            'title' => 'Plateforme Numérique d\'État Civil - Côte d\'Ivoire',
            'pIndex' => 'home'
        ];

        return view('front.home', $config);
    }
}
