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
        Schema::create('containers_info', function (Blueprint $table) {
            $table->id();
            $table->string('country_code');
            $table->enum('container_type',['20_GPDRY','40_GPDRY','40_HQDRY','20_REEFER','40_REEFER','20_open_TOP','40_open_TOP','20_flat_Rack','40_flat_Rack']);
            $table->string('note');
            $table->timestamps();
        });
    }

    /**
     * enum container_type{
  20_GPDRY
  40_GPDRY
  40_HQDRY
  20_REEFER
  40_REEFER
  20_open_TOP
  40_open_TOP
  20_flat_Rack
  40_flat_Rack
}
Table shipping.container_info {
  id int
  country_code int
  container_type container_type
  created_at datetime [default: `now()`]
  Indexes {
    (id) [unique]
    (id) [pk]
  }
}
     */
    public function down(): void
    {
        Schema::dropIfExists('containers_info');
    }
};