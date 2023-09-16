<?php

namespace App\Transworld;

interface InterfaceBankRepository{


    public function getBanksInfo();
    // public function getBankInfo($id);
    public function editBankInfo($id);
    public function updateBankInfo($id,array $data);
}


?>