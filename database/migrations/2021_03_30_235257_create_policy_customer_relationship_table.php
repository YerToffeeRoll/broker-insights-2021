<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePolicyCustomerRelationshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policy_customer_relationship', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('policy_id');
            $table->unsignedInteger('customer_id');

            $table->foreign('policy_id')->references('id')->on('policy');
            $table->foreign('customer_id')->references('id')->on('customer');
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
        Schema::dropIfExists('policy_customer_relationship');
    }
}
