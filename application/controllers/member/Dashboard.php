<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
			parent::__construct();
    		if ($this->session->userdata('login') == 0) redirect('auth/logout');
    }

	public function index()
	{
		$this->load->view('member/templates/header');
		$this->load->view('member/templates/sidebar');
		$this->load->view('member/templates/footer');
		$this->load->view('member/dashboard/index');
		$this->load->view('member/templates/subfooter');
		
	}
}
