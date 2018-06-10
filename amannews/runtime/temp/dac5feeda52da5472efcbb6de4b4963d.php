<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"/usr/local/nginx/html/amannew/public/../application/index/view/login/register.html";i:1528609560;}*/ ?>
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

                    <div class="input_outer">
                        <span class="u_user"></span>
                        <input id="ID" name="u_tel" class="text" style="color: #000000 !important" type="text" placeholder="请输入手机号">
                    </div>

                    <div class="input_outer">
                        <span class="us_uer"></span>
                        <input id="PASSWORD" name="yzm" class="text yzm" style="color: #000000 !important; position:absolute; z-index:100;" type="text" placeholder="请输入验证码">
                        <input type="button" id="btn" value="获取" class="btns" style="color: #FFFFFF;" onclick="sendemail()" />
                    </div>
                    <div class="input_outer">
                        <span class="us_uer"></span>
                        <input id="yzm" name="u_pwd" class="text" style="color: #000000 !important; position:absolute; z-index:100;" type="password" placeholder="请输入密码">
                    </div>
                    <div id="LOGIN" class="mb2"><input type="button" value="注册" class="act-but submit"></div>
                    <div class="Jump">已有账户?<a href="<?php echo URL('login/login'); ?>">去登录</a></div>
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
<script>
    var countdown=60;
// 获取手机验证码
    function sendemail() {
        var _tel =$("input[name='u_tel']").val();
        if(_tel == "") {alert("手机号不能为空！");return;}
        //验证手机号为真
        var reg_tel =/^[1][3,4,5,7,8][0-9]{9}$/;
        if(!reg_tel.test(_tel)) {alert("请输入有效的11位手机号！");return;}

        $.ajax({
            type: 'post',
            url: "<?php echo URL('login/get_code'); ?>",
            dataType: "json",
            data: {_tel:_tel},
            success: function (res) {
                if(res.code == -1){
                    alert(ress.message);
                    return ;

                }
                if(res.code == 1){
                    alert(ress.message);
                    return ;
                }
            },

        });
        var obj = $("#btn");
        settime(obj);

    }

    //注册
    $(".submit").click(function () {

        var _tel =$("input[name='u_tel']").val();

        var _yzm =$("input[name='yzm']").val();
        if(_yzm == "") {alert("验证码不能为空！");return;}

        var _pwd =$("input[name='u_pwd']").val();
        if(_pwd == "") {alert("密码不能为空！");return;}
        //密码6-18位 字母和数字混合
        var reg_pwd=/^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,18}$/;
        if(!reg_pwd.test(_pwd)) {alert("密码由6-18字母和数字组成，不能是纯数字或纯英文！");return;}

        $.ajax({
            type: 'post',
            url: "<?php echo URL('login/registerDo'); ?>",
            dataType: "json",
            data: {_tel:_tel,_yzm:_yzm,_pwd:_pwd},
            success: function (res) {
                if (res.code == 1) {
                    alert(res.message);
                    window.location.href="<?php echo URL('login/login'); ?>";
                    return ;

                }
                if (res.code == 0) {
                    alert(res.message);
                    window.location.href="<?php echo URL('login/register'); ?>";
                    return ;
                }
            }

        });

    })

    function settime(obj) { //发送验证码倒计时
        if (countdown == 0) {
            obj.attr('disabled',false);
            //obj.removeattr("disabled");
            obj.val("免费获取验证码");
            countdown = 60;
            return;
        } else {
            obj.attr('disabled',true);
            obj.val("重新发送(" + countdown + ")");
            countdown--;
        }
        setTimeout(function() {
                settime(obj) }
            ,1000)
    }
    // $(document).on('blur','#ID',function () {
    //     var a = $("#ID").val();
    //     $.ajax({
    //         url: 'one',
    //         data:{a:a},
    //         type:'get',
    //         dataType:"json",
    //         success:function (res) {
    //             if(res == 1) {
    //                 alert('手机号已经存在,');
    //                 return ;
    //             }
    //
    //         }
    //     })
    //
    // })
</script>