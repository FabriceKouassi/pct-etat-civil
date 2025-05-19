<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Services\AuthService;

class AuthController extends Controller
{
    protected $authService;
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function index()
    {
        return $this->authService->showForm();
    }

    public function restore()
    {
        return $this->authService->restore();
    }


}
