<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Work_Hours extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('work_hours_insert');

    }

    function index() {
        // form validation
        $this->load->library('form_validation');

        // creates area for error messages to pop up
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        // validation rules for form input
        $this->form_validation->set_rules('employeeID', 'Employee ID',  'required|trim|min_length[1]');
        $this->form_validation->set_rules('date', 'Date',  'required|trim');
        $this->form_validation->set_rules('time_in', 'Time In', 'required|trim');
        $this->form_validation->set_rules('lunch', 'Lunch', 'required|trim');
        $this->form_validation->set_rules('time_out', 'Time Out', 'required|trim');
        $this->form_validation->set_rules('activities', 'Activities', 'required|min_length[10]|trim');

        // if bad form, reload page
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('work_hours');
        } // else store data in array and load view
        else {
            $data = array(
                'EmployeeID' => $this->input->post('employeeID'),
                'Date' => $this->input->post('date'),
                'Time_In' => $this->input->post('time_in'),
                'Lunch' => $this->input->post('lunch'),
                'Time_Out' => $this->input->post('time_out'),
                'Activities' => $this->input->post('activities')
            );

            // transfer data to Model
            $this->work_hours_insert->form_insert($data);

            // load View
            $this->load->view('work_hours');
            echo "Time successfully added!";
        }
    }
}
?>