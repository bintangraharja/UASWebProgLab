<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookingHistory extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("History_model");
    }

    public function index(){
        if(!$this->session->userdata('status')){
			redirect('Login');
		}
        $data['style'] = $this->load->view('include/style.php',NULL,TRUE);
        $data['script'] = $this->load->view('include/script.php',NULL,TRUE);
        $data['sidebar'] = $this->load->view('sidebar/sidenavIn.php',$data,TRUE);
        $data['history'] = $this->History_model->getHistory($this->session->userdata('userID'));
        $this->load->view('pages/bookinghistory.php',$data);
    }
}