<?php
namespace app\admin\controller;

use think\Controller;
use think\facade\Session;

class Index extends Common
{
    public function index()
    {
        /*$data = array('cjrq_b' => '2018-7-5','cjrq_e'=>'2018-7-5' ,'page'=>'1','pagesize'=>'15');*/
        print_r(Session::get('jsessionid'));
        
    }
    public function day()
    {
        return $this->fetch();
    }
    public function week()
    {
        return $this->fetch();
    }
    public function month()
    {
        return $this->fetch();
    }
    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
