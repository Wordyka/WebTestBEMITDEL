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
        Schema::create('bems', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('ketua');
            $table->string('wketua');
            $table->string('sekretaris1');
            $table->string('sekretaris2');
            $table->string('bendahara1');
            $table->string('bendahara2');
            $table->text('visi');
            $table->text('misi');
            $table->text('logo');
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
        Schema::dropIfExists('bems');
    }
};
