<?php
namespace app\index\controller;

use     think\Controller;
use     think\Cookie;
use     think\Db;
use     think\db\builder\Sqlsrv;
use     think\Request;
use     think\Session;

/**
 * 登录 注册
 * Class Login
 * @package app\index\controller
 */
class Login extends  Controller
{

     public  function login()
     {
         return view();
     }
    /**
     * 用户登录 退出
     */
    public function loginOut()
    {
        return Cookie::clear();
    }

    /**
     * 处理 登录操作
     */
     public  function sign_in()
     {
         $request   = Request::instance();
         $username  = $request->post('u_tel');
         $password  = $request->post('u_pwd');

         $data = Db::table('user')->where("u_tel = '".$username."' and u_pwd = '".$password."'")->find();

         if ($data) {
              $sign = md5($data['u_pwd'].$username).'#'.$data['u_id'];
              Cookie::set('user_sign',$sign);

              $message = ['code'=>1,'message'=>"登录成功"];
              echo json_encode($message);
          } else {

              $message = ['code'=>0,'message'=>"登录失败，账户或者密码错误"];
              echo json_encode($message);

          }
     }

     public  function register()
     {
         return view();
     }

    /**
     * 处理 注册操作
     */
     public  function registerDo()
     {
         $_tel = Request::instance()->post('_tel');
         $_yzm = Request::instance()->post('_yzm');
         $_pwd = Request::instance()->post('_pwd');

         if ($_tel == "" && $_pwd =="" && $_yzm == "") return ;

         //判断 验证码
//         if (!$_yzm) {
//             //验证码逻辑
//         }

         $data = ['u_tel' =>$_tel,'u_pwd' =>$_pwd,'u_name' =>'pc'.$_tel,'create_time'=>date('Y-m-d H:i:s')];

         $res = Db::table('user')->insert($data);
         if ($res) {

              $wechat= ['code' => 1,'message' => "注册成功!"];
              echo json_encode($wechat);
         } else {
              $wechat= ['code' => 0,'message' => "注册失败!"];
              echo json_encode($wechat);
         }


     }
    /**
     * 验证手机号
     * 获取验证码
     */
    public  function get_code()
    {
        // 判断手机号是否存在
        $_tel = Request::instance()->post('_tel');
        $data = Db::table('user')->where("u_tel =".$_tel)->find();
        $arr  = ['code' => -1,"message" => "手机号码已存在,请直接登录!"];
        echo json_encode($arr);
        return ;

        //获取验证码



    }






    /**
     * 判断用户登录状态
     */

    public function loginState()
    {
        $user_sign = Cookie::get('user_sign');
        $status=['code' => 0,'message' => ""];
        //登录不成功
        if ( !$user_sign ) {
            echo json_encode($status);exit;
        }


        $user_sign_array = @explode('#',$user_sign);
        $user_info = Db::table('user')->where('u_id='.$user_sign_array[1])->find();

        //登录不成功
        if (!$user_info) {
            echo json_encode($status);exit;
        }
        //登录不成功
        //Cookie信息与数据库信息 安全对比
        $validate_sign = md5($user_info['u_pwd'].$user_info['u_tel']);
        if ($validate_sign != $user_sign_array[0]) {
            echo json_encode($status);exit;
        }

        //登录成功
        $state= ['code' => 1,'msg' =>$user_info['u_name']];
        echo json_encode($state);exit;

    }

}