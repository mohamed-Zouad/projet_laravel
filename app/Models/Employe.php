<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    protected $fillable = [
        'nom',
        'ville',
        'date_naiss',
        'email',
        'salaire',
        'motorise',
        ];
        protected $casts = [
        'motorise' => 'boolean',
        ];
        // Fonction pour obtenir le salaire réel (avec les primes, etc.)Modèles, migration et seeders en Laravel- M. TAIS – DD2 web
        public function getSalaireReelAttribute()
        {
        // Calcul du salaire réel (à implémenter selon votre logique métier)
        return $this->salaire + 100; // Exemple simple, à remplacer par votre logique
        }
        // Relation avec d'autres modèles (optionnel)
        // ...

        /**
* Get the service that owns the employe.
*/
public function service()
{
return $this->belongsTo(Service::class);
}
public function competences()
{
return $this->belongsToMany(Competence::class, 'employe_competence')->withPivot('niveau'); // Spécifiez les colonnes supplémentaires de la table pivot
}
        }

        

