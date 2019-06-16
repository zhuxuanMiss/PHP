<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Config;
// 应用公共文件
function msgReturn($code, $data=array()) {
	if (empty($data)) {
		$resReturn = ['code'=>$code, 'msg'=>getMessage($code)];
	} else {
		$resReturn = ['code'=>$code, 'msg'=>getMessage($code), 'data'=>$data];
	}
	return json_encode($resReturn);
}

function getMessage($code){
	$configs = Config::get('message.info');
	return array_key_exists($code, $configs) ? $configs[$code] : $code;  
}
