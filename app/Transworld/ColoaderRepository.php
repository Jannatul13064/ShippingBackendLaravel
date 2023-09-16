<?php
namespace App\Transworld;

use App\Models\Coloader_Info;

class ColoaderRepository implements InterFaceColoaderRepository{

    public function getAllColoader(){
        Coloader_Info::all();
    }

    public function singleColoader($id){
        return Coloader_Info::find($id);
    }

    public function updateColoader($id,array $data){
        return Coloader_Info::find($id)->update([
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
