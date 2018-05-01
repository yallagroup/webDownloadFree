<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('slug');
            $table->string('title');
            $table->string('icon');
            //$table->string('type')->default('inside');
            $table->string('url')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('views')->dafault(0);
            $table->unsignedBigInteger('downloads')->dafault(0);
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
        Schema::dropIfExists('programs');
    }
}
