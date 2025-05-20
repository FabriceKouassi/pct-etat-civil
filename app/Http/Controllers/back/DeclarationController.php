<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Services\DeclarationService;
use Illuminate\Http\Request;

class DeclarationController extends Controller
{
    protected $declarationService;

    public function __construct(DeclarationService $declarationService)
    {
        $this->declarationService = $declarationService;
    }

    public function index()
    {
        return $this->declarationService->index();
    }

    public function citoyensAll()
    {
        return $this->declarationService->citoyensAll();
    }
}
