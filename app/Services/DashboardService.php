<?php

namespace App\Services;

class DashboardService
{
    public function home()
    {
        $config = [
            'title' => 'Tableau de bord',
            'pIndex' => 'dashboard'
        ];

        return view('back.dashboard', $config);
    }
}
