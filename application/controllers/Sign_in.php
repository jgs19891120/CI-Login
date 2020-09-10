<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_in extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Signin_model');
		$this->load->helper('cookie');
	}

	public function index()
	{
		$this->load->view('signin_view');
	}

	function auth() {
		$username  = $this->input->post('username',TRUE);
		$password  = $this->input->post('password',TRUE);
		$result    = $this->Signin_model->check_user($username, $password);
		if($result->num_rows() > 0) {
			$data  = $result->row_array();
			$name  = $data['username'];
			$email = $data['email'];
			$level = $data['level'];
			$sesdata = array(
				'username'  => $username,
				'email'			=> $email,
				'level'     => $level,
				'logged_in' => TRUE
			);
			// $this->session->set_userdata($sesdata);
			if($level === '1') {
				$cookie= array(  
					'name'   =>  $username,
					'password'  => md5(password_hash($password, PASSWORD_DEFAULT)),
					'expire' => '3600',
				);
				$this->input->set_cookie($cookie);
				
				echo "<script>
						alert('access successed!');
					  </script>";
			} 
			}else {
				echo "<script>
					alert('access is wrong!');
					history.go(-1);
					</script>";
			}
	}
}
