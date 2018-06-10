<?php
namespace app\index\controller;
use app\index\model\High;
use app\index\model\taobao;
use app\index\model\video;
use     think\Controller;
use think\Cookie;
use     think\Db;
use     think\Session;

/**
 *
 * @package app\index\controller
 * 个人中心
 */
class Usercenter extends  Controller
{
    private $user_info;
    private $user_id;
    public function index()
    {
        $user_sign = Cookie::get('user_sign');
        if( !$user_sign ){
           echo "<script>alert('请先登录');window.location.href='/index/login/login';</script>";
        }
        $user_sign_array = @explode('#',$user_sign);
        $user_info = Db::table('user')->where('u_id='.$user_sign_array[1])->find();
        $this->user_info = $user_info;
        $this->user_id   = $user_info['u_id'];
        if(!$user_info){
            echo "<script>alert('请先登录');window.location.href='/index/login/login';</script>";
        }
        $validate_sign = md5($user_info['u_pwd'].$user_info['u_tel']);
        if($validate_sign != $user_sign_array[0]){
            echo "<script>alert('请先登录');window.location.href='/index/login/login';</script>";
        }

        $collection_info  = $this->collection($user_info['u_id']);

        return $this->fetch('index',[
            'user_info' => $user_info,
            'collection_info' => $collection_info
        ]);
    }
    public function collection($u_id){
        $user_collection = Db::table('video_user')->where('u_id='.$u_id)->order('view_time','desc')->limit(3)->select();
        if(!$user_collection){
            return $view_info = null;
        }
        foreach ($user_collection as $value){
            $view_info[] = Db::table('video')->where('id='.$value['view_id'])->find();
        }
            return $view_info;
    }

}