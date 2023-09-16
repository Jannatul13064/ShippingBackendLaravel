<?php
namespace App\Transworld;

interface InterFaceBookingRepository {

    public function getAllBookingList();
    public function createBooking(array $data);
    public function editBookingList($id);
    public function updateBookingList($id,array $data);
    public function generateBlNo($created_at);
    public function fetchAgent();
    public function getBankInfo($id);
    public function separateMode($sales_type, $mode, $insertedBooking, $name, $transports);
    public function generateSubmitNotification();
    public function ShippingPlan();
    public function LoadingPlan();
    public function VesselPlan();
    public function calculateChargeableWeight($gwt,$mwt);
}

?>
