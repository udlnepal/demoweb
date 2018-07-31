<?php
class Logout extends CI_Controller {
 public function __construct()
    {
        parent::__construct();
        $this->load->model('logout_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
    }




 public function index()
    {    
        if ($this->session->userdata('is_logged_in')) {           
            //$this->session->unset_userdata(array('email' => '', 'is_logged_in' => ''));
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('is_logged_in');
            $this->session->unset_userdata('user_id');            
        }
        redirect('login');
    }    

}




?>