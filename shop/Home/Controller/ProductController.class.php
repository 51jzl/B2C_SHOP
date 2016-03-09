<?php
namespace Home\Controller;
use Think\Controller;
class ProductController extends Controller {
    public function productlist(){//商品列表
       $this->display();
    }
    public function productdetails(){//商品详情
    	$this->display();
    }
}