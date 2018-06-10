<?php
namespace app\index\controller;
use app\index\model\High;
use     think\Controller;
use     think\Db;
use     think\Session;

/**
 * Class Face
 * @package app\index\controller
 * 高分经验
 */
class Highscore extends  Controller
{
    public function index()
    {
        $courses = Db::table('video')->where("c_id=6")->order('sorting','desc')->select();
        return view('index',[
            'courses' => $courses
        ]);
    }

//    public  function highscore(){
//        $mode = new High();
//        $data = $mode->selects();
//        $taobao = new taobao();
//        $res = $taobao->selects();
//        return $this->fetch('highscore',['data' => $data,'res'=>$res]);
//    }



}