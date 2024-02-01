<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActeSante extends Model
{
    use HasFactory;

    // Nom de la table associée au modèle
    protected $table = 'actes_sante';

    // Champs de la table que vous pouvez remplir
    protected $fillable = [
        'nom',
        'description',
        'prix',
        'pays_id',
        // autres champs que vous voulez rendre mass assignable
    ];

    // Champs à cacher lors de la conversion en JSON
    protected $hidden = [
        // champs à cacher
    ];

    // Champs à convertir en types natifs
    protected $casts = [
        'created_at' => 'datetime', // exemple
        // autres conversions de champs si nécessaire
    ];

    /**
     * Relation avec le modèle Pays (si vous avez une table pays)
     */
    public function pays()
    {
        return $this->belongsTo(Pays::class);
    }

    /**
     * Un accesseur pour obtenir une valeur formatée (exemple)
     */
    public function getPrixFormateAttribute()
    {
        return number_format($this->prix, 2) . ' €';
    }


    // Autres méthodes du modèle
    // public function uneMethode()
    // {
    //     // logique de la méthode
    // }
}
