<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Message_model extends CI_Model{
		public function get_by_sendid($user_id){
			$this->db->select("msg.*,usr.NAME as NAME,usr.IMG as IMG");
			$this->db->from("t_messages msg");
			$this->db->join("t_users usr",'msg.RECEIVER=usr.USER_ID');
			$this->db->where('msg.SENDER',$user_id);
			return $this->db->get()->result();
		}
		public function get_by_receiverid($user_id){
			$this->db->select("msg.*,usr.NAME as NAME,usr.IMG as IMG");
			$this->db->from("t_messages msg");
			$this->db->join("t_users usr",'msg.SENDER=usr.USER_ID');
			$this->db->where('msg.RECEIVER',$user_id);
			return $this->db->get()->result();
		}
		public function dele_by_id($msg_id){
			//$this->db->where('t_messages.MSG_ID',$msg_id);
			//$this->db->delete('t_messages');
			//return $this->db->get()->result();
			return $this->db->delete('t_messages',array('MSG_ID'=>$msg_id));
		}
		public function save($data){
			if($this->db->insert('t_messages',$data)>0){
				return TRUE;
			}else{
				return FALSE;
			}
		}
	}