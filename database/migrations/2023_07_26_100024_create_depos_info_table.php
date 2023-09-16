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
        Schema::create('depos_info', function (Blueprint $table) {
            $table->id();
            $table->string('country_code');
            $table->string('depo_name');
            $table->string('depo_address');
            $table->string('depo_phone');
            $table->string('depo_email');
            $table->string('depo_designation');
            $table->string('depo_emergency_contact');
            $table->string('depo_office_address');
            $table->timestamps();
        });
    }

    /**
     * Table depo_info {
  id int
  country_code int
  depo_name varchar
  depo_address address
  depo_phone int
  depo_email email
  depo_designation varchar
  depo_emergency_contact int
  depo_office_address varchar
  created_at datetime [default: `now()`]
  Indexes {
    (id) [unique]
    (id) [pk]
  }

}

     */
    public function down(): void
    {
        Schema::dropIfExists('depos_info');
    }
};