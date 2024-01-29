<?php

namespace App\Http\Controllers;

use App\Models\ActeSante;
use Illuminate\Http\Request;
use App\Models\Pays;
use Illuminate\Http\JsonResponse;

class ActeSanteController extends Controller
{
    public function index(): JsonResponse
    {
        $actesSante = ActeSante::all();
        return response()->json($actesSante);
    }

    public function store(Request $request): JsonResponse
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

    public function showActeSanteById($id): JsonResponse
    {
        $acteSante = ActeSante::findOrFail($id);
        return response()->json($acteSante);
    }

    public function show():JsonResponse
    {
        $actesSantes = ActeSante::all();
        return response()->json($actesSantes);
    }
    
    public function showByCountryName($countryName): JsonResponse
    {
        $pays = Pays::where('nom', $countryName)->first();

        if (!$pays) {
            return response()->json(['message' => 'Pays non trouvé'], 404);
        }

        $actesSante = ActeSante::where('pays_id', $pays->id)->get();

        return response()->json(['pays_id' => $pays->id, 'actesSante' => $actesSante]);
    }

    public function update(Request $request, $id): JsonResponse
    {
        $validatedData = $request->validate([
            'nom' => 'required|max:255',
            'description' => 'required',
            'prix' => 'required|numeric',
            'pays_id' => 'required|exists:pays,id',
        ]);

        $acteSante = ActeSante::findOrFail($id);
        $acteSante->update($validatedData);

        return response()->json(['message' => 'Acte de Santé mis à jour avec succès.', 'acteSante' => $acteSante]);
    }

    public function destroy($id): JsonResponse
    {
        $acteSante = ActeSante::findOrFail($id);
        $acteSante->delete();

        return response()->json(['message' => 'Acte de Santé supprimé avec succès.']);
    }
}
?>