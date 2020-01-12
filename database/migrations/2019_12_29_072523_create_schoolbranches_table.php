<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolbranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schoolbranches', function (Blueprint $table) {
            $table->bigIncrements('sc_br_id');
            $table->string('sc_br_name');
            $table->integer('fk_school_id');
            $table->string('sc_br_address');
            $table->string('sc_br_status');
            $table->string('no_of_boys')->nullable();
            $table->string('no_of_girls')->nullable();
            $table->string('sc_br_covered_area')->nullable();
            $table->string('no_of_teachers')->nullable();
            $table->string('owner_name')->nullable();
            $table->string('owner_phone')->nullable();
            $table->string('owner_email')->nullable();
            $table->string('principal_name')->nullable();
            $table->string('principal_phone')->nullable();
            $table->string('principal_email')->nullable();
            $table->integer('fk_subarea_id');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('location_string');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schoolbranches');
    }
}
