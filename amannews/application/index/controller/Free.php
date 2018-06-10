<?php
namespace app\index\controller;
use app\index\model\High;
use app\index\model\taobao;
use app\index\model\video;
use     think\Controller;
use     think\Db;
use think\Request;
use think\response\Redirect;
use     think\Session;

/**
 * Class Face
 * @package app\index\controller
 * 免费课程
 */
class Free extends  Controller
{
    public function index()
    {
        return view();
    }
    /**
     * 托福
     */
    public function toefl()
    {
        $killpigs = $this->killpig();
        //print_r($killpigs);die;
        return view('toefl',[
            'killpigs' => $killpigs
        ]);
    }
    /**
     * 雅思
     */
    public function ielts()
    {
        $killpigs = $this->killpig();
        $ielts = Db::table('class_style')->where("style='雅思'")->select();
        //print_r($killpigs);die;
        return view('ielts',[
            'ielts' => $ielts,
            'killpigs' => $killpigs
        ]);
    }
//    public  function ysxy(){
//        $model = new video();
//        $data = $model->selects();
//        return $this->fetch('ysxy',['data' => $data]);
//    }
    /**
     * 小语种
     */
    public function small_language()
    {
        return view();
    }
    /**
     * 中高考
     */
    public function middle_high()
    {
        $killpigs = $this->killpig();
        //print_r($killpigs);die;
        return view('middle_high',[
            'killpigs' => $killpigs
        ]);

    }

    /**
     * 列表详情
     */
    public function lists()
    {
        $request = Request::instance()->get();
        if(!$request){
            $this->redirect('index/index');
        }
        //print_r($request);die;
        $c_id = $request['c_id'];
        $courses = Db::table('video')->where("c_id=".$c_id)->order('sorting','desc')->select();
        return view('lists',[
            'courses' => $courses
        ]);

    }

    public function killpig(){
        $styleinfo = Db::table('class_style')->where("style='杀猪'")->select();
        return $styleinfo;

    }



}