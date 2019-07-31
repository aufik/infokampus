<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
			parent::__construct();
			if ($this->session->userdata('login') == 0) redirect('auth/logout');
			$this->load->model('member/dashbord_model', 'dbObject');
    }

	public function index()
	{
		$data['Diterima'] = $this->dbObject->jumlah_pengajuan('lomba', 'status', 'Diterima', $this->session->user_id);
		$data['Ditolak'] = $this->dbObject->jumlah_pengajuan('lomba', 'status', 'Ditolak', $this->session->user_id);
		$data['Menunggu'] = $this->dbObject->jumlah_pengajuan('lomba', 'status', 'Menunggu', $this->session->user_id);
		$data['Total'] = $this->dbObject->jumlahperuser('lomba', $this->session->user_id);
		$this->load->view('member/templates/header');
		$this->load->view('member/templates/sidebar');
		$this->load->view('member/templates/footer');
		$this->load->view('member/dashboard/index', $data);
		$this->load->view('member/templates/subfooter');
		
	}
}
