<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"/usr/local/nginx/html/amannew/public/../application/index/view/free/middle_high.html";i:1528615929;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="北京阿蛮游学教育科技有限公司"/>
    <title>高分经验</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1,user-scalable=no"/>
    <link rel="stylesheet" href="/static/index/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/static/index/css/ZGKYYxy.css">
    <link rel="stylesheet" href="/static/index/css/swiper.min.css">
    <link rel="stylesheet" href="/static/index/css/reset.css" />
    <link rel="stylesheet" href="/static/index/css/pagination.css" />

</head>
<body>

<div class="box">
    <header class="header" id="header">
        <nav class="navbar navbar-default nther" id="nav">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../html/index.html"><img src="/static/index./img/logo.png" alt="" class="logo"/></a>
                </div>
                <div class="collapse navbar_div navbar-collapse">
                    <ul class="nav navbar-nav tto">
                        <li class="active">
                            <a href="../index/index.html">免费课程<span class="sr-only">(current)</span></a></li>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="#"><img src="/static/index/img/b1.png" alt="">雅思学院</a>
                            <a class="dropdown-item" href="#"><img src="/static/index/img/b2.png" alt="">托福学院</a>
                            <a class="dropdown-item" href="#"><img src="/static/index/img/b3.png" alt="">小语种学院</a>
                            <a class="dropdown-item" href="#"><img src="/static/index/img/b4.png" alt="">中高考英语学院</a>
                        </div>
                        <li class="dropdown">
                            <a href="../html/FreeCourse.html">配套教材</a>
                        </li>
                        <li><a href="../html/Xprogram.html">小程序</a></li>
                        <li><a href="../html/PhoneApp.html">手机APP</a></li>
                        <li><a href="../html/HighScore.html">高分经验</a></li>
                        <li><a href="">面授课程</a></li>
                        <li><a href="">阿蛮故事</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
                <div class="nav_right">
                    <a href="https://shop198253053.taobao.com/?spm=2013.1.1000126.2.69b4a7d6sthMLZ" target="_blank">
                        东哥淘宝书屋
                    </a>
                    <a href="index.php?m=index&f=free&a=login">
                        登录/注册
                    </a>
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
                    <a href="javascript:;">
                        <img src="/static/index/img/wd-head.png" alt="">
                        <div>
                            <p>2018.5.22晚9：00</p>
                            <p>初级必过！技巧分享</p>
                        </div>
                    </a>
                    <a href="javascript:;">
                        <img src="/static/index/img/wd-head.png" alt="">
                        <div>
                            <p>2018.5.22晚9：00</p>
                            <p>初级必过！技巧分享</p>
                        </div>
                    </a>
                    <a href="javascript:;"  class="YS_a">
                        <img src="/static/index/img/wd-head.png" alt="">
                        <div>
                            <p>2018.5.22晚9：00</p>
                            <p>初级必过！技巧分享</p>
                        </div>
                    </a>
                    <a href="javascript:;" class="YS_a">
                        <img src="/static/index/img/wd-head.png" alt="">
                        <div>
                            <p>2018.5.22晚9：00</p>
                            <p>初级必过！技巧分享</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div id="content">
            <div class="main">
                <span>免费课</span>
            </div>
            <div class="content">
                <ul class="con_ul">
                    <?php if(is_array($killpigs) || $killpigs instanceof \think\Collection || $killpigs instanceof \think\Paginator): if( count($killpigs)==0 ) : echo "" ;else: foreach($killpigs as $key=>$vo): ?>
                    <li>
                        <a href="">
                            <img src="/static/<?php echo $vo['style_img']; ?>" alt="" width="364px" height="230px">
                            <p ><?php echo $vo['style_name']; ?></p>
                            <p>已有<?php echo $vo['view_num']; ?>人进行学习</p>
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>


                </ul>
            </div>
            <div class="pages">
                <!--<div id="Pagination"></div>-->
                <!--<div class="searchPage">-->
                <!--<span class="page-sum">共<strong class="allPage">15</strong>页</span>-->
                <!--<span class="page-go">跳转<input type="text">页</span>-->
                <!--<a href="javascript:;" class="page-btn">GO</a>-->
                <!--</div>-->
            </div>
            <div>

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

<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/swiper.min.js"></script>
<script src="../js/app.js"></script>
<!--<script src="../js/jquery.min.js"></script>-->
<script type="text/javascript" src="../js/jquery.pagination.js"></script>
<script>
    // 头部
    $('.navbar-toggle').on("click",function () {
        var vis = $('.navbar_div').css('display');
        if(vis == 'none'){
            $('.navbar_div').slideDown();
        }else{
            $('.navbar_div').slideUp();
        }
    })

    // 轮播
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

    // 分页器
    // $(document).ready(function() {
    //     $("#Pagination").pagination("15");
    // });

</script>

