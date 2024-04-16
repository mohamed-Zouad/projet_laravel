<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;
class UpdateEmployeeSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
$faker = Factory::create();
for ($i = 0; $i < 10; $i++) {
$nbrEnfants = $faker->numberBetween(0, 5);
$email = $faker->email;
DB::table('employes')->where('id', $i + 1)->update([
'nbr_enfants' => $nbrEnfants,
'email' => $email,
]);
}
}
}