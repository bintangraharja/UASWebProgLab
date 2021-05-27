<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookingHistory extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $data['style'] = $this->load->view('include/style.php',NULL,TRUE);
        $data['script'] = $this->load->view('include/script.php',NULL,TRUE);
        if($this->session->userdata('status')){
            $data['sidebar'] = $this->load->view('sidebar/sidenavIn.php',$data,TRUE);
        }
        else{
            $data['sidebar'] = $this->load->view('sidebar/sidenav.php',$data,TRUE);
        }
        $this->load->view('pages/bookinghistory.php',$data);
    }
}