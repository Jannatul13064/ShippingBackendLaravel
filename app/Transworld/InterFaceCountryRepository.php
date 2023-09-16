<?php

    namespace App\Transworld;

    interface InterFaceCountryRepository{

        public function getAllCountry();

        public function editCountry($id);

        public function updateCountry($id,array $data);


    }

?>