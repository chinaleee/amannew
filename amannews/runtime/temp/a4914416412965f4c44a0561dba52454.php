<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:78:"/usr/local/nginx/html/amannew/public/../application/index/view/free/toefl.html";i:1528629595;s:71:"/usr/local/nginx/html/amannew/application/index/view/common/header.html";i:1528627673;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="北京阿蛮游学教育科技有限公司"/>
    <title>雅思</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1,user-scalable=no"/>
    <link rel="stylesheet" href="/static/index/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/static/index/css/TFxy.css">
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
                        <a href="lists?c_id=<?php echo $vo['class_style_id']; ?>" target="_blank">
                            <img src="/static/<?php echo $vo['style_img']; ?>" alt="" width="364px" height="230px">
                            <p ><?php echo $vo['style_name']; ?></p>
                            <p>已有<?php echo $vo['view_num']; ?>人进行学习</p>
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                    <!--<li>
                        <a href="">
                            <img src="/static/index/img/tuofu/mian_01.png" alt="" width="364px" height="230px">
                            <p >托福听力</p>
                            <p>已有1685人进行学习</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/static/index/img/tuofu/mian_02.png" alt="" width="364px" height="230px">
                            <p >托福口语</p>
                            <p>已有1690人进行学习</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/static/index/img/tuofu/mian_03.png" alt="" width="364px" height="230px">
                            <p>托福阅读</p>
                            <p>已有1697人进行学习</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/static/index/img/tuofu/mian_04.png" alt="" width="364px" height="230px">
                            <p >托福写作</p>
                            <p>已有1702人进行学习</p>
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>

        <div id="content2">
            <div class="main">
                <span>配套教材</span>
            </div>
            <div class="content">
                <ul class="con_ul">
                    <li>
                        <a href="">
                            <img src="/static/index/img/tuofu/pei_01.png" alt="" width="364px" height="230px">
                            <p >东哥杀猪8K8</p>
                            <p>已有1678人进行学习</p>
                            <span>￥188.00</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/static/index/img/tuofu/pei_02.png" alt="" width="364px" height="230px">
                            <p>东哥杀猪-托福听力</p>
                            <p>已有1687人进行学习</p>
                            <span>￥175.00</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/static/index/img/tuofu/pei_03.png" alt="" width="364px" height="230px">
                            <p>东哥杀猪-托福口语</p>
                            <p>已有1685人进行学习</p>
                            <span>￥175.00</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/static/index/img/tuofu/pei_04.png" alt="" width="364px" height="230px">
                            <p >东哥杀猪-托福阅读</p>
                            <p>已有1667人进行学习</p>
                            <span>￥175.00</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/static/index/img/tuofu/pei_05.png" alt="" width="364px" height="230px">
                            <p >东哥杀猪-托福写作</p>
                            <p>已有1685人进行学习</p>
                            <span>￥175.00</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/static/index/img/tuofu/pei_06.png" alt="" width="364px" height="230px">
                            <p >东哥杀猪-托福全套教材</p>
                            <p>已有1690人进行学习</p>
                            <span>￥175.00</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div id="content3">
            <div class="main">
                <span>面授班级</span>
            </div>
            <div class="content">
                <ul class="con_ul">
                    <li>
                        <a href="">
                            <img src="/static/index/img/yasi/ban_01.png" alt="" width="364px" height="230px">
                            <p >暑假别墅封闭集训A班7月份</p>
                            <p>已有1589人进行学习</p>
                            <span>￥36888.00</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/static/index/img/yasi/ban_02.png" alt="" width="364px" height="230px">
                            <p >暑假别墅封闭集训B班7月份</p>
                            <p>已有1689人进行学习</p>
                            <span>￥36888.00</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/static/index/img/yasi/ban_03.png" alt="" width="364px" height="230px">
                            <p >暑假走读集训A班7月份</p>
                            <p>已有1657人进行学习</p>
                            <span>￥29860.00</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/static/index/img/yasi/ban_04.png" alt="" width="364px" height="230px">
                            <p >暑假走读集训B班7月份</p>
                            <p>已有1667人进行学习</p>
                            <span>￥29860.00</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/static/index/img/yasi/ban_05.png" alt="" width="364px" height="230px">
                            <p >暑假别墅封闭集训A班8月份</p>
                            <p>已有1675人进行学习</p>
                            <span>￥36888.00</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/static/index/img/yasi/ban_06.png" alt="" width="364px" height="230px">
                            <p >暑假别墅封闭集训B班8月份</p>
                            <p>已有1690人进行学习</p>
                            <span>￥36888.00</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/static/index/img/yasi/ban_07.png" alt="" width="364px" height="230px">
                            <p >暑假走读集训A班8月份</p>
                            <p>已有1687人进行学习</p>
                            <span>￥29860.00</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/static/index/img/yasi/ban_08.png" alt="" width="364px" height="230px">
                            <p >暑假走读集训B班8月份</p>
                            <p>已有1677人进行学习</p>
                            <span>￥29860.00</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/static/index/img/yasi/ban_09.png" alt="" width="364px" height="230px">
                            <p >秋季走读A班</p>
                            <p>已有1678人进行学习</p>
                            <span>￥29860.00</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/static/index/img/yasi/ban_10.png" alt="" width="364px" height="230px">
                            <p >秋季走读B班</p>
                            <p>已有1669人进行学习</p>
                            <span>￥29860.00</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/static/index/img/yasi/ban_11.png" alt="" width="364px" height="230px">
                            <p >寒假别墅封闭集训A班</p>
                            <p>已有1677人进行学习</p>
                            <span>￥36888.00</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/static/index/img/yasi/ban_12.png" alt="" width="364px" height="230px">
                            <p >寒假别墅封闭集训B班</p>
                            <p>已有1697人进行学习</p>
                            <span>￥36888.00</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/static/index/img/yasi/ban_13.png" alt="" width="364px" height="230px">
                            <p >寒假走读集训A班</p>
                            <p>已有1678人进行学习</p>
                            <span>￥29860.00</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/static/index/img/yasi/ban_14.png" alt="" width="364px" height="230px">
                            <p >寒假走读集训B班</p>
                            <p>已有1687人进行学习</p>
                            <span>￥29860.00</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="/static/index/img/yasi/ban_15.png" alt="" width="364px" height="230px">
                            <p >此课程暂未开放</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div><img src="/static/index/img/yasi/jia.png" alt="">
            <p>
                <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    送学习资料
                </a>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <p>加我免费领取学习资料！！！</p>
                    <p>咨询相关问题，可以通过以下方式与我们联系</p>
                    <p>微信：lxy330862007</p>
                </div>
            </div>

        </div>

    </div>

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