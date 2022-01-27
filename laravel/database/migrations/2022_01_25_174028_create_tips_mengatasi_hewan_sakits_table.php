<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipsMengatasiHewanSakitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tips_mengatasi_hewan_sakits', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->string('author');
            $table->text('content');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tips_mengatasi_hewan_sakits');
    }
}
