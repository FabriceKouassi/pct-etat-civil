<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Naissance;
use App\Services\NaissanceService;
use Illuminate\Http\Request;

class NaissanceController extends Controller
{
    protected $naissanceService;

    public function __construct(NaissanceService $naissanceService)
    {
        $this->naissanceService = $naissanceService;
    }

    public function all()
    {
        return $this->naissanceService->all();
    }

    public function showCreateForm()
    {
        return $this->naissanceService->showCreateForm();
    }

    public function saveForm(Request $request)
    {
        return $this->naissanceService->saveForm($request);
    }

    public function showUpdateForm(Naissance $naissance)
    {
        return $this->naissanceService->showUpdateForm($naissance);
    }

    public function updateForm(Request $request)
    {
        return $this->naissanceService->updateForm($request);
    }

    public function delete(Naissance $naissance)
    {
        return $this->naissanceService->delete($naissance);
    }
}
