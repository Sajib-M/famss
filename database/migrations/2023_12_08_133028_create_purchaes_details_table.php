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
        Schema::create('purchaes_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('item_id');
            $table->foreignId('vendor_id');
            
            $table->string('buyer_name');
            $table->integer('quantity')->default(0);
            $table->double('price')->default(0.00);
            $table->integer('discount');
            $table->double('total');
            $table->date('warranty')->nullable();
            $table->date('service_date')->nullable();
            $table->integer('damage')->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchaes_details');
    }
};
