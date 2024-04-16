<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class RemoveNbrEnfantsColumn extends Migration
{
/**
* Exécuter les migrations.
*
* @return void
*/
public function up()
{
Schema::table('employes', function (Blueprint $table) {
$table->dropColumn('nbr_enfants');
});
}
/**
* Annuler les migrations.
*
* @return void
*/
public function down()
{
Schema::table('employes', function (Blueprint $table) {
$table->integer('nbr_enfants')->after('email');
});
}
}