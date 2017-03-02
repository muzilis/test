<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome_model extends CI_Model {

    public function get_by_name_email_website($name, $email,$website){
        //'select * from t_admin where admin_name=$name and admin_pwd=$pwd'
        $data = array(
            'welcome_name' => $name,
            'welcome_email' => $email,
            'welcome_website' => $website

        );
        return $this -> db -> get_where('t_welcome', $data) -> row();
    }

    public function get_all(){
        return $this -> db -> get('t_welcome') -> result();
    }

//    public  function save($name, $email,$website){
//
//    }
//
//    public  function update(){
//
//    }
//
//    public  function delete($welcome_id){
//
//    }

}



















