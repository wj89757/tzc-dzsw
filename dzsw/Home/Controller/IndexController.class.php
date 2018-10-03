<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    //========电商实验室首页=========//
    public function index(){
        $now_time = date('H',time());
        if($now_time >= 20 || $now_time <= 8){
            $this->display('Index/index_night');
        }else{
            $this->show();
        }
    }
    //========电商实验室首页夜间版=========//
    public function index_night(){
        $this->show();
    }
    //========注册功能实现=========//
    public function register()
    {
        $user = M('User');
        $user->name = $_POST['reg_username'];
        $user->password = sha1($_POST['reg_password']);
        $user->email = $_POST['reg_email'];
        $user->date = date('Y-m-d H:i:s');
        $result = $user->add();
        $this->ajaxReturn($result);
    }
    //========用户登录功能实现=========//
    public function login(){
        $username = $_POST['login_username'];
        $password = sha1($_POST['login_password']);
        $user = M('User');
        $condition['name']= $username;
        $pd = $user->where($condition)->getField('password');
        $result = false;
        if($pd == $password){
            $result = true; 
        }
        $this->ajaxReturn($result);
    }
}