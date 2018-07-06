<?php
namespace app\admin\controller;
use think\Controller;
use app\common\model\User;

class Test extends Controller
{
    public function index()
    {	
    	$email='rayzxh@163.com';
    	$test = User::get(['email' => $email]);

    	$this->assign('test',$test);
        return $this->fetch();
    }
    
}
