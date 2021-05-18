<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointVentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('point_ventes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('commercial_id')->nullable();
            $table->text('imagePath')->nullable();
            $table->string('quartier')->nullable();
            $table->string('ville')->nullable();
            $table->string('telephone')->nullable();
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
        Schema::dropIfExists('point_ventes');
    }
}
