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

	function get_user($username)
	{
		$this->db->where('user_name', $username);
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

}
?>
