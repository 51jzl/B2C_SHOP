<?php
namespace Home\Controller;
use Think\Controller;
class RegisterController extends Controller {
    public function register(){//注册页面
    	$Columns=R("DbName/dbid");//动态数据库
       $this->display('register/register');
    }
    public function checkregister() {//检查注册页面
    	$Columns=R("DbName/dbid");//动态数据库
    	$user = D ( 'user' );
    	if (! $user->create ()) {
    		$data ["status"] ='no';
    		$data ["txt"] = $user->getError ();
    		echo JSON_ENCODE ( $data );
    	} else {
    		$user->add ();

    		$this->ajaxReturn(array('status' => 'ok', 'info' => '注册成功'));
    	}
    }
}