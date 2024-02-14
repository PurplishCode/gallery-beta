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
        Schema::create('album', function (Blueprint $table) {
            $table->id("albumID");
            $table->string("namaAlbum")->max(20);
            $table->string("deskripsi");
            $table->date("tanggalDibuat");
            $table->unsignedBigInteger("userID");
            $table->timestamps();
$table->foreign("userID")->references("userID")->on("users");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('albums');
    }
};
