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
        Schema::create('outbox_events', function (Blueprint $table) {
            $table->id();
            $table->string('aggregate_type'); // ex.: Order, Payment
            $table->string('aggregate_id');   // id/código da agregação
            $table->string('type');           // ex.: order.created
            $table->json('payload_json');
            $table->timestamp('published_at')->nullable()->index();
            $table->timestamps();

            $table->index(['aggregate_type', 'aggregate_id']);
            $table->index('type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('outbox_events');
    }
};
