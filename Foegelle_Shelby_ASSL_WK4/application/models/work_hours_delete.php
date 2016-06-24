<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Work_Hours_Delete extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    // delete work entry based on ID
    function delete_entry($entryID) {
        $this->db->where('id', $entryID);
        $this->db->delete('workHours');
    }
}