<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->helper('file');
	}

	public function index()
	{
		if($this->session->userdata('status')){
            redirect('home');
        }
		if($this->input->post('signIn')) {
            $captcha_insert = $this->input->post('captcha');
            $contain_sess_captcha = $this->session->userdata('valuecaptchaCode');
            if ($captcha_insert === $contain_sess_captcha) {
                $email = $this->input->post('email');
                $password = $this->input->post('password'); //md5($this->input->post('password'));
                delete_files("image_for_captcha");
                $cek = $this->User_model->login($email,$password);
                if($cek > 0){
                    $akun = $this->User_model->login($email, $password);
                    
                    $data_session = array(
                        'name' => $akun['FName'] ,
                        'userID' => $akun['UserID'],
                        'status' => "login"
                    );
                    $this->session->set_userdata($data_session);
					redirect('home');
                    // if($akun['UserID']== "1"){
                    //     redirect('admin');
                    // }else{
                    //     redirect('home');
                    // }
                }else{
                    $this->session->sess_destroy();
                    $data['failInfo'] = "Email/Password are wrong";
                }
            
            } else {
                $data['failInfo'] = "Captcha didn't match!";
            }
        }
		$config = array(
            'word' => '',
            'img_url' => base_url() . 'image_for_captcha/',
            'font_path' => FCPATH .'/assets/Font/verdana.ttf',
            'img_path' => 'image_for_captcha/',
            'img_height' => 45,
            'word_length' => 5,
            'img_width' => '150',
            'font_size' => 5 
        );
        $captcha = create_captcha($config);
        $this->session->unset_userdata('valuecaptchaCode');
        $this->session->set_userdata('valuecaptchaCode', $captcha['word']);
        $data['captchaImg'] = $captcha['image'];
        $data['style'] = $this->load->view('include/style.php',NULL,TRUE);
        $data['script'] = $this->load->view('include/script.php',NULL,TRUE);
        
		$this->load->view('pages/Login.php',$data);
	}
}
?>