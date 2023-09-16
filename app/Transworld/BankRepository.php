<?php
namespace App\Transworld;

use App\Models\Bank;

class BankRepository implements InterfaceBankRepository{


    public function getBanksInfo(){

        return Bank::all();

    }


    /**
     * $table->id();
            $table->string('country_code');
            $table->string('client_name');
            $table->enum('client_role',['agent','shipper','consignee'])->default('shipper');
            $table->string('bin_no');
            $table->string('bank_name');
            $table->string('bank_branch');
            $table->string('bank_acc_no');
            $table->string('note');
     */

    public function createBank(array $data){
        Bank::insert([
            'client_name'=>$data['client_name'],
            $client_role = ['agent','shipper','consignee'],
            'client_role'=>$data[$client_role],
            'bin_no'=>'bin_no',
            'bank_name'=>'bank_name',
            'bank_branch'=>'bank_branch',
            'bank_acc_no'=>'bank_acc_no',
            'note'=>'note'
        ]);

    }
    // public function getBankInfo($id){

    //     $singleBank = Bank::find($id);
    //     return $singleBank;

    // }
    public function editBankInfo($id){

        return Bank::find($id);

    }
    public function updateBankInfo($id,array $data){

        Bank::find($id)->Update([
            'client_name'=>$data['client_name'],
            $client_role = ['agent','shipper','consignee'],
            'client_role'=>$data[$client_role],
            'bin_no'=>'bin_no',
            'bank_name'=>'bank_name',
            'bank_branch'=>'bank_branch',
            'bank_acc_no'=>'bank_acc_no',
            'note'=>'note'

        ]);


    }
}

?>
