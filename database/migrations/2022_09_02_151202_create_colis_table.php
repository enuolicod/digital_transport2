<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colis', function (Blueprint $table) {
            $table->id();
            $table->string('envoyeur');
            $table->string('recepteur');
            $table->string('telephone');
            $table->string('origine');
            $table->string('destination');
            $table->string('status');
            $table->date('date_de_reception');
            $table->string('nom_du_chauffeur');
            $table->string('payement');
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
        Schema::dropIfExists('colis');
    }
}
