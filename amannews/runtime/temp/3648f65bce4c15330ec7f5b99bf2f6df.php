<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"/usr/local/nginx/html/amannew/public/../application/index/view/login/login.html";i:1528514491;}*/ ?>
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
                    <input id="ID" name="u_tel" class="text" style="color: #000000 !important" type="text" placeholder="请输入手机号">
                </div>
                <div class="input_outer">
                    <span class="us_uer"></span>
                    <input id="PASSWORD" name="u_pwd" class="text" style="color: #000000 !important; position:absolute; z-index:100;"value="" type="password" placeholder="请输入密码">
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
<script>
    $("#LOGIN").click(function () {
        var _u_tel=$('input[name="u_tel"]').val();
        var _u_pwd=$('input[name="u_pwd"]').val();

        //验证非空
        if (_u_tel == '') {alert("手机号不能为空!");return;}
        if (_u_pwd == '') {alert("密码不能为空!"); return;}

        //验证手机号为真
        var reg =/^[1][3,4,5,7,8][0-9]{9}$/;
        if(!reg.test(_u_tel)) {alert("请输入有效的11位手机号！");return;}

        $.ajax({

            url:"<?php echo URL('login/sign_in'); ?>",
            type:"post",
            data:{u_tel:_u_tel,u_pwd:_u_pwd},
            dataType:"json",

            success:function(ress)
            {
                if(ress.code == 1)
                {
                    alert(ress.message);
                    window.location.href="<?php echo URL('usercenter/index'); ?>";
                    return ;
                }
                if(ress.code == 0)
                {
                    alert(ress.message);
                    window.location.href="<?php echo URL('login/login'); ?>";
                    return ;
                }

            }

        })

    })

</script>