<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class User extends CI_Controller{
		
		// public function __construct(){
			// parent::__construct();
			// $this->load->model('user_model');
// 			
		// }
		
		public function index(){
			
		}
		
		public function reg(){
			$this->load->view('reg.php');
		}
		
		public function do_reg(){
			$name=$this->input->post('name');
			echo $name;
		}
		
		public function cc(){
			$this->load->library('captcha.php');
			
		}
		public function checkname(){
			header("Access-Control-Allow-Origin:*");
			$name=$this->input->post('name');
			echo $name;
		}
		
		public function xx(){
			$this->load->view('xxdemo.php');
		}
		
		
	}


?>