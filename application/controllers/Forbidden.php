<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forbidden extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $data['style'] = $this->load->view('include/style.php',NULL,TRUE);
        $data['script'] = $this->load->view('include/script.php',NULL,TRUE);
        $this->load->view("pages/Forbidden.php",$data);
    }
}