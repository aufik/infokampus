<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
    {   parent::__construct();

    	$this->load->model('auth_model', 'dbObject');
    }

	public function index()
	{
		$this->load->view('login');
	}

	public function login()
	{
		$username=$this->input->post('username');
		$password=md5($this->input->post('password'));
		$uresult = $this->dbObject->get_user('user_name', $username);
		$uresult2 = $this->dbObject->get_user('user_pass', $password);

		if (count($uresult) > 0)
		{	
			if(count($uresult2) > 0){
				foreach ($uresult as $row) {
					$this->session->set_userdata('login', 1);
					$this->session->set_userdata('user_id', $row->user_id);
					$this->session->set_userdata('user_name', $row->user_name);
					$this->session->set_userdata('user_level', $row->user_level);
					redirect('admin/dashboard','refresh');
				}
			}else{
				$this->session->set_userdata('login', 0);
				echo "<script> alert('password Salah...'); </script>";
				redirect('auth','refresh');		
			}
		}
		else
		{	$this->session->set_userdata('login', 0);
			echo "<script> alert('Username dan password Salah...'); </script>";
            redirect('auth','refresh');
		}

	}

	public function register()
	{
	
		$this->load->view('register');
		
		
	}

	public function logout()
	{
		$this->session->set_userdata('login', 0);
		$this->session->sess_destroy();
    	$this->session->set_flashdata('logout_notification', 'logged_out');
		redirect(base_url(),'refresh');
	}

}
