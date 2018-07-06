<?php
namespace app\admin\controller;
use think\Controller;
use app\common\model\User;

class User extends Controller
{
    public function index()
    {	
    	$email='rayzxh@163.com';
    	$test=User::getUserByEmail($email);

    	$this->assign('test',$test);
        return $this->fetch();
    }

    public function users()
    {
        return $this->fetch();
    }
    
}
