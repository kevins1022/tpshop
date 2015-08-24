<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title><?php echo ($meta_title); ?>_<?php echo C('WEB_SITE_TITLE');?></title>
<head>
<link href="/Public/Jf/css/style.css" rel="stylesheet" type="text/css" />
<link href="/Public/Jf/css/reset.css" rel="stylesheet" type="text/css" />
<link href="/Public/Jf/css/pager.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="/Public/Jf/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/Public/Jf/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="/Public/Jf/layer/layer.js"></script>

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
        <div class="position">
            您现在的位置是：&nbsp;<a href="index.html">积分商城首页</a>&nbsp;&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;&nbsp;<a href="forget1.html">找回密码</a>
        </div><!--position end-->
        <div class="forget">
            <div class="tit">找回密码</div>
            <form action="" id="forget_form">
            <div class="pic" align="center"><img src="/Public/Jf/images/forget_01.png"></div>
            <table align="center">
                <tbody><tr height="45">
                    <td align="right">帐号：</td>
                    <td colspan="3"><input type="text" name="email" class="textbox1" placeholder="邮箱"></td>
                </tr>
                <tr height="45">
                    <td align="right">验证码：</td>
                    <td width="153"><input type="text" class="textbox2" name="verify" placeholder="验证码"></td>
                    <td><img src="<?php echo U('verify');?>" class="yzm" id="yzm" style="cursor: pointer"></td>

                </tr>
                <tr height="55">
                    <td align="right">&nbsp;</td>
                    <td colspan="3"><a href="javascript:;">
                        <div class="btn" id="next">下一步</div></a></td>
                </tr>
                </tbody></table>
            </form>
            <script>
                $("input").focus(function(){
                    $(this).css('border-color','#ff0000');
                });
                $("input").blur(function(){
                    $(this).css('border-color','#b3b3b3');
                });
                $("#yzm").click(function(){
                    $("#yzm").attr('src',$("#yzm").attr('src')+"&random="+Math.random());
                });
                $("#next").click(function(){
                    //if(){}
                    var data = $("#forget_form").serialize();
                    $.ajax({
                        url:"<?php echo U('forget1_ajax');?>",
                        data:data,
                        type:'POST',
                        success:function(msg){
                            if(msg == 1){
                                layer.alert("验证码错误",{icon:5});

                            }else if(msg == 2){
                                layer.alert("用户不存在",{icon:5});


                            }else if(msg ==3){
                                window.location.href="<?php echo U('forget2');?>";
                            }else{
                                layer.alert("服务器错误", {icon:5})
                            }

                        }
                    });
                });
            </script>
        </div><!--forget end-->
    </div>
    <!--main end-->

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