<?php

/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2017/1/17 0017
 * Time: 14:20
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function reg()
    {
        $this->load->view('reg.php');
    }

    public function do_reg()
    {
        $account = $this->input->post('email');
        $name = $this->input->post('name');
        $pwd = $this->input->post('pwd');
        $gender = $this->input->post('gender');

        if ($gender == 1) {
            $gender = '男';
        } else {
            $gender = 'nv';
        }
        $arr = array(
            "ACCOUNT" => $account,
            "PASSWORD" => $pwd,
            "NAME" => $name,
            "GENDER" => $gender
        );
        $rs = $this->user_model->get_insert($arr);
        if ($rs) {
            $this->load->view('login.php');
        } else {
            redirect('user/reg');
        }
    }

    public function login()
    {
        $this->load->view('login.php');
    }

    public function do_login()
    {
        $account = $this->input->post('email');
        $pwd = $this->input->post('pwd');
        $rs = $this->user_model->check_login($account, $pwd);
        if ($rs) {
            $arr = array(
                "id" => $rs->USER_ID,
                "name" => $rs->NAME,
                "login_state" => TRUE
            );
            $this->session->set_userdata($arr);
            redirect('blog/index');
        } else {
            echo "<script>alert('登录失败！')</script>";
            echo "<script>window.location.href='" . site_url('user/login') . "'</script>";
        }
    }

    public function index()
    {
        echo '请先登录！';
    }


}