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
Schema::table('employes', function (Blueprint $table) {
// Renommer la colonne date_naissance
$table->renameColumn('date_naissance', 'date_naiss');
// Ajouter la colonne nbr_enfants
$table->integer('nbr_enfants')->nullable();
// Ajouter la colonne email
$table->string('email')->unique()->nullable();
});
}
public function down()
{
Schema::table('employes', function (Blueprint $table) {
// Renommer la colonne date_naiss
$table->renameColumn('date_naiss', 'date_naissance');
// Supprimer la colonne nbr_enfants
$table->dropColumn('nbr_enfants');
// Supprimer la colonne email
$table->dropColumn('email');
});
}
};