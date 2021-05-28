<?php


Class Invoice_model extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }

    public function getInvoice($id){
        $this->db->escape($id);
        $query = $this->db->query("SELECT 
         GName, account.UserID,booking.Email, booking.BookingID, booking.BookingTime, hotel.HotelName,
        room.RoomName, booking.RoomQty, booking.Duration, room.Price, booking.Subtotal, booking.CheckIn, booking.CheckOut
        FROM booking 
        LEFT OUTER JOIN hotel ON hotel.HotelID = booking.HotelID
        LEFT OUTER JOIN account ON account.UserID = booking.UserID
        LEFT OUTER JOIN room ON room.RoomID = booking.RoomID
        WHERE BookingID = '$id'");
        return $query->result_array();
    }
}