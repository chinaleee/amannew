<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:83:"/usr/local/nginx/html/amannew/public/../application/index/view/highscore/index.html";i:1528631450;s:71:"/usr/local/nginx/html/amannew/application/index/view/common/header.html";i:1528627673;}*/ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="北京阿蛮游学教育科技有限公司"/>
    <title>高分经验</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1,user-scalable=no"/>
    <link rel="stylesheet" href="/static/index/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/static/index/css/HighScore.css">
    <link rel="stylesheet" href="/static/index/css/swiper.min.css">
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
    <div class="core">
        <div class="section section1">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <a class="swiper-slide banner">
                        <img src="/static/index/img/BANNER-1.png" alt="">
                    </a>
                    <a class="swiper-slide banner">
                        <img src="/static/index/img/BANNER-2.png" alt="">
                    </a>
                    <a class="swiper-slide banner">
                        <img src="/static/index/img/BANNER-3.png" alt="">
                    </a>
                </div>
                <div class="swiper-pagination"  style="bottom: 70px"></div>
            </div>
            <ul class="uls">
                <li class="banner-book">
                    <a href="#">张琪敏</a>
                    <a href="#">白天明</a>
                    <a href="#">刘悦</a>
                    <a href="#">赵梦蝶</a>
                    <a href="#">何静涵</a>
                    <a href="#">王清丽</a>
                </li>
            </ul>
        </div>
        <div id="content">
            <div class="main">
                <span>历届学员分享</span>
            </div>
            <div class="content">
                <ul class="con_ul">
                    <?php if(is_array($courses) || $courses instanceof \think\Collection || $courses instanceof \think\Paginator): if( count($courses)==0 ) : echo "" ;else: foreach($courses as $key=>$vo): ?>
                    <li>
                        <a href="<?php echo $vo['url']; ?>">
                        <img src="/static/index/img/10.png" alt="" width="364px" height="230px" />
                        </a>
                        <p><?php echo $vo['title']; ?></p>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                </ul>
            </div>
        </div>
        <div id="GF_con">
            <div class="main2">
                <span>高分学员使用的教材</span>
            </div>
            <div class="content">
                <ul class="con_ul">
                    <li><img src="/static/index/img/15.png" alt="">
                        <div class="con_dv">
                            <p>扔掉词汇的单课书</p>
                            <p>￥188元</p>
                        </div>
                    </li>
                    <li><img src="/static/index/img/16.png" alt="">
                        <div class="con_dv">
                            <p>模拟环境辩论赛，脱口而出</p>
                            <p>￥188元</p>
                        </div></li>
                    <li><img src="/static/index/img/17.png" alt="">
                        <div class="con_dv">
                            <p>听力满分用笔记</p>
                            <p>￥188元</p>
                        </div></li>
                    <li><img src="/static/index/img/37.png" alt="">
                        <div class="con_dv">
                            <p>极速阅读看定位</p>
                            <p>￥188元</p>
                        </div></li>
                    <li><img src="/static/index/img/34.png" alt="">
                        <div class="con_dv">
                            <p>雅思命题人的满分讲法</p>
                            <p>￥188元</p>
                        </div></li>
                    <li><img src="/static/index/img/35.png" alt="">
                        <div class="con_dv">
                            <p>东哥杀猪系列——雅思全套教材</p>
                            <p>￥688.00元</p>
                        </div></li>

                </ul>
            </div>
        </div>
        <div id="BM_con">
            <div class="main3">
                <span>高分学员报名的班级</span>
            </div>
            <div class="content">
                <ul class="BM_ul">
                    <li>
                        <a href="#">
                            <img src="/static/index/img/20.png" alt="" >
                            <p class="p_left">适合基础5.5分以上，目标7分</p>
                            <p>已有1768人进行学习 <span class="price">￥36888.00</span></p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/static/index/img/21.png" alt="" >
                            <p class="p_left">适合基础5.5分以下，目标6.5分</p>
                            <p>已有1768人进行学习 <span class="price">￥36888.00</span></p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/static/index/img/22.png" alt="" >
                            <p class="p_left" >适合基础5.5分以上，目标7分</p>
                            <p>已有1768人进行学习 <span class="price">￥29860.00</span></p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/static/index/img/23.png" alt="" >
                            <p class="p_left">适合基础5.5分以下，目标6.5分</p>
                            <p>已有1768人进行学习 <span class="price">￥29860.00</span></p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/static/index/img/24.png" alt="">
                            <p class="p_left">适合基础5.5分以上，目标7分</p>
                            <p>已有1768人进行学习 <span class="price">￥29860.00</span></p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/static/index/img/25.png" alt="">
                            <p class="p_left" >适合基础5.5分以下，目标7分</p>
                            <p>已有1768人进行学习 <span class="price">￥29860.00</span></p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/static/index/img/26.png" alt="" >
                            <p class="p_left" >适合基础5.5分以上，目标6.5分</p>
                            <p>已有1768人进行学习 <span class="price">￥36888.00</span></p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/static/index/img/27.png" alt="">
                            <p class="p_left" >适合基础5.5分以上，目标7分</p>
                            <p>已有1768人进行学习 <span class="price">￥36888.00</span></p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/static/index/img/28.png" alt="">
                            <p class="p_left" >适合基础5.5分以下，目标6.5分</p>
                            <p>已有1768人进行学习 <span class="price">￥36888.00</span></p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/static/index/img/29.png" alt="" >
                            <p class="p_left" >适合基础5.5分以上，目标7分</p>
                            <p>已有1768人进行学习 <span class="price">￥36888.00</span></p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <footer>
        <ul class="footer_ul">
            <li><a href="">人才招聘</a></li>
            <li>｜</li>
            <li><a href="">付款方式</a></li>
            <li>｜</li>
            <li><a href="">客服中心</a></li>
            <li>｜</li>
            <li><a href="">网站地图</a></li>
        </ul>
        <div class="down">
            <p>Copyright © 2016 Beijing Aman Youxue Education Technology Co.Ltd.</p>
            <p>北京阿蛮游学教育科技有限责任公司　京ICP备16026953号</p>
        </div>

    </footer>
</div>

</body>
</html>

<script src="/static/index/js/jquery-3.2.1.min.js"></script>
<script src="/static/index/js/bootstrap.min.js"></script>
<script src="/static/index/js/swiper.min.js"></script>
<script src="/static/index/js/app.js"></script>
<script>
    $('.navbar-toggle').on("click",function () {
        var vis = $('.navbar_div').css('display');
        if(vis == 'none'){
            $('.navbar_div').slideDown();
        }else{
            $('.navbar_div').slideUp();
        }
    })

    var swiper = new Swiper('.swiper-container', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
        autoplay: {
            stopOnLastSlide:true
        },
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        }
    });

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