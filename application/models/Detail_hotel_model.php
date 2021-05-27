<?php


Class Detail_hotel_model extends CI_Model{

    function construct(){
        parent::construct();
    }
    function get_detail($id){
       $query = $this->db->query("SELECT * FROM hotel WHERE HotelID = '$id'");
       return $query->result_array();
    }
    function get_room($id){
        $query = $this->db->query("SELECT * FROM room WHERE HotelID = '$id'");
        return $query->result_array();
    }
    function get_facility($id){
        $query = $this->db->query("SELECT * FROM facilityhotel WHERE HotelID = '$id'");
        return $query->result_array();
    }

    function get_hotel_image($id, $HotelID){
        $query = $this->db->query("Select * From imagehotel WHERE ImageID = '$id' AND HotelID = '$HotelID'");
        foreach($query->result_array() as $data){
            $image = $data['Pict'];
        }
        echo $image;
    }
    function get_room_image($Rid,$Hid){
        $query = $this->db->query("Select * From room WHERE RoomID = '$Rid' AND HotelID = '$Hid'");
        foreach($query->result_array() as $data){
            $image = $data['Pict'];
        }
        echo $image;
    }
}
?>