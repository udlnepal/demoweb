<?php
class Set_header_model extends CI_Model {


 public function set_header_title($title_id=1,$data){
        $this->load->helper('url');
 
        $data = array(
'site_title' => $this->input->post('site_title'),
'add_info'=>$this->input->post('add_info')
        );


          $this->db->where('title_id', 1);
            return $this->db->update('header_title', $data);

    }


public function get_header_title(){
  $query = $this->db->get_where('header_title');
    return $query->result_array();

}
/* write above here */
}
?>