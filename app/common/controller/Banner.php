<?php
namespace app\common\controller;

use think\facade\Request;
use app\common\model\Banner as BannerModel;

class Banner
{
	/**
	 * [获取banner列表]
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function getBannerList(Request $request) {
		$rec = $_POST;
		try {
			$result = (new BannerModel)->getBannerList();
			if (isset($result['data'])) {
				return msgReturn($result['code'], $result['data']);
			} else {
				return msgReturn($result['code']);
			}
		} catch (\Exception $e) {
			return msgReturn($e->getMessage());
			// return msgReturn(sERROR);
		}
	}
}

?>