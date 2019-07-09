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
		// var_dump($username); die;
		$password=md5($this->input->post('password'));
		$uresult = $this->dbObject->get_user($username);
		

		if (count($uresult) > 0)
		{
			foreach ($uresult as $row) {
				$this->session->set_userdata('login', 1);
				$this->session->set_userdata('user_name', $row->user_name);
				redirect('admin/dashboard','refresh');
			}
		}
		else
		{	$this->session->set_userdata('login', 0);
			echo "<script> alert('Username and Password Salah...'); </script>";
            redirect('auth','refresh');
		}

	}

	public function logout()
	{
		$this->session->set_userdata('login', 0);
		$this->session->sess_destroy();
    	$this->session->set_flashdata('logout_notification', 'logged_out');
		redirect(base_url(),'refresh');
	}

}
