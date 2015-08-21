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
                <div class="right_top"><div class="title">我的资料</div></div>
                <div class="right_info">

                    <form method="post" action="/index.php?s=/Home/User/index.html" id="pro_form">
                        <div class="personal_table">
                            <table border="0">
                                <tbody><tr height="50">
                                    <td align="right"><span>*</span>姓名：</td>
                                    <td><input type="text" class="textbox1" name="truename" value="<?php echo $data['truename'] ?>"></td>
                                </tr>
                                <tr height="50">
                                    <td align="right"><span>*</span>性别：</td>
                                    <td>
                                        <input type="radio" class="radio" name="sex" value="1"
                                        <?php if($data['sex'] == 1): ?>
checked="" <?php endif; ?>><font>男</font>
                                        <input type="radio" class="radio" name="sex" value="0"
                                        <?php if($data['sex'] == 0): ?>
                                        checked="" <?php endif; ?>

                                                ><font>女</font>
                                    </td>
                                </tr>
                                <tr height="50">
                                    <td align="right"><span>*</span>生日：</td>
                                    <td>
                                        <select class="select1" name="birthday[year]" id="birthday_year">
                                            <option>请选择</option>
                                            <?php for($i=2015;$i>1950;$i--): ?>
                                            <option value="<?php echo $i ?>"><?php echo $i; ?></option>

                                            <?php endfor; ?>
                                        </select>
                                        年
                                        <select class="select2" name="birthday[mon]" id="birthday_mon">
                                            <option>请选择</option>
                                            <?php for($i=1;$i<13;$i++): ?>
                                            <option value="<?php echo $i ?>"><?php echo $i; ?></option>

                                            <?php endfor; ?>
                                        </select>
                                        月
                                        <select class="select2" name="birthday[day]" id="birthday_day">
                                            <option>请选择</option>
                                            <?php for($i=1;$i<32;$i++): ?>
                                            <option value="<?php echo $i ?>"><?php echo $i; ?></option>

                                            <?php endfor; ?>
                                        </select>
                                        日
                                    </td>
                                </tr>
                                <tr height="50">
                                    <td align="right"><span>*</span>移动电话：</td>
                                    <td><input type="text" class="textbox1" name="phone" value="<?php echo $data['phone'] ?>"></td>
                                </tr>
                                <tr height="50">
                                    <td align="right">固定电话：</td>
                                    <td><input type="text" class="textbox1" name="gddh" value="<?php echo $data['gddh'] ?>"></td>
                                </tr>
                                <tr height="50">
                                    <td align="right"><span>*</span>所在地地址：</td>
                                    <td><input type="text" class="textbox2" name='address' value="<?php echo $data['address']?>"></td>
                                </tr>
                                <tr height="50">
                                    <td align="right"><span>*</span>邮箱：</td>
                                    <td><input type="text" class="textbox1" name="email" value="<?php echo $data['email'] ?>"></td>
                                </tr>
                                <tr height="50">
                                    <td>&nbsp;</td>
                                    <td valign="top" style="color:#b2b2b2;">请填写有效邮箱地址，以便接收唯品会的通知及订单信息，建议使用常用邮箱</td>
                                </tr>
                                </tbody></table>
                        </div><!--personal_table end-->
                        <div align="center" class="personal_btn">
                            <input type="submit" value="提交" class="button" style="cursor: pointer">
                            <input type="reset" class="reset">
                        </div>
                    </form>
                </div><!--right_info end-->
            </div><!--personal_right end-->
            <div class="clear"></div>
        </div><!--personal end-->
    </div>
    <?php
 $birthday = $data['birthday']; $birthday = explode('-', $birthday); ?>
    <script>
        $(function(){
            $("#birthday_year").val('<?php echo $birthday[0] ?>');
            $("#birthday_mon").val('<?php echo $birthday[1] ?>');
            $("#birthday_day").val('<?php echo $birthday[2] ?>');



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