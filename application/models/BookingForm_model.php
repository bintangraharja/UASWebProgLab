<?php
Class BookingForm_model extends CI_Model{

    function __construct(){
        parent::__construct();
    }
    function get_data_form($Hid,$Rid){
        $query = $this->db->query(
            "SELECT hotel.HotelID,`Number`,`HotelName`,`Address`,`RoomName`,`Qty` ,`Price`, room.RoomID
            FROM `hotel` 
            JOIN `room` ON RoomID = '$Rid'
            WHERE hotel.HotelID = '$Hid'");
        return $query->result_array();
    }
    function addBook($values){
        $this->load->helper('string');
        $bookid = random_string('numeric',8);
        $q = $this->db->query("SELECT BookingID FROM booking");
        foreach($q as $cek){
            if($cek == $bookid){
                $bookid = random_string('numeric',11);    
        
            }
        }
        $values['BookingID'] = $bookid;
        $this->db->insert('booking',$values);
        $roomID = $values['RoomID'];
        $qty = $values['RoomQty'];
        $this->db->query("UPDATE room SET Qty = Qty - $qty WHERE RoomID = '$roomID'");
        return  $bookid;
    }
    
}
?>