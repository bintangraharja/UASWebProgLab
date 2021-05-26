<?php
Class BookingForm_model extends CI_Model{

    function construct(){
        parent::construct();
    }
    function get_data_form($Hid,$Rid){
        $query = $this->db->query(
            "SELECT hotel.HotelID,`HotelName`,`Address`,`RoomName`,`Qty` ,`Price`, room.RoomID
            FROM `hotel` 
            JOIN `room` ON RoomID = '$Rid'
            WHERE hotel.HotelID = '$Hid'");
        return $query->result_array();
    }
    
}
?>