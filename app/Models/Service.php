<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Service extends Model
{
protected $fillable = ['nom_service'];
use HasFactory;
public function employes()
{
return $this->hasMany(Employe::class);
}
}