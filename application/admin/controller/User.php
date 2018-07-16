<?php
namespace app\admin\controller;
use think\Controller;
use app\common\model\User as modelUser;

class User extends Common
{
    public function users()
    {	
        return $this->fetch();
    }

    public function edit()
    {
        return $this->fetch();
    }
    public function one()
    {   
        return $this->fetch();
    }
    
}
