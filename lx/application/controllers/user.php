<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

    //未登陆首页
//    public function index(){
//        $this->load->view('index');
//    }
    public function index(){
        $this->load->model('admin_model');
        $result=$this->admin_model->show_all_movie();
        $resul=$this->admin_model->show_all_movie2();
        $resu=$this->admin_model->show_all_movie3();
        $res=$this->admin_model->show_all_movie4();
        $re=$this->admin_model->show_all_movie5();
        $r=$this->admin_model->show_all_movie6();
        $query=$this->admin_model->show_all_movie7();
        $quer=$this->admin_model->show_all_movie8();
        $que=$this->admin_model->show_all_movie9();
        $qu=$this->admin_model->show_all_movie10();


        $data=array(
            'movies'=>$result,
            'dongzuos'=>$resul,
            'xijus'=>$resu,
            'aiqings'=>$res,
            'hanjus'=>$re,
            'meijus'=>$r,
            'yingjus'=>$query,
            'jiatings'=>$quer,
            'dushis'=>$que,
            'zongyis'=>$qu
        );
        $this->load->view('index1',$data);
    }

    //已登陆页面
    public function indexed(){
        $this->load->model('admin_model');
        $result=$this->admin_model->show_all_movie();
        $resul=$this->admin_model->show_all_movie2();
        $resu=$this->admin_model->show_all_movie3();
        $res=$this->admin_model->show_all_movie4();
        $re=$this->admin_model->show_all_movie5();
        $r=$this->admin_model->show_all_movie6();
        $query=$this->admin_model->show_all_movie7();
        $quer=$this->admin_model->show_all_movie8();
        $que=$this->admin_model->show_all_movie9();
        $qu=$this->admin_model->show_all_movie10();


        $data=array(
            'movies'=>$result,
            'dongzuos'=>$resul,
            'xijus'=>$resu,
            'aiqings'=>$res,
            'hanjus'=>$re,
            'meijus'=>$r,
            'yingjus'=>$query,
            'jiatings'=>$quer,
            'dushis'=>$que,
            'zongyis'=>$qu
        );
        $this->load->view('indexed',$data);
    }
    //注册
    public function zhuce(){

        $this->load->view('zhuce');
    }
    public function getZhuce(){
        $name = $this->input->post('email');
        $pwd = $this->input->post('pwd');
        $this->load->model('users_model');
        $result=$this->users_model->get_zhuce($name,$pwd);
        $data=array(
            'zhuce'=>$result
        );
        $this->load->view('login',$data);

    }
    public function getEmail(){
        $email = $this->input->post('email');
        $this -> load -> model('users_model');
        $query=$this->users_model->get_email($email);
        if($query){
            echo "success";
        }else{
            echo "fail";
        }


    }
    //登陆
    public function login(){
        $this->load->view('login');
    }
    public function getLogin(){
        $name = $this->input->post('username');
        $pwd = $this->input->post('password');
        $this->load->model('users_model');
        $result = $this->users_model->get_by_name_pwd($name,$pwd);
        if($result){
            $data=array(
                'user_id'=>$result->user_id,
                'user_email'=>$result->user_email
            );
            $this->session->set_userdata($data);
            redirect('user/indexed?uid='.$result->user_id);

        }else{
            redirect('user/login');

        }

    }
    //退出
    public function login_out(){
        $query=$this->session->unset_userdata('user_id','user_email');
        if($query){
            echo "退出失败";
        }else{
            redirect('user/index');
        }
    }
    //评论
    public function pinglun(){
        $mid=$this->input->get('mid');

        $this->load->model('users_model');
        $result=$this->users_model->get_all_pinglun($mid);
        $re=$this->users_model->get_movie_id($mid);
        $data=array(
            'movie'=>$re,
            'pingluns'=>$result
        );
//        var_dump($re);
//        die();
        $this->load->view('user_comment',$data);
    }
    public function get_pinglun(){
        $mid=$this->input->post('mid');
        $hid=$this->input->post('hid');
        $comment=$this->input->post('con');
        if($comment==''){
            echo 'fail';
        }else{
            $this->load->model('users_model');
            $id = $this->users_model->save_comment($comment,$hid,$mid);
            $result = $this->users_model->get_comment_by_id($id);
            echo json_encode($result);

        }
    }
    //修改密码
    public function xiugaipwd(){

        $this -> load -> view('xiugaimima');
    }

    public function xiugaimima(){
        $uid = $this->input->post('uid');
        $user_pwd1=$this->input->post('user_pwd1');
        $user_pwd2=$this->input->post('user_pwd2');
        $user_pwd3=$this->input->post('user_pwd3');
//        var_dump($uid);
//        die();
        $data=array(
            'user_pwd'=>$user_pwd2
        );

        $this->load->model('users_model');

        $re=$this->users_model->get_pwd_by_user_id($uid);
        if($re->user_pwd==$user_pwd1 && $user_pwd2==$user_pwd3){
            $res=$this->users_model->xiugaimima($uid,$data);
            if($res){
                $this -> load -> view('login');

            }else{
                $this -> load -> view('xiugaimima');
            }
        }else{
            $this -> load -> view('xiugaimima');

        }
    }
    //收藏
    public function shoucang(){
//        $mid = $this->input->get('mid');
        $uid = $this->session->userdata('user_id');
        $this->load->model('users_model');
//        $this->users_model->shoucang_movie($mid,$uid);
        $res = $this->users_model->get_shoucangs_by_id($uid);
        $data = array(
            'shoucangs'=>$res
        );
//            var_dump($data);
//            die();
        $this->load->view('shoucang',$data);
    }
    public function shoucangmovie(){
        $mid = $this->input->get('mid');
        $uid = $this->session->userdata('user_id');
        $this->load->model('users_model');
        $result=$this->users_model->get_shoucang_by_id($mid,$uid);

        if($result){
            $re=$this->users_model->get_user_id($uid);
            redirect('user/indexed?uid='.$re->user_id);
        }else{
            $this->load->model('users_model');
            $this->users_model->shoucang_movie($mid,$uid);
            $res = $this->users_model->get_shoucangs_by_id($uid);
            $data = array(
                'shoucangs'=>$res
            );
            $this->load->view('shoucang',$data);
        }
    }
    //删除收藏
    public function delete_shoucang(){
        $shoucang_id=$this->input->get('shoucang_id');
        $this -> load -> model('users_model');
        $this -> users_model -> delete_shoucang($shoucang_id);
//        $this->shoucang();
        redirect('user/shoucang');
    }



    //影视内容显示
    public function neirongxianshi(){
        $this->load->view('neirongxianshi');
    }
    //搜索
    public function search(){
        $sousuo_content = $this->input->post('sousuo_content');
//        $this->load->model('users_model');
//        $res=$this->users_model->get_serach($sousuo_content);
//        echo json_encode($res);

        if($sousuo_content){

//            echo json_encode('fail');
            $this->load->model('users_model');
            $res=$this->users_model->get_serach($sousuo_content);
            if($res){
                echo json_encode($res);

            }else{
                echo json_encode('');
            }
//            $this->load->view('indexed');
        }else{
//            echo '';
            echo json_encode('');

        }


    }

}



















