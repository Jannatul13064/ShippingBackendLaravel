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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('country_name');
            $table->string('country_code');
            $table->string('available_ports_code');
            $table->integer('total_num_agents');
            $table->integer('total_num_shipper');
            $table->integer('total_num_consignee');
            $table->integer('total_number_sea_ports');
            $table->integer('available_banks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
