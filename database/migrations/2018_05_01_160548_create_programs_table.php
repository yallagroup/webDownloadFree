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
            $table->unsignedInteger('category_id');
                $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedInteger('user_id');
                $table->foreign('user_id')->references('id')->on('users');
            $table->string('slug');
            $table->string('title');
            $table->string('icon');
            //$table->string('type')->default('inside');
            $table->string('url')->nullable();
            $table->text('description')->nullable();
            $table->unsignedTinyInteger('pinned')->default(0);
            $table->unsignedTinyInteger('recommended')->default(0);
            $table->unsignedBigInteger('views')->default(0);
            $table->unsignedBigInteger('downloads')->default(0);
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
        Schema::dropIfExists('programs');
    }
}
