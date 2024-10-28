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
        Schema::create('sales_shipment_lines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('sj_id');
            $table->string('sj_no');
            $table->string('item_no');
            $table->string('description');
            $table->integer('quantity');
            $table->string('uom');
            $table->timestamps();
            $table->foreign('item_id')->references('id')->on('items');
            $table->foreign('sj_id')->references('id')->on('sales_shipment_headers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_shipment_lines');
    }
};
