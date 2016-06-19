<?php
class Work_Hours_Insert extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    // inserts form data into db
    function form_insert($data) {
        $this->db->insert('workHours', $data);
    }
}
?>