<?php

    namespace App\Tansworld;

use App\Models\Carrier;
use App\Transworld\InterfaceCarrierRepository;

    class CarrierRepository implements InterFaceCarrierRepository{

        public function getAllCarrier(){

            return Carrier::all();
        }

        public function singleCarrier($id)
        {
            $single_carrier = Carrier::find($id);
            return $single_carrier;
        }

        public function updateCarrier($id,array $data){
            Carrier::find($id)->update([
                'country_code'=>$data['country_code'],
                'country_name'=>$data['country_name'],
                'address'=>$data['address'],
                'phone'=>$data['phone'],
                'email'=>$data['email'],
                'emergency_office_address'=>$data['emergency_office_address'],
                'emergency_designation'=>$data['emergency_designation'],
                'emergency_mail'=>$data['emergency_mail'],
                'emergency_phone'=>$data['emergency_phone'],
            ]);
        }

    }

?>
