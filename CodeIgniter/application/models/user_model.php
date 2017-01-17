<?php
/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2017/1/14 0014
 * Time: 10:37
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function checkName($name)
    {
//        原生sql方法
//        $query = $this->db->query("select * from user where uname='$name'");
//        CI的 QueryBuilder方法
        $arr = array(
            'uname' => $name
        );
        $query = $this->db->get_where('user', $arr);
        //var_dump($query->row());
        // die();
        return $query->row();
    }

    public function get_insert($name, $pass)
    {
        $arr = array(
            'uname' => $name,
            'pass' => $pass
        );
        $query = $this->db->insert('user', $arr);
        return $query;
    }

    public function check_login($name, $pass)
    {
        $arr = array(
            'uname' => $name,
            'pass' => $pass
        );
        $query = $this->db->get_where('user', $arr);
        return $query->row();
    }

    public function get_all_rows()
    {
        $query = $this->db->count_all('blog');
        return $query;
    }

    public function fenye($startNum, $pageNum)
    {
        $query = $this->db->get('blog', $pageNum, $startNum);
        return $query->result();
    }

}