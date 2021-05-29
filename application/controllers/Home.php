<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('home_model');

    }
	public function index()
	{
        if($this->session->userdata('userID') == 'ADMIN'){
            redirect('Admin');
        }
        if($this->input->post('search')){
            $data['listHotel'] = $this->home_model->search_hotel($this->input->post('search'));
        }else{
            $data['listHotel'] = $this->home_model->list_hotel();
        }
        $data['style'] = $this->load->view('include/style.php',NULL,TRUE);
        $data['script'] = $this->load->view('include/script.php',NULL,TRUE);
        if($this->session->userdata('status')){
            $data['sidebar'] = $this->load->view('sidebar/sidenavIn.php',$data,TRUE);
        }
        else{
            $data['sidebar'] = $this->load->view('sidebar/sidenav.php',$data,TRUE);
        }
        $this->load->view('pages/homepage.php',$data);
	}
    public function showImg(){
        $id = $this->uri->segment(3);
        $this->home_model->get_image($id);
    }
}
?>