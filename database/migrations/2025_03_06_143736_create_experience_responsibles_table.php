<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('experience_responsibles', function (Blueprint $table) {
            $table->bigIncrements('id');
            // Bu tablo, experiences tablosuna bağlı olduğundan, experiences migrationından sonra çalıştırılmalı.
            $table->unsignedBigInteger('experience_id');
            $table->text('comment_en')->nullable();
            $table->text('comment_tr')->nullable();
            $table->integer('order')->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('experience_id')->references('id')->on('experiences')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('experience_responsibles');
    }
};
