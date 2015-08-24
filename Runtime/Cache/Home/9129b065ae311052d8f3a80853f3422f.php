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
                    <?php foreach($data as $key => $value): ?>
                    <li>
                        <table border="0">
                            <tbody><tr>
                                <td colspan="6" class="num">
                                    订单编号：
                                    <?php echo $value['addtime'].$value['id']; ?>


                                </td>
                            </tr>
                            <tr height="83">
                                <?php
 $good = M("document")->find($value['good_id']); ?>
                                <td width="180"><img src="" width="116" height="68"></td>
                                <td width="180"><?php echo $good['title'] ?></td>
                                <td width="148"><?php echo '数量：'.$value['num'] ?></td>
                                <td width="146">
                                    <?php
 if($value['type']==1){ echo $value['sum']."积分"; }else{ echo $value['sum']."元"; } ?>
                                </td>
                                <td width="134" class="sm">

                                    <p><?php echo date("Y-m-d H:i:s", $value['addtime']); ?></p>
                                </td>
                                <td class="sm">

                                    <p><a href="<?php echo U('Home/article/detail', array('id'=>$value['good_id'])); ?>">再次购买</a></p>
                                </td>
                            </tr>
                            </tbody></table>
                    </li>
                    <?php  endforeach;?>


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