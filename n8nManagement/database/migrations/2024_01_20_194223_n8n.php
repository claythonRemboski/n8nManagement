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
        Schema::create('n8n_data', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->string('name');
            $table->boolean('active')->default(true);
            $table->timestampTz('createdAt')->nullable()->useCurrent(false);
            $table->timestampTz('updatedAt')->nullable()->useCurrent(false);
            $table->boolean('comercialProject')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('n8n_data');
    }
};
