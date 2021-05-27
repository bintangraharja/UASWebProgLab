<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
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
        $data['user'] = $this->User_model->getDetailAcc($this->session->userdata('userID'));
        $this->load->view('pages/myaccount.php',$data);
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }
}