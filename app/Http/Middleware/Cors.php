<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Autorise les origines spécifiques à accéder à l'API (remplacez les étoiles par les origines autorisées)
        $response->header('Access-Control-Allow-Origin', '*');

        // Autorise les méthodes HTTP spécifiques
        $response->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');

        // Autorise les en-têtes HTTP spécifiques
        $response->header('Access-Control-Allow-Headers', 'Content-Type, Authorization');

        // Autorise les cookies à être envoyés depuis le frontend (si nécessaire)
        $response->header('Access-Control-Allow-Credentials', 'true');

        // Définit la durée de validité de la réponse CORS en secondes (86400 = 24 heures)
        $response->header('Access-Control-Max-Age', '86400');

        return $response;
    }
}
