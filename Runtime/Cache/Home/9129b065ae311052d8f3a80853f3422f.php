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
    <div class="line2"></div>
    <div class="main">
        <div class="position">
            您现在的位置是：&nbsp;<a href="index.html">积分商城首页</a>&nbsp;&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;&nbsp;<a href="personal_01.html">个人中心</a>
        </div><!--position end-->
        <div class="personal">
            <div class="personal_left">
                <div class="title">个人中心</div>
                <ul>
    <li><a href="<?php echo U('User/index');?>">我的资料</a></li>
    <li><a href="<?php echo U('User/shopAddress');?>">收货地址</a></li>
    <li><a href="<?php echo U('User/jfManage');?>">积分管理</a></li>
    <li><a href="<?php echo U('User/ordList');?>">我的订单</a></li>
</ul>
            </div><!--personal_left end-->
            <div class="personal_right">
                <div class="right_top">
                    <div class="title">我的订单</div>
                </div>
                <div class="personal_order">
                    <li>
                        <table border="0">
                            <tbody><tr>
                                <td colspan="6" class="num">订单编号：0000001号</td>
                            </tr>
                            <tr height="83">
                                <td width="180"><img src="images/img_19.jpg" width="116" height="68"></td>
                                <td width="180">商品名称</td>
                                <td width="148">蓝色*1</td>
                                <td width="146">￥3000.00</td>
                                <td width="134" class="sm">
                                    <p><span>交易成功</span></p>
                                    <p>2015-06-15 9:30</p>
                                </td>
                                <td class="sm">
                                    <p><a href="">删除</a></p>
                                    <p><a href="">再次购买</a></p>
                                </td>
                            </tr>
                            </tbody></table>
                    </li>
                    <li>
                        <table border="0">
                            <tbody><tr>
                                <td colspan="6" class="num">订单编号：0000002号</td>
                            </tr>
                            <tr height="83">
                                <td width="180"><img src="images/img_19.jpg" width="116" height="68"></td>
                                <td width="180">商品名称</td>
                                <td width="148">蓝色*1</td>
                                <td width="146">￥3000.00</td>
                                <td width="134" class="sm">
                                    <p><span>交易成功</span></p>
                                    <p>2015-06-15 9:30</p>
                                </td>
                                <td class="sm">
                                    <p><a href="">删除</a></p>
                                    <p><a href="">再次购买</a></p>
                                </td>
                            </tr>
                            </tbody></table>
                    </li>
                </div><!--personal_order-->
            </div>
            <div class="clear"></div>
        </div><!--personal end-->
    </div>



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