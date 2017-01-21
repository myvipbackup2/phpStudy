<?php

/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2017/1/17 0017
 * Time: 15:22
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
    }

    public function index()
    {
//        $rs->
        $this->load->view('index_logined.php');
    }

    public function unlogin()
    {
        $arr = array(
            "name",
            "id",
            "login_state"
        );
        $this->session->unset_userdata($arr);
        $this->load->view('index.php');
    }

}