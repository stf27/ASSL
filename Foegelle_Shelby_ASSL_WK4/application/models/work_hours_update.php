<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Work_Hours_Update extends CI_Model{
    // returns everything in workHours table to be used by controller
    function show_work() {
        $query = $this->db->get('workHours');
        $query_result = $query->result();
        return $query_result;
    }

    // get everything from workHours table that matches the specified id and return results
    function show_work_id($data){
        $this->db->select('*');
        $this->db->from('workHours');
        $this->db->where('id', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    // update work entry based on id
    function update_work_id($id, $data){
        $this->db->where('id', $id);
        $this->db->update('workHours', $data);
    }
}