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
            <a href="<?php echo U('User/logout');?>">登录</a>&nbsp;&nbsp;&nbsp;<a href="<?php echo U('User/log');?>">免费注册</a>&nbsp;&nbsp;<a href="/index.php?s=">宝岛官网</a>
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
        <a href="" class="btn_me"><img src="/Public/Jf/images/btn_me.png"></a>
        <div class="position">
            您现在的位置是：&nbsp;<a href="index.html">积分商城首页</a>&nbsp;&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;&nbsp;<a href="gift.html">积分礼品</a>
        </div><!--position end-->
        <div class="search2">
            <span>礼品积分分段：</span>&nbsp;&nbsp;
            <a href="">全部</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="">0-4000</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="">4000-8000</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="">8000以上</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            积分：<input type="text">&nbsp;至&nbsp;<input type="text">
            <a href="" class="btn">查询</a>
        </div><!--search2 end-->
        <div class="sort">
            <span>排序：</span>
            <a href=""><div class="btn">默认</div></a>
            <a href=""><div class="btn">最新</div></a>
            <a href=""><div class="btn">最热</div></a>
            <a href=""><div class="btn" style="width:90px; background:url(/Public/Jf/images/arrow.jpg) no-repeat center right;">积分</div></a>
            <div class="clear"></div>
        </div><!--sort end-->
        <div class="line"></div>
        <div class="index_list">
            <ul>



                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><li>
                    <div class="pic" style="background:url(<?php echo (get_cover($list["cover_id"],'path')); ?>) no-repeat;"></div><!--pic end-->
                    <div class="tit"><?php echo ($list["title"]); ?></div>
                    <a href="<?php echo U('Article/detail?id='.$list['id']);?>"><div class="btn">立即购买</div></a>
                    <div class="points"><span><?php echo ($list["jifen"]); ?></span>积分&nbsp;或&nbsp;<span><?php echo ($list["price"]); ?></span>RMB</div>
                </li><?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>

            </ul>
            <div class="clear"></div>
        </div><!--index_list end-->
        <div id="pager">
            <ul class="pages">

                <?php echo ($page); ?>

        </div>
        <div class="clear"></div>
        <script type="text/javascript" language="javascript">
            $(document).ready(function() {
                $("#pager").pager({ pagenumber: 1, pagecount: 15, buttonClickCallback: PageClick });
            });
            PageClick = function(pageclickednumber) {
                $("#pager").pager({ pagenumber: pageclickednumber, pagecount: 15, buttonClickCallback: PageClick });
                $(".index_list").html();
            }
        </script>
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