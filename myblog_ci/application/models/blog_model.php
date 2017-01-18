<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Blog_model extends CI_Model{
		public function get_all(){
			//$this->db->order_by("add_time","dosc");
			//return $this->db->get("t_blogs")->result();
			$this->db->select("blog.*,catalog.name as CATALOG_NAME");
			$this->db->from("t_blogs blog");
			$this->db->join("t_blog_catalogs catalog","blog.catalog_id=catalog.catalog_id");
			$this->db->order_by("add_time","dosc");
			return $this->db->get()->result();
		}
		public function get_by_writer($writer_id){
			$this->db->select("blog.*,catalog.name as CATALOG_NAME");
			$this->db->from("t_blogs blog");
			$this->db->join("t_blog_catalogs catalog","blog.catalog_id=catalog.catalog_id");
			$this->db->where("blog.writer",$writer_id);
			$this->db->order_by("add_time","dosc");
			return $this->db->get()->result();
		}
		public function get_cata_by_writer($writer_id){
			$this->db->select("catalog.*");
			$this->db->from("t_blog_catalogs catalog");
			$this->db->where("USER_ID",$writer_id);
			return $this->db->get()->result();
		}
		public function get_by_id($blog_id){
			$this->db->select("blog.*,usr.NAME as WRITER_NAME,usr.IMG as WRITER_IMG");
			$this->db->from("t_blogs blog");
			$this->db->join("t_users usr",'blog.WRITER=usr.USER_ID');
			$this->db->where('blog.BLOG_ID',$blog_id);
			return $this->db->get()->row();
		}
		public function save($data){
			if($this->db->insert('t_blogs',$data)>0){
				return TRUE;
			}else{
				return FALSE;
			}
		}
		public function deltete_blog_by_id($id){
			$rs=$this->db->query("delete from t_blogs where blog_id in($id)");
			//$this->db->where_in('BLOG_ID',$id);
			//$rs=$this->db->delete('t_blogs');
			if($rs){
				return "删除评论成功";
			}
		}
		/*public function get_need_by_user_id($user_id){
			$this->db->select("blog.*,catalog.name as CATALOG_NAME,usr.name as WRITER_NAME");
			$this->db->from("t_blogs blog");
			$this->db->join("t_users usr","usr");
			$this->db->join("t_blog_catalogs catalog","blog.catalog_id=catalog.catalog_id");
			$this->db->where("blog.writer",$user_id);
			$this->db->order_by("add_time","dosc");
			return $this->db->get()->result();
		}*/
	}