<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class User_model extends CI_Model{
		public function get_by_name_password($emile,$password){
			$arr=array(
				"ACCOUNT"=>$emile,
				"PASSWORD"=>$password
				);
			$query=$this->db->get_where('t_users',$arr);
			return $query->row();
		}
		public function save($data){
			
			if($this->db->insert('t_users',$data)>0){
				return TRUE;
			}
			return FALSE;
		}
		public function get_by_name($user_id){
			$arr=array(
				"USER_ID"=>$user_id,
				);
			$query=$this->db->get_where('t_users',$arr);
			if($query->row()){
				//$data="success";
				return $query->row();
			}else{
				return "fail";
			}
		}
		public function get_by_id($user_id){
			return $this->db->get_where('t_users',array('USER_ID'=>$user_id))->row();
			
		}
		public function update_user($user_id,$name,$gender,$birth,$province,$city,$signature){
			$data=array(
				"NAME"=>$name,
				"GENDER"=>$gender,
				"BIRTHDAY"=>$birth,
				"PROVINCE"=>$province,
				"CITY"=>$city,
				"SIGNATURE"=>$signature
			);
			$this->db->where('t_users.USER_ID',$user_id);
			$this->db->update('t_users',$data);
			return "更新成功";
	    }
		public function update_mood($user_id,$mood){
			$data=array("MOOD"=>$mood);
			$this->db->where('t_users.USER_ID',$user_id);
			$this->db->update('t_users',$data);
			return "更新心情成功！";
		}
	}
?>