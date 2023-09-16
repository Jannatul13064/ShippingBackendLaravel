<?php
namespace App\Transworld;
use App\Models\BookedList;
use App\Models\Agent;
use App\Models\Bank;
use App\Models\Multimodal;
use App\Notifications\BookingNotification;


class BookingRepository extends InterFaceBookingRepository{


    public $transports;

    ///Load all Booking Info

    public function getAllBookedList(){
        return BookedList::all();
    }

    //Create Booking

    public function createBooking(array $data){

        $name = $data['name'];
       $booking_id=$data['booking_id'];

       $insertedBooking = BookedList::insert([
            'booking_id' =>$booking_id,
            'name'=>$name,
            $freight_term = ['pre-paid','collected'],
            'freight_term' =>$data[$freight_term],

            $sales_type = ['export','import'],
            'sales_type'=>$data[$sales_type],

            $mode = ['sea','air','multimodal'],
            'mode'=> $data[$mode],

            $transports = 'transports',

            $shipper_bank = ['bank1','bank2','bank3'],
            'shipper_bank'=>$data[$shipper_bank],

            'key_account'=>$data['key_account'],
            'shipper_name'=>$data['shipper_name'],
            'shipper_address'=>$data['shipper_address'],

            $agreement_type = ['agreement1','agreement2','agreement3'],
            'agreement_type'=>$data[$agreement_type],

            'agent_name'=>$data['agent_name'],
            'agent_address'=>$data['agent_address'],
            'agent_address_emergency'=>$data['agent_address_emergency'],
            'agent_contact_no'=>$data['agent_contact_no'],
            'agent_bank_acc'=>$data['agent_bank_acc'],

            $container_type = ['FCL','LCL','Console'],
            'container_type'=>$data[$container_type],
            'depo_name' =>$data['depo_name'],
            'depo_address' => $data['depo_address'],
            'consignee_name' => $data['consignee_name'],
            'consignee_address' => $data['consignee_address'],
            'consignee_bank_acc' => $data['consignee_bank_acc'],
            'consignee_account_type' => $data['consignee_account_type'],

            $commodity_type = ['general
            ','perishable','danger','oversized'],
            'commodity_type' => $data [$commodity_type],

            'commercial_invoice_no' => $data ['commercial_invoice_no'],
            'POL'=>$data['POL'],
            'POD'=>$data['POD'],
            'HBL'=>$data['HBL'],
            'MBL'=>$data['MBL'],
            'cartoon'=>$data['cartoon'],
            'package'=>$data['package'],
            'piece'=>$data['piece'],
            'length'=>$data['length'],
            'weight'=>$data['weight'],
            'height'=>$data['height'],
            'cbm'=>$data['cbm'],
            'gwt'=>$data['gwt'],
            'created_at'=>$data['created_at']
        ]);

        $insertedBooking->notify(new BookingNotification());

        $billOfLadingNo = $this->generateBlNo($insertedBooking);
        $insertedBooking->update(['bill_of_lading_number' => $billOfLadingNo]);

        $separateMode = $this->separateMode($sales_type, $mode, $insertedBooking, $name, $transports);

        return $separateMode;
     }

     public function generateBlNo($booking_id){
        $billOfLading = 'TWSL';
        $billOfLadingNo = $billOfLading . $booking_id->created_at->format('YmdHis');
        return $billOfLadingNo;

    }



     ///Edit booking

    public function editBookedList($booking_id){

        return BookedList::find($booking_id);
    }


    ///Booking Updated
    public function updateBookedList($booking_id,array $data){

        BookedList::find($booking_id)->update([
            'booking_id' =>$data['booking_id'],
            'name'=>$data['name'],
            $freight_term = ['pre-paid','collected'],
            'freight_term' =>$data[$freight_term],

            $sales_type = ['export','import'],
            'sales_type'=>$data[$sales_type],

            $mode = ['sea','air','multimodal'],
            'mode'=> $data[$mode],


            $shipper_bank = ['bank1','bank2','bank3'],
            'shipper_bank'=>$data[$shipper_bank],

            'key_account'=>$data['key_account'],
            'shipper_name'=>$data['shipper_name'],
            'shipper_address'=>$data['shipper_address'],

            $agreement_type = ['agreement1','agreement2','agreement3'],
            'agreement_type'=>$data[$agreement_type],

            'agent_name'=>$data['agent_name'],
            'agent_address'=>$data['agent_address'],
            'agent_address_emergency'=>$data['agent_address_emergency'],
            'agent_contact_no'=>$data['agent_contact_no'],
            'agent_bank_acc'=>$data['agent_bank_acc'],

            $container_type = ['FCL','LCL','Console'],
            'container_type'=>$data[$container_type],
            'depo_name' =>$data['depo_name'],
            'depo_address' => $data['depo_address'],
            'consignee_name' => $data['consignee_name'],
            'consignee_address' => $data['consignee_address'],
            'consignee_bank_acc' => $data['consignee_bank_acc'],
            $consignee_acc_type = ['type1','type2','type3'],
            'consignee_account_type' => $data[$consignee_acc_type],

            $commodity_type = ['general
            ','perishable','danger','oversized'],
            'commodity_type' => $data [$commodity_type],

            'commercial_invoice_no' => $data ['commercial_invoice_no'],
            'POL'=>$data['POL'],
            'POD'=>$data['POD'],
            'HBL'=>$data['HBL'],
            'MBL'=>$data['MBL'],
            'cartoon'=>$data['cartoon'],
            'package'=>$data['package'],
            'piece'=>$data['piece'],
            'length'=>$data['length'],
            'weight'=>$data['weight'],
            'height'=>$data['height'],
            'cbm'=>$data['cbm'],
            'gwt'=>$data['gwt'],
        ]);
    }


    //Bill of Lading Generate
    // public function generateBlNo($created_at){

    //     $billOfLading = 'TWSL';
    //     $billOfLadingNo = $billOfLading . $created_at ;

    //     return $billOfLadingNo ;

    // }

    //Fetch the Agent Information
    public function fetchAgent(){

        $agents = Agent::all();

        $singleAgent = Agent::query()->latest()->get();

        return [$singleAgent , $agents];
    }


    ////get Bank Information
    public function getBankInfo($booking_id){

        $bankInfo = Bank::all();

        $singleBankInfo = Bank::find($booking_id);

        return [$bankInfo , $singleBankInfo] ;

    }


    // separate mode
    // public function separateMode($sales_type,$mode){



    //     if($sales_type == 'export'){

    //         if($mode == 'sea'){
    //             return $full_mode = $mode . $sales_type;
    //         }
    //         elseif ($mode == 'air') {
    //           return $full_mode = $mode . $sales_type;
    //         }else{
    //              // Multimodal data insertion
    //               $full_mode = $mode . $sales_type;
    //               Multimodal::where('name', $full_mode)->first();

    //         }

    //     }
    //     else {
    //         $sales_type = 'import';
    //         if($mode == 'sea'){
    //             return $full_mode = $mode . $sales_type;
    //         }
    //         elseif ($mode == 'air') {
    //           return $full_mode = $mode . $sales_type;
    //         }else{

    //             return $full_mode = $mode . $sales_type;
    //             Multimodal::where('name', $full_mode)->first();

    //         }
    //     }

    // }


    public function separateMode($sales_type, $mode, $insertedBooking, $name, $transports)
{
    $full_mode = $mode . ($sales_type == 'export' ? $sales_type : 'import');

    $insertMultimodal =   Multimodal::create([
        'booking_id' => $insertedBooking,
        'name' => $name,
        'mode' => $full_mode,
        'transports' => $transports,

    ]);

    if ($sales_type == 'export' || $sales_type == 'import') {
        if ($mode == 'sea' || $mode == 'air') {
            // Handle single mode
            $insertMultimodal;

        } else {
            // Handle multimodal data

            $insertMultimodal;

        //    Multimodal::create([
        //         'booking_id' => $insertedBooking,
        //         'name' => $name,
        //         'mode' => $full_mode,
        //         'transports' => $transports,
        //     ]);
        }
    }
}


    public function ShippingPlan($booking_id){

    }
    public function LoadingPlan($booking_id){

    }
    public function VesselPlan($booking_id){

    }


    // public function calculateChargeableWeight($gwt,$mwt){

    //     $grossWeightCal = $mwt * 167 ;

    //     if ($grossWeightCal > $gwt){

    //         $chargeableWeight = $grossWeightCal;

    //     }
    //     else{
    //         $chargeableWeight = $gwt;

    //     }

    //     return $chargeableWeight;


    // }

}


$BookedList = new BookingRepository();
?>