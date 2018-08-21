<?php
class Admin_controller extends CI_Controller {
   public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('set_header_model');
        $this->load->model('user_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->helper(array('form', 'url'));/* form froms*/
          if (!$this->session->userdata('is_logged_in')) {
            redirect('login');  
          }
    }

    public function display($view,$data){
        $this->load->view('includes/adminheader',$data);
        $this->load->view('includes/adminsidebar');
        $this->load->view('includes/adminnav',$data);
        $this->load->view($view,$data);  
        $this->load->view('includes/adminfooter');

    }





  
/* write above here*/
}
?>