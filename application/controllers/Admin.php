<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('home_model');
    }
	public function index()
	{
        if($this->input->post('search')){
            $data['listHotel'] = $this->home_model->search_hotel($this->input->post('search'));
        }else{
            $data['listHotel'] = $this->home_model->list_hotel();
        }
        $data['style'] = $this->load->view('include/style.php',NULL,TRUE);
        $data['script'] = $this->load->view('include/script.php',NULL,TRUE);
        $data['sidebar'] = $this->load->view('sidebar/sidenavAdmin.php',$data,TRUE);
        $this->load->view('pages/homeadmin.php',$data);
	}
}
?>