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
        Schema::create('votes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger("id_user");
            $table->unsignedBigInteger("id_polls");
            $table->unsignedBigInteger("id_divisi");
            $table->foreign("id_divisi")->references("id")->on("divisions")->onDelete("cascade");
            $table->foreign("id_polls")->references("id")->on("polls")->onDelete("cascade");
            $table->foreign("id_user")->references("id")->on("users")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('votes');
    }
};
