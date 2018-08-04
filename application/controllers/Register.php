<?php
class Register extends CI_Controller {
  public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
    }

/*	  public function index()
    {
       

        $this->load->view('includes/adminheader');
        $this->load->view('admin/register');   
        $this->load->view('includes/adminfooter');
    }*/
 

public function index()
    {
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required|min_length[3]|max_length[50]');
       // $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[50]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]');
      $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');
        
        $data['title'] = 'Register';
        
        if ($this->form_validation->run() === FALSE)
        {            
            $this->load->view('includes/adminheader', $data);
            $this->load->view('admin/register');
            $this->load->view('includes/adminfooter');
 
        }
        else
        { 
            if ($this->login_model->set_user())
            {                             
                $this->session->set_flashdata('msg_success','Registration Successful!');
                redirect('login');            
            }
            else
            {                
                $this->session->set_flashdata('msg_error','Error! Please try again later.');
                redirect('register');
            }
        }
    }





}
?>