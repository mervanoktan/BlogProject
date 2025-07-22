<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('catagory_id');
             $table->string('title');
             $table->text('content');
             $table->boolean('published')->default(false)->comment('Yayınlandımı ?');
            $table->timestamps();

            $table->foreign('user_id')->on(table:'users')->references('id')->onDelete('cascade');
            $table->foreign('catagory_id')->on(table:'categories')->references('id')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
