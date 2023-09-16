<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BookedList;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    public function BookingForm(){

        return view('admin.booking-form');

    }

    // public function BookedLists() {
    //     $bookedLists = BookedList::get()->all();

    //     return $bookedLists;

    // }

    ///generate booking_id

    public function createBooking(Request $request) {
        $booking = new BookedList();

        // Generate Booking ID
    $booking_id = $this->generatebooking_id();

    $chargeableWeight = $this->calculateChargeableWeight($request->input('gwt'), $request->input('mwt'));
        $booking->booking_id = $booking_id;
        $booking-> mode = $request->input('mode');
        $booking->freight_term = $request->input('freight_term');
        $booking-> sales_type = $request->input('sales_type');

        $booking-> shipper_bank = $request->input('shipper_bank');
        $booking-> key_account = $request->input('key_account');
        $booking-> shipper_name = $request->input('shipper_name');
        $booking-> shipper_address = $request->input('shipper_address');
        $booking-> agreement_type = $request->input('agreement_type');
        $booking-> agent_name = $request->input('agent_name');
        $booking-> agent_address = $request->input('agent_address');
        $booking-> agent_emergency_address = $request->input('agent_emergency_address');
        $booking-> agent_contact_no = $request->input('agent_contact_no');
        $booking-> agent_bank_acc = $request->input('agent_bank_acc');
        $booking-> consignee_name = $request->input('consignee_name');
        $booking-> consignee_address = $request->input('consignee_address');
        $booking-> consignee_bank_acc = $request->input('consignee_bank_acc');
        $booking-> consignee_acc_type = $request->input('consignee_acc_type');
        $booking-> commodity_type = $request->input('commodity_type');
        $booking-> commercial_invoice_no = $request->input('commercial_invoice_no');
        $booking-> commercial_invoice_date = $request->input('commercial_invoice_date');
        $booking-> POL = $request->input('POL');
        $booking-> POD = $request->input('POD');
        $booking-> status = $request->input('status');
        $booking-> ref_booking_no = $request->input('ref_booking_no');
        $booking-> combined_transports = $request->input('combined_transports');
        $booking-> service_type = $request->input('service_type');
        $booking-> sales_person = $request->input('sales_person');
        $booking-> sales_person = $request->input('sales_person');
        $booking-> estimated_handover_date = $request->input('estimated_handover_date');
        $booking-> lc_no = $request->input('lc_no');
        $booking-> lc_date = $request->input('lc_date');
        $booking-> description_good = $request->input('description_good');
        $booking-> po = $request->input('po');
        $booking-> so = $request->input('so');
        $booking-> cartoon = $request->input('cartoon');
        $booking-> package = $request->input('package');
        $booking-> piece = $request->input('piece');
        $booking-> length = $request->input('length');
        $booking-> width = $request->input('width');
        $booking-> height = $request->input('height');
        $booking->chargeable_weight = $chargeableWeight;

        $booking-> gwt = $request->input('gwt');
        $booking-> mwt = $request->input('mwt');
        // ... Add other attributes here ...


        $booking->save();
        session()->flash('success', 'Booking created successfully');

        return redirect()->route('admin.create-booking');

    }

    private function generatebooking_id() {
        $bookingDate = Carbon::now()->format('ymd');
        $bookingCount = BookedList::count() + 1;   // Assuming your table name is 'booked_lists'
        return 'TWSL' . $bookingDate . 'id' . $bookingCount;
    }


    public function calculateChargeableWeight($grossWeight, $massWeight) {
        $constant = 167.00;
        $grossWeightCal = (float)$grossWeight * $constant;
        return max($grossWeightCal, $massWeight);
    }



    //update Booking

    // show

    public function editBooking(Request $request, $id) {
        // Find the existing booking record
        $booking = BookedList::findOrFail($id);

          // Recalculate chargeable weight
        $chargeableWeight = $this->calculateChargeableWeight($request->input('gwt'), $request->input('mwt'));

        // Update the values
        $booking-> mode = $request->input('mode');
        $booking->freight_term = $request->input('freight_term');
        $booking-> sales_type = $request->input('sales_type');
        $booking-> shipper_bank = $request->input('shipper_bank');
        $booking-> key_account = $request->input('key_account');
        $booking-> shipper_name = $request->input('shipper_name');
        $booking-> shipper_address = $request->input('shipper_address');
        $booking-> agreement_type = $request->input('agreement_type');
        $booking-> agent_name = $request->input('agent_name');
        $booking-> agent_address = $request->input('agent_address');
        $booking-> agent_emergency_address = $request->input('agent_emergency_address');
        $booking-> agent_contact_no = $request->input('agent_contact_no');
        $booking-> agent_bank_acc = $request->input('agent_bank_acc');
        $booking-> consignee_name = $request->input('consignee_name');
        $booking-> consignee_address = $request->input('consignee_address');
        $booking-> consignee_bank_acc = $request->input('consignee_bank_acc');
        $booking-> consignee_acc_type = $request->input('consignee_acc_type');
        $booking-> commodity_type = $request->input('commodity_type');
        $booking-> commercial_invoice_no = $request->input('commercial_invoice_no');
        $booking-> commercial_invoice_date = $request->input('commercial_invoice_date');
        $booking-> POL = $request->input('POL');
        $booking-> POD = $request->input('POD');
        $booking-> status = $request->input('status');
        $booking-> ref_booking_no = $request->input('ref_booking_no');
        $booking-> combined_transports = $request->input('combined_transports');
        $booking-> service_type = $request->input('service_type');
        $booking-> sales_person = $request->input('sales_person');
        $booking-> sales_person = $request->input('sales_person');
        $booking-> estimated_handover_date = $request->input('estimated_handover_date');
        $booking-> lc_no = $request->input('lc_no');
        $booking-> lc_date = $request->input('lc_date');
        $booking-> description_good = $request->input('description_good');
        $booking-> po = $request->input('po');
        $booking-> so = $request->input('so');
        $booking-> cartoon = $request->input('cartoon');
        $booking-> package = $request->input('package');
        $booking-> piece = $request->input('piece');
        $booking-> length = $request->input('length');
        $booking-> width = $request->input('width');
        $booking-> height = $request->input('height');
        $booking->chargeable_weight = $chargeableWeight;
        $booking-> gwt = $request->input('gwt');
        $booking-> mwt = $request->input('mwt');




        // Save the updated record
        $booking->save();

        session()->flash('success', 'Booking updated successfully');
        return redirect()->route('admin.booked-edited', ['id' => $id]);
    }



    //show

  //single booked by id only used to show for editing
    public function showBookedId($id) {

        $booking =BookedList::findOrFail($id);

        return view('admin.booked-edited', compact('booking'));

    }


//single booked by booking_id
    public function showBooking($booking_id) {

        $booking = BookedList::where('booking_id', $booking_id)->first();

        if (!$booking) {
            return view('booking-not-found');
        }

        return view('admin.booked-edited', compact('booking'));

    }



    ///Delete

    public function delete($id)
    {
        $booking = BookedList::findOrFail($id);
        $booking->delete();
        session()->flash('success', 'Booking Deleted successfully');

        return redirect()->route('admin.booked-lists',['id' => $id]);
    }




    //Export
    public function exportList(){
        $exportLists = BookedList::where('sales_type', 'export')->get();
        return $exportLists;
    }

    //Import
    public function importList(){
        $importLists = BookedList::where('sales_type', 'import')->get();
        return $importLists;
    }

    public function Index(){

        $bookings = BookedList::all();

        return view('admin.booked-lists',compact('bookings'));

    }
    public function Store(){

    }
    public function IdentifyMode(){

    }
    public function EditInfo(){

    }
}