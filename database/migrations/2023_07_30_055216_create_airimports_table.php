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
        Schema::create('airimports', function (Blueprint $table) {
            $table->id();
            $table->boolean('multimodal_status');
            $table->enum('freight_term',['pre-paid','collected']);
            $table->enum('sales_type',['export','import']);
            $table->enum('shipper_bank',['bank1','bank2','bank3']);
            $table->string('key_account');
            $table->string('shipper_name');
            $table->string('Shipper_address');
            $table->enum('agreement_type',['agreement1','agreement2','agreement3']);
            $table->string('agent_name');
            $table->string('agent_address');
            $table->integer('agent_bank_acc');
            $table->string('agent_emergency_address');
            $table->string('agent_contact_no');
            $table->float('gross_weight');
            $table->float('measurement_weight');
            $table->float('changeable_weight');
            $table->string('number_of_container');
            $table->string('consignee_name');
            $table->string('consignee_address');
            $table->string('consignee_bank_acc');
            $table->string('consignee_account_type');
            $table->enum('commodity_type',['general','
            perishable','danger','oversized']);
            $table->string('commercial_invoice_no');
            $table->string('pol');
            $table->string('pod');
            $table->string('hbl');
            $table->string('mbl');
            $table->integer('cartoon');
            $table->string('package');
            $table->integer('piece');
            $table->float('length');
            $table->float('weight');
            $table->float('height');
            $table->float('cbm');
            $table->float('gwt');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * enum commodity_type{
  general
  perishable
  danger
  oversized

}
     *
     * Table add_booking_air_import {
  id int
  date date
  multimodal_status boolean
  freight_term freight_term
  sales_type sales_type
  shipper_bank enum
  key_account enum
  shipper_name varchar
  agreement_type enum
  agent_name varchar
  agent_address address
  agent_emergency address
  agent_contact_no int
  gross_weight float
  measurement_weight float
  changeable_weight float
  number_of_container int
  agent_bank_acc varchar
  consignee_name varchar
  consignee_address varchar
  consignee_bank_acc varchar
  consignee_account_type varchar
  commodity commodity_type
  commercial_invoice_no varchar
  POL varchar
  POD varchar
  hbl_address varchar
  mbl_address varchar
  cartoon int
  package varchar
  pieces int
  length float
  weight float
  height float
  cbm float
  gwt float
  created_at datetime [default: `now()`]
  Indexes {
    (id) [pk]
  }

}
     */
    public function down(): void
    {
        Schema::dropIfExists('airimports');
    }
};
