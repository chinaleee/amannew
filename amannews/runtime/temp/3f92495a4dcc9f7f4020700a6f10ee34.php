<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"/usr/local/nginx/html/amannew/public/../application/index/view/login/logins.html";i:1528496386;}*/ ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>登 录</title>
    <link rel="stylesheet" type="text/css" href="/static/login/demo.css" />
    <link rel="stylesheet" href="/static/login/jquery.jgrowl.min.css">
    <!--必要样式-->
    <link rel="stylesheet" type="text/css" href="/static/login/component.css" />
    <!--[if IE]>
    <script src="/static/login/html5.js"></script>
    <![endif]-->
    <style>
        input::-webkit-input-placeholder{
            color:rgba(0, 0, 0, 0.726);
        }
        input::-moz-placeholder{   /* Mozilla Firefox 19+ */
            color:rgba(0, 0, 0, 0.726);
        }
        input:-moz-placeholder{    /* Mozilla Firefox 4 to 18 */
            color:rgba(0, 0, 0, 0.726);
        }
        input:-ms-input-placeholder{  /* Internet Explorer 10-11 */
            color:rgba(0, 0, 0, 0.726);
        }
    </style>
</head>
<body>
<div class="container demo-1">
    <div class="content">
        <div id="large-header" class="large-header">
            <canvas id="demo-canvas"></canvas>
            <div class="logo_box">
                <h3>登 录</h3>
                    <div class="input_outer">
                        <span class="u_user"></span>
                        <input id="ID" name="logname" class="text" style="color: #000000 !important" type="text" placeholder="请输入手机号">
                    </div>
                    <div class="input_outer">
                        <span class="us_uer"></span>
                        <input id="PASSWORD" name="logpass" class="text" style="color: #000000 !important; position:absolute; z-index:100;"value="" type="password" placeholder="请输入密码">
                    </div>
                    <div id="LOGIN" class="mb2"><a class="act-but submit" style="color: #FFFFFF">登录</a></div>
                    <div>还没账号？<a href="<?php echo URL('login/register'); ?>">立即注册</a></div>

            </div>
        </div>
    </div>
</div><!-- /container -->
<script src="/static/login/TweenLite.min.js"></script>
<script src="/static/login/EasePack.min.js"></script>
<script src="/static/login/jquery.js"></script>
<script src="/static/index/js/jquery.min.js"></script>
<script src="/static/login/rAF.js"></script>
<script src="/static/login/demo-1.js"></script>
<script src="/static/login/jquery.jgrowl.min.js"></script>
<script src="/static/login/Longin.js"></script>
<div style="text-align:center;">
</div>

</body>
</html>