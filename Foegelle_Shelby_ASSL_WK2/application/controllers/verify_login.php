<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verify_Login extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('user','',TRUE);
    }

    function index() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

        if($this->form_validation->run() == FALSE) {
            //Failed. Try again.
            $this->load->view('login_view');
        }
        else {
            //Go to private area
            redirect('home', 'refresh');
        }
    }

    function check_database($password) {
        //Field validation succeeded, now check db
        $username = $this->input->post('username');
        $result = $this->user->login($username, $password);

        if($result) {
            foreach($result as $row) {
                $session = array(
                    'employeeID' => $row->employeeID,
                    'username' => $row->username
                );
                $this->session->set_userdata('logged_in', $session);
            }
            return TRUE;
        }else {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }
}
?>