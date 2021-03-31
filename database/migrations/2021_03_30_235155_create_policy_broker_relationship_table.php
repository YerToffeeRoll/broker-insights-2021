<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePolicyBrokerRelationshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policy_broker_relationship', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('policy_id');
            $table->unsignedInteger('broker_id');

            $table->foreign('broker_id')->references('id')->on('broker');
            $table->foreign('policy_id')->references('id')->on('policy');
           
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
        Schema::dropIfExists('policy_broker_relationship');
    }
}
