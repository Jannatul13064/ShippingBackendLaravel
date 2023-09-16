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
        Schema::create('liners_info', function (Blueprint $table) {
            $table->id();
            $table->string('country_code');
            $table->string('liner_name');
            $table->string('liners_address');
            $table->string('liner_phone');
            $table->string('liner_email');
            $table->string('liners_office_address');
            $table->string('liners_emergency_contact');
            $table->string('liners_designation');
            $table->string('note');
            $table->timestamps();
        });
    }

    /**
     *  Table liners_info {
  id int
  country_code int
  liner_name varchar
  liners_address varchar
  liner_phone int
  liner_email email
  liners_office_address varchar
  liners_emergency_contact varchar
  liners_designation varchar
  created_at datetime [default: `now()`]
  Indexes {
    (id) [unique]
    (id) [pk]
  }

}
     */
    public function down(): void
    {
        Schema::dropIfExists('liners_info');
    }
};