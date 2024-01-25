<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommandation extends Model
{
    use HasFactory;

    /**
     * Les attributs qui sont mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'contenu',
        'pays_id',
        // Ajoutez d'autres champs si nécessaire
    ];

    public function pays()
    {
        return $this->belongsTo(Pays::class);
    }

    // Ajoutez d'autres méthodes ou relations si nécessaire
}
