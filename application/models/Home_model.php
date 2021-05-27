<?php


Class Home_model extends CI_Model{

    function construct(){
        parent::__construct();
    }
    public function list_hotel(){
        $query = $this->db->query(
        'SELECT `hotel`.`HotelID`, `HotelName`, `Rating`, `Address`, `Description` ,MIN(`Price`) as `Price`
            FROM `hotel` 
            JOIN `room` ON `hotel`.`HotelID` = `room`.`HotelID`');
        return $query->result_array();
    }
    function get_image($id){
        $query = $this->db->query("Select * From hotel WHERE HotelID= '$id'");
        foreach($query->result_array() as $hotel){
            $image = $hotel['Pict'];
        }
        echo $image;
    }
}
?>