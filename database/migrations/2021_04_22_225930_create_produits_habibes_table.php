<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsHabibesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits_habibes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categorie_produits_habibe_id')
                ->constrained()
                ->onDelete('cascade');
            $table->string('name');
            $table->bigInteger('prix');
            $table->bigInteger('prix_min')->nullable();
            $table->bigInteger('prix_max')->nullable();
            $table->text('imagePath');
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('produits_habibes');
    }
}
