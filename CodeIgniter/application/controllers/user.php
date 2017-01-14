<?php

/**
 * Created by PhpStorm.
 * User: lzx
 * Date: 2017/1/14 0014
 * Time: 9:37
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');

    }


    public function index()
    {
        echo '默认主页';
    }

    public function reg()
    {
//        把view中的reg在浏览器中展示出来
        $this->load->view('reg.php');
    }

    public function do_reg()
    {
        $name = $this->input->post('name');
        $pass = $this->input->post('pwd');

//        第一步：去数据库中查询用户名是否存在
//        加载user_model类
        $this->load->model('user_model');
//        调用下面的方法
        $rs = $this->user_model->checkName($name);
//        第二步：如果存在，重新加载reg()
        if ($rs) {
//            $this->reg();
            redirect('user/reg');
        } else {
            $rs = $this->user_model->get_insert($name, $pass);
            if ($rs) {
                redirect('user/login');
            }
        }
//        第三步：如果不存在insert数据库，插入成功跳转登录页

    }

    public function check()
    {
        $name = $this->input->post('uname');
        $this->load->model('user_model');
        $this->user_model->checkName($name);
    }

}