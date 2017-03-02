<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model {

    public function get_zhuce($name,$pwd){
        $data=array(

            'user_email'=>$name,
            'user_pwd'=>$pwd
        );
        return $this -> db -> insert('t_user', $data);

    }//注册

    public  function get_email($email){
        $data = array(
            'user_email'=>$email
        );
        return $this->db->get_where('t_user',$data)->row();
    }//注册判断

    public function get_by_name_pwd($name,$pwd){
        $query = $this->db->query("select * from t_user where user_email='$name'and user_pwd='$pwd'");
        return $query->row();

    }//登陆
    //修改密码
    public function get_pwd_by_user_id($uid){
        return $this->db->get_where('t_user',array(
            'user_id'=>$uid
        ))->row();

    }
    public function xiugaimima($uid,$data){
        $this -> db -> where('user_id',$uid);
        $this -> db -> update('t_user',$data);

        return $this -> db -> get_where('t_user',array('user_id'=>$uid)) -> result();
    }
    //评论
    public function save_comment($comment,$hid,$mid){
        $this->db->insert('t_comment',array(
            'comment_content'=>$comment,
            'user_email'=>$hid,
            'movie_id'=>$mid
        ));
        return $this->db->insert_id();

    }
    public function get_all_pinglun($mid){

            $query = $this->db->query("select * from t_movie,t_comment where t_movie.movie_id=t_comment.movie_id and t_comment.movie_id='$mid'");
            return $query->result();
    }
    public function get_movie_id($mid){
        $query = $this->db->query("select * from t_movie where movie_id='$mid'");
        return $query->row();
    }
    public function get_comment_by_id($id){
        $this->db->select('*');
        $this->db->from('t_comment');
        $this->db->where('comment_id',$id);
        return $this->db->get()->row();
    }
    public function get_movie_by_id($mid){
        $this->db->select('*');
        $this->db->from('t_movie');
        $this->db->where('movie_id',$mid);
        return $this->db->get()->row();
    }
    //收藏
    public function get_shoucang_by_id($mid,$uid){
        return $this->db->get_where('t_shoucang',array(
            'movie_id'=>$mid,
            'user_email'=>$uid
//            'user_email'=>$uid
        ))->row();
    }
    public function get_user_id($uid){
        return $this->db->get_where('t_user',array(
            'user_id'=>$uid,
        ))->row();
    }
    public function shoucang_movie($mid,$uid){
        $this->db->insert('t_shoucang',array(
            'movie_id'=>$mid,
            'user_email'=>$uid
        ));
        return $this->db->insert_id();
    }
    public function get_shoucangs_by_id($uid){
//        $this->db->select('*');
//        $this->db->from('t_shoucang');
//        $this->db->where('user_email',$uid);
//        return $this->db->get()->result();
        $query = $this->db->query("select * from t_shoucang where user_email='$uid'");
        return $query->result();
    }

    public function delete_shoucang($shoucang_id){
        $this -> db -> delete('t_shoucang', array(
            'shoucang_id' => $shoucang_id
        ));
    }
    //搜索
    public function get_serach($sousuo_content){
//        $this->db->like('movie_name',$sousuo_content);
////        $this->db->or_like('movie_type',$sousuo_content);
//        return $this->db->get('t_movie')->result();
        $data = array(
            'movie_name'=>$sousuo_content
        );
        return $this->db->get_where('t_movie',$data)->row();
    }
}



















