<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;
use App\Mail\VerificationCodeMail;
use Illuminate\Http\JsonResponse;

class RegisterController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */

     public function register(Request $request): JsonResponse
     {
         $request->validate([
             'name' => ['required', 'string', 'max:255'],
             'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
             'password' => ['required', 'string', 'max:255'], 
         ]);
     
         // Créer l'utilisateur
         $user = User::create([
             'name' => $request->name,
             'email' => $request->email,
             'password' => Hash::make($request->password),
         ]);
     
         // Génération du code de vérification
         $verificationCode = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);
     
         // Enregistrement du code de vérification
         $user->verification_code = $verificationCode;
         $user->save();
         
         Mail::to($user->email)->send(new VerificationCodeMail($verificationCode));
     
         Auth::login($user);
     
         return response()->json([
             'message' => 'Utilisateur créé avec succès',
         ], 201); // 201 Created
     }     

}
?>