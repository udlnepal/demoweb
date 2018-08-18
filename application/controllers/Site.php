<?php
class Site extends CI_Controller {
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
        //print_r($data);
        //exit();
      //  $data['news'] = $this->news_model->get_news();
      //  $data['title'] = 'News archive';

    $data['header_title'] = $this->set_header_model->get_header_title();
        $this->load->view('includes/header',$data);
        $this->load->view('site/home');
      //  print_r($data); exit;
        $this->load->view('includes/footer');
    }

}
?>