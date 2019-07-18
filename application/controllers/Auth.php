<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
    {   parent::__construct();
		$this->load->helper(array(
            'form',
            'url'
        ));
        // load database
        $this->load->database();
        // load form validation library
		$this->load->library('form_validation');
		
    	$this->load->model('Auth_model', 'dbObject');
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
					if($row->user_level == "admin"){
						redirect('admin/dashboard','refresh');
					}else{
						redirect('member/dashboard','refresh');
					}
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
	public function registrasi_do(){

			$id_biodata =$this->dbObject->autonumber("biodata_id", "biodata", "BIO", "7");
			$username=trim($this->input->post('username')); 
			$email=trim($this->input->post('email')); 
			$password=trim($this->input->post('password')); 
			$user = array(
				'user_name'=>$username,
				'user_pass'=>md5($password),
				'user_pass_ret'=>$password,
				'user_level'=>'member',
				'biodata_id'=>$id_biodata
			);
			$biodata = array(
				'biodata_id'=>$id_biodata,
				'biodata_email'=>$email
			);
			$this->dbObject->create_general("biodata", $biodata);
			if($this->dbObject->create_general("user", $user)===TRUE)		// using direct parameter
			{
				?>
				<script> 
					alert(" Data berhasil disimpan. ");
					location.replace("<?=base_url()?>index.php/auth/"); 
				</script>
				<?php
				//redirect('kepegawaian/jabatan','refresh');
			}
			else {
				?>
				<script> 
					alert(" Data gagal disimpan. ");
					location.replace("<?=base_url()?>index.php/admin/lomba/tambah"); 
				</script>
				<?php
				//redirect('kepegawaian/jabatan_insert','refresh');
			}
	}
	public function email_check()
    {
        // allow only Ajax request    
        if($this->input->is_ajax_request()) {
        // grab the email value from the post variable.
        $email = $this->input->post('email');
        // check in database - table name : tbl_users  , Field name in the table : email
			if(!$this->form_validation->is_unique($email, 'biodata.biodata_email')) {
			// set the json object as output                  
				$this->output->set_content_type('application/json')->set_output(json_encode(array('message' => 'Sudah Digunakan')));
			}else{
				$this->output->set_content_type('application/json')->set_output(json_encode(array('message' => 'Email Bisa Digunakan')));
			}
        }
	}
	public function username_check()
    {
        // allow only Ajax request    
        if($this->input->is_ajax_request()) {
        // grab the email value from the post variable.
        $user = $this->input->post('username');
		// check in database - table name : tbl_users  , Field name in the table : email
		
			if(!$this->form_validation->is_unique($user, 'user.user_name')) {
			// set the json object as output                  
				$this->output->set_content_type('application/json')->set_output(json_encode(array('message' => 'Sudah Digunakan')));
			}else{
				$this->output->set_content_type('application/json')->set_output(json_encode(array('message' => 'Nama Bisa Digunakan')));
			}
        }
	}
	public function check_username()
    {
        // allow only Ajax request    
        if($this->input->is_ajax_request()) {
        // grab the email value from the post variable.
        $user = $this->input->post('email');
		// check in database - table name : tbl_users  , Field name in the table : email
		
			if(!$this->form_validation->is_unique($user, 'user.user_name')) {
			// set the json object as output                  
				return false;
			}else{
				return true;
			}
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
