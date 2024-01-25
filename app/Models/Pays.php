<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    use HasFactory;

    /**
     * Les attributs qui sont mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
        'nom_anglais',
        // Ajoutez d'autres champs si nécessaire
    ];

    /**
     * Relation avec le modèle Deplacement.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function deplacements()
    {
        return $this->hasMany(Deplacement::class);
    }

    /**
     * Relation avec le modèle ActeSante (si applicable).
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function actesSante()
    {
        return $this->belongsToMany(ActeSante::class);
    }

}
