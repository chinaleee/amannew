<?php
/**
 * Created by PhpStorm.
 * User: hezhenliang
 * Date: 2018/6/8
 * Time: 下午6:54
 */

namespace app\services;
use app\services\ucpaas;

class Yunzhixun
{
    public static function message(){
        //初始化必填
//填写在开发者控制台首页上的Account Sid
        $options['accountsid']='33c4d67bc912835c7a365e8f9b4b880a';
//填写在开发者控制台首页上的Auth Token
        $options['token']='5b3792e35846a7fe8b6fcf389d6cf8f9';

//初始化 $options必填
        $ucpass = new Ucpaas($options);
        return $ucpass;
    }
}