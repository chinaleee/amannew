<?php
/**
 * DateTime 2018/6/1 - 16:58
 * @author Feng Yikai
 */

namespace app\index\model;


use think\Db;
use think\Model;

class video
{
    protected $table = 'video';
    public  function selects(){
        return  Db::table($this->table)->where("ass=2")->select();
    }
}