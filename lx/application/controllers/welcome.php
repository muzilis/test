<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
	public function detail()
	{
		$blog_id = $this -> input -> get('blog_id');

		$this->load->model('blog_model');
		$row = $this->blog_model->get_by_id($blog_id);
		$this->load->model('comment_model');
		$result = $this->comment_model->get_by_blog_id($blog_id);
		$data = array(
			'blog'=>$row,
			'comments'=>$result
		);
		$this->load->view('admin/detail',$data);
	}
	public function detail_p($blog_id)
	{
//		$blog_id = $this -> input -> get('blog_id');
		$this->load->model('blog_model');
		$row = $this->blog_model->get_by_id($blog_id);
		$this->load->model('comment_model');
		$result = $this->comment_model->get_by_blog_id($blog_id);
		$data = array(
				'blog'=>$row,
				'comments'=>$result
		);
		$this->load->view('admin/detail',$data);
	}



	public function update(){//添加信息的方法

		$phone = $this -> input -> post('phone');//接数据 用户写的用户名、邮箱、评论
		$qq = $this -> input -> post('QQ');
		$weibo = $this -> input -> post('weibo');
		$intro = $this -> input -> post('intro');
		$id = $this -> input -> post('idd');
		$data = array(
				'phone'=>$phone,
				'QQ'=>$qq,
				'weibo'=>$weibo,
				'intro'=>$intro
		);
		$this -> load -> model('message_model');
		$rs = $this -> message_model -> do_update($data,$id);
		$da = array(
				'admins'=>$rs
		);

		$this -> load -> view('admin/admin-user',$da);


	}
	public function contact(){
		$this->load->view('contact');
	}

	public function message(){

		$name = $this -> input -> post('name');
		$email = $this -> input -> post('email');
		$website = $this -> input -> post('website');
		if($name == '' || $email == '' || $website == ''){
			echo 'fail';

		}else{
			$this->load->model('message_model');
			$this->message_model->save($name,$email,$website);
			echo 'success';

		}
	}
	public function comment(){

		$cname = $this -> input -> post('cname');
		$cemail = $this -> input -> post('cemail');
		$cwebsite = $this -> input -> post('cwebsite');
		$csubject = $this -> input -> post('csubject');
		$blog_id = $this -> input -> post('blog_id');
		$this->load->model('comment_model');
		$this->comment_model->save($cname,$cemail,$cwebsite,$csubject,$blog_id);
		$this->detail_p($blog_id);
		redirect('welcome/detail?blog_id='.$blog_id);
	}
	public  function check_name(){
		$uname = $this -> input -> get('uname');
		$this -> load -> model('message_model');
		$row = $this -> message_model -> get_by_username($uname);
		if($row){
			echo 'fail';
		}else{
			echo 'success';
		}
	}
	public function get_articles()
	{
		$page = $this->input->get('page');
		$this->load->model('blog_model');
		$all = $this->blog_model->get_all();
		$total = count($all);
		$total_page = ceil($total / 6)+1;
		$result = $this->blog_model->get_by_page($page);
		$json = array(
				'data' => $result,
				'isEnd' => $page / 6 + 1 < $total_page ? false : true
		);
		echo json_encode($json);
	}



	public function admin_blog1()
	{
		$this -> load -> model('blog_model');
		$result = $this -> blog_model -> get_all();
		$data = array(
				'blogs' => $result
		);
		$this -> load -> view('admin/admin-blog1', $data);
	}
	public function admin_blog()
	{

		$this -> load -> view('admin/admin-blog');
	}
	public function save_blog()
	{
		$title = $this->input->post('title');
		$author = $this->input->post('author');
		$blogtext = $this->input->post('blogtext');
		if($title == '' || $author == '' || $blogtext == ''){
			echo 'fail';

		}else{
			$this->load->model('blog_model');
			$this->blog_model->save($title,$author,$blogtext);
			echo 'success';

		}
	}
	public function admin_blogbianji()
	{
		$id = $this->input->get('id');
		$this->load->model('blog_model');
		$row=$this->blog_model->get_by_id($id);
		$data=array(
			'blog'=>$row
		);
		$this -> load -> view('admin/admin-blogbianji',$data);
	}
	public function update_blog(){//添加信息的方法

		$title = $this -> input -> post('title');//接数据 用户写的用户名、邮箱、评论
		$author = $this -> input -> post('author');
		$blogtext = $this -> input -> post('blogtext');
		$id = $this -> input -> post('id');
		$data = array(
				'title'=>$title,
				'author'=>$author,
				'content'=>$blogtext,
				'blog_id'=>$id
		);
		$this -> load -> model('blog_model');
		$this -> blog_model -> do_update($data,$id);
//		$da = array(
//				'blog'=>$rs
//		);
//
//		$this -> load -> view('admin/admin-blog1',$da);


	}
//	public function admin_blogdel()
//	{
//
//	}
	public  function  delete_blog(){

		$blog_id = $this -> input -> get('id');
		$this -> load -> model('blog_model');
		$this -> blog_model -> delete($blog_id);

		$this -> admin_blog1();

	}

}



















