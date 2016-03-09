<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="B2C_注册">
    <meta name="author" content="B2C_注册">
    <link rel="icon" href="/B2C_SHOP/Public/images/index.ico">
    <link href="/B2C_SHOP/Public/css/base.css" rel="stylesheet" type="text/css"/>
    <link href="/B2C_SHOP/Public/css/product.css" rel="stylesheet" type="text/css"/>
    <link href="/B2C_SHOP/Public/css/showBo.css" rel="stylesheet" type="text/css"/>

    <!--[if lt IE 9]>
    <script src="/B2C_SHOP/Public/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/B2C_SHOP/Public/js/ie-emulation-modes-warning.js"></script>

    <!--[if lt IE 9]>
    <script src="/B2C_SHOP/Public/js/html5shiv.min.js"></script>
    <script src="/B2C_SHOP/Public/js/respond.min.js"></script>
    <![endif]-->
    <title>B2C_注册</title>
</head>

<body>
<div class="wrap">
    <!------头部部分------>
    <div class="loginheader">
        <div class="inner">
            <div class="logo"><a href="../index.html"><img src="/B2C_SHOP/Public/images/51jzl.png"></a></div>
            <div class="logospan">注册</div>
        </div>
    </div>
    <!------中间部分------>
    <div class="regmiddle">
        <div class="inner">
            <!------start----->
            <div class="passw-lister register-lister">
                <ul>
                    <li class="passw-lister_h"><a href="#">帐号注册 </a></li>
                </ul>
            </div>
            <div class="passw_box">
                <div class="regis-title">&nbsp;</div>
                <div class="regis-box"></div>
                <div id="reg_info" class="passwofe-one" style="float:left;margin-top:20px;width:800px;">
                    <form class="form" method="post" action="<?php echo U('register/Checkregister');?>">
                    <ul>
                        <li>
                            <p class="paa"><span class="pab">*</span> 注册帐号：</p>
                            <input id="username" name="username" maxlength="30"  type="text" placeholder="请输入6-30位数字、字母或两个的组合" class="text2" />
                            <span  class="errorUserName tip"></span>
                        </li>
                        <li>
                            <p class="paa"><span class="pab">*</span>设置密码：</p>
                            <input id="password" name="password" type="password" placeholder="请输入6-22位数字字母组合密码" class="text2">
                            <span  class="errorPassword tip"></span>
                        </li>
                        <li>
                            <p class="paa"><span class="pab">*</span>确认密码：</p>
                            <input id="repassword" name="repassword" type="password" placeholder="请再次输入密码" class="text2">
                            <span  class="errorRepassword tip"></span>
                        </li>
                        <li>
                            <p class="paa"><span class="pab">*</span>验证码：</p>
                            <table>
                                <tr>
                                    <td>
                                        <input name="captcha" type="text" class="text4">
                                        <span class="pah"><img id="identifyImg" alt="验证码" class="code" onclick="loadIdentify()"></span>
                                        <p class="pai">看不清？<span class="paj" onclick="loadIdentify()">换一张</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       <span  class="errorCaptcha tip"></span>
                                    </td>
                                </tr>
                            </table>
                        </li>
                        <li>
                            <p class="paa"></p>
                            <input name="" type="checkbox" value="" class="text5"/>
                            <p class="pai">阅读并同意<a href="#" class="pap">《B2C注册协议》</a></p>
                        </li>
                        <li>
                            <p class="paa"></p>
                            <input type="submit" name="submit" value="马上注册" class="but2" onclick="" />
                        </li>
                    </ul>
                    </form>
                </div>
                <div class="regin-right" style="height:430px;">
                    <p>已经注册过？</p>
                    <a href="../login/login.html">登录</a>
                </div>
            </div>
            <!------end----->
        </div>
    </div>
</div>
<!------底部部分------>

<meta charset="utf-8">
<style>
    .footer {
        padding: 40px 0;
        color: #999;
        text-align: center;
        background-color: #f9f9f9;
        border-top: 1px solid #e5e5e5;
    }</style>

<div class="loginfooter">
    <div class="inner">
        <div class="conaa">
            <a href="#">关于我们</a><span>|</span>
            <a href="#">联系我们</a><span>|</span>
            <a href="#">商家入驻</a><span>|</span>
            <a href="#">友情链接</a><span>|</span>
            <a href="#">销售联盟</a><span>|</span>
            <a href="#">人才招聘</a>
        </div>
        <div class="copyright">Copyright © 2016 网纵团队 All rights reserved. 备案/许可证编号为：沪ICP备XXXXXXXX号 <a
                href="http://www.51jzl.com"> Design by 51jzl </a></div>
        <div class="beian"><a href="#"><img src="/B2C_SHOP/Public/images/ic31.jpg"></a>
            <a href="#"><img src="/B2C_SHOP/Public/images/ic32.jpg"></a>
            <a href="#"><img src="/B2C_SHOP/Public/images/ic33.jpg"></a></div>
    </div>
</div>

</body>
    <script type="text/javascript">
            function loadIdentify(){
                document.getElementById("identifyImg").src = '<?php echo U("Code/code");?>?' + Math.random()
            }
    loadIdentify();
    var loginUrl="<?php echo U('Login/login');?>";

</script>
<script src="/B2C_SHOP/Public/js/jquery.min.js"></script>
<script src="/B2C_SHOP/Public/js/bootstrap.min.js"></script>
<script src="/B2C_SHOP/Public/js/ie10-viewport-bug-workaround.js"></script>
<script src="/B2C_SHOP/Public/js/showBo.js"></script>
<script src="/B2C_SHOP/Public/js/form.js"></script>
<script src="/B2C_SHOP/Public/js/register.js"></script>


</html>