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
        Schema::create('jira_data', function (Blueprint $table) {
            $table->string('id')->unique();
            $table->string('key');
            $table->string('summary');
            $table->timestampTz('startDate')->nullable()->useCurrent(false);
            $table->timestampTz('resolutionDate')->nullable()->useCurrent(false);
            $table->string('assignee');
            $table->string('link');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jira_data');
    }
};
