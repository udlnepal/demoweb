<?php
class Admin extends CI_Controller {
   public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->load->library('pagination');
    }

	  public function index()
    {
        //print_r($data);
        //exit();
      //  $data['news'] = $this->news_model->get_news();
      //  $data['title'] = 'News archive';

   if ($this->session->userdata('is_logged_in')) {

        $this->load->view('includes/adminheader');
        $this->load->view('includes/adminsidebar');
        $this->load->view('includes/adminnav');

        $this->load->view('admin/adminhome');
      //  print_r($data); exit;
        $this->load->view('includes/adminfooter');
    }
 
  else { 
 redirect('login');  

  }
}
}
?>