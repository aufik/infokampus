<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Work_model extends CI_Model
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

    function get_work_by_id($id)  
    {
        $this->db->order_by('work_create_date', 'desc');
        $query = $this->db->query("SELECT * FROM work WHERE work.work_id = '$id'");
        return $query->result();
    }    
}
?>