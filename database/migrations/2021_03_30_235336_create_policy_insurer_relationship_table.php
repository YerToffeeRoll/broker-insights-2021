<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePolicyInsurerRelationshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policy_insurer_relationship', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('policy_id');
            $table->unsignedInteger('insurer_id');


            $table->foreign('policy_id')->references('id')->on('policy');
            $table->foreign('insurer_id')->references('id')->on('insurer');
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
        Schema::dropIfExists('policy_insurer_relationship');
    }
}
