<?php
namespace Home\Controller;
use Think\Controller;
class DbNameController extends Controller {
    public function dbid(){
       	$dbname=I('u','1');
       	$config['DB_NAME'] = 'shop'.$dbname;
		$return=C($config,'name');
    }
}