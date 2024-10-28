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
        Schema::create('transaction_headers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sj_id');
            $table->unsignedBigInteger('user_id');
            $table->string('sj_no');
            $table->string('transaction_type');
            $table->timestamps();
            $table->foreign('sj_id')->references('id')->on('sales_shipment_headers');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_headers');
    }
};
