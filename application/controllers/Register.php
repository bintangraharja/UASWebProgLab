<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("User_model");
		$this->load->library('form_validation');
		$this->load->helper('file');
	}

	public function index()
	{
		if($this->input->post('signUp')){
			$config['upload_path'] = './image_for_captcha/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 10240;
			$config['max_width'] = 5000;
			$config['max_height'] = 5000;

			$this->load->library('upload', $config);

			$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
			$this->form_validation->set_rules('passwordconf','Password Confirmation','matches[password]');
			$this->form_validation->set_rules('pnumber','Phone Number','numeric|max_length[13]');
			if($this->form_validation->run() != false){
				if (!$this->upload->do_upload('ppicture')) {
					$account = array(
						'UserID' => "",
						'Fname' => $this->input->post('fname'),
						'Lname' => $this->input->post('lname'),
						'Email' => $this->input->post('email'),
						'Password' => md5($this->input->post('password')),
						'BDay' => $this->input->post('bdate'),
						'PNumber' => $this->input->post('pnumber')
					);
				} else {
					$imagedata = $this->upload->data();
					$image = file_get_contents($imagedata['full_path']);
					$account = array(
						'UserID' => "",
						'Pict' => $image,
						'Fname' => $this->input->post('fname'),
						'Lname' => $this->input->post('lname'),
						'Email' => $this->input->post('email'),
						'Password' => md5($this->input->post('password')),
						'BDay' => $this->input->post('bdate'),
						'PNumber' => $this->input->post('pnumber')
					);	
				}
				$this->User_model->register($account);
				delete_files("image_for_captcha");
				redirect('login');
			}
		}
        
		$data['style'] = $this->load->view('include/style.php',NULL,TRUE);
        $data['script'] = $this->load->view('include/script.php',NULL,TRUE);
		$data['sidebar'] = $this->load->view('sidebar/sidenav.php',$data,TRUE);
        
		$this->load->view('pages/Register.php',$data);
	}
}
?>