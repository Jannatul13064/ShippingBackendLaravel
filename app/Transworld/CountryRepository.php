<?php
namespace App\Transworld;

use App\Models\Country;

class CountryRepository implements InterFaceCountryRepository{

    public function getAllCountry(){
        return Country::all();
    }

    public function editCountry($id)
    {
        Country::find($id);
    }

    public function updateCountry($id, array $data)
    {
        Country::find($id)->update([
            'country_name' =>$data['country_name'],
            'country_code' =>$data['country_code'],
            'available_ports_code' =>$data['available_ports_code'],
            'total_num_agents' =>$data['total_num_agents'],
            'total_num_shipper'=>$data['total_num_shipper'],
            'total_num_consignee' =>$data['total_num_consignee'],
            'total_number_sea_ports'=>$data['total_number_sea_ports'],
            'total_number_banks'=>$data['total_number_banks']


        ]);
    }

}

?>
