<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Work_Hours_Get extends CI_Model{
    function __construct() {
        parent::__construct();

    }

    // query to send to db. If query returns nothing, false. otherwise return query result
    // gets everything from table
    function select_info() {
        $this->db->select('*');
        $this->db->from('workHours');
        $query = $this->db->get();
        if($query->num_rows() > 0) {
            return $query->result();
        } else
            return FALSE;

    }
}