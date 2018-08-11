<?php
class Social_links extends CI_Controller {
   public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('set_header_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->helper(array('form', 'url'));/* form froms*/
    }
  public function index()
    {
        
   if ($this->session->userdata('is_logged_in')) {

    $data['header_title'] = $this->set_header_model->get_header_title();
        $this->load->view('includes/adminheader');
        $this->load->view('includes/adminsidebar');
        $this->load->view('includes/adminnav');
        $this->load->view('admin/social',$data);  
        $this->load->view('includes/adminfooter');
    }
 
  else { 
 redirect('login');  

  }
}

/* write above here */
}