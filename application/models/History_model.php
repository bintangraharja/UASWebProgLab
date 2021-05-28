<?php
Class History_model extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }

    public function getHistory($id){
        $query = $this->db->query("SELECT 
        hotel.HotelID, hotel.pict, hotel.HotelName, hotel.Address, room.RoomName, booking.BookingID, booking.CheckIn, booking.CheckOut , booking.Duration, booking.Subtotal
        FROM booking 
        LEFT OUTER JOIN hotel ON hotel.HotelID = booking.HotelID
        LEFT OUTER JOIN room ON room.RoomID = booking.RoomID WHERE UserID = '$id'");
        return $query->result_array();
    }
}
?>