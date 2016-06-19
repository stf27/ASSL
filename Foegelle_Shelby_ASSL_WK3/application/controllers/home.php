<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
    function index() {
        if($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $this->load->view('home', $data);
        }else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }

    function logout() {
        session_start();
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('login', 'refresh');
    }
}
?>