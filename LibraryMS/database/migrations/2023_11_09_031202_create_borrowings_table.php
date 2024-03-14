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
        Schema::create('borrowings', function (Blueprint $table) {
            $table->id('BorrowingID');
            $table->unsignedBigInteger('BookID');
            $table->integer('MemberID');
            $table->date('BorrowDate');
            $table->date('DueDate');
            $table->date('ReturnedDate');
            $table->foreign('BookID')->references('BookID')->on('books')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrowings');
    }
};
