<?php
namespace app\services\message;
use app\services\message\lib\ucpaas;

class Validation{
    public static function send($to,$param){
        //初始化必填
        $options['accountsid']='33c4d67bc912835c7a365e8f9b4b880a';
        $options['token']='5b3792e35846a7fe8b6fcf389d6cf8f9';


//初始化 $options必填
        $ucpass = new Ucpaas($options);




//短信验证码（模板短信）,默认以65个汉字（同65个英文）为一条（可容纳字数受您应用名称占用字符影响），超过长度短信平台将会自动分割为多条发送。分割后的多条短信将按照具体占用条数计费。
        $appId = "c367ddc4fca3419d901ae7eebfacf1b9";
        //$to = "18911930639";
        $templateId = "332645";
        //$param="1";

        return $ucpass->templateSMS($appId,$to,$templateId,$param);
    }
}
