<?php

namespace App\Transworld;

    interface InterFaceImportRepository{

        // public function getAllProducts();

        public function getSeaImports();

        public function getAirImports();

        public function createSeaImport(array $data);
        public function getSingleSeaImport($id);
        public function editSeaImport($id);
        public function updateSeaImport($id ,array $data);
        public function createAirImport(array $data);
        public function getSingleAirImport($id);
        public function editAirImport($id);
        public function updateAirImport($id ,array $data);
    }


?>
