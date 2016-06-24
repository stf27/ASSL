<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Get_Work_Hours extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('work_hours_get');
        $this->load->model('work_hours_delete');
    }

    // loads data into view from query
    function index() {
        $this->select();
    }

    // Gets info from work_hours_get and stores
    function select() {
        $data['query'] = $this->work_hours_get->select_info();
        $this->load->view('get_work_hours', $data);
    }

    // Deletes specific entry and redirects to same page
    function delete($entryID) {
        $this->work_hours_delete->delete_entry($entryID);
        redirect('work', 'refresh');
    }
}