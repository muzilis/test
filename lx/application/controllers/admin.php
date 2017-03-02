<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function login(){
        $this->load->view('admin_login');
    }
    public function admin_index(){
        $this->load->view('admin-index');
    }
    public function check_login(){
        //1. 接数据
        $admin_name = $this -> input -> post('admin_name');
        $admin_pwd = $this -> input -> post('admin_pwd');

        //2. 查数据
        $this -> load -> model('admin_model');
        $row = $this -> admin_model -> get_by_name_pwd($admin_name, $admin_pwd);

        //跳转
        if($row){
            $data = array(
                'admin_id'=>$row->admin_id,
                'admin_name'=>$row->admin_name,
                'admin_pwd'=>$row->admin_pwd
            );
            $this->session->set_userdata($data);
            $this->load->view('admin-index');
        }else{
            $this->load->view('login');
        }
    }




    //管理员退出登陆
    public function login_out(){
        $query=$this->session->unset_userdata('admin_id','admin_name');
        if($query){
            echo "退出失败";
        }else{
            redirect('admin/login');
        }
    }




    //用户管理(显示)
    public function admin_user(){
        $this->load->model('admin_model');
        $result=$this->admin_model->get_all_user();
        $data = array(
            'users'=>$result
        );
        //var_dump($data);
        //die();
        $this->load->view('delete_user',$data);
    }
    //admin用户删除
    public function delete_user(){
        $user_id=$this->input->get('user_id');
        $this -> load -> model('admin_model');
        $this -> admin_model -> delete_user($user_id);
        $this->admin_user();

    }
    public function delete_alluser(){
        $user_id=$this->input->get('user_id');
        $this -> load -> model('admin_model');
        $this -> admin_model -> delete_alluser($user_id);
        $this->admin_user();
    }
    //获取影视信息
    public function admin_movie_bianji(){
        $this->load->view('movie_bianji');

    }

    //添加影视信息
    public function movie_bianji(){
        $mname=$this->input->post('mname');
        $mfenshu=$this->input->post('fenshu');
        $mcontent=$this->input->post('mcontent');
        $mtype=$this->input->post('mtype');

//        var_dump($mcontent);
//        die();
        if($mname==''||$mfenshu==''||$mcontent==''||$mtype==''){
            echo 'fail';
        }else{
            $this->load->model('admin_model');
            $this->admin_model->save_movie($mname,$mfenshu,$mcontent,$mtype);
//            $this->admin_model->save_dongzuo($mname,$mfenshu,$mcontent);

            echo 'success';
        }
    }
//    public function dongzuo_bianji(){
//        $mname=$this->input->post('mname');
//        $mfenshu=$this->input->post('fenshu');
//        $mcontent=$this->input->post('mcontent');
////        var_dump($mcontent);
////        die();
//        if($mname==''||$mfenshu==''||$mcontent==''){
//            echo 'fail';
//        }else{
//            $this->load->model('admin_model');
////            $this->admin_model->save_movie($mname,$mfenshu,$mcontent);
//            $this->admin_model->save_dongzuo($mname,$mfenshu,$mcontent);
//
//            echo 'success';
//        }
//    }
//    public function get_movie(){
//        $this->load->model('admin_model');
//        $result=$this->admin_model->show_all_movie();
//        $data=array(
//            'movies'=>$result
//        );
//        $this->load->view('movie_bianji',$data);
//
//
//    }
//    public function get_dongzuo(){
//        $this->load->model('admin_model');
//        $result=$this->admin_model->show_all_movie2();
//        $data=array(
//            'movies'=>$result
//        );
//        $this->load->view('movie_bianji',$data);
//
//
//    }
    //评论管理
    public function ad_pinglunguanli(){
        $this->load->model('admin_model');
        $result=$this->admin_model->get_all_pinglun();
        $data=array(
            'pingluns'=>$result
        );
        $this->load->view('admin-pinglunguanli',$data);
    }
    public function delete_pinglun(){
        $pinglun_id=$this->input->get('pinglun_id');
        $this -> load -> model('admin_model');
        $this -> admin_model -> delete_pinglun($pinglun_id);
        $this->ad_pinglunguanli();
    }

}






























