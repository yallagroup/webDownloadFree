<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScreenshotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('screenshots', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('program_id');
                $table->foreign('program_id')->references('id')->on('programs');
            $table->string('name');
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('screenshots');
    }
}
