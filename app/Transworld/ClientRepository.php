<?php
namespace App\Transworld;

use App\Models\Client;

class ClientRepository implements InterFaceClientRepository{


    public function getAllClient(){

        return Client::all();

    }
    public function createClient(array $data){

        Client::insert([
            'country_code' =>$data['country_code'],
            'client_name' =>$data['client_name'],
            'client_address' =>$data['client_address'],
            'client_email' =>$data['client_email'],
            'client_phone' =>$data['client_phone'],
            'client_bin_no' =>$data['client_bin_no'],
            $client_bank_status = ['LC Issuing','LC Receiving'],
            'client_bank_status' =>$data[$client_bank_status],

            $client_status = ['agent','shipper','consignee'],
            'client_status' =>$data[$client_status],
            'country_code' =>$data['country_code'],
            'note' =>$data['note']
        ]);


    }


    public function singleClient($id){

        return Client::find($id);

    }


    public function editClient($id){

        return Client::find($id);
    }


    public function updateClientInfo($id,array $data){
        Client::find($id)->Update([
            'country_code' =>$data['country_code'],
            'client_name' =>$data['client_name'],
            'client_address' =>$data['client_address'],
            'client_email' =>$data['client_email'],
            'client_phone' =>$data['client_phone'],
            'client_bin_no' =>$data['client_bin_no'],
            $client_bank_status = ['LC Issuing','LC Receiving'],
            'client_bank_status' =>$data[$client_bank_status],
            $client_status = ['agent','shipper','consignee'],
            'client_status' =>$data[$client_status],
            'country_code' =>$data['country_code'],
            'note' =>$data['note']

        ]);
    }

}
?>
