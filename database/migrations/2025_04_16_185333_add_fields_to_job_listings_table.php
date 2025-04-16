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
        // Clear table data
        DB:table('job_listings')->truncate();
        Schema::table('job_listings', function (Blueprint $table) {
            $table->integer('salary');
            $table->string('tag');
            $table->enum('job_type', ['Full-Time'. 'Part-Time','Contract', 'Temporary'])->default('Full-Time');
            $table->loolean('remote')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_listings', function (Blueprint $table) {
            //
        });
    }
};
