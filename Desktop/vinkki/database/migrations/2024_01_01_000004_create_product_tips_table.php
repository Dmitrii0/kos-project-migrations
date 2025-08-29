<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_tips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->text('content');
            $table->string('hair_type')->nullable(); // Тип волос (сухие, жирные, нормальные, окрашенные и т.д.)
            $table->string('usage_frequency')->nullable(); // Частота использования
            $table->string('best_time')->nullable(); // Лучшее время для использования
            $table->text('additional_notes')->nullable(); // Доп заметки
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_tips');
    }
};
