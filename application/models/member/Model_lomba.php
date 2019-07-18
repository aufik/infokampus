<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_lomba extends CI_Model
{
	function __construct()
    {
        parent::__construct();
    }

    function get_general($table)
    {
    	$query = $this->db->get($table);
		return $query->result();
    }

    function get_by_id_general($table, $id, $val)
    {
    	$query = $this->db->where($id, $val)->get($table);
		return $query->result();
    }

	function create_general($table, $data)
	{
		return $this->db->insert($table, $data);
	}

	function update_general($table, $id, $val, $data)
	{
		$this->db->where($id, $val);
		return $this->db->update($table, $data);
	}

	function delete_general($table, $id, $val)
	{
		$this->db->where($id, $val);
		return $this->db->delete($table);
	}

	//tambahan
	//tambahan
	function get_general_tampil_lomba($tab, $tab2, $id, $id2){		
		$user_id = $this->session->user_id;
		return $this->db->query("select * from lomba, lomba_kategori where lomba.lomba_kat_id = lomba_kategori.lomba_kategori_id  and lomba_created_by_id=$user_id")->result();
	}
	
	function get_general_edit($id){
		$user_id = $this->session->user_id;
		return $this->db->query("select * from lomba, lomba_kategori where lomba.lomba_kat_id = lomba_kategori.lomba_kategori_id and lomba.lomba_id = $id  and lomba_created_by_id=$user_id")->result();
	}
}
?>
