<?php
namespace Home\Controller;
use Think\Controller;
class CenterController extends Controller {
    public function usermanage(){//账户管理
       $this->display();
    }
    public function orderlist(){//订单列表
    	$this->display();
    }
    public function orderdetails(){//订单列表
    	$this->display();
    }
    public function collection(){//收藏
    	$this->display();
    }
    public function cart(){//购物车
    	$this->display();
    }
}