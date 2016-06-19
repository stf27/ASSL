<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Get_Work_Hours extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('work_hours_get');
    }

    // loads data into view from query
    function index() {
        $this->select();
    }

    function select() {
        $data['query'] = $this->work_hours_get->select_info();
        $this->load->view('get_work_hours', $data);
    }
}