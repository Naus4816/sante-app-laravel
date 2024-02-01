<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Mail\VerificationCodeMail;

class PasswordController extends Controller
{
    public function newPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email', // Ajout de la validation de l'email
            'password' => 'required|string|min:6',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json(['message' => 'Utilisateur non trouvé.'], 404);
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return response()->json(['message' => 'Mot de passe mis à jour avec succès.']);
    }

    public function sendResetCode(Request $request)
    {
        // Valider la requête, par exemple s'assurer que l'email est présent et valide
        $validatedData = $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        // Récupérer l'utilisateur par son email
        $user = User::where('email', $validatedData['email'])->first();

        // Génération du code de vérification
        $resetCode = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);

        // Enregistrement du code de vérification
        $user->reset_code = $resetCode;
        $user->save();

        // Envoi du mail
        Mail::to($user->email)->send(new VerificationCodeMail($resetCode));

        // Réponse de l'API
        return response()->json([
            'message' => 'Le code a bien été envoyé.',
        ]);
    }

    public function verifyResetCode(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'reset_code' => 'required|numeric',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && $user->reset_code == $request->reset_code) {
            $user->reset_code = null;
            $user->save();

            return response()->json([
                'message' => 'Code de réinitialisation vérifié et supprimé avec succès',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Code de réinitialisation invalide',
            ], 401);
        }
    }
}
?>
