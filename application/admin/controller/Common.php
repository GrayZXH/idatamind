<?php 
namespace app\admin\controller;
use think\Controller;
use think\facade\Session;
/**
 * 
 */
class Common extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->isLogin();
	}

	public function isLogin(){
		$islogin = Session::has('user');
		if (!$islogin) {
			$this->redirect('admin/Login/index');
		}
	}
}