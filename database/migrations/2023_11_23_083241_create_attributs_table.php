<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributs', function (Blueprint $table) {
            $table->id();
            $table->integer('service_reveil');
            $table->integer('television');
            $table->integer('service_nettoyage');
            $table->integer('petit_dej');
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
        Schema::dropIfExists('attributs');
    }
};
