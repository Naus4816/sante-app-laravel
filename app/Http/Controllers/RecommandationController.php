<?php

namespace App\Http\Controllers;

use App\Models\Recommandation;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use  App\Models\Pays;


class RecommandationController extends Controller
{
    public function index(): JsonResponse
    {
        $recommandations = Recommandation::all();
        return response()->json($recommandations);
    }

    public function store(Request $request): JsonResponse
    {
        $validatedData = $request->validate([
            'contenu' => 'required',
            'pays_id' => 'required',
            // Autres champs si nécessaire
        ]);

        $recommandation = Recommandation::create($validatedData);
        return response()->json(['message' => 'Recommandation créée avec succès.', 'recommandation' => $recommandation], 201);
    }

    public function show():JsonResponse
    {
        $recommandation = Recommandation::all();
        return response()->json($recommandation);
    }

    public function showRecommandationById($id): JsonResponse
    {
        $recommandation = Recommandation::findOrFail($id);
        return response()->json($recommandation);
    }

    public function showByCountryId($id): JsonResponse
    {
        $pays = Pays::where('id', $id)->first();

        if (!$pays) {
            return response()->json(['message' => 'Pays non trouvé'], 404);
        }

        $recommandation = Recommandation::where('pays_id', $pays->id)->get();

        return response()->json(['recommandations' => $recommandation]);
    }

    public function update(Request $request, $id): JsonResponse
    {
        $validatedData = $request->validate([
            'contenu' => 'required|max:255',
            'pays_id' => 'required',
            // Autres champs si nécessaire
        ]);

        $recommandation = Recommandation::findOrFail($id);
        $recommandation->update($validatedData);
        return response()->json(['message' => 'Recommandation mise à jour avec succès.', 'recommandation' => $recommandation]);
    }

    public function destroy($id): JsonResponse
    {
        $recommandation = Recommandation::findOrFail($id);
        $recommandation->delete();
        return response()->json(['message' => 'Recommandation supprimée avec succès.']);
    }
}
