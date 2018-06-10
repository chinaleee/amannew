<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"/usr/local/nginx/html/amannew/public/../application/index/view/amanstory/index.html";i:1528607259;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="北京阿蛮游学教育科技有限公司"/>
    <title>阿蛮故事</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1,user-scalable=no"/>
    <link rel="stylesheet" href="https://cdn.bootcss.com/fullPage.js/2.9.7/jquery.fullpage.min.css">
    <link rel="stylesheet" href="/static/index/css/AMstory.css">
    <script src="/static/index/js/jquery.min.js" ></script>
    <script src="/static/index/js/jquery-3.2.1.min.js"></script>
    <script src="/static/index/js/bootstrap.min.js"></script>
    <script src="/static/index/js/swiper.min.js"></script>
    <script src="/static/index/js/jquery.fullPage.min.js"></script>
    <script src="/static/index/js/app.js"></script>
</head>

<body>




<div id="dowebok">
    <a class="section section1" href="javascript:;"></a>
    <a class="section section2" href="javascript:;"></a>
    <a class="section section3" href="javascript:;"></a>
    <a class="section section4" href="javascript:;">
        <p>
            Copyright © 2016 Beijing Aman Youxue Education Technology Co.Ltd.
            <br>北京阿蛮游学教育科技有限责任公司　京ICP备16026953号
        </p>
    </a>
</div>
</body>
</html>
<script>
    $(function(){
        $('#dowebok').fullpage({
            'navigation': true,
            'verticalCentered':true
        });
        $(window).resize(function(){
            autoScrolling();
        });
        function autoScrolling(){
            var $ww = $(window).width();
            if($ww < 1024){
                $.fn.fullpage.setAutoScrolling(false);
            } else {
                $.fn.fullpage.setAutoScrolling(true);
            }
        }
        autoScrolling();
    });
</script>