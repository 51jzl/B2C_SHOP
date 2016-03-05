<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){//登录页面
    	$Columns=R("DbName/dbid");//动态数据库
        $this->display('login/login');
    }
    public function checkLogin(){//检查登录
    	$Columns=R("DbName/dbid");//动态数据库
    	$password=md5(I('password'));
    	$username=I('username');
		echo $username;
		echo $password;
    	if ($username&&$password) {
    		$where['username'] = $username;
    		$list = M("user")->field("userid,password")->where($where)->find();
    		// 注意这里必须小写/* dump($list);
    		if ($list['password'] == $password) {
    			session('username', $username);
    			session('userid', $list['userid']);
    			$this->ajaxReturn(array('status' => 'ok', 'info' => '登录成功'));
    		} else {
    			$this->ajaxReturn(array('status' => 'no', 'info' => '用户号码或者密码不正确'));
    		}
    	}else {
    			$this->ajaxReturn(array('status' => 'no', 'info' => '请输入用户名密码'));
    	}
    }
}