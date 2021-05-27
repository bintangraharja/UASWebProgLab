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
    function addBook($values){
        $this->db->insert('booking',$values);
        $insertId = $this->db->insert_id();
        $roomID = $values['RoomID'];
        $qty = $values['RoomQty'];
        $this->db->query("UPDATE room SET Qty = Qty - $qty WHERE RoomID = '$roomID'");
        return  $insertId;
    }
    
}
?>