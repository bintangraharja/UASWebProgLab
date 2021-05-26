<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookingForm extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('bookingform_model');

    }
    function _remap($method){
        if($method === 'index'){
            show_404();
        }else if($method === 'form'){
            $this->index();
        }else{
            show_404();
        }
    }
   
	public function index()
	{
        $hotelid= $this->uri->segment(3);
        $roomid = $this->uri->segment(4);
        $data['dataForm'] = $this->bookingform_model->get_data_form($hotelid,$roomid);
        $data['style'] = $this->load->view('include/style.php',NULL,TRUE);
        $data['script'] = $this->load->view('include/script.php',NULL,TRUE);
        
		$this->load->view('pages/BookingForm.php',$data);
	}
}
?>