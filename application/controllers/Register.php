<?php
class Register extends CI_Controller {
  public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
    }

	  public function index()
    {
        //print_r($data);
        //exit();
      //  $data['news'] = $this->news_model->get_news();
      //  $data['title'] = 'News archive';


        $this->load->view('includes/adminheader');
   //     $this->load->view('includes/adminsidebar');
     //   $this->load->view('includes/adminnav');

        $this->load->view('admin/register');
      //  print_r($data); exit;
        $this->load->view('includes/adminfooter');
    }
 

}
?>