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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('given_name');
            $table->string('family_name');
            $table->string('campus');
            $table->enum('campus', ['Hobart','Launceston']);
            $table->string('phone');
            $table->string('room');
            $table->string('email');
            $table->enum('category', ['academic', 'technical', 'admin', 'casual']);
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
        Schema::dropIfExists('staff');
    }
};
