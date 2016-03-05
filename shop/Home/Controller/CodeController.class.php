<?php
namespace Home\Controller;
use Think\Controller;
class CodeController extends Controller {
    //验证码生成
    function Code(){
   	$Verify = new \Think\Verify();  
   	$Verify->useImgBg  = false;           // 使用背景图片
    $Verify->fontSize = 17;  
    $Verify->length   = 4;  
    $Verify->useNoise = false;  
    $Verify->codeSet = '0123456789';  
    $Verify->imageW = 120;  
    $Verify->imageH = 44;  
    $Verify->expire = 600; 
    $Verify->useNoise = false;           // 是否添加杂点
    $Verify->useCurve = false;
    $Verify->bg = array(245, 245, 245);
    $Verify->fontttf = '6.ttf';
    $Verify->entry(); 
    }
    
}