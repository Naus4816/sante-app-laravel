<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationCodeMail;
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

            //Vérifier si l'utilisateur a un compte validé ou non
            $emailVerifiedAt = $user->email_verified_at != null;

            // Réponse avec le statut d'administrateur
            return response()->json([
                'message' => 'Connexion réussie',
                'id' => $user->id,
                'is_admin' => $isAdmin,
                'email_verified_at' => $emailVerifiedAt
            ], 200);
        } else {
            return response()->json(['message' => 'Les informations fournies ne correspondent pas à nos enregistrements.'], 401);
        }
    }
    
    public function verifyCode(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'verification_code' => 'required|numeric',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && $user->verification_code == $request->verification_code) {
            $user->email_verified_at = now();
            $user->verification_code = null; 
            $user->save();

            return response()->json([
                'message' => 'E-mail vérifié avec succès',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Code de vérification invalide',
            ], 401);
        }
    }

    public function resendVerificationCode(Request $request)
    {
        // Valider la requête, par exemple s'assurer que l'email est présent et valide
        $validatedData = $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        // Récupérer l'utilisateur par son email
        $user = User::where('email', $validatedData['email'])->first();

        // Génération du code de vérification
        $verificationCode = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);

        // Enregistrement du code de vérification
        $user->verification_code = $verificationCode;
        $user->save();

        // Envoi du mail
        Mail::to($user->email)->send(new VerificationCodeMail($verificationCode));

        // Réponse de l'API
        return response()->json([
            'message' => 'Verification code resent successfully.',
        ]);
    }
    
}
?>