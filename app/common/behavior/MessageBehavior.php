<?php
namespace app\common\behavior;

use think\facade\Config;
/**
 *  消息发送类
 */
class MessageBehavior
{
	
	public function handle() {
		$message = Config::get('message.code');
		foreach ($message as $k => $v) {
			define($k, $v);
		}
	}
}
?>
