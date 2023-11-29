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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('d_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('p_id')->constrained('users')->onDelete('cascade');
            $table->longText('description');
            $table->longText('resolve')->nullable();
            $table->string('file')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0 = pending, 1 = resolved');
            $table->timestamp('resolve_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
