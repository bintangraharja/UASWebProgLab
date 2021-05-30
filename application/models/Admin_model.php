<?php
Class Admin_model extends CI_Model{

    function __construct(){
        parent::__construct();
    }
    public function hotelDetail($id){
        $id = $this->db->escape($id);
        $query = $this->db->query("Select * From hotel WHERE HotelID= $id");
        return $query->result_array();
    }
    public function get_book(){
        $query = $this->db->query('SELECT * FROM booking');
        return $query->result_array();
    }
    public function facilityDetail($id){
        $id = $this->db->escape($id);
        $query = $this->db->query("Select * From facilityhotel WHERE HotelID= $id");
        return $query->result_array();
    }
    public function roomDetail($id){
        $id = $this->db->escape($id);
        $query = $this->db->query("Select RoomID, RoomName, Price, Facility, Qty From room WHERE HotelID= $id");
        return $query->result_array();
    }
    public function updateFacility($values, $id){
        $this->db->where("HotelID",$id);
        $this->db->update('facilityhotel', $values);
    }
    public function updateHotel($values,$id){
        $this->db->where('HotelID', $id);
        $this->db->update('hotel', $values);
    }
    public function update_img_hotel($values,$Rid,$Hid){
        $this->db->where('HotelID',$Hid);
        $this->db->where('ImageID',$Rid);
        $this->db->update('imagehotel',$values);
    }
}
?>