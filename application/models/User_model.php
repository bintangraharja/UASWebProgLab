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
        $this->load->helper('string');
        $rand = random_string('numeric',4); 
        $id = 'U' . $rand;
        $q = $this->db->query("SELECT UserID FROM account");
        foreach($q as $cek){
            if($cek == $id){
                $rand = random_string('numeric',4); 
                $id = 'U' . $rand;    
            }
        }
        $account['UserID'] = $id;
        $this->db->insert('account', $account);
    }
    public function getDetailAcc($userid){
        $query = $this->db->query("SELECT * FROM account WHERE UserID = '$userid'");
        return $query->row_array();
    }
    public function get_image(){
        $id = $this->session->userdata('userID');
        $result = $this->db->query("SELECT * FROM account Where UserID = '$id' ");
        foreach($result->result_array() as $pp){
            $image = $pp['Pict'];
        }
        echo $image;
    }
    public function update($id,$account){
        $this->db->where('UserID', $id);
        $this->db->update('account', $account);

    }
}

?>