<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            // Удалено поле 'image'
            $table->json('gallery')->nullable(); // Галерея изображений
            $table->date('date');
            $table->string('location');
            $table->string('company');
            $table->unsignedBigInteger('category_id');
            $table->string('slug')->unique(); // Добавление поля slug
            $table->timestamps();
            $table->string('locale'); // 'uk', 'pl', 'ru', 'en'

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
