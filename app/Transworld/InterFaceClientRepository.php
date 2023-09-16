<?php
namespace App\Transworld;

interface InterFaceClientRepository{
    public function getAllClient();
    public function editClient($id);
    public function createClient(array $data);

}

?>
