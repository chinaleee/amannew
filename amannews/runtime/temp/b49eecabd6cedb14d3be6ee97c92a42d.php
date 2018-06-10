<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:83:"/usr/local/nginx/html/amannew/public/../application/index/view/mobileapp/index.html";i:1528620036;s:71:"/usr/local/nginx/html/amannew/application/index/view/common/header.html";i:1528627673;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="北京阿蛮游学教育科技有限公司"/>
    <title>手机APP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1,user-scalable=no"/>
    <link rel="stylesheet" href="/static/index/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/static/index/css/PhoneApp.css">

</head>
<body>

<div class="box">
    <header class="header" id="header" >
    <nav class="navbar navbar-default nther" id="nav">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href=""><img src="/static/index/images/parallax/AMAN.png" alt="" class="logo"/></a>
            </div>
            <div class="collapse navbar_div navbar-collapse" style="display: inline-block;" >
                <ul class="nav navbar-nav tto">
                    <li class="active">
                        <a href="#">免费课程<span class="sr-only">(current)</span></a></li>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="<?php echo URL('free/ielts'); ?>"><img src="/static/index/img/b1.png" alt="">雅思学院</a>
                        <a class="dropdown-item" href="<?php echo URL('free/toefl'); ?>"><img src="/static/index/img/b2.png" alt="">托福学院</a>
                        <a class="dropdown-item" href="<?php echo URL('free/small_language'); ?>"><img src="/static/index/img/b3.png" alt="">小语种学院</a>
                        <a class="dropdown-item" href="<?php echo URL('free/middle_high'); ?>"><img src="/static/index/img/b4.png" alt="">中高考英语学院</a>
                    </div>
                    <li class="dropdown">
                        <a href="<?php echo URL('supporting/index'); ?>">配套教材</a>
                    </li>
                    <li><a href="<?php echo URL('smallprogram/index'); ?>">小程序</a></li>
                    <li><a href="<?php echo URL('mobileapp/index'); ?>">手机APP</a></li>
                    <li><a href="<?php echo URL('highscore/index'); ?>">高分经验</a></li>
                    <li><a href="<?php echo URL('face/index'); ?>">面授课程</a></li>
                    <li><a href="<?php echo URL('amanstory/index'); ?>">阿蛮故事</a></li>
                    <li><a href="https://shop198253053.taobao.com/?spm=2013.1.1000126.2.69b4a7d6sthMLZ">东哥淘宝书屋 </a></li>
                 <li class="states">
                     <li><a href="<?php echo URL('login/login'); ?>">登录</a></li>
                     <li><a href="<?php echo URL('login/register'); ?>">注册</a></li>
                 </li>

                </ul>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
    </nav>
</header>
<script src="/static/index/js/jquery-1.8.3.js"></script>
<script>
//判断状态

$(document).ready(function(){
    var _html="";
    $.ajax({
        url:"<?php echo URL('login/loginState'); ?>",
        dataType:"json",
        success:function(data)
        {
            // 成功
            if(data.code == 1)
            {
                _html+="<li style='font-size: 18px'><a href='<?php echo URL('usercenter/index'); ?>'>您好,"+data.msg+"</a></li>&nbsp;&nbsp;";
                _html+="<li style='font-size: 18px'><a href='javascript:;' class='loginOut'>退出</a></li>";
                $(".states").html(_html);
                $(".states").hide();
                return ;

            }
            //失败
            if(data.code == 0)
            {
                alert(ress.message);
                window.location.href="<?php echo URL('login/login'); ?>";
                return ;
            }

        }

    }),
    //退出操作
    $(document).on("click",".loginOut",function () {
        $.ajax({

            url:"<?php echo URL('login/loginOut'); ?>",
            success:function()
            {
                window.location.href="<?php echo URL('index/index'); ?>";

            }

        })

    })

})
</script>
    <div class="content">
        <div class="top">
            <div class="img">
                <img src="/static/index/img/banner-app.png" alt="">
            </div>
            <div class="top-box">
                <div class="top-img">
                    <img src="/static/index/img/banner_top.png" alt="">
                </div>
                <div class="top_p">
                    <p>阿蛮APP<span>（敬请期待）</span></p>
                    <p>它或许会颠覆你学外语的思想</p>
                </div>
            </div>
        </div>
        <div class="main">
            <p>最快6个月，最晚一年</p>
            <p>让你将一门外语掌握为母语</p>
        </div>
        <div class="main-app">
            <img src="/static/index/img/4.png" alt="">
        </div>
        <div class="main-lvlv">
            <img src="/static/index/img/lvlv.png" alt="">
            <div class="main-p">
                <p>从听说学起，</p>
                <p>外语其实应该这么学</p>
            </div>
            <div class="main-img">
                <img src="/static/index/img/6.png" alt="">
            </div>
        </div>
        <div class="main-ap">
            <img src="/static/index/img/quanzhen.png" alt="">
            <div class="main-ap-right">
                <p>全真模拟，全真演练，系统学习</p>
                <p>扔掉语法，动用你的感官去学习外语</p>
            </div>
        </div>
        <div class="main-down">
            <img src="/static/index/img/app4.png" alt="">
            <div class="main-down-con">
                <div class="main-down-p">
                    <p>这次，</p>
                    <p>让我们一起来创造外语学习的新潮流</p>
                </div>
                <div class="main-down-img">
                    <img src="/static/index/img/zheci_app.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

<script src="/static/index/js/jquery-3.2.1.min.js"></script>
<script src="/static/index/js/bootstrap.min.js"></script>
<script src="/static/index/js/app.js"></script>
<script>
    $('.navbar-toggle').on("click",function () {
        var vis = $('.navbar_div').css('display');
        if(vis == 'none'){
            $('.navbar_div').slideDown();
        }else{
            $('.navbar_div').slideUp();
        }
    });

    // 吸顶
    var menu= document.getElementById("nav");
    //获取距离页面顶端的距离
    var titleTop = menu.offsetTop;
    //滚动事件
    window.addEventListener("scroll", function() {
        var btop = document.body.scrollTop || document.documentElement.scrollTop;
        // console.log(titleTop);
        // console.log(titleTop);
//如果滚动距离大于导航条据顶部的距离
        if(btop > titleTop) {
//为导航条设置fix
            $(".nav").addClass("fixed")
        } else {
//移除fixed
            $(".nav").removeClass("fixed")
        }
    })
</script>
