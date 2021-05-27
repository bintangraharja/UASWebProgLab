<?php

Class User_model extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }

    public function login($email, $password){
        $email = $this->db->escape($email);
        $password = $this->db->escape($password);
        $query = $this->db->query("Select * From account WHERE Email = $email AND Password = $password LIMIT 1");
        return $query->row_array();
    }
    public function register($account){
        $this->db->insert('account', $account);
    }
    public function getDetailAcc($userid){
        $query = $this->db->query("SELECT * FROM account WHERE UserID = $userid");
        return $query->row_array();
    }
    public function get_image(){
        $result = $this->db->query("SELECT * FROM account");
        foreach($result->result_array() as $pp){
            $image = $pp['Pict'];
        }
        echo $image;
 }
}

?>