<?php

    namespace App\Transworld;

    interface InterFaceCarrierRepository{


        public function getAllCarrier();

        public function singleCarrier($id);

        public function updateCarrier($id,array $data);

    }

?>
