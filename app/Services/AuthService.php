<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthService
{
    public function showForm()
    {
        $params = [
            'title' => 'Authentification',
            'pIndex' => 'authentification',
        ];

        return view('front.auth.index', $params);
    }

    public function register($request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:3|confirmed',
        ], [
            'name.required' => "Le nom est obligatoire",
            'email.required' => "L'email est obligatoire",
            'email.email' => 'Adresse email requis',
            'email.unique' => 'Email déjà utilisé',
            'password.required' => 'Mot de passe obligatoire',
            'password.min' => 'le mot de passe dois contenir 3 caractères minimums',
            'password.confirmed' => 'Mot de passe non identique',
        ]);

        if ($validator->fails()) {
            $firstErrorMessage = $validator->errors()->first();
            toastr()->error($firstErrorMessage);

            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        if ($user instanceof Model) {

            return redirect()->route('admin.dashboard')->with('success', 'Inscription réussie !');
        }

        return redirect()->back()->with('error', 'Erreur d\'enregistrement');
    }

    public function login($request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => "L'email est obligatoire",
            'email.email' => 'Adresse email requis',
            'password.required' => 'Mot de passe obligatoire',
        ]);

        if ($validator->fails()) {
            $firstErrorMessage = $validator->errors()->first();
            toastr()->error($firstErrorMessage);

            return redirect()->back()->withErrors($validator)->withInput();
        }

        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password], $request->filled('remember'))) {
            $request->session()->regenerate();
            toastr()->success('Connexion réussie !');
            return redirect()->intended('admin_space/dashboard');
        }

        toastr()->error('Email ou mot de passe incorrect');
        return back();
    }

    // Gérer la déconnexion
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Déconnexion réussie.');
    }

    public function restore()
    {
        $params = [
            'title' => 'Restaurer le mot de passe',
            'pIndex' => 'restore',
        ];

        return view('front.auth.restorePassword', $params);
    }
}
