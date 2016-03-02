<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){//首页
    	$Columns=R("DbName/dbid");//同台数据库
       $this->display('index/index');
    }
}