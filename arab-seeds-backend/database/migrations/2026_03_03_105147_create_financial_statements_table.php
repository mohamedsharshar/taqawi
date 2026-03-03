<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('financial_statements', function (Blueprint $table) {
            $table->id();
            $table->json('title');
            $table->json('description')->nullable();
            $table->string('file_path');
            $table->string('file_name');
            $table->integer('file_size');
            $table->date('statement_date');
            $table->enum('type', ['balance_sheet', 'income_statement', 'cash_flow', 'other'])->default('other');
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('financial_statements');
    }
};
