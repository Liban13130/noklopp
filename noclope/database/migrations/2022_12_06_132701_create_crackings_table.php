<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crackings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('number_smoked_cigarette');
            $table->timestamp('date_cracking');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('project_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crackings');
    }
};
