<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('Invoice_model');
    }
    function _remap($id){
        $this->index($id);
    }

    public function index($bookingID){
        $data['style'] = $this->load->view('include/style.php',NULL,TRUE);
        $data['script'] = $this->load->view('include/script.php',NULL,TRUE);
        $data['invoice'] = $this->Invoice_model->getInvoice($bookingID);
        $this->load->view("pages/Invoice.php",$data);
    }
}