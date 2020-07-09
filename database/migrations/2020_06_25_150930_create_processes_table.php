<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pasta')->nullable();
            $table->string('processo')->nullable();
            $table->string('autor')->nullable();
            $table->string('reu')->nullable();
            $table->string('vara')->nullable();
            $table->integer('acao')->nullable();
            $table->string('andamento')->nullable();
            $table->string('folder');
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
        Schema::dropIfExists('processes');
    }
}
