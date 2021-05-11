<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailVentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_ventes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vente_id')
                ->constrained()
                ->onDelete('cascade');
            $table->foreignId('produits_habibe_id')
                ->constrained()
                ->onDelete('cascade');
            $table->foreignId('point_vente_id')
                ->constrained()
                ->onDelete('cascade');
            $table->bigInteger('qte');
            $table->bigInteger('prix_vendu')->nullable();
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
        Schema::dropIfExists('detail_ventes');
    }
}
