<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"/Applications/MAMP/htdocs/amannew/public/../application/index/view/face/index.html";i:1528447881;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="北京阿蛮游学教育科技有限公司"/>
    <title>面授课程</title>
    <base href="/amannew/public/static/" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1,user-scalable=no"/>
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/Courses.css">
    <link rel="stylesheet" href="../css/swiper.min.css">
</head>
<body>
<div class="box">
    <header class="header" id="header">
        <nav class="navbar navbar-default nther" id="nav">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../html/indexs.html"><img src="../images/parallax/AMAN.png" alt="" class="logo"/></a>
                </div>
                <div class="collapse navbar_div navbar-collapse">
                    <ul class="nav navbar-nav tto">
                        <li class="active">
                            <a href="index.html">免费课程<span class="sr-only">(current)</span></a></li>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="#"><img src="../img/b1.png" alt="">雅思学院</a>
                            <a class="dropdown-item" href="#"><img src="../img/b2.png" alt="">托福学院</a>
                            <a class="dropdown-item" href="#"><img src="../img/b3.png" alt="">小语种学院</a>
                            <a class="dropdown-item" href="#"><img src="../img/b4.png" alt="">中高考英语学院</a>
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
                    <a href="../html/login.html">
                        登录
                    </a>
                    <a href="../html/login.html">
                        注册
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
                        <img src="../img/BANNER-1.png" alt="">
                    </a>
                    <a class="swiper-slide banner">
                        <img src="../img/BANNER-2.png" alt="">
                    </a>
                    <a class="swiper-slide banner">
                        <img src="../img/BANNER-3.png" alt="">
                    </a>
                </div>
                <div class="swiper-pagination"  style="bottom: 70px"></div>
            </div>
            <ul class="uls">
                <li class="banner-book">
                    <a href="javascript:;">
                        <img src="../img/wd-head.png" alt="">
                        <div>
                            <p>2018.5.22晚9：00</p>
                            <p>初级必过！技巧分享</p>
                        </div>
                    </a>
                    <a href="javascript:;">
                        <img src="../img/wd-head.png" alt="">
                        <div>
                            <p>2018.5.22晚9：00</p>
                            <p>初级必过！技巧分享</p>
                        </div>
                    </a>
                    <a href="javascript:;"  class="YS_a">
                        <img src="../img/wd-head.png" alt="">
                        <div>
                            <p>2018.5.22晚9：00</p>
                            <p>初级必过！技巧分享</p>
                        </div>
                    </a>
                    <a href="javascript:;" class="YS_a">
                        <img src="../img/wd-head.png" alt="">
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
                <span>课程安排</span>
            </div>
            <div class="General_course">
                <div class="YS_class">
                    <p>阿蛮 <span>雅思</span>总课程</p>
                    <div class="Y_surface">
                        <img src="../img/class.png" alt="">
                    </div>
                </div>
                <div class="TF_class">
                    <p>阿蛮 <span>托福</span>总课程</p>
                    <div class="T_surface">
                        <img src="../img/class.png" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer_border">
            <div class="footer_b">
                <div class="footer_left">
                    <span>立减100元</span>
                </div>
                <div class="footer_right">
                    <p>加我免费领取学习资料！！！</p>
                    <p>咨询相关问题，可以通过以下方式与我们联系</p>
                    <p>微信：lxy330862007</p>
                </div>
            </div>
        </div>
    </footer>
</div>

</body>
</html>

<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/swiper.min.js"></script>
<script src="../js/app.js"></script>
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
