<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(){
//
// Initialiser Faker
$faker = Faker::create('fr_FR');
// Boucle pour insérer 10 lignes
for ($i = 0; $i < 10; $i++) {
DB::table('services')->insert([
'nom_service' => $faker->jobTitle,
'created_at' => now(),
'updated_at' => now(),
]);
}
}
}
