<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('psychologist_feedback', function (Blueprint $table) {
            $table->id();
            $table->foreignId('report_id')->constrained()->cascadeOnDelete();
            $table->foreignId('psychologist_id')->constrained('users')->cascadeOnDelete();
            $table->longText('summary');
            $table->longText('condition_update');
            $table->longText('recommendation');
            $table->timestamps();
            $table->index(['report_id', 'created_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('psychologist_feedback');
    }
};
