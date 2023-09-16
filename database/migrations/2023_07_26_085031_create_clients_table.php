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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('country_code');
            $table->string('client_name');
            $table->string('client_address');
            $table->string('client_email');
            $table->string('client_phone');
            $table->string('client_bin_no');
            $table->enum('client_bank_status',['Lc Issuing','Lc receiving']);
            $table->enum('client_status',['agent','shipper','consignee']);
            $table->string('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
