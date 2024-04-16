<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up()
{
Schema::create('services', function (Blueprint $table) {
$table->id();
$table->string('nom_service');
// Ajoutez d'autres colonnes si nécessaire
$table->timestamps(); // Ajoute les colonnes created_at et updated_at automatiquement
});
}
/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
Schema::dropIfExists('services');
}
};