<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="模版">
    <meta name="author" content="模版">
	<link rel="icon" href="/B2C_SHOP/Public/images/index.ico">
    <link type="text/css" rel="stylesheet" href="/B2C_SHOP/Public/css/product.css">
    <link type="text/css" rel="stylesheet" href="/B2C_SHOP/Public/css/base.css">
 	<!--[if lt IE 9]><script src="/B2C_SHOP/Public/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/B2C_SHOP/Public/js/ie-emulation-modes-warning.js"></script>
    <!--[if lt IE 9]>
    <script src="/B2C_SHOP/Public/js/html5shiv.min.js"></script>
    <script src="/B2C_SHOP/Public/js/respond.min.js"></script>
    <script type="text/javascript" src="/B2C_SHOP/Public/js/jquery.js"></script>
    <!--[if IE]-->
    <script>
        (function(){if(!/*@cc_on!@*/0)return;var e = "header,footer,nav,article,section".split(','),i=e.length;while(i--){document.createElement(e[i])}})()
    </script>
    <!--[endif]-->
<title>B2C首页</title>
</head>

<body>
<meta charset="utf-8">
<link href="/B2C_SHOP/Public/css/base.css" rel="stylesheet" type="text/css"/>
<link href="/B2C_SHOP/Public/css/style.css" rel="stylesheet" type="text/css"/>

<div class="header">
    <div class="headtop">
        <div class="inner">
            <div class="hi">B2C首页 Hi , 欢迎来到51建站啦B2C商城<a href="index.php/login/login.html" style="color: red">亲，请登录</a><a href="index.php/register/register.html">
                免费注册</a></div>
            <div class="hilink">
                <a href="#">我的订单 <img src="/B2C_SHOP/Public/images/ta6.png"></a>
                <span>|</span>
                <a href="index.php/center/cart.html">购物车<b> 0</b> </a>
                <span>|</span>
                <a href="#"> 我的收藏</a>
                <span>|</span>
                <a href="#">客服中心 </a>
                <span>|</span>
                <a href="#">关注B2c <img src="/B2C_SHOP/Public/images/ta6.png"></a>
            </div>
        </div>
    </div>
    <div class="headdw">
        <div class="inner">
            <div class="logo"><a href="../index.html"><img src="/B2C_SHOP/Public/images/51jzl.png"></a></div>
            <div class="search">
                <div class="searchone">
                    <ul>
                        <li><input type="text" value="搜索商品" class="txta"></li>
                        <li><input type="button" value="搜 索" class="btna"></li>
                    </ul>

                </div>
                <!--<div class="searchtwo">
                  <a href="#">女士眼镜</a><a href="#">太阳眼镜</a>
                  <a href="#">远视眼镜</a><a href="#">隐形眼镜</a>
                  <a href="#">眼镜片</a><a href="#">眼镜架</a>
                  <a href="#">老花镜</a>
                </div>-->
            </div>
        </div>
    </div>
</div>

