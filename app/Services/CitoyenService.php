<?php
namespace App\Services;

use App\Models\Citoyen;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class CitoyenService
{
    public function all()
    {
        $citoyens = Citoyen::query()->oldest('nom')->get();
        $config = [
            'title' => 'Liste de citoyens déclarés',
            'pIndex' => 'citoyens',
            'citoyens' => $citoyens,
        ];

        return view('back.declaration.citoyens.all', $config);
    }

    public function showCreateForm()
    {
        $config = [
            'title' => 'Créer un citoyen',
            'pIndex' => 'citoyens'
        ];

        return view('back.declaration.citoyens.create', $config);
    }

    public function saveForm($request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'prenoms' => 'required',
            'date_naissance' => 'required',
            'lieu_naissance' => 'required',
            // 'img' => 'required|mimes:png,jpg|size:2048'
        ], [
            'nom.required' => "Le nom est obligatoire",
            'prenoms.required' => "Le prenoms est obligatoire",
            'date_naissance.required' => "La description obligatoire",
            'img.required' => "L'image est obligatoire",
            'img.mimes' => "L'image doit etre de format PNG ou JPG",
            'img.size' => "L'image ne doit pas exédé 2048 Mo",
        ]);

        if ($validator->fails()) {
            $firstErrorMessage = $validator->errors()->first();
            toastr()->error($firstErrorMessage);

            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $request->all();

        $citoyen = Citoyen::query()->create($data);

        if ($citoyen instanceof Model) {
            return redirect()->back()->with('success', 'Enregistrement effectué !');
        }

        return redirect()->back()->with('error', 'Erreur d\'enregistrement');
    }
}
