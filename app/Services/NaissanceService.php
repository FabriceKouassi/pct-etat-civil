<?php

namespace App\Services;

use App\Models\Citoyen;
use App\Models\Naissance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class NaissanceService
{
    public function all()
    {
        $naissance = Naissance::query()->with(['naissance_pere', 'naissance_mere', 'naissance_enfant'])->latest()->get();
        $config = [
            'title' => 'Liste de naissance déclarés',
            'pIndex' => 'naissance',
            'naissance' => $naissance,
        ];

        return view('back.declaration.naissance.all', $config);
    }

    public function showCreateForm()
    {
        $citoyens = Citoyen::query()->latest('nom')->get();
        $config = [
            'title' => 'Déclarer une naissance',
            'pIndex' => 'naissance',
            'citoyens' => $citoyens,
        ];

        return view('back.declaration.naissance.create', $config);
    }

    public function saveForm($request)
    {
        $validator = Validator::make($request->all(), [
            'pere_id' => 'required|numeric',
            'mere_id' => 'required|numeric',
            'nom' => 'required',
            'prenoms' => 'required',
            'date_naissance' => 'required',
            'lieu_naissance' => 'required',
            // 'img' => 'required|mimes:png,jpg|size:2048' //2Mo
        ], [
            'pere_id.required' => "Selectionner le père",
            'pere_id.numeric' => "Père sélectionné est invalide",
            'mere_id.required' => "Selectionner la mère",
            'mere_id.numeric' => "Mère sélectionnée est invalide",
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

        $data = $request->except(['pere_id', 'mere_id']);

        $citoyen = Citoyen::query()->create($data);

        $enfant_id = $citoyen->id;

        $data2 = $request->except(['nom', 'prenoms', 'date_naissance', 'lieu_naissance', 'sexe']);

        $data2['enfant_id'] = $citoyen->id;

        $naissance = Naissance::query()->create($data2);

        if ($naissance instanceof Model) {
            return redirect()->back()->with('success', 'Enregistrement effectué !');
        }

        return redirect()->back()->with('error', 'Erreur d\'enregistrement');
    }

    public function showUpdateForm($naissance)
    {
        if (empty($naissance))
        {
            return redirect()->back()->with('error', 'naissance non trouvé');
        }

        $config = [
            'title' => 'Modifier le naissance',
            'pIndex' => 'naissance',
            'naissance' => $naissance,
        ];

        return view('back.declaration.naissance.update', $config);
    }

    public function updateForm($request)
    {
        $validator = Validator::make($request->except(['_token', '_method']), [
            'id' => 'required|numeric',
            'nom' => 'sometimes',
            'prenoms' => 'sometimes',
            'date_naissance' => 'sometimes',
            'lieu_naissance' => 'sometimes',
            // 'img' => 'required|mimes:png,jpg|size:2048'
        ], [
            'id.required' => "naissance introuvable",
            'id.numeric' => "Donnée non numérique",
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

        $data = $request->except(['_token', '_method']);

        $naissance = Naissance::find($request->id);

        if (!$naissance) {
            return redirect()->back()->with('error', 'naissance introuvable');
        }

        $naissance->update($data);

        return redirect()->back()->with('success', 'Modification effectuée !');
    }

    public function delete($naissance)
    {
        $naissance = Naissance::find($naissance->id);

        if (!$naissance) {
            return redirect()->back()->with('error', 'naissance introuvable');
        }

        $naissance->delete();

        return redirect()->back()->with('success', 'Suppression effectuée !');
    }
}