<!-----------查看购物车------------------------->

    <!--中间区域---->
    <div class="logmiddle marginbottom">
        <div class="inner">
            <!-----购物车导航----->
            <div class="uicart">
                <p><img src="/B2C_SHOP/Public/images/ic66.png"></p>
                <ul>
                    <li><a href="#" class="on">查看购物车 </a></li>
                    <li><a href="#">填写订单信息  </a></li>
                    <li><a href="#"> 在线支付  </a></li>
                    <li><a href="#">完成 </a></li>
                </ul>
            </div>
            <div class="cartfont">全部商品（<span class="yellow">4</span>）</div>
            <table cellpadding="0" cellspacing="0" class="tablecart">
                <tr>
                    <th scope="col" width="60"><p><input type="checkbox"></p> </th>
                    <th scope="col" width="550">商品名称</th>
                    <th scope="col" width="130">商品信息 </th>
                    <th scope="col" width="110">价格</th>
                    <th scope="col" width="135">数量</th>
                    <th scope="col" width="145">小计</th>
                    <th scope="col">操作</th>
                </tr>
            </table>
            <table cellpadding="0" cellspacing="0" class="tablecart2">
                <tr>
                <tr>
                    <th scope="col" width="60"><p><input type="checkbox"></p> </th>
                    <th scope="col" width="550">商品名称</th>
                    <th scope="col" width="130">商品信息 </th>
                    <th scope="col" width="110">价格</th>
                    <th scope="col" width="135">数量</th>
                    <th scope="col" width="145">小计</th>
                    <th scope="col">操作</th>
                </tr>
                <tr>
                    <td width="60"><p class="centy"><input type="checkbox"></p></td>
                    <td width="550"><img src="/B2C_SHOP/Public/images/img43.jpg"><span width="350">
                    雷朋光学眼镜架 商务金属半框近视<br>配镜眼镜框</span></td>
                    <td width="160"><div class="xiucart"><p>镜宽：51</p><p>鼻梁：16</p><p>框架：140</p><p>镜高：39.8</p></div></td>
                    <td width="110">2000   </td>
                    <td width="130">
                        <div class="jaiadd">
                            <a href="#"><img src="/B2C_SHOP/Public/images/iao.jpg"></a>
                            <input type="text" value="4">
                            <a href="#"><img src="/B2C_SHOP/Public/images/iao2.jpg"></a>
                        </div>
                    </td>
                    <td width="115"> <span class="redfu"> 4000</span>     </td>
                    <td> <p class="centy"><a href="#"><img src="/B2C_SHOP/Public/images/ic70.png"></a>  <br><a href="#"><img src="/B2C_SHOP/Public/images/ic72.png"></a> </p></td>
                </tr>
                <tr>
                    <td width="60"><p class="centy"><input type="checkbox"></p></td>
                    <td width="180"><img src="/B2C_SHOP/Public/images/img43.jpg"></td>
                    <td width="350">雷朋光学眼镜架 商务金属半框近视<br>配镜眼镜框</td>
                    <td width="160"><div class=""><p>镜宽：51</p><p>鼻梁：16</p><p>框架：140</p><p>镜高：39.8</p></div></td>
                    <td width="110">2000   </td>
                    <td width="130">
                        <div class="jaiadd">
                            <a href="#"><img src="/B2C_SHOP/Public/images/iao.jpg"></a>
                            <input type="text" value="4">
                            <a href="#"><img src="/B2C_SHOP/Public/images/iao2.jpg"></a>
                        </div>
                    </td>
                    <td width="115"> <span class="redfu"> 4000</span>     </td>
                    <td> <p class="centy"><a href="#"><img src="/B2C_SHOP/Public/images/ic71.png"></a>  <br><a href="#"><img src="/B2C_SHOP/Public/images/ic72.png"></a> </p></td>
                </tr>
            </table>
            <div class="shopseb">
                <div class="shopble"><input name="" type="checkbox" value=""class="ribss" /><p>全选</p><p class="">删除</p></div>
                <div class="jixgo"><a href="#">继续购物</a></div>
                <div class="shopbmu">
                    <p>数量总计：2 </p>
                    <p>  优惠金额：0</p>
                    <p>金额总计：<span class="shbma">￥1000.00 </span>元</p>
                </div>
                <div class="jjjfr"><input name="" type="button" class="riajss" value="¥ 结算"/></div>
            </div>
            <div class="doyoulike"><span>猜你喜欢</span></div>
            <ul class="doyoulist">
                <li>
                    <span><img src="/B2C_SHOP/Public/images/img44.jpg"></span>
                    <p class="douone">¥500</p>
                    <p class="doutwo">雷朋光学眼镜架 商务金属半框近视配镜眼镜框 </p>
                    <p class="dousan">光明眼镜店</p>
                    <div class="doufour">
                        <a href="#" class="btnhuang">点击查看</a>
                        <a href="#">马上收货</a>
                    </div>
                </li>
                <li>
                    <span><img src="/B2C_SHOP/Public/images/img44.jpg"></span>
                    <p class="douone">¥500</p>
                    <p class="doutwo">雷朋光学眼镜架 商务金属半框近视配镜眼镜框 </p>
                    <p class="dousan">光明眼镜店</p>
                    <div class="doufour">
                        <a href="#" class="btnhuang">点击查看</a>
                        <a href="#">马上收货</a>
                    </div>
                </li>
                <li>
                    <span><img src="/B2C_SHOP/Public/images/img44.jpg"></span>
                    <p class="douone">¥500</p>
                    <p class="doutwo">雷朋光学眼镜架 商务金属半框近视配镜眼镜框 </p>
                    <p class="dousan">光明眼镜店</p>
                    <div class="doufour">
                        <a href="#" class="btnhuang">点击查看</a>
                        <a href="#">马上收货</a>
                    </div>
                </li>
                <li>
                    <span><img src="/B2C_SHOP/Public/images/img44.jpg"></span>
                    <p class="douone">¥500</p>
                    <p class="doutwo">雷朋光学眼镜架 商务金属半框近视配镜眼镜框 </p>
                    <p class="dousan">光明眼镜店</p>
                    <div class="doufour">
                        <a href="#" class="btnhuang">点击查看</a>
                        <a href="#">马上收货</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--底部区域---->
    <div class="guid_footer">
        <div class="inner">
            <ul class="guidbuy">
                <li><a href="#"><span>正</span><p>正品行货</p></a></li>
                <li><a href="#"><span>全</span><p>品类齐全</p></a></li>
                <li><a href="#"><span>保</span><p>无忧售后服务保证</p></a></li>
                <li><a href="#"><span>便</span><p>O2O上门服务</p></a></li>
                <li style="margin-right:0;"><a href="#"><span>天</span><p>天天低价</p></a></li>
            </ul>
        </div>
    </div>


