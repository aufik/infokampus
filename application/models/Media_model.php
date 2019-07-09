<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Media_model extends CI_Model
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

    function get_media()
    {
    	$query = $this->db->query('SELECT * FROM media, media_kategori WHERE media.media_med_kat_id = media_kategori.med_kat_id ORDER BY media.media_created_time desc');
		return $query->result();
    }


	function get_media_by_id($id)  
    {
        //$this->db->order_by('media_create_date', 'desc');
        $query = $this->db->query("SELECT * FROM media, media_kategori WHERE media.media_id = '$id' AND media.media_med_kat_id = media_kategori.med_kat_id");
        return $query->result();
    }        

    function baca_isi($media_id){
         $baca=$this->db->query("SELECT * FROM media WHERE media_id='$media_id'");
         return $baca;
     }
}
?>