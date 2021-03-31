<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePolicyPolicytypeRelationshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policy_policytype_relationship', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('policy_id');
            $table->unsignedInteger('policy_type_id');


            $table->foreign('policy_id')->references('id')->on('policy');
            $table->foreign('policy_type_id')->references('id')->on('policy_type');
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
        Schema::dropIfExists('policy_policytype_relationship');
    }
}
