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
        Schema::create('divisis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('ketua');
            $table->text('tugas');
            $table->timestamps();
            $table->unsignedBigInteger('departemen_id');
            $table->foreign('departemen_id')->references('id')->on('departemens');
            $table->unsignedBigInteger('bem_id');
            $table->foreign('bem_id')->references('id')->on('bems');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('divisis');
    }
};
