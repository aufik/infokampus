<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model
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

    function get_media_limit()
    {
    	$this->db->limit(3);
    	$query = $this->db->query('SELECT * FROM media, media_kategori WHERE media.media_med_kat_id = media_kategori.med_kat_id ORDER BY media.media_created_time desc');
		return $query->result();
    }

     function get_media()
    {
        $query = $this->db->query('SELECT * FROM media, media_kategori WHERE media.media_med_kat_id = media_kategori.med_kat_id ORDER BY media.media_created_time desc LIMIT 3');
        return $query->result();
    }
}
?>
