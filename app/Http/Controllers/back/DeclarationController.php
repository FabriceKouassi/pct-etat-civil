<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Citoyen;
use App\Services\CitoyenService;
use Illuminate\Http\Request;

class DeclarationController extends Controller
{
    protected $citoyenService;

    public function __construct(CitoyenService $citoyenService)
    {
        $this->citoyenService = $citoyenService;
    }

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
        return $this->citoyenService->all();
    }

    public function citoyenShowCreateForm()
    {
        return $this->citoyenService->showCreateForm();
    }

    public function citoyenSaveForm(Request $request)
    {
        return $this->citoyenService->saveForm($request);
    }

    public function citoyenShowUpdateForm(Citoyen $citoyen)
    {
        return $this->citoyenService->showUpdateForm($citoyen);
    }

    public function citoyenUpdateForm(Request $request)
    {
        return $this->citoyenService->updateForm($request);
    }

    public function citoyenDelete(Citoyen $citoyen)
    {
        return $this->citoyenService->delete($citoyen);
    }
}
