<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Services\DashboardService;

class DashboadrController extends Controller
{
    protected $dashboardService;

    public function __construct(DashboardService $dashboardService)
    {
        $this->dashboardService = $dashboardService;
    }

    public function index()
    {
        return $this->dashboardService->home();
    }
}
