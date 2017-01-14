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
        $query = $this->db->get_where('user', array('uname' => $name));
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

    public function login()
    {

        $this->load->view('login.php');
    }

}