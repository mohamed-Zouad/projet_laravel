<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\Employe;

class EmployesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
        public function run()
        {
            // Récupérer les IDs de services existants
            $serviceIds = Service::pluck('id')->toArray();
    
            // Sélectionner 10 employés au hasard
            $employes = Employe::inRandomOrder()->take(10)->get();
    
            // Mettre à jour le service_id de chaque employé sélectionné
            foreach ($employes as $employe) {
                $employe->service_id = $serviceIds[array_rand($serviceIds)];
                $employe->save();
            }
        }
}
