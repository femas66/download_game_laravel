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
        Schema::create('listgames', function (Blueprint $table) {
            $table->id();
            $table->string('nama_game');
            $table->string('icon_game');
            $table->string('kategori');
            $table->string('deskripsi');
            $table->integer('total_view');
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
        Schema::dropIfExists('listgames');
    }
};
