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
        Schema::create('departemens', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('ketua');
            $table->string('wketua');
            $table->string('sekretaris');
            $table->string('bendahara');
            $table->text('tugas');
            $table->text('logo');
            $table->unsignedBigInteger('bem_id');
            $table->foreign('bem_id')->references('id')->on('bems');
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
        Schema::dropIfExists('departemens');
    }
};
