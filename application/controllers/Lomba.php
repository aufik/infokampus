<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lomba extends CI_Controller {

  public function __construct()
    {
      parent::__construct();
      $this->load->model('Lomba_model', 'dbObject');
    }
  
  public function index()
  { 
    $data['title']= "Infokampus";
    $data['lomba'] = $this->dbObject->tampilkanlomba();

    $this->load->view('templates/header',$data);
    $this->load->view('templates/navbar',$data);
    $this->load->view('lomba',$data);
    $this->load->view('templates/footer',$data);
    
    // $this->linktitle("lomba2");
  }
  public function detail_lomba($slug=""){
    $data['data'] = $this->dbObject->detail($slug);
    $data['title']= $data['data']->lomba_judul;
    $data['deskripsi']= substr($data['data']->lomba_isi, 0, 160);

    $this->load->view('templates/header',$data);
    $this->load->view('templates/navbar',$data);
    $this->load->view('detail_lomba',$data);
    $this->load->view('templates/footer',$data);
    
  }
}
