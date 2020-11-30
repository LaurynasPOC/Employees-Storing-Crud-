<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->integer('age');
            $table->integer('phoneNumber');
            $table->timestamps();
            $table->unsignedBigInteger('positions_id');
            $table->foreign('positions_id')->references('id')->on('positions')->onDelete('cascade')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropForeign(['positions_id']);
            $table->dropColumn('positions_id');
    });
        
        
    }
}
