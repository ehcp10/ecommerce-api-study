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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->cascadeOnDelete()->index();
            $table->string('status')->default('PENDING')->index(); // PENDING|APPROVED|DECLINED
            $table->string('provider_ref')->nullable()->index();
            $table->unsignedInteger('amount_cents');
            $table->char('currency', 3)->default('BRL');
            $table->json('metadata')->nullable(); // ex.: last4, método, etc.
            $table->timestamps();

            $table->index(['order_id', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
