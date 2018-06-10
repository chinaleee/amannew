<?php
/**
 * DateTime 2018/6/1 - 16:58
 * @author Feng Yikai
 */

namespace app\index\model;


use think\Db;
use think\Model;

class High
{
    protected $table = 'High';//表名
    public  function selects(){
        return  Db::table($this->table)->where('sid=3')->select();
    }
}