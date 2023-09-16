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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('country_code');
            $table->string('head_agent_name');
            $table->string('head_agent_address');
            $table->string('head_agent_phone');
            $table->string('head_agent_email');
            $table->string('branch_agent_address');
            $table->string('branch_agent_name');
            $table->string('branch_agent_phone');
            $table->string('branch_agent_email');
            $table->string('branch_agent_designation');
            $table->string('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};