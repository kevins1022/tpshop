<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo ($meta_title); ?>|管理平台</title>
    <link href="/Public/favicon.ico" type="image/x-icon" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/base.css" media="all">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/common.css" media="all">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/module.css">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/style.css" media="all">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/<?php echo (C("COLOR_STYLE")); ?>.css" media="all">
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/Public/static/jquery-1.10.2.min.js"></script>
    <![endif]--><!--[if gte IE 9]><!-->
    <script type="text/javascript" src="/Public/static/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/highcharts.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/exporting.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/data.js"></script>
    <!--<![endif]-->
    
</head>
<body>
<!-- 头部 -->
<div class="header">
    <!-- Logo -->
    <span class="logo"><img src="/Public/Admin/images/logo.png"></span>
    <!-- /Logo -->

    <!-- 主导航 -->
    <ul class="main-nav">
        <?php if(is_array($__MENU__["main"])): $i = 0; $__LIST__ = $__MENU__["main"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><!--<li class="<?php echo ((isset($menu["class"]) && ($menu["class"] !== ""))?($menu["class"]):''); ?>"><a href="<?php echo (get_nav_url($menu["url"])); ?>"><?php echo ($menu["title"]); ?></a></li>--><?php endforeach; endif; else: echo "" ;endif; ?>
        <li class=""><a href="/admin.php?s=/Index/index.html">首页</a></li>
        <li><a href="<?php echo U('Goods/index/cate_id/151');?>">积分礼品</a></li>
        <li><a href="<?php echo U('Goods/index/cate_id/152');?>">礼品活动</a></li>
        <li><a href="<?php echo U('Goods/index/cate_id/153');?>">积分换券</a></li>
        <li><a href="<?php echo U('User/index');?>">用户</a></li>
        <li><a href="<?php echo get_index_url();?>" target="_blank">前台</a></li>
        <!--<li class=""><a href="/admin.php?s=/Goods/index.html">商品</a></li>-->
        <!--<li class=""><a href="/admin.php?s=/User/index.html">用户</a></li>-->
        <!--<li class=""><a href="/admin.php?s=/Order/index.html">订单</a></li>-->
        <!--<li><a href="<?php echo get_index_url();?>" target="_blank">前台</a></li>-->
    </ul>
    <!-- /主导航 -->

    <!-- 用户栏 -->
    <div class="user-bar">
        <a href="javascript:;" class="user-entrance"><i class="icon-user"></i></a>
        <ul class="nav-list user-menu hidden">
            <li class="manager">你好，<em title="<?php echo session('user_auth.username');?>"><?php echo session('user_auth.username');?></em></li>
            <!--<li><a href="<?php echo U('User/updatePassword');?>">修改密码</a></li>-->
            <!--<li><a href="<?php echo U('User/updateNickname');?>">修改昵称</a></li>-->
            <li><a href="<?php echo U('Public/logout');?>">退出</a></li>
        </ul>
    </div>
</div>
<!-- /头部 -->

<!-- 边栏 -->
<div class="sidebar">
    <!-- 子导航 -->

    <div id="subnav" class="subnav">
        <!-- 子导航 -->
        <h3><i class="icon icon-unfold icon-fold"></i><a href="">用户管理</a</h3>
       
    </div>


</div>
<!-- /边栏 -->

<!-- 内容区 -->
<div id="main-content">
    <div id="top-alert" class="fixed alert alert-error" style="display: none;">
        <button class="close fixed" style="margin-top: 4px;">&times;</button>
        <div class="alert-content">这是内容</div>
    </div>
    <div id="main" class="main">
        
            <!-- nav -->
            <?php if(!empty($_show_nav)): ?><div class="breadcrumb">
                    <span>您的位置:</span>
                    <?php $i = '1'; ?>
                    <?php if(is_array($_nav)): foreach($_nav as $k=>$v): if($i == count($_nav)): ?><span><?php echo ($v); ?></span>
                            <?php else: ?>
                            <span><a href="<?php echo ($k); ?>"><?php echo ($v); ?></a>&gt;</span><?php endif; ?>
                        <?php $i = $i+1; endforeach; endif; ?>
                </div><?php endif; ?>
            <!-- nav -->
        

        
    <!-- 标题栏 -->
    <div class="main-title">
        <h2>用户列表</h2>
    </div>

    <!-- 数据列表 -->
    <div class="data-table table-striped">
        <table class="">
            <thead>
            <tr>

                <th class="">UID</th>
                <th class="">昵称</th>
                <th>性别</th>
                <th>邮箱</th>
                <th>生日</th>
                <th>电话</th>
                <th>固定电话</th>
                <th>地址</th>
                <th>真实姓名</th>
                <th>积分</th>

            </tr>
            </thead>
            <tbody>
            <?php foreach($data as $key =>$value): ?>
                    <tr>
                        <td><?php echo $value['uid']; ?> </td>
                        <td><?php echo $value['nickname']; ?></td>
                        <td><?php echo $value['sex']==1?"男":"女" ?></td>
                        <td><?php echo $value['email'] ?></td>
                        <td><?php echo $value['birthday'] ?></td>
                        <td><?php echo $value['phone'] ?></td>
                        <td><?php echo $value['gddh'] ?></td>
                        <td><?php echo $value['address'] ?></td>
                        <td><?php echo $value['truename'] ?></td>
                        <td><?php echo $value['jifen'] ?></td>


                    </tr>
            <?php endforeach; ?>



            </tbody>
        </table>
    </div>
    <div class="page">
        <?php echo ($_page); ?>
    </div>

    </div>
    <div class="cont-ft">
        <div class="copyright">

            <div class="fr">ThinkPHP</div>
        </div>
    </div>
</div>
<!-- /内容区 -->
<script type="text/javascript">
    (function(){
        var ThinkPHP = window.Think = {
            "ROOT"   : "", //当前网站地址
            "APP"    : "/admin.php?s=", //当前项目地址
            "PUBLIC" : "/Public", //项目公共目录地址
            "DEEP"   : "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
            "MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
            "VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
        }
    })();
</script>
<script type="text/javascript" src="/Public/static/think.js"></script>

<script type="text/javascript" src="/Public/Admin/js/common.js"></script>
<script type="text/javascript">
    +function(){
        var $window = $(window), $subnav = $("#subnav"), url;
        $window.resize(function(){
            $("#main").css("min-height", $window.height() - 130);
        }).resize();

        /* 左边菜单高亮 */
        url = window.location.pathname + window.location.search;
        url = url.replace(/(\/(p)\/\d+)|(&p=\d+)|(\/(id)\/\d+)|(&id=\d+)|(\/(group)\/\d+)|(&group=\d+)/, "");

        $subnav.find("a[href='" + url + "']").parent().addClass("current") ;

        /* 左边菜单显示收起 */
        $("#subnav").on("click", "h3", function(){
            var $this = $(this);
            $this.find(".icon").toggleClass("icon-fold");
            $this.next().slideToggle("fast").siblings(".side-sub-menu:visible").
                    prev("h3").find("i").addClass("icon-fold").end().end().hide();
        });

        $("#subnav h3 a").click(function(e){e.stopPropagation()});

        /* 头部管理员菜单 */
        $(".user-bar").mouseenter(function(){
            var userMenu = $(this).children(".user-menu ");
            userMenu.removeClass("hidden");
            clearTimeout(userMenu.data("timeout"));
        }).mouseleave(function(){
            var userMenu = $(this).children(".user-menu");
            userMenu.data("timeout") && clearTimeout(userMenu.data("timeout"));
            userMenu.data("timeout", setTimeout(function(){userMenu.addClass("hidden")}, 100));
        });

        /* 表单获取焦点变色 */
        $("form").on("focus", "input", function(){
            $(this).addClass('focus');
        }).on("blur","input",function(){
            $(this).removeClass('focus');
        });
        $("form").on("focus", "textarea", function(){
            $(this).closest('label').addClass('focus');
        }).on("blur","textarea",function(){
            $(this).closest('label').removeClass('focus');
        });

        // 导航栏超出窗口高度后的模拟滚动条
        var sHeight = $(".sidebar").height();
        var subHeight  = $(".subnav").height();
        var diff = subHeight - sHeight; //250
        var sub = $(".subnav");
        if(diff > 0){
            $(window).mousewheel(function(event, delta){
                if(delta>0){
                    if(parseInt(sub.css('marginTop'))>-10){
                        sub.css('marginTop','0px');
                    }else{
                        sub.css('marginTop','+='+10);
                    }
                }else{
                    if(parseInt(sub.css('marginTop'))<'-'+(diff-10)){
                        sub.css('marginTop','-'+(diff-10));
                    }else{
                        sub.css('marginTop','-='+10);
                    }
                }
            });
        }
    }();
</script>

    <script src="/Public/static/thinkbox/jquery.thinkbox.js"></script>

    <script type="text/javascript">
        //搜索功能
        $("#search").click(function(){
            var url = $(this).attr('url');
            var query  = $('.search-form').find('input').serialize();
            query = query.replace(/(&|^)(\w*?\d*?\-*?_*?)*?=?((?=&)|(?=$))/g,'');
            query = query.replace(/^&/g,'');
            if( url.indexOf('?')>0 ){
                url += '&' + query;
            }else{
                url += '?' + query;
            }
            window.location.href = url;
        });
        //回车搜索
        $(".search-input").keyup(function(e){
            if(e.keyCode === 13){
                $("#search").click();
                return false;
            }
        });
        //导航高亮
        highlight_subnav('<?php echo U('User/index');?>');
    </script>

</body>
</html>