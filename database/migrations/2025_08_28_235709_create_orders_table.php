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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique(); // ex.: ORD-2025-000123
            $table->string('customer_email')->index();
            $table->string('status')->default('CREATED')->index(); // CREATED|PAID|CANCELLED|SHIPPED
            $table->unsignedInteger('total_cents')->default(0);
            $table->char('currency', 3)->default('BRL')->index();
            $table->timestamps();

            $table->index(['status', 'created_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
