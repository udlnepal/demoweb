<?php
class Admin extends CI_Controller {
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
        $this->load->view('admin/adminhome',$data);  
        $this->load->view('includes/adminfooter');
    }
 
  else { 
 redirect('login');  

  }
}


public function set_site_title(){
 // echo "here"; exit;
                        $titledata = array('site_title'=>$this->input->post('site_title'));
                        $this->set_header_model->set_header_title(1,$titledata);    
                        redirect('admin',$titledata);
                  
  }

  
/* write above here*/
}
?>