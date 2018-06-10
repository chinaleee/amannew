<?php
namespace app\index\controller;
use     think\Controller;
use app\services\message\validation;



class Test extends  Controller
{
    public function index()
    {
        return Validation::send('18911930639','1');
    }
}


