<?php
namespace Control\Controller;

use Think\Controller;
use Org\Util\Image;

/**
 * 公共页面处理类
 * 此类主要用于显示登录页面的验证码图片用
 *
 * @category Control
 * @package Control
 * @author guanxuejun <guanxuejun@gmail.com>
 * @copyright http://www.f-fusion.com/ <http://www.f-fusion.com/>
 */
class PublicController extends BaseController {
	/**
	 * 显示登录页面的验证码图片
	 */
	function verify(){
		Image::buildImageVerify(4, 1, 'png', 48, 22, 'CONTROL_VRERIFY');
	}
}