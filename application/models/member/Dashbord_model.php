<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashbord_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }

    function jumlah_pengajuan($table, $status, $val_status, $id)
    {
    	$this->db->select('*');
		$this->db->where($status,$val_status);
		$this->db->where("lomba_created_by_id",$id);
		$query = $this->db->get($table);
		return $query->num_rows();
	}
	function jumlahperuser($table, $id)
    {
    	$this->db->select('*');
		$this->db->where("lomba_created_by_id",$id);
		$query = $this->db->get($table);
		return $query->num_rows();
    }

}
?>
