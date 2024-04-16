<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employe;
use App\Models\Competence;
class EmployeCompetenceSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
// Sélectionnez 3 employés et 3 compétences au hasard (vous devrez ajuster cette logique selon vos besoins)
$employes = Employe::inRandomOrder()->take(3)->get();
$competences = Competence::inRandomOrder()->take(3)->get();
// Niveaux à associer avec chaque employé
$niveaux = ['Débutant', 'Débutant', 'Intermédiaire', 'Intermédiaire','Avancé', 'Avancé'];
// Bouclez à travers chaque employé
foreach ($employes as $index => $employe) {
// Sélectionnez la compétence appropriée en fonction de l'index
$competence = $competences[$index];
// Attachez la compétence à l'employé avec le niveau approprié
$employe->competences()->attach($competence, ['niveau' =>
$niveaux[$index]]);
}
}}