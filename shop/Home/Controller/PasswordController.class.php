<?php
namespace Home\Controller;
use Think\Controller;
class PasswordController extends Controller {
    public function password(){
       $this->display('password/password');
    }
}