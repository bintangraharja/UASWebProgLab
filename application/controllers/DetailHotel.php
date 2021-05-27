<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailHotel extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('detail_hotel_model');

    }
    function _remap($method){
        if($method === 'index'){
            show_404();
        }else{
            if($method === 'hotelImg'){
                $this->hotelImg();
            }else if($method === 'roomImg'){
                $this->roomImg();
            }else{
                $this->index($method);
            }
        }
        
    }
	public function index($HotelID)
	{
        $data['style'] = $this->load->view('include/style.php',NULL,TRUE);
        $data['script'] = $this->load->view('include/script.php',NULL,TRUE);
        if($this->session->userdata('status')){
            $data['sidebar'] = $this->load->view('sidebar/sidenavIn.php',$data,TRUE);
        }
        else{
            $data['sidebar'] = $this->load->view('sidebar/sidenav.php',$data,TRUE);
        }
        $data['detailHotel'] = $this->detail_hotel_model->get_detail($HotelID);
        if($data['detailHotel'] == NULL){
            show_404();
        }
        $data['facility'] = $this->detail_hotel_model->get_facility($HotelID);
        $data['hotelRoom'] = $this->detail_hotel_model->get_room($HotelID);
		$this->load->view('pages/detailhotel.php',$data);
	}
    public function hotelImg(){
        $HotelID = $this->uri->segment(3);
        $id = $this->uri->segment(4);
        $this->detail_hotel_model->get_hotel_image($id, $HotelID);
    }
    public function roomImg(){
        $HotelID = $this->uri->segment(3);
        $id = $this->uri->segment(4);
        $this->detail_hotel_model->get_room_image($id, $HotelID);
    }
}
?>