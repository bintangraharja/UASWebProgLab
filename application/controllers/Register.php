<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("User_model");
	}

	public function index()
	{
		if($this->input->post('signUp')){
			if($this->input->post('password') != $this->input->post('passwordconf')){
				echo "Password != conf";exit;
			}
			$account = array(
				'Fname' => $this->input->post('fname'),
				'Lname' => $this->input->post('lname'),
				'Email' => $this->input->post('email'),
				'Password' => $this->input->post('password'), //md5($this->input->post('password')),
				'BDay' => $this->input->post('bdate'),
				'PNumber' => $this->input->post('pnumber')
			);
			$this->User_model->register($account);
			redirect('login');
		}
        $data['style'] = $this->load->view('include/style.php',NULL,TRUE);
        $data['script'] = $this->load->view('include/script.php',NULL,TRUE);
        
		$this->load->view('pages/Register.php',$data);
	}
}
?>