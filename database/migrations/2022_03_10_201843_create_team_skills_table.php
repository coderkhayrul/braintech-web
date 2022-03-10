<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_skills', function (Blueprint $table) {
            $table->bigIncrements('ts_id');
            $table->integer('team_id');
            $table->string('ts_name', 100)->nullable();
            $table->integer('ts_range')->nullable();
            $table->integer('ts_order')->nullable();
            $table->integer('ts_creator')->nullable();
            $table->integer('ts_editor')->nullable();
            $table->string('ts_slug')->nullable();
            $table->integer('ts_status')->default(1);
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
        Schema::dropIfExists('team_skills');
    }
}
