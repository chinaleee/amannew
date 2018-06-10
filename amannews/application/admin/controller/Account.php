<?php
namespace app\admin\controller;

use     think\Controller;
use     think\Request;
use     app\index\model\Goods;
use     think\Session;


/**
 *  阿蛮游学官网
 * 后台管理系统
 * 账户管理模块
 * Class Index
 * @package app\admin\controller
 */
class Account extends  Controller
{
    public function index()
    {
           return view('account/change');
    }

    public function recharge()
    {
           return view();
    }

    public function money()
    {
           return view();
    }

}