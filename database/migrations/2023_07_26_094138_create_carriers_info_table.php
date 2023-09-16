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
        Schema::create('carriers_info', function (Blueprint $table) {
            $table->id();
            $table->string('country_code');
            $table->string('country_name');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('emergency_office_address');
            $table->string('emergency_designation');
            $table->string('emergency_mail');
            $table->string('emergency_phone');
            $table->timestamps();
        });
    }

    /**
     * id int
  country_code int
  name varchar
  address varchar
  phone varchar
  email email
  emergency_office_address varchar
  emergency_designation varchar
  emergency_email email
  emergency_phone int[15]
  created_at datetime [default: `now()`]
     */
    public function down(): void
    {
        Schema::dropIfExists('carriers_info');
    }
};