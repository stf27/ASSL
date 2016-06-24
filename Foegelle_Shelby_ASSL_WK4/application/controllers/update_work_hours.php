<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Update_Work_Hours extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('work_hours_update');
    }

    // get id from URL and store info in data array. Pass that data to update_work view
    function work_id() {
        $id = $this->uri->segment(3);
        $data['hours'] = $this->work_hours_update->show_work();
        $data['work_entry'] = $this->work_hours_update->show_work_id($id);
        $this->load->view('update_work', $data);
    }

    // get information from form (using post). Get new data and send to work_hours_update. Finally redirect when info is updated.
    function update_work_id() {
        $id = $this->input->post('work_id');

        $data = array(
            'ID' => $this->input->post('work_id'),
            'EmployeeID' => $this->input->post('employeeID'),
            'Date' => $this->input->post('date'),
            'Time_In' => $this->input->post('time_in'),
            'Lunch' => $this->input->post('lunch'),
            'Time_Out' => $this->input->post('time_out'),
            'Activities' => $this->input->post('activities')
        );

        $this->work_hours_update->update_work_id($id, $data);
        $this->work_id();
        redirect('work', 'refresh');
    }
}