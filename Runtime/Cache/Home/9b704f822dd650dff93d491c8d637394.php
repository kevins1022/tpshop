<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title><?php echo ($meta_title); ?>_<?php echo C('WEB_SITE_TITLE');?></title>
<head>
<link href="/Public/Jf/css/style.css" rel="stylesheet" type="text/css" />
<link href="/Public/Jf/css/reset.css" rel="stylesheet" type="text/css" />
<link href="/Public/Jf/css/pager.css" rel="stylesheet" type="text/css" />

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
            <?php if(empty(session('userId'))): ?>
            <a href="<?php echo U('User/login');?>">登录</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo U('User/register');?>">免费注册</a>&nbsp;&nbsp;<a href="/index.php?s=">宝岛官网</a>
            <?php endif; ?>

            <?php if(!empty(session('userId'))): ?>
            <a href="<?php echo U('User/index');?>"><?php echo session('nickname'); ?></a>&nbsp;&nbsp;&nbsp;<a href="<?php echo U('User/logout');?>">退出</a>&nbsp;&nbsp;<a href="/index.php?s=">宝岛官网</a>
            <?php endif; ?>

        </div>
    </div><!--top1 end-->
    <div class="top2">
        <a href="/index.php?s=" class="logo"><img src="/Public/Jf/images/logo.png"></a>
        <div class="nav">
            <ul>
                <li><a href="/index.php?s=">积分商城首页</a></li>
                <li><a href="<?php echo U('Article/index', array('category'=>'jfdh'));?>">积分礼品</a></li>
                <li><a href="<?php echo U('Article/index', array('category'=>'jfhj'));?>">积分换券</a></li>
                <li><a href="<?php echo U('Article/index', array('category'=>'lphd'));?>">礼品活动</a></li>
            </ul>
        </div><!--nav end-->
        <div class="clear"></div>
    </div><!--top2 end-->


    </div>
    <div class="main">
        <div style="height:38px;"></div>
        <div class="login_pic"><img src="/Public/Jf/images/img_login.jpg" /></div>
        <div class="login">
            <div class="tit">
                <span>请注册</span>已注册？&nbsp;<a href="{User/login}">登录</a>
            </div><!--tit end-->
            <form action="/index.php?s=/Home/User/register.html" method="post" id="reg_form" >
            <table border="0">
                <tr height="58">
                    <td colspan="3"><input type="text" class="textbox1" name="username"  placeholder="邮箱/手机号" /></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <input type="radio" name="sex" class="radio" checked value="1" /><span>先生</span>
                        <input type="radio" name="sex" class="radio" value="0" style="margin-left:20px;" /><span>女士</span>
                    </td>
                </tr>
                <tr height="58">
                    <td colspan="3">
                        <input name="password" type="password" class="textbox1" placeholder="密码" /></td>
                </tr>
                <tr height="58">
                    <td colspan="3">
                        <input name="repassword" type="password" class="textbox1" placeholder="确认密码" />
                    </td>
                </tr>
                <tr height="58">
                    <td width="153"><input type="text" class="textbox2" placeholder="验证码" name="verify" /></td>
                    <td><img src="<?php echo U('User/verify');?>" class="yzm" id="yzm" style="cursor: pointer" /></td>

                </tr>
                <tr height="75">
                    <td colspan="3"><a href="javascript:;"><div class="btn" id="reg_sub">注册</div></a></td>
                </tr>
                <tr height="50">
                    <td colspan="3" class="sure"><input type="checkbox" class="checkbox" />我已阅读并接受<a href="">宝岛服务条款</a></td>
                </tr>
            </table>
            </form>
            <script>
                $("input").focus(function(){
                    $(this).css('border-color','#ff0000');
                });
                $("input").blur(function(){
                    $(this).css('border-color','#b3b3b3');
                });
                $("#yzm").click(function(){
                    var src = $("#yzm").attr("src");
                    $("#yzm").attr("src",src+"&random="+Math.random());
                });
                $("#reg_sub").click(function(){
                    $("#reg_form").submit();
                });

            </script>
        </div><!--login end-->
        <div class="clear" style="height:90px;"></div>
    </div><!--main end-->


 </div>
	<!-- /主体 -->


	<!-- 底部 -->
	<div class="foot">
    <ul>
        <li><a href="/index.php?s=">积分商城首页</a></li>
        <li><a href="<?php echo U('Article/index', array('category'=>'jfdh'));?>">积分礼品</a></li>
        <li><a href="<?php echo U('Article/index', array('category'=>'jfhj'));?>">积分换券</a></li>
        <li><a href="<?php echo U('Article/index', array('category'=>'lphd'));?>">礼品活动</a></li>
    </ul>
    <div class="clear"></div>
    <p>Copyright© 2008-2014 bodo.com，All Rights Reserved 版权所有天津宝岛电动车 津ICP备12345678号-1  使用本网站即表示接受宝岛用户协议。</p>
</div><!--foot end--></div>
	<!-- /底部 -->
</body>
</html>