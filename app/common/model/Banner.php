<?php
namespace app\common\model;

use think\facade\Db;

class Banner
{
	public function getBannerList()
	{
		$return = array();
		try {
			$bannerInfo = Db::table('configs')
							->field('v')
							->where('k','banner')
							->findOrEmpty();
			if (!empty($bannerInfo)) {
				$banner = json_decode($bannerInfo['v'], true);
				$return['code'] = SUCCESS;
				$return['data'] = $banner;
			} else {
				$return['code'] = EMPTY_DATA;
			}
		} catch (\Exception $e) {
			$return['code'] =  $e->getMessage();
		}
		return $return;
	}
}

?>