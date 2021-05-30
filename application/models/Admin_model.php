<?php
Class Admin_model extends CI_Model{

    function __construct(){
        parent::__construct();
    }
    public function list_hotel(){
        $query = $this->db->query(
        'SELECT `hotel`.`HotelID`, `HotelName`, `Rating`, `Address`, `Description` ,MIN(`Price`) as `Price` 
        FROM `hotel` JOIN `room` ON `hotel`.`HotelID` = `room`.`HotelID` 
        GROUP BY `room`.`HotelID`
        ORDER BY HotelID');
        return $query->result_array();
    }
    public function search_hotel($name){
        $query = $this->db->query(
        "SELECT `hotel`.`HotelID`, `HotelName`, `Rating`, `Address`, `Description` ,MIN(`Price`) as `Price` 
        FROM `hotel` JOIN `room` ON `hotel`.`HotelID` = `room`.`HotelID`
        WHERE `Address` LIKE '%$name%'
        GROUP BY `room`.`HotelID`
        ORDER BY HotelID");
        return $query->result_array();
    }
    public function hotelDetail($id){
        $id = $this->db->escape($id);
        $query = $this->db->query("Select * From hotel WHERE HotelID= $id");
        return $query->result_array();
    }
    public function get_lastroom($id){
        $query = $this->db->query("SELECT `RoomID` FROM `room` WHERE HotelID = '$id' Order BY RoomID DESC LIMIT 1");
        return $query->row_array();
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
    public function addRoom($values){
        print_r($values['RoomID']);exit;
        $this->db->insert('room',$values);
    }
    public function editRoom($values,$Hid,$RoomID){
        $this->db->where('HotelID',$Hid);
        $this->db->where('RoomID', $RoomID);
        $this->db->update('room',$values);
    }
}
?>