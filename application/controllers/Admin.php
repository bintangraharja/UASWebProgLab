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
	public function index()
	{
        if($this->session->userdata('userID') != 'ADMIN'){
            redirect('Home');
        }
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
            if($this->form_validation->run() != false){
                if (!$this->upload->do_upload('hotelPict')) {
                    $values = array(
                        'HotelName' => $this->input->post('hotelName'),
                        'Rating' => $this->input->post('rating'),
                        'Address' => $this->input->post('address') //,
                        //'Number' => $this->input->post('Number'),
                        //'Description' => $this->input->post('Description')
                    );
                }else{
                    $imagedata = $this->upload->data();
                    $image = file_get_contents($imagedata['full_path']);
                    $values = array(
                        'Pict' => $image,
                        'HotelName' => $this->input->post('hotelName'),
                        'Rating' => $this->input->post('rating'),
                        'Address' => $this->input->post('address')//,
                        //'Number' => $this->input->post('Number'),
                        //'Description' => $this->input->post('Description')
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

        }
        if($this->input->post('editRoom')){

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
        $this->load->view('pages/edithotel.php',$data);
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
        $data['style'] = $this->load->view('include/style.php',NULL,TRUE);
        $data['script'] = $this->load->view('include/script.php',NULL,TRUE);
        $data['sidebar'] = $this->load->view('sidebar/sidenavAdmin.php',$data,TRUE);
        $this->load->view('pages/HotelForm.php',$data);
    }
}
?>