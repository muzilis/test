<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message_model extends CI_Model {
    public  function save($username,$email,$content){
        $this->db->insert('t_message',array(
            'username'=>$username,
            'email'=>$email,
            'content'=>$content
        ));

    }
    public function get_all(){
        return $this -> db -> get('t_message') -> result();
    }

    public function get_by_username($username){
        return $this -> db -> get_where('t_message',array(
        'username' => $username//键一定要加引号'username'
    )) -> row();//row（）中是一个对象；result（）中是数组
    }

    public function delete($message_id){
//        var_dump($message_id);die;
        $this ->db ->delete('t_message',array('message_id'=>$message_id));
    }
//    public function delete($admin_id){
//        $this ->db ->delete('t_admin',array('admin_id','$admin_id'));
//    }

    public function update($phone,$qq,$weibo,$intro){
        $this->db->update('t_message',array(
            'telephone'=>$phone,
            'QQ'=>$qq,
            'twitter'=>$weibo,
            'solo'=>$intro
        ));
    }

    public function get_where($id){
        return $this -> db -> get_where('t_message',array('message_id'=>$id)) -> result();
    }

    public function do_update($data,$id){
        $this -> db -> where('message_id',$id);
        $this -> db -> update('t_message',$data);

        return $this -> db -> get_where('t_message',array('message_id'=>$id)) -> result();
    }

}