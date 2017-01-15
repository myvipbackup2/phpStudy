<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('blog_model');
		$this->load->model('comment_model');
		$this->load->model('message_model');
		$this->load->model('catalog_model');
	}
	public function view($blog_id){
		$blog=$this->blog_model->get_by_id($blog_id);
		$comm=$this->comment_model->get_by_blog_id($blog_id);
		$data=array(
			'blog'=>$blog,
			'comm'=>$comm
		);
		$this->load->view('view_Post',$data);
	}
	public function add_comment(){
		$comment=$this->input->post('comment');
		$blog_id=$this->input->get('blog_id');
		$login_user=$this->session->userdata('login_user');
		$commenter=$login_user->USER_ID;
		$add_time=date('Y-m-d H-i-s',time());
		$data=array(
			'COMMENTATOR'=>$commenter,
			'BLOG_ID'=>$blog_id,
			'CONTENT'=>$comment,
			'ADD_TIME'=>$add_time
		);
		$rs=$this->comment_model->add_comment($data);
		$this->view($blog_id);
	}
	public function newBlog(){
		$login_user=$this->session->userdata('login_user');
		$user_id=$login_user->USER_ID;
		$cata=$this->blog_model->get_cata_by_writer($user_id);
		$data=array(
			"cata"=>$cata
		);
		$this->load->view('newBlog',$data);
	}
	public function creat_blog(){
		$login_user=$this->session->userdata('login_user');
		$user_id=$login_user->USER_ID;
		$add_time=date('Y-m-d H-i-s',time());
		$title=$this->input->post('title');
		$catalog=$this->input->post('catalog');
		$content=$this->input->post('content');
		$type=$this->input->post('type');
		$click_rate=$this->input->post('privacy');
		$comm_rate=$this->input->post('deny_comment');
		$data=array(
				"WRITER"=>$user_id,
				"TITLE"=>$title,
				"ADD_TIME"=>$add_time,
				"CATALOG_ID"=>$catalog,
				"CONTENT"=>$content,
				"IS_YOURS"=>$type,
				"CLICK_RATE"=>$click_rate,
				"COMM_RATE"=>$comm_rate
		);
		$is_ture=$this->blog_model->save($data);
		if($is_ture){
			$rs=$this->catalog_model->update($catalog);
			redirect("user/adminIndex/$rs");
		}
		
	}
	public function outBox(){
		$user_id=$this->input->get('user');
		$msg=$this->message_model->get_by_sendid($user_id);
		$data=array(
			'msg'=>$msg
		);
		$this->load->view('outBox',$data);
	}
	public function inBox(){
		$user_id=$this->input->get('user');
		$msg=$this->message_model->get_by_receiverid($user_id);
		$data=array(
			'msg'=>$msg
		);
		$this->load->view('inBox',$data);
	}
	public function dele_msg(){
		$login_user=$this->session->userdata('login_user');
		$msg_id=$this->input->get('ID');
		$msg=$this->message_model->dele_by_id($msg_id);
		if($msg){
			redirect("blog/outBox?user=$login_user->USER_ID");
		}else{
			echo error;
		}
	}
	public function dele_msgin(){
		$login_user=$this->session->userdata('login_user');
		$msg_id=$this->input->get('ID');
		$msg=$this->message_model->dele_by_id($msg_id);
		if($msg){
			redirect("blog/inBox?user=$login_user->USER_ID");
		}else{
			echo error;
		}
	}
	public function usersetting(){
		$this->load->view('usersetting');
	}
	public function editCatalog(){
		$login_user=$this->session->userdata('login_user');
		$user_id=$login_user->USER_ID;
		$cata=$this->catalog_model->get_all_by_id($user_id);
		$data=array(
			'cata'=>$cata
		);
		$this->load->view('editCatalog',$data);
	}
	public function editCatalog1(){
		$cata_id=$this->input->get('cata_id');
		$login_user=$this->session->userdata('login_user');
		$user_id=$login_user->USER_ID;
		$cata=$this->catalog_model->get_all_by_cata_id($cata_id);
		$data=array(
			'cata'=>$cata
		);
		$this->load->view('editCatalog1',$data);
	}
	public function update_cataname(){
		$cata_id=$this->input->get('cata_id');
		$name=$this->input->post('name');
		$rs=$this->catalog_model->update_cataname_by_cataid($cata_id,$name);
		$this->editCatalog();
	}
	public function create_cata(){
		$login_user=$this->session->userdata('login_user');
		$user_id=$login_user->USER_ID;
		$blog_count=0;
		$name=$this->input->post('name');
		$data=array(
			'NAME'=>$name,
			'USER_ID'=>$user_id,
			'BLOG_COUNT'=>$blog_count
		);
		$rs=$this->catalog_model->save($data);
		redirect("blog/editCatalog/$rs");
	}
	public function delete_cata(){
		$cata_id=$this->input->get('cata_id');
		$rs=$this->catalog_model->dele_cata_by_cataid($cata_id);
		redirect("blog/editCatalog/$rs");
	}
	public function blogs(){
		$login_user=$this->session->userdata('login_user');
		$writer_id=$login_user->USER_ID;
		$blog=$this->blog_model->get_by_writer($writer_id);
		$data=array('blog'=>$blog);
		$this->load->view('blogs',$data);
	}
	public function delete_blog(){
		$login_user=$this->session->userdata('login_user');
		$user_id=$login_user->USER_ID;
		$id=$this->input->get('id');
		//var_dump($id);
		//die();
		$rs1=$this->blog_model->deltete_blog_by_id($id);
		//$rs2=$this->catalog_model->update_countblog_by_id($id);
		//$rs3=$this->comment_model->delete_comm_by_id($id);
		//redirect("blog/blogs");
		$this->blogs();
		
	}
	public function blogComments(){
		$login_user=$this->session->userdata('login_user');
		$user_id=$login_user->USER_ID;
		$comm=$this->comment_model->get_comment_by_user_id($user_id);
		$data=array('comm'=>$comm);
		$this->load->view('blogComments',$data);
	}
	public function delete_onecomment(){
		$comm_id=$this->input->get('comm_id');
		$rs=$this->comment_model->delete_one_by_commid($comm_id);
		redirect("blog/blogComments/$rs");
	}
	public function delete_allcomment(){
		$commenter=$this->input->get('commenter');
		$rs=$this->comment_model->delete_all_by_commenterid($commenter);
		redirect("blog/blogComments/$rs");
	}
	
}