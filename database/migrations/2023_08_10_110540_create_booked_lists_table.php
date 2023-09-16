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
        Schema::create('booked_lists', function (Blueprint $table) {
            $table ->increments('id');
            $table->string('booking_id')->unique();
            $table->string('mode');
            $table->string('freight_term');
            $table->string('sales_type');

            $table->string('shipper_bank');
            $table->string('key_account');
            $table->string('shipper_name');
            $table->string('shipper_address');
            $table->string('agreement_type');
            $table->string('agent_name');
            $table->string('agent_address');
            $table->string('agent_emergency_address');
            $table->string('agent_contact_no');
            $table->string('agent_bank_acc');
            $table->string('consignee_name');
            $table->string('consignee_address');
            $table->string('consignee_bank_acc');
            $table->string('consignee_acc_type');
            $table->string('commodity_type');
            $table->string('commercial_invoice_no');
            $table->string('commercial_invoice_date');
            $table->string('POL');
            $table->string('POD');
            $table->string('status');

            $table->string('ref_booking_no');
            $table->string('combined_transports');
            $table->string('service_type');
            $table->string('sales_person');
            $table->string('estimated_handover_date');
            $table->string('lc_no');
            $table->string('lc_date');
            $table->string('description_good');
            $table->string('po');
            $table->string('so');
            $table->string('cartoon');
            $table->string('package');
            $table->integer('piece');
            $table->float('length');
            $table->float('width');
            $table->float('height');
            $table->float('chargeable_weight');
            $table->float('gwt');
            $table->float('mwt');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booked_lists');
    }
};
