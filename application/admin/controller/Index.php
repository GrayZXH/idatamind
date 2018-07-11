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
        $data = array('list_cjrq'=>'b=2018-07-06,e=2018-07-06');
        $rs=get_xs_data($data);
        //$rs=$rs['result'];
        print_r($rs);
        //$source = array_column($rs, 'source');
        //print_r($source);
        

        
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
        $cookie=Session::get('jsessionid');
        $data1 = array('list_cjrq'=>'b=2018-06-01,e=2018-06-30',
                       'list_source'=> 'J1');
        $data2 = array('list_cjrq'=>'b=2018-06-01,e=2018-06-30',
                       'list_source'=> 'J2');
        $j1=get_xs_data($data1);
        $j2=get_xs_data($data2);
        $source['j1'] = $j1;
        $source['j2'] = $j2;
        $this->assign('source',$source);
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
