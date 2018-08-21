<?php
include_once(APPPATH.'controllers/Admin_controller.php');
class Site_title_setup extends Admin_controller {


	/* public function __construct()
    {
      parent::__construct();
        $this->load->model('login_model');
        $this->load->model('set_header_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->helper(array('form', 'url'));
          if (!$this->session->userdata('is_logged_in')) {
            redirect('login');  
          }
 
    }*/

	  public function index()
    {       
    $data['titlename']=$this->user_model->get_logged_user(); 
    $data['header_title'] = $this->set_header_model->get_header_title();
      $this->display('admin/adminhome',$data);  
   
    }


public function set_site_title(){
                        $titledata = array('site_title'=>$this->input->post('site_title'));
                        $this->set_header_model->set_header_title(1,$titledata);    
                        redirect('admin',$titledata);
                  
  }

}


?>