<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePolicyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policy', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('broker_id');
            $table->string('customer_name');
            $table->string('customer_address');
            $table->integer('premium');
            $table->string('policy_type');
            $table->string('insurer_name');
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
        Schema::dropIfExists('policy');
    }
}
