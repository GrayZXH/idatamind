<?php
namespace app\admin\controller;

use think\Controller;
use think\facade\Session;

class Index extends Common
{
    public function index()
    {
        /*$data = array('cjrq_b' => '2018-7-5','cjrq_e'=>'2018-7-5' ,'page'=>'1','pagesize'=>'15');*/
        $cookie=Session::get('jsessionid');
        $data = array('pageSize'=>'15',
                    'list_cjrq'=>'b=2018-07-06,e=2018-07-06',
                    'page'=>'1',
                    'cookie'=>$cookie);
        $rs=get_data($data);
        $rs=$rs['result'];
        //print_r($rs);
        $source = array_column($rs, 'source');
        print_r($source);
        

        
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
    public function source()
    {
        return $this->fetch();
    }
    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
