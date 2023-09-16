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
        Schema::create('seaexports', function (Blueprint $table) {
            $table->id();
            $table->enum('freight_term',['pre-paid','collected']);
            $table->enum('sales_type',['export','import']);
            $table->enum('shipper_bank',['bank1','bank2','bank3']);
            $table->string('key_account');
            $table->string('shipper_name');
            $table->string('Shipper_address');
            $table->enum('agreement_type',['agreement1','agreement2','agreement3']);
            $table->string('agent_name');
            $table->string('agent_address');
            $table->string('agent_emergency_address');
            $table->string('agent_contact_no');
            $table->string('agent_bank_acc');
            $table->enum('container_type',['FCL','LCL','Console']);
            $table->integer('number_of_container');
            $table->string('depo_name');
            $table->string('depo_address');
            $table->string('consignee_name');
            $table->string('consignee_address');
            $table->string('consignee_bank_acc');
            $table->string('consignee_account_type');
            $table->enum('commodity_type',['general
            ','perishable','danger','oversized']);
            $table->string('commercial_invoice_no');
            $table->string('POL');
            $table->string('POD');
            $table->string('HBL');
            $table->string('MBL');
            $table->string('cartoon');
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
     * enum container_booking{
  lcl
  fcl
  console
}
Table add_booking_sea_export {
  id int
  date date
  transport_mode transport_mode
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
  container_type container_booking
  number_of_container int
  depo_name varchar
  agent_bank_acc varchar
  consignee_name varchar
  consignee_address varchar
  consignee_bank_acc varchar
  consignee_account_type varchar
  comodity commodity_type
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
        Schema::dropIfExists('seaexports');
    }
};