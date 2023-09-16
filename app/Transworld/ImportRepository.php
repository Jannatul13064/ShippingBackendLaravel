<?php
namespace App\Transworld;

use App\Models\AirImports;
use App\Models\SeaImports;

class ImportRepository implements InterFaceImportRepository{

        public function getSeaImports(){

            return SeaImports::all();

        }

        public function getAirImports(){

            return AirImports::all();

        }

        public function createSeaImport(array $data){
            SeaImports::insert([
                $freight_term = ['pre-paid','collected'],
            'freight_term' =>$data[$freight_term],

            $sales_type = ['export','import'],
            'sales_type'=>$data[$sales_type],

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
            ]);

        }
        public function getSingleSeaImport($id){
            return SeaImports::find($id);

        }
        public function editSeaImport($id){
            return SeaImports::find($id);

        }
        public function updateSeaImport($id ,array $data){
            SeaImports::find($id)->update([
                $freight_term = ['pre-paid','collected'],
            'freight_term' =>$data[$freight_term],

            $sales_type = ['export','import'],
            'sales_type'=>$data[$sales_type],

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
            ]);

        }
        public function createAirImport(array $data){
            AirImports::insert([
            $freight_term = ['pre-paid','collected'],
            'freight_term' =>$data[$freight_term],
            $multimodal_status = [true,false],
            'multimodal_status'=>$data[$multimodal_status],
            $freight_term = ['pre-paid','collected'],
            'freight_term'=>$data[$freight_term],
            $sales_type = ['export','import'],
            'sales_type'=>$data[$sales_type],
            $shipper_bank=['bank1','bank2','bank3'],
            'shipper_bank'=>$data[$shipper_bank],
            'key_account'=>$data['key_account'],
            'shipper_name)'=>$data['shipper_name'],
            'shipper_address'=>$data['shipper_address'],
            $agreement_type = ['agreement1','agreement2','agreement3'],
            'agreement_type'=>$data[$agreement_type],
            'agent_name'=>$data['agent_name'],
            'agent_address'=>$data['agent_address'],
            'agent_emergency_address'=>$data['agent_emergency_address'],
            'agent_contact_no'=>$data['agent_contact_no'],
            'agent_bank_acc'=>$data['agent_bank_acc'],
            'gross_weight'=>$data['gross_weight'],
            'measurement_weight'=>$data['measurement_weight'],
            'changeable_weight'=>$data['changeable_weight'],
            'number_of_container'=>$data['number_of_container'],
            'consignee_name'=>$data['consignee_name'],
            'consignee_address' =>$data['consignee_address'],
            'consignee_bank_acc' =>$data['consignee_bank_acc'],
            'consignee_account_type' =>$data['consignee_account_type'],

            $commodity_type = ['general
            ','perishable','danger','oversized'],
            'commodity_type'=>$data[$commodity_type],

            'commercial_invoice_no'=> $data['commercial_invoice_no'],
            'pol'=>$data['pol'],
            'pod'=>$data['pod'],
            'hbl'=>$data['hbl'],
            'mbl'=>$data['mbl'],
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
        public function getSingleAirImport($id){

            return AirImports::find($id);

        }
        public function editAirImport($id){

            return AirImports::find($id);

        }
        public function updateAirImport($id ,array $data){

            AirImports::find($id)->update([
            $freight_term = ['pre-paid','collected'],
            'freight_term' =>$data[$freight_term],
            $multimodal_status = [true,false],
            'multimodal_status'=>$data[$multimodal_status],
            $freight_term = ['pre-paid','collected'],
            'freight_term'=>$data[$freight_term],
            $sales_type = ['export','import'],
            'sales_type'=>$data[$sales_type],
            $shipper_bank=['bank1','bank2','bank3'],
            'shipper_bank'=>$data[$shipper_bank],
            'key_account'=>$data['key_account'],
            'shipper_name)'=>$data['shipper_name'],
            'shipper_address'=>$data['shipper_address'],
            $agreement_type = ['agreement1','agreement2','agreement3'],
            'agreement_type'=>$data[$agreement_type],
            'agent_name'=>$data['agent_name'],
            'agent_address'=>$data['agent_address'],
            'agent_emergency_address'=>$data['agent_emergency_address'],
            'agent_contact_no'=>$data['agent_contact_no'],
            'agent_bank_acc'=>$data['agent_bank_acc'],
            'gross_weight'=>$data['gross_weight'],
            'measurement_weight'=>$data['measurement_weight'],
            'changeable_weight'=>$data['changeable_weight'],
            'number_of_container'=>$data['number_of_container'],
            'consignee_name'=>$data['consignee_name'],
            'consignee_address' =>$data['consignee_address'],
            'consignee_bank_acc' =>$data['consignee_bank_acc'],
            'consignee_account_type' =>$data['consignee_account_type'],

            $commodity_type = ['general
            ','perishable','danger','oversized'],
            'commodity_type'=>$data[$commodity_type],

            'commercial_invoice_no'=> $data['commercial_invoice_no'],
            'pol'=>$data['pol'],
            'pod'=>$data['pod'],
            'hbl'=>$data['hbl'],
            'mbl'=>$data['mbl'],
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

}

?>