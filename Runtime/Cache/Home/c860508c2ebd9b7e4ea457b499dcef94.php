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

 
    <meta name="description" content="<?php echo C('WEB_SITE_DESCRIPTION');?>">
    <meta name="keywords" content="<?php echo C('WEB_SITE_KEYWORD');?>"/>
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
            您现在的位置是：&nbsp;<a href="index.html">积分商城首页</a>&nbsp;&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;&nbsp;<a href="gift.html">积分礼品</a>&nbsp;&nbsp;&nbsp;&gt;&gt;&nbsp;&nbsp;&nbsp;<a href="product.html">INBIKE骑行头盔</a>
        </div><!--position end-->
        <div class="product">
            <form id="good_form">
            <div class="pic"><img src="<?php echo (get_cover($info["cover_id"],'path')); ?>" width="280" height="313"></div>
            <div class="right">
                <div class="price">
                    <p class="tit"><?php echo ($info["title"]); ?></p>
                    <p class="old">市场价：
                        <?php echo ($info["marketprice"]); ?>
                    </p>
                    <p class="new">兑换积分：<span><span><?php echo ($info["jifen"]); ?></span>分</span></p>
                </div><!--price end-->
                <div class="number">
                    <font style="float:left;line-height:37px;">兑换数量：</font>
                    <input class="min" name="" type="button" value="">
                    <input class="text_box" name="good_num" type="text" value="1">
                    <input type="hidden" value="<?php echo ($info["id"]); ?>"  name="good_id"/>
                    <input class="add" type="button" value="">
                    <div class="clear"></div>
                </div><!--number end-->
                <script>
                    $(function(){
                        $(".add").click(function(){
                            var t=$(this).parent().find('input[class*=text_box]');
                            console.log(t.val());
                            t.val(parseInt(t.val())+1)
                            //setTotal();
                        })
                        $(".min").click(function(){
                            var t=$(this).parent().find('input[class*=text_box]');
                            t.val(parseInt(t.val())-1)
                            if(parseInt(t.val())<0){
                                t.val(0);
                            }
                            setTotal();
                        })
                        function setTotal(){
                            var s=0;
                            $("tr").each(function(){
                                s+=parseInt($(this).find('input[class*=text_box]').val())*parseFloat($(this).find('span[class*=price]').text());
                            });
                            $("#total").html(s.toFixed(2));
                        }
                        setTotal();

                    })
                </script>
                <a href="javascript:;" id="jf_dh"><img src="/Public/Jf/images/btn1.png"></a>
                <a href="" style="margin-left:5px;"><img src="/Public/Jf/images/btn2.png"></a>
            </div><!--right end-->
            <div class="clear"></div>
        </div><!--product end-->
        </form>
        <div class="productinfo">
            <div class="tit">商品信息</div>
            <div class="textinfo">
                <?php echo ($info["content"]); ?>
            </div><!--textinfo end-->
        </div><!--productinfo end-->
    </div>
    <script>
        $(function(){
            $("#jf_dh").click(function(){
                data = $("#good_form").serialize();
                $.ajax({
                    url: "<?php echo U('ajax_order');?>",
                    data: data,
                    type: "POST",
                    success: function (msg) {
                        if(msg == 1){
                            layer.alert("兑换成功",{icon:6});

                        }else if(msg == 2){
                            layer.alert("积分不足",{icon:5});

                        }else if(msg == 3){
                            layer.alert("请先登录",{icon:5});
                            window.location.href="<?php echo U('User/register');?>";

                        }else if(msg ==6 ){
                            layer.alert('请填写收获地址', {icon:5});
                            window.location.href="<?php echo U('User/shopAddress');?>"
                        }else{
                            layer.alert('非法请求');
                        }

                    }
                });

            });

        });
    </script>

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