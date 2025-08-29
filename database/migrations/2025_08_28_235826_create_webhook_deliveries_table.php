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
        Schema::create('webhook_deliveries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('endpoint_id')->constrained('webhook_endpoints')->cascadeOnDelete();
            $table->string('event_type'); // ex.: payment.approved
            $table->json('payload_json');
            $table->string('status')->default('PENDING')->index(); // PENDING|SENT|FAILED
            $table->unsignedSmallInteger('attempts')->default(0);
            $table->text('last_error')->nullable();
            $table->timestamp('delivered_at')->nullable()->index();
            $table->timestamps();

            $table->index(['endpoint_id', 'status']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('webhook_deliveries');
    }
};
