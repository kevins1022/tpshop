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
        <a href="" class="btn_me"><img src="/Public/Jf/images/btn_me.png"></a>
        <div class="position">
            您现在的位置是：&nbsp;<a href="index.html">积分商城首页</a>&nbsp;&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;&nbsp;<a href="gift.html">积分规则</a>
        </div><!--position end-->
        <div class="rule">
            <p class="tit">积分消费渠道：</p>
            <p>&nbsp;</p>
            <div align="center"><img src="/Public/Jf/images/rule.jpg"></div>
            <p>&nbsp;</p>
            <p class="tit">如何查询积分：</p>
            <p style="text-indent:2em">（1）在"我的帐户"&gt;&gt;"会员积分"中，查询积分累积明细，可兑换礼品；</p>
            <p style="text-indent:2em">（2）拨打唯品会服务热线400-6789-888查询；</p>
            <p>VIPSHOP会不定期地推出各种积分促销活动，双倍积分、连环积分，惊喜不断，请随时关注关于积分促销的通知。</p>
            <p class="tit">积分细则：</p>
            <p style="text-indent:2em">（1）不同帐户之间的积分不可转让或不可合并使用；</p>
            <p style="text-indent:2em">（2）积分只适用于个人用途而进行的购物，不适用团体购物、以营利或销售为目的的购买行为、其他非个人用途购买行为；</p>
            <p style="text-indent:2em">（3）积分兑换标准及兑换规则均以兑换当时最新活动公告或目录为准，公告或目录如有有效期限的，逾期即不得兑换；</p>
            <p style="text-indent:2em">（4）部分兑换商品有数量限制的，兑完为止。</p>
            <p class="tit">积分有效期：</p>
            <p style="text-indent:2em">会员积分采用每年滚动清零方式，即会员当年得到的积分可使用到后年的1月1日，逾期未使用的积分将于到期后自动清零。（如：2012年度获得的积分，有效期至2014年1月1日，于2014年1月1日24:00自动清零）</p>
            <p class="tit">违规处理：</p>
            <p style="text-indent:2em">（1）如果会员利用系统漏洞作弊等违规方式获得积分，经查证后，将查封会员账号，并追缴相关积分，并保留追究相应法律责任的权利；</p>
            <p style="text-indent:2em">（2）关于邀请朋友所获得的积分，如发现所邀请的账户注册资料不真实或与已注册账户重复，唯品会有权扣回该积分以及积分所兑换的礼品。</p>
            <p class="tit">修改及终止：</p>
            <p>宝岛在法律允许的范围内可兑本活动细则进行解释，并有权根据需要取消本细则或增删、修订细则的权利（包括但不限于参加资格、积分计算及兑换标准）。</p>
        </div><!--rule end-->
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