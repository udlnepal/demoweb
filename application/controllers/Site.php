<?php
class Site extends CI_Controller {

	  public function index()
    {
        //print_r($data);
        //exit();
      //  $data['news'] = $this->news_model->get_news();
      //  $data['title'] = 'News archive';


        $this->load->view('includes/header');
        $this->load->view('site/home');
      //  print_r($data); exit;
        $this->load->view('includes/footer');
    }
}
?>