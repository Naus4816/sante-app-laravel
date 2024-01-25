<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deplacement extends Model
{
    use HasFactory;

    /**
     * Les attributs qui sont mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'pays_id',
        'pays_id2',
        'empreinte_co2',
        // Ajoutez d'autres champs si nécessaire
    ];

    /**
     * Relation avec le modèle User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relation avec le modèle Pays.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pays()
    {
        return $this->belongsTo(Pays::class);
    }

    // Vous pouvez ajouter d'autres méthodes ou relations si nécessaire
}

