<?php
namespace app\admin\controller;
use think\Controller;
use app\common\model\User;

class Users extends Controller
{
    public function index()
    {	
        return $this->fetch();
    }

    public function manage()
    {
        return $this->fetch();
    }
    public function one()
    {   
        return $this->fetch();
    }
    
}
