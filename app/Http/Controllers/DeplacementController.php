<?php
namespace App\Http\Controllers;

use App\Models\Deplacement;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class DeplacementController extends Controller
{
    public function index(): JsonResponse
    {
        $deplacements = Deplacement::all();
        return response()->json($deplacements);
    }

    public function show($id): JsonResponse
    {
        $deplacement = Deplacement::findOrFail($id);
        return response()->json($deplacement);
    }

    public function showAll():JsonResponse
    {
        $deplacement = Deplacement::all();
        return response()->json($deplacement);
    }

    public function update(Request $request, $id): JsonResponse
    {
        $validatedData = $request->validate([
            // Validez et définissez vos champs ici
            'user_id' => 'required|exists:users,id',
            'pays_id' => 'required|exists:pays,id',
            'pays_id2' => 'required|exists:pays,id',
            'empreinte_co2' => 'required|numeric',
        ]);

        $deplacement = Deplacement::findOrFail($id);
        $deplacement->update($validatedData);
        return response()->json(['message' => 'Déplacement mis à jour avec succès.', 'deplacement' => $deplacement]);
    }

    public function destroy($id): JsonResponse
    {
        $deplacement = Deplacement::findOrFail($id);
        $deplacement->delete();
        return response()->json(['message' => 'Déplacement supprimé avec succès.']);
    }

    public function store(Request $request): JsonResponse
    {
        $validatedData = $request->validate([
            // Validez et définissez vos champs ici
            'user_id' => 'required|exists:users,id',
            'pays_id' => 'required|exists:pays,id',
            'pays_id2' => 'required|exists:pays,id',
            'empreinte_co2' => 'required|numeric',
        ]);

        $deplacement = Deplacement::create($validatedData);
        return response()->json(['message' => 'Déplacement créé avec succès.', 'deplacement' => $deplacement], 201);
    }

    public function store2(Request $request): JsonResponse
    {
        $validatedData = $request->validate([
            'nom' => 'required|max:255',
            'description' => 'nullable',
            'prix' => 'required|numeric',
            'pays_id' => 'required|exists:pays,id',
        ]);

        $acteSante = ActeSante::create($validatedData);

        return response()->json(['message' => 'Acte de Santé ajouté avec succès.', 'acteSante' => $acteSante], 201);
    }
}
