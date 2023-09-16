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
        Schema::create('vessels', function (Blueprint $table) {
            $table->id();
            $table->string('country_code');
            $table->string('vessel_name');
            $table->string('vessel_type');
            $table->string('vessel_contact');
            $table->enum('vessel_status',['booked','on way']);
            $table->timestamps();
        });
    }

    /**
     * Table Vessel_list {
  id int
  country_code int
  vessel_name varchar
  vessel_type varchar
  vessel_capability int
  created_at datetime [default: `now()`]
  Indexes {
    (id, country_code) [pk]
  }
}

     */
    public function down(): void
    {
        Schema::dropIfExists('vessels');
    }
};