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
    public function last_hotel(){
        $query = $this->db->query("SELECT `HotelID` FROM `hotel` WHERE 1 Order BY HotelID DESC LIMIT 1");
        return $query->row_array();
    }
    public function get_book(){
        $query = $this->db->query('SELECT BookingID, GName, Subtotal, HotelName FROM `booking` JOIN hotel');
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
        $this->db->insert('room',$values);
    }
    public function editRoom($values,$Hid,$RoomID){
        $this->db->where('HotelID',$Hid);
        $this->db->where('RoomID', $RoomID);
        $this->db->update('room',$values);
    }
    public function AddHotel($hotel,$facility,$room,$imageHotel1,$imageHotel2,$imageHotel3){
        $this->db->insert('hotel',$hotel);
        $this->db->insert('facilityhotel', $facility);
        $this->db->insert('room', $room);
        $this->db->insert('imagehotel',$imageHotel1);
        $this->db->insert('imagehotel',$imageHotel2);
        $this->db->insert('imagehotel',$imageHotel3);

    }
}
?>