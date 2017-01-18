<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Comment_model extends CI_Model{
		public function get_by_blog_id($blog_id){
			$this->db->select("comm.*,usr.NAME as COMMENTATOR_NAME,usr.IMG as COMMENTATOR_IMG");
			$this->db->from("t_comments comm");
			$this->db->join("t_users usr",'comm.COMMENTATOR=usr.USER_ID');
			$this->db->where('comm.BLOG_ID',$blog_id);
			return $this->db->get()->result();
		}
		public function get_comment_by_user_id($user_id){
			$this->db->select("comm.*,usr.USER_ID as USER_ID,usr.NAME as COMMENTATOR_NAME,usr.IMG as COMMENTATOR_IMG,blog.TITLE as COMMENT_TITLE,blog.BLOG_ID as COMM_BLOG_ID");
			$this->db->from("t_comments comm");
			$this->db->join("t_users usr",'comm.COMMENTATOR=usr.USER_ID');
			$this->db->join("t_blogs blog",'blog.BLOG_ID=comm.BLOG_ID');
			$this->db->where('blog.WRITER',$user_id);
			$this->db->order_by("ADD_TIME","dosc");
			return $this->db->get()->result();
		}
		public function delete_one_by_commid($comm_id){
			$rs=$this->db->delete('t_comments',array('COMMENT_ID'=>$comm_id));
			if($rs){
				return "删除评论成功";
			}
		}
		public function delete_all_by_commenterid($commenter){
			$rs=$this->db->delete('t_comments',array('COMMENTATOR'=>$commenter));
			if($rs){
				return "删除评论成功";
			}
		}
		public function add_comment($data){
			if($this->db->insert('t_comments',$data)>0){
				return '评论成功';
			}
		}
		public function delete_comm_by_id($id){
			$this->db->where_in('BLOG_ID',$id);
			$this->db->delete('t_comments');
		}
	}