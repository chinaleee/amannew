<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:84:"/usr/local/nginx/html/amannew/public/../application/index/view/usercenter/index.html";i:1528628542;s:71:"/usr/local/nginx/html/amannew/application/index/view/common/header.html";i:1528627673;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="北京阿蛮游学教育科技有限公司"/>
    <title>个人中心</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1,user-scalable=no"/>
    <link rel="stylesheet" href="/static/index/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/static/index/css/Personal.css">
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
     <div class="content">
         <div class="con_top">
             <img src="/static/img/BANNER%20(2).png" alt="">
         </div>
         <div class="down">
             <div class="left">
                 <div class="P-tx">
                     <img src="/static/img/P-tx.png" alt="">
                 </div>
                 <div class="left_middle">
                     <p id="p"> &nbsp; &nbsp;个人中心</p>
                 </div>

                 <div class="list">
                     <div class="list_middle"><img src="/static/img/kc.png" alt="">
                         <select id="select"> &nbsp; &nbsp;课程管理
                             <option value="课程管理" style="color: black;">课程管理</option>
                            <option value="课程管理" style="color: black;">托福</option>
                             <option value="课程管理" style="color: black;">雅思</option>
                         </select>
                     </div>
                     <div class="list_middle"><img src="/static/img/ks.png" alt="">
                         <select id="select2">&nbsp; &nbsp;考试中心
                             <option value="考试中心">考试中心</option></select>
                     </div>
                     <div class="list_middle"><img src="/static/img/xx.png" alt="">
                         <select id="select3">&nbsp; &nbsp;我的问答
                            <option value="我的问答">我的问答</option></select>
                     </div>
                     <!--<div class="list_middle"><img src="/static/img/gl.png" alt="">-->
                         <!--<select id="select4"> &nbsp; &nbsp;个人管理-->
                             <!--<option value="个人管理">个人管理</option></select>-->
                     <!--</div>-->

                 </div>
             </div>
             <div class="middle">
                 <div class="middle_top">
                     <p>我收藏课程</p>
                 </div>
                 <div class="middle_down">
                     <ul>
                         <?php if($collection_info != null): if(is_array($collection_info) || $collection_info instanceof \think\Collection || $collection_info instanceof \think\Paginator): if( count($collection_info)==0 ) : echo "" ;else: foreach($collection_info as $key=>$vo): ?>
                             <li>
                                 <img src="/static/<?php echo $vo['thum']; ?>" alt="" style="float: left">
                                 <p><?php echo $vo['title']; ?></p>
                                 <p>讲师:<?php echo $vo['tid']; ?></p>
                                 <p>课时:26课时</p>
                                 <p>直接观看 <span>|</span> 查看课程</p>
                             </li>
                             <?php endforeach; endif; else: echo "" ;endif; else: ?>
                               <li>
                                   <br><br>
                                 <p>您暂时没有观看课程!快去吧~</p>
                             </li>

                         <?php endif; ?>

                         </ul>
                 </div>
             </div>
             <div class="right">
                 <div class="right_top">
                     <p><?php echo $user_info['u_name']; ?></p>
                 </div>
                 <div class="right_middle">
                     <a href="">个人资料</a>
                     <a href="">修改头像</a>
                 </div>
                 <div class="right_down">
                     <!--<div class="Dj">-->
                         <!--<p>我的等级：<span><?php echo $user_info['u_grade']; ?></span></p>-->
                         <!--<p>我的蛮豆：<span><?php echo $user_info['u_mark']; ?>点</span><i>蛮豆兑>></i></p>-->
                     <!--</div>-->
                     <div class="down_zx">
                         <p>最新公告</p>
                     </div>
                     <p class="accurate">92%准确率押题666<span>2018.06.08</span></p>
                     <div class="start">
                         <div class="start_teacher">
                             <p>明星讲师</p>
                         </div>
                         <ul>
                             <li><img src="/static/img/teacher-wd.png" alt=""><p>王东</p></li>
                             <li><img src="/static/img/teacher-2.png" alt=""><p>郭澎</p></li>
                             <li><img src="/static/img/teacher-3.png" alt=""><p>刘文彬</p></li>
                         </ul>
                     </div>
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
