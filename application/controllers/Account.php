<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index(){
        if($this->session->userdata('status')){
        $data['style'] = $this->load->view('include/style.php',NULL,TRUE);
        $data['script'] = $this->load->view('include/script.php',NULL,TRUE);
        $data['sidebar'] = $this->load->view('sidebar/sidenavIn.php',$data,TRUE);
        $data['user'] = $this->User_model->getDetailAcc($this->session->userdata('userID'));
        $this->load->view('pages/MyAccount.php',$data);
        }
        else{
           redirect('Home');
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }
    public function getImg(){
        $this->User_model->get_image();
    }
}