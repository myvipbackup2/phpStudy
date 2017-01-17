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
        $this->load->library('pagination');
    }

    public function index()
    {
        $rows = $this->user_model->get_all_rows();
        $config['base_url'] = 'http://localhost:63342/phpStudy/CodeIgniter/user/index';
        $config['total_rows'] = $rows;
        $config['per_page'] = 5;
        $config['first_link'] = '首页';
        $config['last_link'] = '末页';
        $this->pagination->initialize($config);
        $startNum = $this->uri->segment(3) == null ? 0 : $this->uri->segment(3);
        $rs = $this->user_model->fenye($startNum, $config['per_page']);
        $arr['bloglist'] = $rs;
        $this->load->view('index.php',$arr);
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
//        加载user_model类,可以写在构造函数里
//        $this->load->model('user_model');
//        调用下面的方法
        $rs = $this->user_model->checkName($name);
//        第二步：如果存在，重新加载reg()
        if ($rs) {
//            $this->reg();
            redirect('user/reg');
        } else {
            $rs = $this->user_model->get_insert($name, $pass);
            if ($rs) {  //第三步：如果不存在insert数据库，插入成功跳转登录页
//                $this->load->view('login.php');
                redirect('user/login');
            }
        }
    }

    public function check()
    {
        $name = $this->input->post('uname');
        $rs = $this->user_model->checkName($name);
        if ($rs) {
            echo "rename";
        }
    }

    public function login()
    {
        $this->load->view('login.php');
    }

    public function do_login()
    {
        $name = $this->input->post('name');
        $pass = $this->input->post('pwd');
        $hours = $this->input->post('2week');
        $rs = $this->user_model->check_login($name, $pass);
        if ($rs) {
            $arr = array(
                'name' => $rs->uname,
                'id' => $rs->uid
            );
            if ($hours) {
                $this->load->helper('cookie');
                set_cookie("name", $arr['name'], 7200);
                set_cookie("id", $arr['id'], 7200);
            } else {
                $this->session->set_userdata($arr);
            }
            redirect('user/index');
        }
    }


}