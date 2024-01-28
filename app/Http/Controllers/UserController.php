<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function index(): JsonResponse
    {
        $users = User::all();
        return response()->json($users);
    }

    public function store(Request $request): JsonResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            // Ajouter d'autres champs de validation si nécessaire
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        
        $user = User::create($validatedData);
        return response()->json(['message' => 'Utilisateur créé avec succès.'], 201);
    }

    public function showAll():JsonResponse
    {
        $user = User::all();
        return response()->json($user);
    }

    public function show($id): JsonResponse
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function update(Request $request, $id): JsonResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            // Ajouter une validation pour le mot de passe si nécessaire
        ]);

        $user = User::findOrFail($id);

        if (!empty($request->password)) {
            $validatedData['password'] = Hash::make($request->password);
        }

        $user->update($validatedData);

        return response()->json(['message' => 'Utilisateur mis à jour avec succès.', 'user' => $user]);
    }

    public function destroy($id): JsonResponse
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json(['message' => 'Utilisateur supprimé avec succès.']);
    }
}
