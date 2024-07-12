<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
/**
 * Run the migrations.
 */
public function up(): void
{
    Schema::create('loans', function (Blueprint $table) {
        $table->id();
        $table->integer('car_id');
        $table->integer('user_id');
        $table->date('loan_date');
        $table->date('return_date');
        $table->integer('total_cost');
        $table->enum('status', ['DP', 'Lunas',]);
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
