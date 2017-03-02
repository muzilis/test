<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function get_by_name_pwd($name, $pwd){
        //'select * from t_admin where admin_name=$name and admin_pwd=$pwd'
        $data = array(
            'admin_name' => $name,
            'admin_pwd' => $pwd
        );
        return $this -> db -> get_where('t_admin', $data) -> row();
    }

    public function get_all(){
        return $this -> db -> get('t_admin') -> result();
    }

    public  function save($admin_name, $admin_pwd){

    }

    public  function update(){

    }

    public  function delete($admin_id){
        $this -> db ->delete('t_admin',array('admin_id' =>$admin_id ));
    }


    //admin删除用户信息
    public function get_all_user(){
        return $this -> db -> get('t_user') -> result();
    }
    public function delete_user($user_id){
        $this -> db -> delete('t_user', array(
            'user_id' => $user_id
        ));

    }
    public function delete_alluser($user_id){
        $this -> db -> query("delete from t_user where user_id in ($user_id)");

    }
    //影视信息编辑
    //admin存入信息
    public function save_movie($mname,$mfenshu,$mcontent,$mtype){
        $data = array(
            'movie_name'=>$mname,
            'movie_fenshu'=>$mfenshu,
            'movie_content'=>$mcontent,
            'movie_type'=>$mtype
        );
        return $this->db->insert('t_movie',$data);
    }
//    public function save_dongzuo($mname,$mfenshu,$mcontent){
//        $data = array(
//            'dongzuo_name'=>$mname,
//            'dongzuo_fenshu'=>$mfenshu,
//            'dongzuo_content'=>$mcontent
//        );
//        return $this->db->insert('t_dongzuo',$data);
//    }
    //显示信息
    public function show_all_movie(){
        $this->db->select('*');
        $this->db->from('t_movie');
        $this->db->where('movie_type','movie');
        return $this->db->get()->result();
    }
    public function show_all_movie2(){

        $this->db->select('*');
        $this->db->from('t_movie');
        $this->db->where('movie_type','动作');
        return $this->db->get()->result();
    }
    public function show_all_movie3(){

        $this->db->select('*');
        $this->db->from('t_movie');
        $this->db->where('movie_type','喜剧');
        return $this->db->get()->result();
    }
    public function show_all_movie4(){

        $this->db->select('*');
        $this->db->from('t_movie');
        $this->db->where('movie_type','爱情');
        return $this->db->get()->result();
    }
    public function show_all_movie5(){

        $this->db->select('*');
        $this->db->from('t_movie');
        $this->db->where('movie_type','韩剧');
        return $this->db->get()->result();
    }
    public function show_all_movie6(){

        $this->db->select('*');
        $this->db->from('t_movie');
        $this->db->where('movie_type','美剧');
        return $this->db->get()->result();
    }
    public function show_all_movie7(){

        $this->db->select('*');
        $this->db->from('t_movie');
        $this->db->where('movie_type','英剧');
        return $this->db->get()->result();
    }
    public function show_all_movie8(){

        $this->db->select('*');
        $this->db->from('t_movie');
        $this->db->where('movie_type','古装');
        return $this->db->get()->result();
    }
    public function show_all_movie9(){

        $this->db->select('*');
        $this->db->from('t_movie');
        $this->db->where('movie_type','都市');
        return $this->db->get()->result();
    }
    public function show_all_movie10(){

        $this->db->select('*');
        $this->db->from('t_movie');
        $this->db->where('movie_type','综艺');
        return $this->db->get()->result();
    }
//    public function show_all_movie5(){
//
//        $this->db->select('*');
//        $this->db->from('t_movie');
//        $this->db->where('movie_type','韩剧');
//        return $this->db->get()->result();
//    }
    //评论
    public function get_movie_id($mmid){
        return $this->db->get_where('t_movie',array(
            'movie_id'=>$mmid
        ))->row();
    }
    public function get_all_pinglun(){
        return $this->db->get('t_comment')->result();
    }
    public function delete_pinglun($pinglun_id){
        $this -> db -> delete('t_comment', array(
            'comment_id' => $pinglun_id
        ));
    }
}



















