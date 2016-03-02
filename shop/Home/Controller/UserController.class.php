<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function user(){
    	$Columns=R("DbName/dbid");//动态数据库
       $this->display('user/user');
    }
   
}