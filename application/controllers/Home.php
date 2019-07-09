<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
			parent::__construct();
			$this->load->model('home_model', 'dbObject');
    }

	public function index()
	{		
		// $x['para'] = $this->dbObject->get_general('parameter');
		// $x['work'] = $this->dbObject->get_media();
		// $x['testi'] = $this->dbObject->get_testimoni_limit('testimony',3);
		$data['title']='BM Farm';
		$this->load->view('templates/header',$data);
		$this->load->view('templates/navbar',$data);
		$this->load->view('home',$data);
		$this->load->view('templates/footer',$data);
	}
}
