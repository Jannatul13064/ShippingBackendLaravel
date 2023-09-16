<?php
    namespace App\Transworld;

    interface InterFaceVesselRepository {
        public function getAllVessel();
        public function singleVessel($id);
        public function addVessel(array $data);
        public function editVessel($id);
        public function updateVessel($id,array $data);

    }

?>