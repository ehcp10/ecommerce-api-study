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
        Schema::create('idempotency_keys', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();          // header Idempotency-Key
            $table->string('request_fingerprint');    // hash do body+rota+auth
            $table->unsignedSmallInteger('response_code');
            $table->json('response_body')->nullable();
            $table->timestamp('recover_until')->nullable(); // TTL/janela
            $table->timestamps();

            $table->index('request_fingerprint');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('idempotency_keys');
    }
};
