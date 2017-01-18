<?php

/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2017/1/17 0017
 * Time: 22:05
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model
{
    public function get_all_rows()
    {
        $query = $this->db->count_all();
    }
}