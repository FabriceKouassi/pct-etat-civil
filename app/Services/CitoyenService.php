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

    public function showUpdateForm($citoyen)
    {
        if (empty($citoyen))
        {
            return redirect()->back()->with('error', 'Citoyen non trouvé');
        }

        $config = [
            'title' => 'Modifier le citoyen',
            'pIndex' => 'citoyens',
            'citoyen' => $citoyen,
        ];

        return view('back.declaration.citoyens.update', $config);
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
            'id.required' => "Citoyen introuvable",
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

        $citoyen = Citoyen::find($request->id);

        if (!$citoyen) {
            return redirect()->back()->with('error', 'Citoyen introuvable');
        }

        $citoyen->update($data);

        return redirect()->back()->with('success', 'Modification effectuée !');
    }

    public function delete($citoyen)
    {
        $citoyen = Citoyen::find($citoyen->id);

        if (!$citoyen) {
            return redirect()->back()->with('error', 'Citoyen introuvable');
        }

        $citoyen->delete();

        return redirect()->back()->with('success', 'Suppression effectuée !');
    }
}
