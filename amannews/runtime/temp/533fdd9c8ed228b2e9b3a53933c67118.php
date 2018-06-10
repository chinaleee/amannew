<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"/usr/local/nginx/html/amannew/public/../application/index/view/login/registers.html";i:1528496926;}*/ ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>注 册</title>
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
                <h3>注 册</h3>
                <form action="registers" name="f" method="post">
                    <div class="input_outer">
                        <span class="u_user"></span>
                        <input id="ID" name="u_name" class="text" style="color: #000000 !important" type="text" placeholder="请输入手机号">
                    </div>

                    <div class="input_outer">
                        <span class="us_uer"></span>
                        <input id="PASSWORD" name="yzm" class="text yzm" style="color: #000000 !important; position:absolute; z-index:100;" type="text" placeholder="请输入验证码">
                         <input type="button" id="btn" value="获取" class="btns" style="color: #FFFFFF;" onclick="sendemail()" />
                    </div>
                    <div class="input_outer">
                        <span class="us_uer"></span>
                        <input id="yzm" name="u_pwd" class="text" style="color: #000000 !important; position:absolute; z-index:100;"value="" type="password" placeholder="请输入密码">
                    </div>
                    <div id="LOGIN" class="mb2"><input type="button" value="注册" class="act-but submit"></div>
                    <div class="Jump">已有账户?<a href="<?php echo URL('login/login'); ?>">去登录</a></div>
                </form>
            </div>
        </div>
    </div>
</div><!-- /container -->
<script src="/static/login/TweenLite.min.js"></script>
<script src="/static/login/EasePack.min.js"></script>
<script src="/static/login/jquery.js"></script>
<script src="/static/login/rAF.js"></script>
<script src="/static/login/demo-1.js"></script>
<script src="/static/login/jquery.jgrowl.min.js"></script>
<script src="/static/login/Longin.js"></script>
<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>

<div style="text-align:center;">
</div>
</body>
</html>