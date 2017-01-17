<?php

/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2017/1/17 0017
 * Time: 14:23
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function get_insert($arr)
    {
        $this->db->insert('t_users', $arr);
        return $this->db->affected_rows();
    }

    public function check_login($account, $pwd)
    {
        $arr = array(
            "ACCOUNT" => $account,
            "PASSWORD" => $pwd
        );
        $query = $this->db->get_where('t_users', $arr);
        return $query->row();
    }

}