<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CommandeProduit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commande_produit', function (Blueprint $table) {
            $table->id();
            $table->integer("quantite");

            $table->unsignedBigInteger("id_commande");
            $table->foreign("id_commande")
                ->references("id")
                ->on("commandes")
                ->onDelete("cascade")
                ->onUpdate("cascade");

            $table->unsignedBigInteger("id_produit");
            $table->foreign("id_produit")
                ->references("id")
                ->on("produits")
                ->onDelete("cascade")
                ->onUpdate("cascade");
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
        Schema::dropIfExists('commande_produit');
    }
}
