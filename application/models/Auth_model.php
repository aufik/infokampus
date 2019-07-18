<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }

    function create_general($table, $data)
    {
        return $this->db->insert($table, $data);
	}

	function get_user($fiel, $val)
	{
		$this->db->where($fiel, $val );
    	$query = $this->db->get('user');
		return $query->result();
	}

	function get_password($password, $table)
	{
		$this->db->like('user_pass', $password);
    	$query = $this->db->get($table);

		return $query->row();
	}

	function get_nama($table)
	{
		$query = $this->db->get($table);

		return $query->row();
	}
	function autonumber($field, $table, $Parse, $Digit_Count) {
		$NOL = "0";
		$query = "Select " . $field . " from " . $table . " where " . $field . " like '" . $Parse . "%' order by " . $field . " DESC LIMIT 0,1";
		
		// CODEIGNITER
		$identifier = &get_instance();
		$data = $identifier->db->query($query)->result_array();
		
		// YII Way
		// $identifier = \Yii::$app->db;
		// $data = $identifier->createCommand($query)->queryOne();
		$counter = 2;
		if (sizeof($data) == 0) 
		{
		  while ($counter < $Digit_Count):
			$NOL = "0" . $NOL;
			$counter++;
		  endwhile;
		  return $Parse . $NOL . "1";
		}
		else 
		{
		  //CODE IGNITER
		  $R = $data[0][$field];
		  // YII
		  // $R = $data[$field];
		  $K = sprintf("%d", substr($R, -$Digit_Count));
		  $K = $K + 1;
		  $L = $K;
		  while (strlen($L) != $Digit_Count) 
		  {
			$L = $NOL . $L;
		  }
		  return $Parse . $L;
		}
	  } // end of function


	  function get_username($username) {
		$this->db->where('user_name', $username);
		$this->db->limit(1);
		$query = $this->db->get('user');

		if ($query->num_rows() == 1) {
			return TRUE;
		}
		
		return FALSE;
	}

}
?>
