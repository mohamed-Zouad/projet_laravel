<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
    Schema::create('employe_competence', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('employe_id');
    $table->unsignedBigInteger('competence_id');
    $table->string('niveau'); // Champ supplémentaire
    $table->timestamps();
    $table->foreign('employe_id')->references('id')->on('employes')->onDelete('cascade');
    $table->foreign('competence_id')->references('id')->on('competences')->onDelete('cascade');
    $table->unique(['employe_id', 'competence_id']); // Pour s'assurer qu'une paire employe_id et competence_id est unique
    });
    }
    /**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
Schema::dropIfExists('employe_competence');
}
};
