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
        Schema::create('like_foto', function (Blueprint $table) {
            $table->id("likeID");
            $table->unsignedBigInteger("userID");
            $table->unsignedBigInteger("fotoID");
            
            $table->timestamps();
       $table->foreign("userID")->references("userID")->on("users");
       $table->foreign("fotoID")->references("fotoID")->on("foto");
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('like_fotos');
    }
};
