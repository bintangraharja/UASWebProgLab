<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookingForm extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('bookingform_model');
        $this->load->library('form_validation');

    }
    function _remap($method){
        if($this->session->userdata('status')){
            if($method === 'index'){
                show_404();
            }else if($method === 'form'){
                $this->index();
            }else{
                show_404();
            }
        }else{
            redirect('Login');
        }
    }
   
	public function index()
	{
        if($this->input->post('submit')){
            $this->form_validation->set_rules('PNumber','Phone Number','numeric|max_length[13]');
			if($this->form_validation->run() != false){
                $this->load->helper('date');
                date_default_timezone_set('Asia/Jakarta');
                $format = '%D, %d %M %Y - %H:%i:%s WIB';
                $now = mdate($format);
                $values = array(
                     'BookingID'   => "",
                     'UserID'      => $this->session->userdata('userID'),
                     'HotelID'     => $this->input->post('HotelID'),
                     'RoomID'      => $this->input->post('RoomID'),
                     'GName'       => $this->input->post('GName'),
                     'PNumber'     => $this->input->post('PNumber'),
                     'Email'       => $this->input->post('Email'),
                     'RoomQty'     => $this->input->post('RoomQty'),
                     'CheckIn'     => $this->input->post('CheckIn'),
                     'CheckOut'    => $this->input->post('CheckOut'),
                     'Subtotal'    => $this->input->post('Subtotal'),
                     'Duration'    =>$this->input->post('Duration'),
                     'BookingTime' => $now
                    );
                    //print_r($values);exit;
                $id = $this->bookingform_model->addBook($values);
                redirect('Invoice/'.$id);
            }
        }
        $hotelid= $this->uri->segment(3);
        $roomid = $this->uri->segment(4);
        $data['dataForm'] = $this->bookingform_model->get_data_form($hotelid,$roomid);
        $data['style'] = $this->load->view('include/style.php',NULL,TRUE);
        $data['script'] = $this->load->view('include/script.php',NULL,TRUE);
        
		$this->load->view('pages/BookingForm.php',$data);
	}
}
?>