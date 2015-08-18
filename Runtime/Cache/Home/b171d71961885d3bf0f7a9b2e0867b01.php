<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title><?php echo ($meta_title); ?>_<?php echo C('WEB_SITE_TITLE');?></title>
<head>
<link href="/Public/Jf/css/style.css" rel="stylesheet" type="text/css" />
<link href="/Public/Jf/css/reset.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Public/Jf/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/Public/Jf/js/jquery.flexslider-min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.flexslider').flexslider({
            directionNav: true,
            pauseOnAction: false
        });
    });
</script>
</head>
<body>





	
	<!-- 主体 -->
	<div  class="common_wrapper">

 
    <div class="head">
        
    <div class="top1">
        <div class="box">
            <a href="<?php echo U('User/login');?>">登录</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo U('User/register');?>">免费注册</a>&nbsp;&nbsp;<a href="/index.php?s=">宝岛官网</a>
        </div>
    </div><!--top1 end-->
    <div class="top2">
        <a href="index.html" class="logo"><img src="/Public/Jf/images/logo.png"></a>
        <div class="nav">
            <ul>
                <li><a href="/index.php?s=">积分商城首页</a></li>
                <li><a href="gift.html">积分礼品</a></li>
                <li><a href="ticket.html">积分换券</a></li>
                <li><a href="activity.html">礼品活动</a></li>
            </ul>
        </div><!--nav end-->
        <div class="clear"></div>
    </div><!--top2 end-->


    </div>
    <div class="main">
        <div style="height:38px;"></div>
        <div class="login_pic"><img src="/Public/Jf/images/img_login.jpg"/></div>
        <div class="login">
            <div class="tit">
                <span style="border:0">欢迎回来！请登录</span>
            </div>
            <!--tit end-->
            <form action="/index.php?s=/Home/User/login.html" method="post" id="log_form">
                <table border="0" style="margin-top:18px;">
                    <tr height="60" valign="top">
                        <td colspan="2">
                            <input type="text" class="textbox1" placeholder="登录名" name="nickname"/>

                            <p>请输入登录名</p>
                        </td>
                    </tr>
                    <tr height="60" valign="top">
                        <td colspan="2">
                            <input type="password" class="textbox1" placeholder="密码" name="password"/>

                            <p>请输入密码</p>
                        </td>
                    </tr>
                    <tr height="40">
                        <td colspan="2">
                            <a href="javascript:;">
                            <div class="btn" id="log_sub">登录</div>
                            </a>
                        </td>
                    </tr>
                    <tr height="40">
                        <td class="sure" width="130"><input type="checkbox" class="checkbox"/>记住用户名</td>
                        <td><a href="forget1.html" style="color:#808080">忘记密码？</a>&nbsp;|&nbsp;<a href="register.html"
                                                                                                  style="color:#ff0000">免费注册</a>
                        </td>
                    </tr>
                </table>
            </form>
            <script>
                $("input").focus(function () {
                    $(this).css('border-color', '#ff0000');
                    $(this).parent().find("p").css('display', 'block');
                });
                $("input").blur(function () {
                    $(this).css('border-color', '#b3b3b3');
                    $(this).parent().find("p").css('display', 'none');
                });
                $("#log_sub").click(function(){
                    $("#log_form").submit();
                });
            </script>
        </div>
        <!--login end-->
        <div class="clear" style="height:90px;"></div>
    </div>
    <!--main end-->

 </div>
	<!-- /主体 -->


	<!-- 底部 -->
	<div class="foot">
    <ul>
        <li><a href="index.html">积分商城首页</a></li>
        <li><a href="gift.html">积分礼品</a></li>
        <li><a href="ticket.html">积分换券</a></li>
        <li><a href="activity.html">礼品活动</a></li>
    </ul>
    <div class="clear"></div>
    <p>Copyright© 2008-2014 bodo.com，All Rights Reserved 版权所有天津宝岛电动车 津ICP备12345678号-1  使用本网站即表示接受宝岛用户协议。</p>
</div><!--foot end--></div>
	<!-- /底部 -->
</body>
</html>