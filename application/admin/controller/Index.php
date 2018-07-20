<?php
namespace app\admin\controller;

use think\Controller;
use think\facade\Request;
use think\facade\Session;
use app\common\model\Channel as modelChannel;

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
        $date='b='.date("Y-m-d").',e='.date("Y-m-d");
        // 获取所有渠道代码
        $source=modelChannel::where('status','可用')->column('code');
        //print_r($source);
        foreach ($source as $s) {
            $data[$s] = array('list_cjrq'=>$date,'list_source'=> "$s");
            $hq[$s]=get_xs_data($data[$s]);
        }
        foreach ($source as $s) {
            $data[$s] = array('list_cjrq'=>$date,'list_source'=> "$s",'list_status'=>'转为客户');
            $kh[$s]=get_xs_data($data[$s]);
        }
        print_r($hq);
        echo "<br>";
        print_r($kh);
        //return $this->fetch();
    }
    public function week()
    {
        $date='b='.Request::get('b',date("Y-m-d")).',e='.Request::get('e',date("Y-m-d"));

        $source = array('J1','J2','J3','J4','J5','J6','J7','J8','J9' );

        $num = count($source);
        for ($i=0; $i < $num; $i++) { 
            $data[$i]=array('list_cjrq'=>$date,'list_source'=> $source[$i]);
            $hq[$i]=get_xs_data($data[$i]);
        }

        var_dump($hq);
        //$this->assign('source',$source);
        //$this->assign('hq',$hq);




        //return $this->fetch();
    }
    public function month()
    {
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
        //$date='b='.Request::get('b',date("Y-m-d")).',e='.Request::get('e',date("Y-m-d"));
        $date='b='.Request::get('day',date("Y-m-d")).',e='.Request::get('day',date("Y-m-d"));
        $day=Request::get('day',date("Y-m-d"));
        $area=Request::get('area','cd');
        switch ($area) {
            case 'cd':
                $source = modelChannel::where([
                    ['store','=','成都'],
                    ['status','=','可用']
                ])->column('code');
                break;
            case 'ya':
                $source = modelChannel::where([
                    ['store','=','雅安'],
                    ['status','=','可用']
                ])->column('code');
                break;
            case 'ms':
                $source = modelChannel::where([
                    ['store','=','眉山'],
                    ['status','=','可用']
                ])->column('code');
                break;

            default:
                $source = modelChannel::where([
                    ['store','=','成都'],
                    ['status','=','可用']
                ])->column('code');
                break;
        }

        //$source=modelChannel::where('status','可用')->column('code');
        $hq = array();
        $wx = array();
        if ($source) {
            $this->assign('source',$source);
            foreach ($source as $qd) {
                $datahq = array('list_cjrq' => $date, 'list_source'=> $qd);
                $datawx = array('list_cjrq' => $date, 'list_source'=> $qd, 'list_status'=>"无效");
                $hq[$qd]=get_xs_data($datahq);
                $wx[$qd]=get_xs_data($datawx);
            }
        }

        //$date='b='.date("Y-m-d").',e='.date("Y-m-d");
        $datakh = array('list_cjrq'=>$date,'pageSize'=>2000);
        $kh=get_kh_data($datakh);
        $num=$kh['total'];//转为客户的总数
        if ($num>2000) {
            $warning='总数据量为：'.$num.'现在展示的数据不准确，请手动查询';
            $this->assign('warning',$warning);
        }

        $abc = array();
        $sum = array();//各渠道有效的个数
        $khabc=$kh['result'];
        $result = array();
        if ($num>0) {
            foreach ($source as $v) {
                for ($i=0; $i < $num; $i++) { 
                    if ($v==$khabc[$i]['source']) {
                        if (isset($sum[$v])) {
                            $sum[$v]+=1;
                        }else{
                            $sum[$v]=1;
                        }
                        $abc[$v][$i]=$khabc[$i]['grade']?$khabc[$i]['grade']:'未填';
                    }else{
                        $abc[$v][$i]=0;
                    }
                }
                $result[$v]=array_count_values($abc[$v]);
            }
        }
        //print_r($kh);
        //echo "<br>";
        //print_r($result);
        $this->assign('day',$day);
        $this->assign('hq',$hq);
        $this->assign('wx',$wx);
        $this->assign('sum',$sum);
        $this->assign('result',$result);
        
        return $this->fetch();
    }
    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
