<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ActeSante;
use App\Models\Pays;
use App\Models\Recommandation;
use App\Models\Deplacement;
use Illuminate\Http\JsonResponse;

class AdminController extends Controller
{
    /**
     * Affiche les statistiques de la page d'administration.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        $nombreUtilisateurs = User::count();
        $nombreActesSante = ActeSante::count();
        $nombrePays = Pays::count();
        $nombreRecommandations = Recommandation::count();
        $nombreDeplacements = Deplacement::count();

        $statistiques = [
            'nombreUtilisateurs' => $nombreUtilisateurs,
            'nombreActesSante' => $nombreActesSante,
            'nombrePays' => $nombrePays,
            'nombreRecommandations' => $nombreRecommandations,
            'nombreDeplacements' => $nombreDeplacements,
        ];

        return response()->json($statistiques);
    }

    // Autres méthodes si nécessaire
}
