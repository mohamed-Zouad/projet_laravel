<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Competence extends Model
{
use HasFactory;
protected $fillable = ['nom_competence'];
public function employes()
{
return $this->belongsToMany(Employe::class, 'employe_competence')->withPivot('niveau'); // Spécifiez les colonnes supplémentaires de la table pivot
}
}