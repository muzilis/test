<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search_model extends CI_Model {

    public function get_search_content($kw){
        $data = array(
            'search_content'=>$kw
        );
        return $this->db->get_where("t_search",$data)->row();
    }






}



















