<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    // Fonction pour la connexion
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Récupérer l'utilisateur authentifié
            $user = Auth::user();

            // Vérifier si l'utilisateur est un administrateur
            $isAdmin = $user->is_admin == 1;

            // Réponse avec le statut d'administrateur
            return response()->json([
                'message' => 'Connexion réussie',
                'id' => $user->id,
                'is_admin' => $isAdmin
            ], 200);
        } else {
            return response()->json(['message' => 'Les informations fournies ne correspondent pas à nos enregistrements.'], 401);
        }
    }
    
}
?>