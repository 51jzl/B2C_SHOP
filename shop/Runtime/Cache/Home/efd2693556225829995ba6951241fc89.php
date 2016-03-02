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
    <div class="wrapper">
    <!--头部区域--->
	<meta charset="utf-8">
<link href="/B2C_SHOP/Public/css/base.css" rel="stylesheet" type="text/css"/>
<link href="/B2C_SHOP/Public/css/style.css" rel="stylesheet" type="text/css"/>

<div class="header">
    <div class="headtop">
        <div class="inner">
            <div class="hi">B2C首页 Hi , 欢迎来到51建站啦B2C商城<a href="login/login.html" style="color: red">亲，请登录</a><a href="index.php/register/register.html">
                免费注册</a></div>
            <div class="hilink">
                <a href="#">我的订单 <img src="/B2C_SHOP/Public/images/ta6.png"></a>
                <span>|</span>
                <a href="#">购物车<b> 0</b> </a>
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
            <div class="logo"><a href="index.html"><img src="/B2C_SHOP/Public/images/51jzl.png"></a></div>
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

    <!--头部结束-->
    <div class="headernav">
        <div class="inner">
            <!---左边导航-start---->
            <div class="rightnav"><a href="#" class="big">所有商品分类</a>
              <!--  <div class="downdrop">
                   <ul class="droplist">
                       <li><a href="#"><span class="ico"><img src="/B2C_SHOP/Public/images/ic3.jpg"></span> 男士眼镜</a></li>
                       <li class="on"><a href="#"><span class="ico"><img src="/B2C_SHOP/Public/images/er2.jpg"></span> 女士眼镜</a>
                          <div class="dropalert">
                              <ul class="drop_left">
                                 <li>
                                    <div class="droaa"><a href="#"><img src="/B2C_SHOP/Public/images/ic34.jpg"> 品牌</a></div>
                                    <div class="dropbb">
                                      <a href="#">雷朋/RAY-BAN </a><span>|</span>
                                      <a href="#"> 精工/SEIKO </a><span>|</span>
                                      <a href="#">暴龙/BOLON  </a><span>|</span>
                                      <a href="#"> 欧野/OYEA </a><span>|</span>
                                      <a href="#">依视路 </a><span>|</span>
                                      <a href="#">海俪恩/HORIEN</a><span>|</span>
                                      <a href="#">万宝龙/MontBlanc </a><span>|</span>
                                      <a href="#">李维斯/Levi's    </a><span>|</span>
                                      <a href="#"> 木九十  </a><span>|</span>
                                      <a href="#">眼镜生活/LOHO   </a><span>|</span>
                                      <a href="#">施华洛世奇/SWAROVSKI  </a><span>|</span>
                                      <a href="#">蔡司/ZEISS    </a><span>|</span>
                                      <a href="#">普莱斯/pulais  </a><span>|</span>
                                      <a href="#">吉普/JEEP</a>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="droaa"><a href="#"><img src="/B2C_SHOP/Public/images/ic35.jpg"> 风格</a></div>
                                    <div class="dropbb">
                                      <a href="#">商务 </a><span>|</span>
                                      <a href="#">休闲</a><span>|</span>
                                      <a href="#">潮款  </a><span>|</span>
                                      <a href="#"> 运动    </a><span>|</span>
                                      <a href="#"> 经典  </a><span>|</span>
                                      <a href="#"> 另类</a>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="droaa"><a href="#"><img src="/B2C_SHOP/Public/images/ic36.jpg"> 选购热点</a></div>
                                    <div class="dropbb">
                                      <a href="#">潮人</a><span>|</span>
                                      <a href="#">大脸眼镜</a><span>|</span>
                                      <a href="#">个性</a><span>|</span>
                                      <a href="#">小清新 </a><span>|</span>
                                      <a href="#">明星同款 </a><span>|</span>
                                      <a href="#">原宿风</a><span>|</span>
                                      <a href="#">显瘦</a>
                                    </div>
                                 </li>
                              </ul>
                            <div class="drop_right">
                               <div class="drop_rightbrand">
                                 <a href="#"><img src="/B2C_SHOP/Public/images/img24.jpg"></a>
                                 <a href="#"><img src="/B2C_SHOP/Public/images/img24.jpg"></a>
                                 <a href="#"><img src="/B2C_SHOP/Public/images/img24.jpg"></a>
                                 <a href="#"><img src="/B2C_SHOP/Public/images/img24.jpg"></a>
                                 <a href="#"><img src="/B2C_SHOP/Public/images/img24.jpg"></a>
                                 <a href="#"><img src="/B2C_SHOP/Public/images/img24.jpg"></a>
                               </div>
                               <div class="dropimgn"><a href="#"><img src="/B2C_SHOP/Public/images/img72.jpg"></a></div>
                            </div>
                          </div>
                       </li>
                       <li><a href="#"><span class="ico"><img src="/B2C_SHOP/Public/images/ic5.jpg"></span> 儿童眼镜</a></li>
                       <li><a href="#"><span class="ico"><img src="/B2C_SHOP/Public/images/ic6.jpg"></span>老视眼镜</a></li>
                       <li><a href="#"><span class="ico"><img src="/B2C_SHOP/Public/images/ic7.jpg"></span> 隐形眼镜</a></li>
                       <li><a href="#"><span class="ico"><img src="/B2C_SHOP/Public/images/ic8.jpg"></span> 太阳眼镜</a></li>
                       <li><a href="#"><span class="ico"><img src="/B2C_SHOP/Public/images/ic9.jpg"></span> 运动眼镜</a></li>
                       <li><a href="#"><span class="ico"><img src="/B2C_SHOP/Public/images/ic10.jpg"></span>护目眼镜</a></li>
                       <li><a href="#"><span class="ico"><img src="/B2C_SHOP/Public/images/ic11.jpg"></span> 光学镜片</a></li>
                   </ul>
                </div>-->
            </div>
            <!---左边导航-end---->
            <!------右边的导航------->
            <ul class="nav">
                <li><a href="#">首页</a></li>
                <li><a href="#">品牌</a></li>
                <li><a href="#">品牌</a></li>
                <li><a href="#">商城</a></li>
                <li><a href="#">搜索</a></li>
            </ul>
        </div>
    </div>
    <!--banner---->
    <div class="banner">
        <ul class="aaa">
            <li style="background: url(..//B2C_SHOP/Public/images/banner.jpg) center center no-repeat;"></li>
        </ul>
        <div class="ban_contarner">
            <div class="inner">
                <div class="arrow_ban"><a href="#" class="allfet"><img src="/B2C_SHOP/Public/images/ic13.png"></a>
                    <a href="#" class="bllfet"><img src="/B2C_SHOP/Public/images/ic14.png"></a></div>
                <ul class="ban_brand">
                    <li><a href="#"><img src="/B2C_SHOP/Public/images/img10.jpg"></a></li>
                    <li><a href="#"><img src="/B2C_SHOP/Public/images/img11.jpg"></a></li>
                </ul>
            </div>
        </div>
        <div class="srcoll">
            <a href="#"><img src="/B2C_SHOP/Public/images/ta7.png"></a>
            <a href="#"><img src="/B2C_SHOP/Public/images/ta8.png"></a>
            <a href="#"><img src="/B2C_SHOP/Public/images/ta7.png"></a>
            <a href="#"><img src="/B2C_SHOP/Public/images/ta7.png"></a>
        </div>
    </div>

    <!--中间区域---->
    <div class="middle">
        <div class="inner">
            <div class="index_brad">
                <ul>
                    <li class="on"><a href="#">眼镜brand</a></li>
                    <li><a href="#">店铺brand</a></li>
                </ul>
                <div class="index_ayy"><a href="#">&lt; </a><a href="#">&gt; </a></div>
            </div>
            <!-------品牌列表------>
            <ul class="index_brandlist">
                <li><a href="#"><img src="/B2C_SHOP/Public/images/img.jpg"></a></li>
                <li><a href="#"><img src="/B2C_SHOP/Public/images/img2.jpg"></a></li>
                <li><a href="#"><img src="/B2C_SHOP/Public/images/img3.jpg"></a></li>
                <li><a href="#"><img src="/B2C_SHOP/Public/images/img4.jpg"></a></li>
                <li><a href="#"><img src="/B2C_SHOP/Public/images/img5.jpg"></a></li>
                <li><a href="#"><img src="/B2C_SHOP/Public/images/img6.jpg"></a></li>
                <li><a href="#"><img src="/B2C_SHOP/Public/images/img3.jpg"></a></li>
                <li><a href="#"><img src="/B2C_SHOP/Public/images/img6.jpg"></a></li>
                <li><a href="#"><img src="/B2C_SHOP/Public/images/img.jpg"></a></li>
                <li><a href="#"><img src="/B2C_SHOP/Public/images/img2.jpg"></a></li>
                <li><a href="#"><img src="/B2C_SHOP/Public/images/img3.jpg"></a></li>
                <li><a href="#"><img src="/B2C_SHOP/Public/images/img4.jpg"></a></li>
                <li><a href="#"><img src="/B2C_SHOP/Public/images/img5.jpg"></a></li>
                <li><a href="#"><img src="/B2C_SHOP/Public/images/img6.jpg"></a></li>
                <li><a href="#"><img src="/B2C_SHOP/Public/images/img3.jpg"></a></li>
                <li><a href="#"><img src="/B2C_SHOP/Public/images/img6.jpg"></a></li>
                <li><a href="#"><img src="/B2C_SHOP/Public/images/img.jpg"></a></li>
                <li><a href="#"><img src="/B2C_SHOP/Public/images/img2.jpg"></a></li>
                <li><a href="#"><img src="/B2C_SHOP/Public/images/img3.jpg"></a></li>
                <li><a href="#"><img src="/B2C_SHOP/Public/images/img4.jpg"></a></li>
                <li><a href="#"><img src="/B2C_SHOP/Public/images/img5.jpg"></a></li>
                <li><a href="#"><img src="/B2C_SHOP/Public/images/img6.jpg"></a></li>
                <li><a href="#"><img src="/B2C_SHOP/Public/images/img3.jpg"></a></li>
                <li><a href="#"><img src="/B2C_SHOP/Public/images/img6.jpg"></a></li>
            </ul>
            <div class="ban_index"><a href="#"><img src="/B2C_SHOP/Public/images/ban.jpg"></a></div>
            <ul class="ban_index" style="margin-bottom:5px;">
                <li><a href="#"><Img src="/B2C_SHOP/Public/images/img7.jpg"></a></li>
                <li><a href="#"><Img src="/B2C_SHOP/Public/images/img8.jpg"></a></li>
                <li style="margin-right:0;"><a href="#"><Img src="/B2C_SHOP/Public/images/img9.jpg"></a></li>
            </ul>
            <!------楼层one------>
           <!-- <div class="floor">
                <div class="zuofloor">
                    <ul>
                        <li class="floora" style="height:108px;"><a href="#"><img src="/B2C_SHOP/Public/images/ic15.png"></a></li>
                        <li class="lfoor"><a href="#"><img src="/B2C_SHOP/Public/images/img19.jpg"></a></li>
                        <li class="lfoor"><a href="#"><img src="/B2C_SHOP/Public/images/img19.jpg"></a></li>
                        <li class="lfoor"><a href="#"><img src="/B2C_SHOP/Public/images/img19.jpg"></a></li>
                        <li class="dfoor"><a href="#"><img src="/B2C_SHOP/Public/images/img23.jpg"></a><span><img src="/B2C_SHOP/Public/images/ic22.png"></span></li>
                    </ul>
                </div>
                <div class="mdfloor"><a href="#"><img src="/B2C_SHOP/Public/images/img12.jpg"></a>
                    <div class="saler0">
                        <h3>防辐射</h3>
                        <p>防辐射眼镜防蓝光电脑镜</p>
                        <p class="red">¥860.00</p>
                    </div>
                </div>
                <div class="youfloor">
                    <ul>
                        <li class="cfloor">
                            <a href="#">
                                <div class="floorlea">
                                    <p>防蓝光电脑镜</p>
                                    <p class="red">¥860.00</p>
                                </div>
                                <div class="floiian"><img src="/B2C_SHOP/Public/images/img20.jpg"></div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="flloorfont">
                                    <p>防蓝光电脑镜</p>
                                    <p class="red">¥860.00</p>
                                </div>
                                <div class="flood"><img src="/B2C_SHOP/Public/images/img21.jpg"></div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="flloorfont">
                                    <p>防蓝光电脑镜</p>
                                    <p class="red">¥860.00</p>
                                </div>
                                <div class="flood"><img src="/B2C_SHOP/Public/images/img22.jpg"></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!------楼层two------>
          <!--  <div class="floor borderred">
                <div class="zuofloor">
                    <ul>
                        <li class="floora" style="height:108px;"><a href="#"><img src="/B2C_SHOP/Public/images/ic16.png"></a></li>
                        <li class="lfoor"><a href="#"><img src="/B2C_SHOP/Public/images/img19.jpg"></a></li>
                        <li class="lfoor"><a href="#"><img src="/B2C_SHOP/Public/images/img19.jpg"></a></li>
                        <li class="lfoor"><a href="#"><img src="/B2C_SHOP/Public/images/img19.jpg"></a></li>
                        <li class="dfoor"><a href="#"><img src="/B2C_SHOP/Public/images/img23.jpg"></a><span><img src="/B2C_SHOP/Public/images/ic23.png"></span></li>
                    </ul>
                </div>
                <div class="mdfloor"><a href="#"><img src="/B2C_SHOP/Public/images/img13.jpg"></a>
                    <div class="saler0">
                        <h3 style="color:#cc003e;">防辐射</h3>
                        <p>防辐射眼镜防蓝光电脑镜</p>
                        <p class="red">¥860.00</p>
                    </div>
                </div>
                <div class="youfloor">
                    <ul>
                        <li>
                            <a href="#">
                                <div class="flloorfont">
                                    <p>防蓝光电脑镜</p>
                                    <p class="red">¥860.00</p>
                                </div>
                                <div class="flood"><img src="/B2C_SHOP/Public/images/img21.jpg"></div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="flloorfont">
                                    <p>防蓝光电脑镜</p>
                                    <p class="red">¥860.00</p>
                                </div>
                                <div class="flood"><img src="/B2C_SHOP/Public/images/img22.jpg"></div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="flloorfont">
                                    <p>防蓝光电脑镜</p>
                                    <p class="red">¥860.00</p>
                                </div>
                                <div class="flood"><img src="/B2C_SHOP/Public/images/img21.jpg"></div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="flloorfont">
                                    <p>防蓝光电脑镜</p>
                                    <p class="red">¥860.00</p>
                                </div>
                                <div class="flood"><img src="/B2C_SHOP/Public/images/img22.jpg"></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!------楼层three------>
            <!--  <div class="floor borderyeelow">
                  <div class="zuofloor">
                      <ul>
                          <li class="floora" style="height:108px;"><a href="#"><img src="/B2C_SHOP/Public/images/ic17.png"></a></li>
                          <li class="lfoor"><a href="#"><img src="/B2C_SHOP/Public/images/img19.jpg"></a></li>
                          <li class="lfoor"><a href="#"><img src="/B2C_SHOP/Public/images/img19.jpg"></a></li>
                          <li class="lfoor"><a href="#"><img src="/B2C_SHOP/Public/images/img19.jpg"></a></li>
                          <li class="dfoor"><a href="#"><img src="/B2C_SHOP/Public/images/img23.jpg"></a><span><img src="/B2C_SHOP/Public/images/ic24.png"></span></li>
                      </ul>
                  </div>
                  <div class="mdfloor"><a href="#"><img src="/B2C_SHOP/Public/images/img14.jpg"></a>
                      <div class="saler0">
                          <h3 style="color:#f13e4c;">防辐射</h3>
                          <p>防辐射眼镜防蓝光电脑镜</p>
                          <p class="red">¥860.00</p>
                      </div>
                  </div>
                  <div class="youfloor">
                      <ul>
                          <li class="cfloor">
                              <a href="#">
                                  <div class="floorlea">
                                      <p>防蓝光电脑镜</p>
                                      <p class="red">¥860.00</p>
                                  </div>
                                  <div class="floiian"><img src="/B2C_SHOP/Public/images/img20.jpg"></div>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <div class="flloorfont">
                                      <p>防蓝光电脑镜</p>
                                      <p class="red">¥860.00</p>
                                  </div>
                                  <div class="flood"><img src="/B2C_SHOP/Public/images/img21.jpg"></div>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <div class="flloorfont">
                                      <p>防蓝光电脑镜</p>
                                      <p class="red">¥860.00</p>
                                  </div>
                                  <div class="flood"><img src="/B2C_SHOP/Public/images/img22.jpg"></div>
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="ban_index"><a href="#"><img src="/B2C_SHOP/Public/images/ban2.jpg"></a></div>
              <!------楼层four------>
            <!--   <div class="floor borderpup">
                   <div class="zuofloor">
                       <ul>
                           <li class="floora" style="height:108px;"><a href="#"><img src="/B2C_SHOP/Public/images/ic18.png"></a></li>
                           <li class="lfoor"><a href="#"><img src="/B2C_SHOP/Public/images/img19.jpg"></a></li>
                           <li class="lfoor"><a href="#"><img src="/B2C_SHOP/Public/images/img19.jpg"></a></li>
                           <li class="lfoor"><a href="#"><img src="/B2C_SHOP/Public/images/img19.jpg"></a></li>
                           <li class="dfoor"><a href="#"><img src="/B2C_SHOP/Public/images/img23.jpg"></a><span><img src="/B2C_SHOP/Public/images/ic24.png"></span></li>
                       </ul>
                   </div>
                   <div class="mdfloor"><a href="#"><img src="/B2C_SHOP/Public/images/img15.jpg"></a>
                       <div class="saler0">
                           <h3>防辐射</h3>
                           <p>防辐射眼镜防蓝光电脑镜</p>
                           <p class="red">¥860.00</p>
                       </div>
                   </div>
                   <div class="youfloor">
                       <ul>
                           <li class="cfloor">
                               <a href="#">
                                   <div class="floorlea">
                                       <p>防蓝光电脑镜</p>
                                       <p class="red">¥860.00</p>
                                   </div>
                                   <div class="floiian"><img src="/B2C_SHOP/Public/images/img20.jpg"></div>
                               </a>
                           </li>
                           <li>
                               <a href="#">
                                   <div class="flloorfont">
                                       <p>防蓝光电脑镜</p>
                                       <p class="red">¥860.00</p>
                                   </div>
                                   <div class="flood"><img src="/B2C_SHOP/Public/images/img21.jpg"></div>
                               </a>
                           </li>
                           <li>
                               <a href="#">
                                   <div class="flloorfont">
                                       <p>防蓝光电脑镜</p>
                                       <p class="red">¥860.00</p>
                                   </div>
                                   <div class="flood"><img src="/B2C_SHOP/Public/images/img22.jpg"></div>
                               </a>
                           </li>
                       </ul>
                   </div>
               </div>
               <!------楼层five------>
            <!--   <div class="floor borderzi">
                   <div class="zuofloor">
                       <ul>
                           <li class="floora" style="height:108px; margin-top:-14px;"><a href="#"><img src="/B2C_SHOP/Public/images/ic19.png"></a></li>
                           <li class="lfoor"><a href="#"><img src="/B2C_SHOP/Public/images/img19.jpg"></a></li>
                           <li class="lfoor"><a href="#"><img src="/B2C_SHOP/Public/images/img19.jpg"></a></li>
                           <li class="lfoor"><a href="#"><img src="/B2C_SHOP/Public/images/img19.jpg"></a></li>
                           <li class="dfoor"><a href="#"><img src="/B2C_SHOP/Public/images/img23.jpg"></a><span><img src="/B2C_SHOP/Public/images/ic25.png"></span></li>
                       </ul>
                   </div>
                   <div class="mdfloor"><a href="#"><img src="/B2C_SHOP/Public/images/img16.jpg"></a>
                       <div class="saler0">
                           <h3 style="color:#6548c2;">防辐射</h3>
                           <p>防辐射眼镜防蓝光电脑镜</p>
                           <p class="red">¥860.00</p>
                       </div>
                   </div>
                   <div class="youfloor">
                       <ul>
                           <li>
                               <a href="#">
                                   <div class="flloorfont">
                                       <p>防蓝光电脑镜</p>
                                       <p class="red">¥860.00</p>
                                   </div>
                                   <div class="flood"><img src="/B2C_SHOP/Public/images/img21.jpg"></div>
                               </a>
                           </li>
                           <li>
                               <a href="#">
                                   <div class="flloorfont">
                                       <p>防蓝光电脑镜</p>
                                       <p class="red">¥860.00</p>
                                   </div>
                                   <div class="flood"><img src="/B2C_SHOP/Public/images/img22.jpg"></div>
                               </a>
                           </li>
                           <li>
                               <a href="#">
                                   <div class="flloorfont">
                                       <p>防蓝光电脑镜</p>
                                       <p class="red">¥860.00</p>
                                   </div>
                                   <div class="flood"><img src="/B2C_SHOP/Public/images/img21.jpg"></div>
                               </a>
                           </li>
                           <li>
                               <a href="#">
                                   <div class="flloorfont">
                                       <p>防蓝光电脑镜</p>
                                       <p class="red">¥860.00</p>
                                   </div>
                                   <div class="flood"><img src="/B2C_SHOP/Public/images/img22.jpg"></div>
                               </a>
                           </li>
                       </ul>
                   </div>
               </div>
               <!------楼层six------>
            <!--   <div class="floor bordergreen">
                   <div class="zuofloor">
                       <ul>
                           <li class="floora" style="height:108px;"><a href="#"><img src="images/ic20.jpg"></a></li>
                           <li class="lfoor"><a href="#"><img src="images/img19.jpg"></a></li>
                           <li class="lfoor"><a href="#"><img src="images/img19.jpg"></a></li>
                           <li class="lfoor"><a href="#"><img src="images/img19.jpg"></a></li>
                           <li class="dfoor"><a href="#"><img src="images/img23.jpg"></a><span><img src="images/ic26.png"></span></li>
                       </ul>
                   </div>
                   <div class="mdfloor"><a href="#"><img src="images/img17.jpg"></a>
                       <div class="saler0">
                           <h3 style="color:#7cc745;">防辐射</h3>
                           <p>防辐射眼镜防蓝光电脑镜</p>
                           <p class="red">¥860.00</p>
                       </div>
                   </div>
                   <div class="youfloor">
                       <ul>
                           <li class="cfloor">
                               <a href="#">
                                   <div class="floorlea">
                                       <p>防蓝光电脑镜</p>
                                       <p class="red">¥860.00</p>
                                   </div>
                                   <div class="floiian"><img src="images/img20.jpg"></div>
                               </a>
                           </li>
                           <li>
                               <a href="#">
                                   <div class="flloorfont">
                                       <p>防蓝光电脑镜</p>
                                       <p class="red">¥860.00</p>
                                   </div>
                                   <div class="flood"><img src="images/img21.jpg"></div>
                               </a>
                           </li>
                           <li>
                               <a href="#">
                                   <div class="flloorfont">
                                       <p>防蓝光电脑镜</p>
                                       <p class="red">¥860.00</p>
                                   </div>
                                   <div class="flood"><img src="images/img22.jpg"></div>
                               </a>
                           </li>
                       </ul>
                   </div>
               </div>
               <!------楼层seven------>
            <!--   <div class="floor borderss">
                   <div class="zuofloor">
                       <ul>
                           <li class="floora" style="height:108px; margin-top:-14px;"><a href="#"><img src="images/ic21.png"></a></li>
                           <li class="lfoor"><a href="#"><img src="images/img19.jpg"></a></li>
                           <li class="lfoor"><a href="#"><img src="images/img19.jpg"></a></li>
                           <li class="lfoor"><a href="#"><img src="images/img19.jpg"></a></li>
                           <li class="dfoor"><a href="#"><img src="images/img23.jpg"></a><span><img src="images/ic26.png"></span></li>
                       </ul>
                   </div>
                   <div class="mdfloor"><a href="#"><img src="images/img18.jpg"></a>
                       <div class="saler0">
                           <h3 style="color:#f46253;">防辐射</h3>
                           <p>防辐射眼镜防蓝光电脑镜</p>
                           <p class="red">¥860.00</p>
                       </div>
                   </div>
                   <div class="youfloor">
                       <ul>
                           <li>
                               <a href="#">
                                   <div class="flloorfont">
                                       <p>防蓝光电脑镜</p>
                                       <p class="red">¥860.00</p>
                                   </div>
                                   <div class="flood"><img src="images/img21.jpg"></div>
                               </a>
                           </li>
                           <li>
                               <a href="#">
                                   <div class="flloorfont">
                                       <p>防蓝光电脑镜</p>
                                       <p class="red">¥860.00</p>
                                   </div>
                                   <div class="flood"><img src="images/img22.jpg"></div>
                               </a>
                           </li>
                           <li>
                               <a href="#">
                                   <div class="flloorfont">
                                       <p>防蓝光电脑镜</p>
                                       <p class="red">¥860.00</p>
                                   </div>
                                   <div class="flood"><img src="images/img21.jpg"></div>
                               </a>
                           </li>
                           <li>
                               <a href="#">
                                   <div class="flloorfont">
                                       <p>防蓝光电脑镜</p>
                                       <p class="red">¥860.00</p>
                                   </div>
                                   <div class="flood"><img src="images/img22.jpg"></div>
                               </a>
                           </li>
                       </ul>
                   </div>
               </div>
               <div class="ban_index"><a href="#"><img src="images/ban3.jpg"></a></div>
           </div>-->
       </div>
    </div>

       <!-- 底部区域-->
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

    <!--底部结束-->

</div>

</body>

	<script src="/B2C_SHOP/Public/js/jquery.min.js"></script>
	<script src="/B2C_SHOP/Public/js/bootstrap.min.js"></script>
	<script src="/B2C_SHOP/Public/js/ie10-viewport-bug-workaround.js"></script>
</html>