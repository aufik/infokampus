<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lomba_model extends CI_Model
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

    function get_testimoni_limit($table, $limit)
    {
        $this->db->limit($limit);
        $this->db->order_by('testimony_created_time', 'desc');
        $query = $this->db->get($table);
        return $query->result();
    }

    function get_work_limit($table, $limit)
    {
        $this->db->limit($limit);
        $this->db->order_by('work_created_time', 'desc');
        $query = $this->db->get($table);
        return $query->result();
    }

    function create_general($table, $data)
    {
        return $this->db->insert($table, $data);
    }
    function tampilkanlomba(){
        $this->db->select("*");
        $this->db->join("lomba_kategori", "lomba_kategori.lomba_kategori_id = lomba.lomba_kat_id");
        $this->db->where("lomba.status = 'Diterima'");
        $query = $this->db->get("lomba");
        return $query->result();
    }
    function detail($slug){
        $this->db->select("*");
        $this->db->join("lomba_kategori", "lomba_kategori.lomba_kategori_id = lomba.lomba_kat_id");
        $this->db->where("lomba.lomba_slug = '$slug' and lomba.status = 'Diterima'");
        $query = $this->db->get("lomba");
        return $query->row();
    }
}
?>