<meta charset="utf-8">
<style>
    .footer {
        padding: 40px 0;
        color: #999;
        text-align: center;
        background-color: #f9f9f9;
        border-top: 1px solid #e5e5e5;
    }</style>

<div class="guid_footer">
    <div class="inner">
        <ul class="guidbuy">
            <li><a href="#"><span>正</span>
                <p>正品行货</p></a></li>
            <li><a href="#"><span>全</span>
                <p>品类齐全</p></a></li>
            <li><a href="#"><span>保</span>
                <p>无忧售后服务保证</p></a></li>
            <li style="margin-right:0;"><a href="#"><span>天</span>
                <p>天天低价</p></a></li>
        </ul>
    </div>
</div>
<div class="footer">
    <div class="inner">
        <div class="footop">
            <ul class="foolist">
                <li style="margin-left:0;">
                    <dl>
                        <dt>新手帮助</dt>
                        <dd><a href="#">交易条款协议</a></dd>
                        <dd><a href="#">注册新用户</a></dd>
                        <dd><a href="#">会员积分详情</a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>购物指南</dt>
                        <dd><a href="#">订购流程</a></dd>
                        <dd><a href="#">验货与签收</a></dd>
                        <dd><a href="#">订单配送查询</a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>支付/配送</dt>
                        <dd><a href="#">支付方式</a></dd>
                        <dd><a href="#">配送方式</a></dd>
                        <dd><a href="#">配送时间及运费</a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>售后服务</dt>
                        <dd><a href="#">退换货政策</a></dd>
                        <dd><a href="#">退款说明</a></dd>
                        <dd><a href="#">发票制度</a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>关于我们</dt>
                        <dd><a href="#">公司介绍</a></dd>
                        <dd><a href="#">联系我们</a></dd>
                        <dd><a href="#">加入我们</a></dd>
                    </dl>
                </li>
            </ul>
            <div class="weixin">
                <span><img src="/B2C_SHOP/Public/images/ic28.png"></span>
                <a href="#"><img src="/B2C_SHOP/Public/images/ic29.png"></a>

                <a href="#"><img src="/B2C_SHOP/Public/images/ic30.jpg"></a>
            </div>
        </div>
        <div class="footdw">
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
</div>

</body>

	<script src="/B2C_SHOP/Public/js/jquery.min.js"></script>
	<script src="/B2C_SHOP/Public/js/bootstrap.min.js"></script>
	<script src="/B2C_SHOP/Public/js/ie10-viewport-bug-workaround.js"></script>
</html>