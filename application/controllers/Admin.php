<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('home_model');
        $this->load->model('admin_model');
        $this->load->helper('file');
        $this->load->library('form_validation');
        $this->load->library('form_validation');
    }
	public function index(){
        if($this->session->userdata('userID') != 'ADMIN'){
            redirect('Home');
        }
        if($this->input->post('search')){
            $data['listHotel'] = $this->admin_model->search_hotel($this->input->post('search'));
        }else{
            $data['listHotel'] = $this->admin_model->list_hotel();
        }
        $data['style'] = $this->load->view('include/style.php',NULL,TRUE);
        $data['script'] = $this->load->view('include/script.php',NULL,TRUE);
        $data['sidebar'] = $this->load->view('sidebar/sidenavAdmin.php',$data,TRUE);
        $this->load->view('pages/HomeAdmin.php',$data);
	}

    public function editHotel(){
        if($this->session->userdata('userID') != 'ADMIN'){
            redirect('Home');
        }
        $id = $this->uri->segment(3);

        $config['upload_path'] = './image_for_captcha/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 10240;
		$config['max_width'] = 5000;
		$config['max_height'] = 5000;

		$this->load->library('upload', $config);
        if($this->input->post('updateHotel')){
            $this->form_validation->set_rules('rating','Rating','less_than_equal_to[5]|greater_than_equal_to[0]');
            $this->form_validation->set_rules('hnumber','Hotel Number','numeric|max_length[13]');
            if($this->form_validation->run() != false){
                if (!$this->upload->do_upload('hotelPict')) {
                    $values = array(
                        'HotelName' => $this->input->post('hotelName'),
                        'Rating' => $this->input->post('rating'),
                        'Address' => $this->input->post('address'),
                        'Number' => $this->input->post('hnumber'),
                        'Description' => $this->input->post('description')
                    );
                }else{
                    $imagedata = $this->upload->data();
                    $image = file_get_contents($imagedata['full_path']);
                    $values = array(
                        'Pict' => $image,
                        'HotelName' => $this->input->post('hotelName'),
                        'Rating' => $this->input->post('rating'),
                        'Address' => $this->input->post('address'),
                        'Number' => $this->input->post('hnumber'),
                        'Description' => $this->input->post('description')
                    );
                }
            $this->admin_model->updateHotel($values,$id);
            delete_files("image_for_captcha");
            redirect('Admin/editHotel/'.$id);
            }; 
        }
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
        if($this->input->post('updatePhoto')){
            if($this->upload->do_upload('hotelFacilityPict')){
                $imagedata = $this->upload->data();
                $image = file_get_contents($imagedata['full_path']);
                $values = array(
                    'Pict' => $image
                );
                $this->admin_model->update_img_hotel($values,$this->input->post('imageID'),$id);
                delete_files("image_for_captcha");
            }
            redirect('Admin/editHotel/'.$id);
        }
        if($this->input->post('addRoom')){
            $this->form_validation->set_rules('rqty','Quantity','numeric');
            $this->form_validation->set_rules('roomPrice','Room Price','numeric');
            if($this->form_validation->run() != false){
                if ($this->upload->do_upload('roomPict')) {
                    $imagedata = $this->upload->data();
                    $image = file_get_contents($imagedata['full_path']);    
                    $values = array(
                        'HotelID' => $id,
                        'Pict' => $image,
                        'RoomID' => $this->input->post('roomID'),
                        'RoomName' => $this->input->post('roomName'),
                        'Qty' => $this->input->post('rqty'),
                        'Price' => $this->input->post('roomPrice'),
                        'Facility' => $this->input->post('roomFacilities')
                    );
                }
            $this->admin_model->addRoom($values);
            delete_files("image_for_captcha");
            redirect('Admin/editHotel/'.$id);
            }
        }
        if($this->input->post('editRoom')){
            $this->form_validation->set_rules('rqty','Quantity','numeric');
            $this->form_validation->set_rules('editroomPrice','Room Price','numeric');
            if($this->form_validation->run() != false){
                if ($this->upload->do_upload('editroomPict')) {
                    $imagedata = $this->upload->data();
                    $image = file_get_contents($imagedata['full_path']);    
                    $values = array(
                        'Pict' => $image,
                        'RoomName' => $this->input->post('editroomName'),
                        'Qty' => $this->input->post('rqty'),
                        'Price' => $this->input->post('editroomPrice'),
                        'Facility' => $this->input->post('editroomFacilities')
                    );
                }else{
                    $values = array(
                        'RoomName' => $this->input->post('editroomName'),
                        'Qty' => $this->input->post('rqty'),
                        'Price' => $this->input->post('editroomPrice'),
                        'Facility' => $this->input->post('editroomFacilities')
                    );
                }
                $this->admin_model->editRoom($values,$id,$this->input->post('editroomID'));
                delete_files("image_for_captcha");
                redirect('Admin/editHotel/'.$id);
            }
        }
        $data['hotel'] = $this->admin_model->hotelDetail($id);
        if($data['hotel'] == NULL){
            show_404();
        }
        $data['facility'] = $this->admin_model->facilityDetail($id);
        $data['room'] = $this->admin_model->roomDetail($id);
        $data['style'] = $this->load->view('include/style.php',NULL,TRUE);
        $data['script'] = $this->load->view('include/script.php',NULL,TRUE);
        $data['sidebar'] = $this->load->view('sidebar/sidenavAdmin.php',$data,TRUE);
        $data['lastroom'] = $this->admin_model->get_lastroom($id);
        $this->load->view('pages/EditHotel.php',$data);
    }
    public function BookHistory(){
        if($this->session->userdata('userID') != 'ADMIN'){
            redirect('Home');
        }
        $bookid = $this->uri->segment(3);
        if($bookid != NULL){
            redirect('Invoice/'.$bookid);
        }
        
        $data['style'] = $this->load->view('include/style.php',NULL,TRUE);
        $data['script'] = $this->load->view('include/script.php',NULL,TRUE);
        $data['sidebar'] = $this->load->view('sidebar/sidenavAdmin.php',$data,TRUE);
        $data['listBook'] = $this->admin_model->get_book();
        $this->load->view('pages/HistoryAdmin.php',$data);
    }
    public function AddHotel(){
        if($this->session->userdata('userID') != 'ADMIN'){
            redirect('Home');
        }
        $config['upload_path'] = './image_for_captcha/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 10240;
		$config['max_width'] = 5000;
		$config['max_height'] = 5000;

		$this->load->library('upload', $config);
        if($this->input->post('addHotel')){
            $this->form_validation->set_rules('rating','Rating','less_than_equal_to[5]|greater_than_equal_to[0]');
            $this->form_validation->set_rules('hnumber','Hotel Number','numeric|max_length[13]');
            $this->form_validation->set_rules('rqty','Quantity','numeric');
            $this->form_validation->set_rules('roomPrice','Room Price','numeric');
            if($this->form_validation->run() != false){
                $this->upload->do_upload('hotelPict');
                    $imagedata = $this->upload->data();
                    $hotelPict = file_get_contents($imagedata['full_path']);  
                
                $this->upload->do_upload('hotelPict1');
                $imagedata = $this->upload->data();
                $hotelPict1 = file_get_contents($imagedata['full_path']); 
                $this->upload->do_upload('hotelPict2');
                $imagedata = $this->upload->data();
                $hotelPict2 = file_get_contents($imagedata['full_path']); 
                $this->upload->do_upload('hotelPict3');
                $imagedata = $this->upload->data();
                $hotelPict3 = file_get_contents($imagedata['full_path']); 
                $this->upload->do_upload('roomPict');
                $imagedata = $this->upload->data();
                $roomPict = file_get_contents($imagedata['full_path']); 
                
                
                $hotel = array(
                    'Pict' => $hotelPict,
                    'HotelID' => $this->input->post('hotelID'),
                    'HotelName' => $this->input->post('hotelName'),
                    'Rating' => $this->input->post('rating'),
                    'Address' => $this->input->post('address'),
                    'Number' => $this->input->post('hnumber'),
                    'Description'=> $this->input->post('description')
                );
                $MeetingRoom = 0;$SwimmingPool = 0;$Restaurant = 0;
                $Spa = 0;$Gym = 0;$Bar = 0;$WiFi = 0;$Receptionist24 = 0;$PUAirport = 0;
                if($this->input->post('MeetingRoom')){$MeetingRoom = 1;}
                if($this->input->post('SwimmingPool')){$SwimmingPool = 1;}
                if($this->input->post('Restaurant')){$Restaurant = 1;}
                if($this->input->post('Spa')){$Spa = 1;}
                if($this->input->post('Gym')){$Gym = 1;}
                if($this->input->post('Bar')){$Bar = 1;}
                if($this->input->post('WiFi')){$WiFi = 1;}
                if($this->input->post('Receptionist24')){$Receptionist24 = 1;}
                if($this->input->post('PUAirport')){$PUAirport = 1;}
                $facility = array(
                    'HotelID' => $this->input->post('hotelID'),
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
                $room = array(
                    'HotelID' => $this->input->post('hotelID'),
                    'Pict' => $roomPict,
                    'RoomID' => $this->input->post('roomID'),
                    'RoomName' => $this->input->post('roomName'),
                    'Qty' => $this->input->post('rqty'),
                    'Price' => $this->input->post('roomPrice'),
                    'Facility' => $this->input->post('roomFacilities')
                );
                $imageHotel1 = array (
                    'HotelID' => $this->input->post('hotelID'),
                    'ImageID' => '1',
                    'Pict' => $hotelPict1
                );
                $imageHotel2 = array (
                    'HotelID' => $this->input->post('hotelID'),
                    'ImageID' => '2',
                    'Pict' => $hotelPict2
                );
                $imageHotel3 = array (
                    'HotelID' => $this->input->post('hotelID'),
                    'ImageID' => '3',
                    'Pict' => $hotelPict3
                );
            $this->admin_model->AddHotel($hotel,$facility,$room,$imageHotel1,$imageHotel2,$imageHotel3);
            delete_files("image_for_captcha");
            redirect('Admin');
            }
        }
        $data['style'] = $this->load->view('include/style.php',NULL,TRUE);
        $data['script'] = $this->load->view('include/script.php',NULL,TRUE);
        $data['sidebar'] = $this->load->view('sidebar/sidenavAdmin.php',$data,TRUE);
        $data['lastHotel'] = $this->admin_model->last_hotel();
        $this->load->view('pages/HotelForm.php',$data);
    }

    public function DeleteHotel(){
        if($this->session->userdata('userID') != 'ADMIN'){
            redirect('Home');
        }
        $id = $this->uri->segment(3);
        $this->admin_model->DeleteHotel($id);
        redirect('Admin');
    }
    public function DeleteRoom(){
        if($this->session->userdata('userID') != 'ADMIN'){
            redirect('Home');
        }
        $id = $this->uri->segment(3);
        $this->admin_model->DeleteRoom($id);
        redirect('Admin');
    }
}
?>