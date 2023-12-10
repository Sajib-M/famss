<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('distributes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id');
            $table->foreignId('employee_id');
            
            $table->integer('quantity');
            $table->string('status')->default('available');
            $table->integer('damage')->nullable();
            $table->string('note')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('distributes');
    }
};
