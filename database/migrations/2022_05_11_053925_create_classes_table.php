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
        Schema::create('class', function (Blueprint $table) {
            $table->string('unit_code');
            $table->string('campus');
            $table->enum('day', ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday']);
            $table->time('start');
            $table->time('end');
            $table->enum('type', ['Lecture','Tutorial','Practical','Workshop']);
            $table->string('room');
            $table->integer('staff');
            //$table->timestamps();
        });

        DB::statement("ALTER TABLE 'class' ADD 'photo' MEDIUMBLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class');
    }
};
