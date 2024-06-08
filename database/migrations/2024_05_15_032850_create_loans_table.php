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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('book_id')->constrained(); //dia akan access book punya table and dari id mana //foreign id adalah primary key satu table
            $table->foreignId('member_id')->constrained();
            $table->string('member_icNum');//member nama table //kanan underscore icNum nama
            $table->string('borrowingDate');
            $table->string('returnDate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
