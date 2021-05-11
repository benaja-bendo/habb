<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprovisionProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approvision_produits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produits_habibe_id')
                ->constrained()
                ->onDelete('cascade');
            $table->bigInteger('qte');
            $table->string('fournisseur_id')->nullable();
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
        Schema::dropIfExists('approvision_produits');
    }
}
