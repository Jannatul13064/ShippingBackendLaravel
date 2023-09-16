<?php
    namespace App\Transworld;

use App\Models\Vessel;

    class VesselRepository implements InterFaceVesselRepository{


        public function getAllVessel(){

            return Vessel::all();

        }
        public function singleVessel($id){

            $singleVessel = Vessel::find($id);

            return $singleVessel;

        }
        public function addVessel(array $data){


            $insertToDB = Vessel::insert([
                'country_code'=>$data['country_code'],
                'vessel_name'=>$data['vessel_name'],
                'vessel_type'=>$data['vessel_type'],
                'vessel_contact'=>$data['vessel_contact'],
                $vessel_status = ['booked','on the way'],
                'vessel_status'=>$data[$vessel_status],
            ]);

            return $insertToDB;

        }
        public function editVessel($id){

            return Vessel::find($id);

        }
        public function updateVessel($id,array $data){

            Vessel::find($id)->update([

                'country_code'=>$data['country_code'],
                'vessel_name'=>$data['vessel_name'],
                'vessel_type'=>$data['vessel_type'],
                'vessel_contact'=>$data['vessel_contact'],
                $vessel_status = ['booked','on the way'],
                'vessel_status'=>$data[$vessel_status],

            ]);

        }



    }


?>
