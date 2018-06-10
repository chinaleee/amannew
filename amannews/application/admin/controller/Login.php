<?php
namespace app\admin\controller;

use     think\Controller;
use     think\Request;
use     app\index\model\Goods;
use     think\Session;


/**
 *  阿蛮游学官网
 * 后台管理系统
 * Class Index
 * @package app\admin\controller
 */
class Login extends  Controller
{
    public function index()
    {
           return view('login/login');
    }


    public function reg()
    {
           return view('login/register');
    }



}