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
        Schema::create('coloaders', function (Blueprint $table) {
            $table->id();
            $table->string('coloader_name');
            $table->string('coloader_address');
            $table->string('coloader_phone');
            $table->string('coloader_email');
            $table->string('coloader_country');
            $table->string('coloader_designation');
            $table->string('coloader_emergency_email');
            $table->string('coloader_office_address');
            $table->string('coloader_emergency_contact');
            $table->timestamps();
        });
    }

 /**
  * coloader_name varchar
  coloader_address varchar
  coloader_phone varchar
  coloader_email varchar
  coloader_country varchar
  coloader_designation varchar
  coloader_emergency_email email
  coloader_office_address varchar
  coloader_emergency_contact int
  */

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coloaders');
    }
};
