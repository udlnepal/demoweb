<?php
class Login extends CI_Controller {
  public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
    }

	/*  public function index()
    {
        //print_r($data);
        //exit();
      //  $data['news'] = $this->news_model->get_news();
      //  $data['title'] = 'News archive';


        $this->load->view('includes/adminheader');
   //     $this->load->view('includes/adminsidebar');
     //   $this->load->view('includes/adminnav');

        $this->load->view('admin/login');
      //  print_r($data); exit;
        $this->load->view('includes/adminfooter');
    }
*/

     public function index()
    {        
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|md5');        
        
        $data['title'] = 'Login';
        
        if ($this->form_validation->run() === FALSE)
        {            
            $this->load->view('includes/adminheader', $data);
            $this->load->view('admin/login');
            $this->load->view('includes/adminfooter');
 
        }
        else
        { 
            if ($user = $this->login_model->get_user_login($email, $password))
            {   
                /*$user_data = array(
                              'email' => $email,
                              'is_logged_in' => true
                         );
                     
                $this->session->set_userdata($user_data);*/
                
                $this->session->set_userdata('email', $email);
                $this->session->set_userdata('user_id', $user['id']);
                $this->session->set_userdata('is_logged_in', true);
                
                
                $this->session->set_flashdata('msg_success','Login Successful!');
                redirect('admin');                
            }
            else
            {
                $this->session->set_flashdata('msg_error','Login credentials does not match!');
                
                $currentClass = $this->router->fetch_class(); // class = controller
                $currentAction = $this->router->fetch_method(); // action = function
               // echo "wrong credentials.";
                redirect(login);
                //redirect('user/login');
            }
        }
    }
 

}
?>