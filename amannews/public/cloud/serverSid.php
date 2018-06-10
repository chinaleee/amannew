<?php
//载入ucpass类
require_once('./Ucpaas.class.php');

//初始化必填
//填写在开发者控制台首页上的Account Sid
$options['accountsid']='33c4d67bc912835c7a365e8f9b4b880a';
//填写在开发者控制台首页上的Auth Token
$options['token']='5b3792e35846a7fe8b6fcf389d6cf8f9';

//初始化 $options必填
$ucpass = new Ucpaas($options);