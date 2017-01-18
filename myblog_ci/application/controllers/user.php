<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('blog_model');
		$this->load->model('user_model');
	}
	public function user_index()
	{
		$user_id=$this->input->get('writer');
		//$blog=$this->blog_model->get_need_by_user_id($user_id);
		$writer=$this->user_model->get_by_id($user_id);
		$blogs=$this->blog_model->get_by_writer($user_id);
		$cata=$this->blog_model->get_cata_by_writer($user_id);
		$data=array(
			'writer'=>$writer,
			'blogs'=>$blogs,
			'cata'=>$cata
		);
		//var_dump($blog);
		//$data=array('blog'=>$blog);
		$this->load->view('user_index',$data);
	}
	public function afterlogin()
	{
		$this->load->view('afterlogin');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function logout(){
		$this->session->unset_userdata('login_user');
		redirect('user/login');
	}
	public function reg()
	{
		$this->load->view('reg');
	}
	public function check_login(){
		$emile=$this->input->post('email');
		$password=$this->input->post('pwd');
		$this->load->model('user_model');
		
		$row=$this->user_model->get_by_name_password($emile,$password);
		if($row){//$row在php中是一个对象，也就是数据库的表中的每一行就是一个对象，每个列，就是对象的一个属性
			//若登陆成功，向session存入用户信息
			$this->session->set_userdata("login_user",$row);
			//$this->();//(this)当前类的afterlogin函数
			redirect("user/user_index?writer=$row->USER_ID");
		}else{
			$this->login();//(this)当前类的login函数
		}
	}
	public function do_reg(){
		//接收数据
		$emile=$this->input->post('email');
		$pwd=$this->input->post('pwd');
		$pwd2=$this->input->post('pwd2');
		$name=$this->input->post('name');
		$sex=$this->input->post('gender');
		$province=$this->input->post('province');
		$city=$this->input->post('city');
		//数据验证
		if($pwd!=$pwd2){
			$this->load->view(reg);
		}else{
			$data=array(
				"ACCOUNT"=>$emile,
				"PASSWORD"=>$pwd,
				"NAME"=>$name,
				"GENDER"=>$sex,
				"PROVINCE"=>$province,
				"CITY"=>$city
			);
		}
		//访问数据库
		$this->load->model('user_model');
		$result=$this->user_model->save($data);
		if($result){
			redirect('user/login');//(this)当前类的afterlogin函数
		}else{
			$this->reg();//(this)当前类的login函数
		}
		
	}
	public function check_infor()
	{
		$login_user=$this->session->userdata("login_user");
		$user_id=$login_user->USER_ID;
		$row=$this->user_model->get_by_name($user_id);
		$data=array(
			'user'=>$row
		);
		$this->load->view('profile',$data);
	}
	public function update(){
		$login_user=$this->session->userdata("login_user");
		$user_id=$login_user->USER_ID;
		$name=$this->input->post('name');
		$gender=$this->input->post('gender');
		$y=$this->input->post('y');
		$m=$this->input->post('m');
		$d=$this->input->post('d');
		$birth=$y.'-'.$m.'-'.$d;
		$province=$this->input->post('province');
		$city=$this->input->post('city');
		$signature=$this->input->post('signature');
		
		$result=$this->user_model->update_user($user_id,$name,$gender,$birth,$province,$city,$signature);
		redirect("user/check_infor?user=$user_id/$result");
	}
	public function adminIndex(){
		$this->load->view('adminIndex');
	}
	public function chpwd()
	{
		$this->load->view('chpwd');
	}
	public function usersetting(){
		
		$this->load->view('usersetting');
	}
	public function update_mood(){
		$login_user=$this->session->userdata("login_user");
		$user_id=$login_user->USER_ID;
		$mood=$this->input->post('space_name');
		$result=$this->user_model->update_mood($user_id,$mood);
		//因為只改變了數據庫中的心情，所以需要重新加載一次session
		$row=$this->user_model->get_by_name($user_id);
		$this->session->set_userdata("login_user",$row);
		redirect("user/adminIndex");
	}
	
}