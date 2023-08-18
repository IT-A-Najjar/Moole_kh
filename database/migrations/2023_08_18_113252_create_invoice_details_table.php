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
        Schema::create('invoice_details', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->integer("count")->nullable();
            $table->double("unit_price")->nullable();
            $table->double("total_price")->nullable();
            $table->foreignId("product_id")->nullable()->constrained("products")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("invoice_id")->nullable()->constrained("invoices")->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_details');
    }
};
