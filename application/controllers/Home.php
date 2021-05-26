<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('home_model');

    }
	public function index()
	{
        $data['style'] = $this->load->view('include/style.php',NULL,TRUE);
        $data['script'] = $this->load->view('include/script.php',NULL,TRUE);
        $data['sidebar'] = $this->load->view('sidebar/sidenav.php',$data,TRUE);
		$data['listHotel'] = $this->home_model->list_hotel();
        $this->load->view('pages/homepage.php',$data);
	}
    public function showImg(){
        $id = $this->uri->segment(3);
        $this->home_model->get_image($id);
    }
}
?>