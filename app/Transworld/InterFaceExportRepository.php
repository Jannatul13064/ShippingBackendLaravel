<?php

namespace App\Transworld;

    interface InterFaceExportRepository{

        // public function getAllProducts();

        public function getSeaExports();

        public function getAirExports();

        public function createSeaExport(array $data);
        public function getSingleSeaExport($id);
        public function editSeaExport($id);
        public function updateSeaExport($id ,array $data);
        public function createAirExport(array $data);
        public function getSingleAirExport($id);
        public function editAirExport($id);
        public function updateAirExport($id ,array $data);


    }


?>
