<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('blog_model');
		$this->load->model('comment_model');
		$this->load->model('message_model');
		$this->load->model('catalog_model');
	}
	public function into_msg(){
		$receiver=$this->input->get('receiver');
		$rs=$this->user_model->get_by_id($receiver);
		$data=array('receiver'=>$rs);
		$this->load->view('sendMsg',$data);
	}
	public function add_msg(){
		$login_user=$this->session->userdata('login_user');
		$sender=$login_user->USER_ID;
		$receiver=$this->input->get('receiver');
		$recei=$this->user_model->get_by_id($receiver);
		$content=$this->input->post('content');
		$add_time=date('Y-m-d H-i-s',time());
		$data=array(
			'SENDER'=>$sender,
			'RECEIVER'=>$receiver,
			'CONTENT'=>$content,
			'ADD_TIME'=>$add_time
		);
		$rs=$this->message_model->save($data);
		if($rs){
			$datas=array('receiver'=>$recei);
			$this->load->view('sendMsgOk',$datas);
		}
	}
}