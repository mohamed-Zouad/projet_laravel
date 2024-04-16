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
Schema::table('employes', function (Blueprint $table) {
//
Schema::table('employes', function (Blueprint $table) {
$table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
});
});
}
/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
Schema::table('employes', function (Blueprint $table) {
$table->dropForeign(['service_id']);
});}
};
