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

        <div class="flexslider">
            <ul class="slides">
                <li style="background:url(/Public/Jf/images/banner_01.jpg) 50% 0 no-repeat;"></li>
                <li style="background:url(/Public/Jf/images/banner_01.jpg) 50% 0 no-repeat;"></li>
            </ul>
        </div><!--flexslider end-->
    </div>
    <div class="main">
        <div class="index_btn">
            <ul>
                <li>
                    <div class="ico"><img src="/Public/Jf/images/ico_01.png"></div>
                    <div class="text2">
                        <p>快来玩转积分商城吧！<a href="login.html">登录</a></p>
                        <a href="register.html"><div class="btn">免费注册</div></a>
                    </div><!--text2 end-->
                </li>
                <li>
                    <a href="gift.html">
                        <div class="ico"><img src="/Public/Jf/images/ico_02.png"></div>
                        <div class="text">兑换礼品</div><!--text end-->
                    </a>
                </li>
                <li>
                    <a href="ticket.html">
                        <div class="ico"><img src="/Public/Jf/images/ico_03.png"></div>
                        <div class="text">兑换礼券</div><!--text end-->
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('rule');?>">
                        <div class="ico"><img src="/Public/Jf/images/ico_04.png"></div>
                        <div class="text">积分规则</div><!--text end-->
                    </a>
                </li>
            </ul>
            <div class="clear"></div>
        </div><!--index_btn end-->
        <div class="index_title"><img src="/Public/Jf/images/index_tit_01.png"><a href="gift.html">查看更多礼品&gt;&gt;</a></div><!--index_title end-->
        <div class="search" align="center">
            <a href="">全部</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="">0-4000</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="">4000-8000</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="">8000以上</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;积分：
            <input type="text">&nbsp;至&nbsp;<input type="text">
            <a href="" class="btn">查询</a>
        </div><!--search end-->
        <div class="index_list">
            <ul>

                <?php foreach($jflp as $key => $value): ?>
                <li>
                    <?php
 $jfdhPro = M('DocumentProduct')->find($value['id']); ?>
                    <?php
 $pic=M('Picture')->field('path')->find($value['cover_id']); ?>
                    <div class="pic" style="background:url(<?php echo $pic['path']; ?>) no-repeat;">
                        <img src=""></div>
                    <div class="tit">
                        <?php
 echo $value['title']; ?>
                    </div>
                    <a href="<?php echo U('article/detail',array('id'=>$value['id']));?>"><div class="btn">立即购买</div></a>
                    <div class="points"><span><?php echo $jfdhPro['jifen']; ?></span>积分&nbsp;或&nbsp;<span><?php echo $jfdhPro['marketprice']; ?></span>RMB</div>
                </li>
                <?php endforeach; ?>

            </ul>
            <div class="clear"></div>
        </div><!--index_list end-->
        <div class="index_title"><img src="/Public/Jf/images/index_tit_02.png"><a href="activity.html">查看更多礼品&gt;&gt;</a></div><!--index_title end-->
        <div class="search" align="center">
            <a href="">全部</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="">0-4000</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="">4000-8000</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="">8000以上</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;积分：
            <input type="text">&nbsp;至&nbsp;<input type="text">
            <a href="" class="btn">查询</a>
        </div><!--search end-->
        <div class="index_list">
            <ul>
                <?php foreach($lphd as $key => $value): ?>
                <li>
                    <?php
 $jfdhPro = M('DocumentProduct')->find($value['id']); ?>
                    <?php
 $pic=M('Picture')->field('path')->find($value['cover_id']); ?>
                    <div class="pic" style="background:url(<?php echo $pic['path']; ?>) no-repeat;">
                        <img src=""></div>
                    <div class="tit">
                        <?php
 echo $value['title']; ?>
                    </div>
                    <a href="<?php echo U('article/detail',array('id'=>$value['id']));?>"><div class="btn">立即购买</div></a>
                    <div class="points"><span><?php echo $jfdhPro['jifen']; ?></span>积分&nbsp;或&nbsp;<span><?php echo $jfdhPro['marketprice']; ?></span>RMB</div>
                </li>
                <?php endforeach; ?>
            </ul>
            <div class="clear"></div>
        </div><!--index_list end-->
        <div class="index_title"><img src="/Public/Jf/images/index_tit_03.png"></div><!--index_title end-->
        <div class="index_list2">
            <ul>
                <?php foreach($jfhq as $key => $value): ?>
                <?php
 $jfdhPro = M('DocumentProduct')->find($value['id']); ?>
                <?php
 $pic=M('Picture')->field('path')->find($value['cover_id']); ?>
                <li><a href="<?php echo U('article/detail',array('id'=>$value['id']));?>">
                    <img style="width:283px; height: 113px" src="<?php echo $pic['path']; ?>"></a></li>
               <?php endforeach; ?>
            </ul>
            <div class="clear"></div>
        </div><!--index_list2 end-->
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