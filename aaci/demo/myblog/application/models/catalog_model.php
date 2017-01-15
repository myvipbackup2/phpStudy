<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Catalog_model extends CI_Model{
		public function get_id_by_name($name,$user_id){
			$this->db->select('cata.CATALOG_ID as catalog_id');
			$this->db->from('t_blog_catalogs cata');
			$this->db->where('cata.USER_ID',$user_id);
			$this->db->where('cata.NAME',$name);
			/*$arr=array(
				"USER_ID"=>$user_id,
				"NAME"=>$name
				);
			$query=$this->db->get_where('t_blog_catalogs',$arr);*/
			return $this->db->get()->row();
		}
		public function get_num_by_id($catalog){
			$this->db->select('cata.BLOG_COUNT');
			$this->db->from('t_blog_catalogs cata');
			$this->db->where('cata.CATALOG_ID',$catalog);
			return $this->db->get()->row();
		}
		public function update($catalog){
			//$data=array("BLOG_COUNT"=>$blog_count+1);
			//$this->db->where('t_blog_catalogs.CATALOG_ID',$catalog);
			//$this->db->update('t_blog_catalogs',$data);
			//return "发表博文成功！";
			$query=$this -> db -> query("update t_blog_catalogs set blog_count=blog_count+1 where catalog_id=$catalog");
			if($query){
				return "发表博文成功！";
			}
		}
		public function get_all_by_id($user_id){
			$this->db->select('cata.*');
			$this->db->from('t_blog_catalogs cata');
			$this->db->where('cata.USER_ID',$user_id);
			return $this->db->get()->result();
		}
		public function get_all_by_cata_id($cata_id){
			$this->db->select('cata.*');
			$this->db->from('t_blog_catalogs cata');
			$this->db->where('cata.CATALOG_ID',$cata_id);
			return $this->db->get()->row();
		}
		public function update_cataname_by_cataid($cata_id,$name){
			//$$data=array("NAME"=>$name);
			//$this->db->where('t_blog_catalogs.CATALOG_ID',$cata_id);
			//->db->update('t_blog_catalogs',$data);
			//return "发表博文成功！";
			$query=$this->db->query("update t_blog_catalogs set name='$name' where catalog_id=$cata_id");
			if($query){
				return "发表博文成功！";
			}
		}
		public function save($data){
			
			if($this->db->insert('t_blog_catalogs',$data)){
				return "添加分类成功";
			}
		}
		public function dele_cata_by_cataid($cata_id){
			if($this->db->delete('t_blog_catalogs',array('CATALOG_ID'=>$cata_id))){
				return"删除成功";
			}
		}
		public function update_countblog_by_id($id){
			$this -> db ->update ('t_blog_catalogs');
			$this -> db -> set ('blog_count=blog_count-1');
			$this -> db -> join ('t_blog_catalogs.catalog_id=t_blogs.catalog_id');
			$this -> db -> where ('blog.BLOG_ID',$id);
			if($this->db->get()->result()){
				return "删除博客成功！";
			}
		}
		
	}