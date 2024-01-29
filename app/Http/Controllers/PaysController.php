<?php
namespace App\Http\Controllers;

use App\Models\Pays;
use Illuminate\Http\Request;
use App\Models\ActeSante;
use Illuminate\Http\JsonResponse;

class PaysController extends Controller
{
    public function index(): JsonResponse
    {
        $pays = Pays::all();
        return response()->json($pays);
    }

    public function store(Request $request): JsonResponse
    {
        $validatedData = $request->validate([
            'nom' => 'required|unique:pays|max:255',
            'nom_anglais' => 'required|unique:pays|max:255',
        ]);

        $pays = Pays::create($validatedData);

        return response()->json(['message' => 'Pays ajouté avec succès.', 'pays' => $pays], 201);
    }

    public function show():JsonResponse
    {
        $pays = Pays::all();
        return response()->json($pays);
    }

    public function showPaysById($id): JsonResponse
    {
        $pays = Pays::findOrFail($id);
        return response()->json($pays);
    }

    public function showAllCountriesByName(): JsonResponse
    {
        $pays = Pays::all();
        $countryNames = $pays->pluck('nom');
        
        return response()->json($countryNames);
    }

    public function showCountryByEnglishName($name): JsonResponse
    {
        $pays = Pays::where('nom', $name)->first(); 

        if (!$pays) {

            return response()->json(['error' => 'Pays non trouvé'], 404);
        }

        return response()->json(['nom_anglais' => $pays->nom_anglais,'id' => $pays->id]);
    }

    public function update(Request $request, $id): JsonResponse
    {
        $validatedData = $request->validate([
            'nom' => 'required|unique:pays,nom,' . $id . '|max:255',
            'nom_anglais' => 'required|unique:pays,nom_anglais,' . $id . '|max:255',
        ]);

        $pay = Pays::findOrFail($id);
        $pay->update($validatedData);

        return response()->json(['message' => 'Pays mis à jour avec succès.', 'pays' => $pay]);
    }

    public function destroy($id): JsonResponse
    {
        $pays = Pays::findOrFail($id);
        $pays->delete();

        return response()->json(['message' => 'Pays supprimé avec succès.']);
    }
}
