<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('home_model');
        $this->load->model('admin_model');
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

    public function editHotel(){
        $id = $this->uri->segment(3);
        if($this->input->post('updateHotelFacility')){
            $MeetingRoom = 0;
            $SwimmingPool = 0;
            $Restaurant = 0;
            $Spa = 0;
            $Gym = 0;
            $Bar = 0;
            $WiFi = 0;
            $Receptionist24 = 0;
            $PUAirport = 0;
            if($this->input->post('MeetingRoom')){
                $MeetingRoom = 1;
            }
            if($this->input->post('SwimmingPool')){
                $SwimmingPool = 1;
            }
            if($this->input->post('Restaurant')){
                $Restaurant = 1;
            }
            if($this->input->post('Spa')){
                $Spa = 1;
            }
            if($this->input->post('Gym')){
                $Gym = 1;
            }
            if($this->input->post('Bar')){
                $Bar = 1;
            }
            if($this->input->post('WiFi')){
                $WiFi = 1;
            }
            if($this->input->post('Receptionist24')){
                $Receptionist24 = 1;
            }
            if($this->input->post('PUAirport')){
                $PUAirport = 1;
            }
            $values = array(
                'MeetingRoom'   => $MeetingRoom,
                'SwimmingPool'  => $SwimmingPool,
                'Restaurant'    => $Restaurant,
                'Spa'           => $Spa,
                'Gym'           => $Gym,
                'Bar'           => $Bar,
                'WiFi'          => $WiFi,
                'Receptionist24'=> $Receptionist24,
                'PUAirport'     => $PUAirport
            );
            $this->admin_model->updateFacility($values,$id);
            redirect('Admin/editHotel/'.$id);
        }
        $data['hotel'] = $this->admin_model->hotelDetail($id);
        $data['facility'] = $this->admin_model->facilityDetail($id);
        $data['room'] = $this->admin_model->roomDetail($id);
        $data['style'] = $this->load->view('include/style.php',NULL,TRUE);
        $data['script'] = $this->load->view('include/script.php',NULL,TRUE);
        $data['sidebar'] = $this->load->view('sidebar/sidenavAdmin.php',$data,TRUE);
        $this->load->view('pages/edithotel.php',$data);
    }
}
?>