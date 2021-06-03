<?php


Class Home_model extends CI_Model{

    function construct(){
        parent::__construct();
    }
    public function list_hotel(){
        $query = $this->db->query(
        'SELECT `hotel`.`HotelID`, `HotelName`, `Rating`, `Address`, `Description` ,MIN(`Price`) as `Price` 
        FROM `hotel` JOIN `room` ON `hotel`.`HotelID` = `room`.`HotelID` 
        GROUP BY `room`.`HotelID`
        ORDER BY HotelName');
        return $query->result_array();
    }
    function get_image($id){
        $query = $this->db->query("Select * From hotel WHERE HotelID= '$id'");
        foreach($query->result_array() as $hotel){
            $image = $hotel['Pict'];
        }
        echo $image;
    }
    public function search_hotel($name){
        $query = $this->db->query(
        "SELECT `hotel`.`HotelID`, `HotelName`, `Rating`, `Address`, `Description` ,MIN(`Price`) as `Price` 
        FROM `hotel` JOIN `room` ON `hotel`.`HotelID` = `room`.`HotelID`
        WHERE `Address` LIKE '%$name%'
        GROUP BY `room`.`HotelID`
        ORDER BY HotelName");
        return $query->result_array();
    }
    public function search_filter($name, $minPrice, $maxPrice, $rating){
        if($rating == 0){
            $query = $this->db->query(
                "SELECT `hotel`.`HotelID`, `HotelName`, `Rating`, `Address`, `Description` ,MIN(`Price`) as `Price` 
                FROM `hotel` JOIN `room` ON `hotel`.`HotelID` = `room`.`HotelID`
                WHERE `Address` LIKE '%$name%' AND `Price` > $minPrice AND `Price` < $maxPrice
                GROUP BY `room`.`HotelID`
                ORDER BY HotelName");
        }else{
            $query = $this->db->query(
                "SELECT `hotel`.`HotelID`, `HotelName`, `Rating`, `Address`, `Description` ,MIN(`Price`) as `Price` 
                FROM `hotel` JOIN `room` ON `hotel`.`HotelID` = `room`.`HotelID`
                WHERE `Address` LIKE '%$name%' AND `Price` > $minPrice AND `Price` < $maxPrice AND `Rating` = $rating
                GROUP BY `room`.`HotelID`
                ORDER BY HotelName");
        }
        return $query->result_array();
    }
    public function search_filter2($minPrice, $maxPrice, $rating){
        if($rating == 0){
            $query = $this->db->query(
                "SELECT `hotel`.`HotelID`, `HotelName`, `Rating`, `Address`, `Description` ,MIN(`Price`) as `Price` 
                FROM `hotel` JOIN `room` ON `hotel`.`HotelID` = `room`.`HotelID`
                WHERE `Price` > $minPrice AND `Price` < $maxPrice 
                GROUP BY `room`.`HotelID`
                ORDER BY HotelName");
        }else{
            $query = $this->db->query(
                "SELECT `hotel`.`HotelID`, `HotelName`, `Rating`, `Address`, `Description` ,MIN(`Price`) as `Price` 
                FROM `hotel` JOIN `room` ON `hotel`.`HotelID` = `room`.`HotelID`
                WHERE `Price` > $minPrice AND `Price` < $maxPrice AND `Rating` = $rating
                GROUP BY `room`.`HotelID`
                ORDER BY HotelName");
        }
        return $query->result_array();
    }
}
?>