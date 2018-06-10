<?php
/**
 * DateTime 2018/6/1 - 16:58
 * @author Feng Yikai
 */

namespace app\index\model;


use think\Db;
use think\Model;

class taobao
{
    protected $table = 'taobao';//表名
    public  function selects(){
        return  Db::table($this->table)->where('cid=1')->select();
    }
}