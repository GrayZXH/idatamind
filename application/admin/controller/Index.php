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
    public function test(){
        //$jsessionid=get_cookie();
        //Session::set('jsessionid',$jsessionid);
        $area=Request::get('area','cd');
        $day='b='.date("Y-m-d").',e='.date("Y-m-d");
        $date=Request::get('date',$day);
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
        $data = array('list_cjrq' => $date,'pageSize'=>10000);
        $rs=get_kh_data($data)['result'];
        
        $result = array();
        foreach ($source as  $qd) {
            foreach ($rs as $value) {
                if ($qd==$value['source']) {
                    switch ($value['grade']) {
                        case 'A类 一个月':
                            if (isset($result[$qd]['a'])) {
                                $result[$qd]['a']+=1;
                            }else{
                                $result[$qd]['a']=1;
                            }
                            break;
                        case 'B类 两个月':
                            if (isset($result[$qd]['b'])) {
                                $result[$qd]['b']+=1;
                            }else{
                                $result[$qd]['b']=1;
                            }
                            break;
                        case 'C类 三个月':
                            if (isset($result[$qd]['c'])) {
                                $result[$qd]['c']+=1;
                            }else{
                                $result[$qd]['c']=1;
                            }
                            break;
                        case 'D类 半年内拍':
                            if (isset($result[$qd]['d'])) {
                                $result[$qd]['d']+=1;
                            }else{
                                $result[$qd]['d']=1;
                            }
                            break;
                        case 'E类 一年内拍':
                            if (isset($result[$qd]['e'])) {
                                $result[$qd]['e']+=1;
                            }else{
                                $result[$qd]['e']=1;
                            }
                            break;
                        case 'F类 两年内拍':
                            if (isset($result[$qd]['f'])) {
                                $result[$qd]['f']+=1;
                            }else{
                                $result[$qd]['f']=1;
                            }
                            break;
                        default:
                            if (isset($result[$qd]['z'])) {
                                $result[$qd]['z']+=1;
                            }else{
                                $result[$qd]['z']=1;
                            }
                            break;
                    }
                }
            }
            if (!isset($result[$qd])) {
                $result[$qd]['a']=0;
                $result[$qd]['b']=0;
                $result[$qd]['c']=0;
                $result[$qd]['d']=0;
                $result[$qd]['e']=0;
                $result[$qd]['f']=0;
                $result[$qd]['z']=0;
            }
        }

        //print_r($result);
        





        $this->assign('area',$area);
        $this->assign('day',$date);
        $this->assign('result',$result);
        return $this->fetch();
    }
    public function week()
    {   
        $area=Request::get('area','cd');
        $day='b='.date("Y-m-d").',e='.date("Y-m-d");
        $date=Request::get('date',$day);
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
        $data = array('list_cjrq' => $date,'pageSize'=>10000);
        $rs=get_kh_data($data)['result'];
        
        $result = array();
        foreach ($source as  $qd) {
            foreach ($rs as $value) {
                if ($qd==$value['source']) {
                    switch ($value['grade']) {
                        case 'A类 一个月':
                            if (isset($result[$qd]['a'])) {
                                $result[$qd]['a']+=1;
                            }else{
                                $result[$qd]['a']=1;
                            }
                            break;
                        case 'B类 两个月':
                            if (isset($result[$qd]['b'])) {
                                $result[$qd]['b']+=1;
                            }else{
                                $result[$qd]['b']=1;
                            }
                            break;
                        case 'C类 三个月':
                            if (isset($result[$qd]['c'])) {
                                $result[$qd]['c']+=1;
                            }else{
                                $result[$qd]['c']=1;
                            }
                            break;
                        case 'D类 半年内拍':
                            if (isset($result[$qd]['d'])) {
                                $result[$qd]['d']+=1;
                            }else{
                                $result[$qd]['d']=1;
                            }
                            break;
                        case 'E类 一年内拍':
                            if (isset($result[$qd]['e'])) {
                                $result[$qd]['e']+=1;
                            }else{
                                $result[$qd]['e']=1;
                            }
                            break;
                        case 'F类 两年内拍':
                            if (isset($result[$qd]['f'])) {
                                $result[$qd]['f']+=1;
                            }else{
                                $result[$qd]['f']=1;
                            }
                            break;
                        default:
                            if (isset($result[$qd]['z'])) {
                                $result[$qd]['z']+=1;
                            }else{
                                $result[$qd]['z']=1;
                            }
                            break;
                    }
                }
            }
            if (!isset($result[$qd])) {
                $result[$qd]['a']=0;
                $result[$qd]['b']=0;
                $result[$qd]['c']=0;
                $result[$qd]['d']=0;
                $result[$qd]['e']=0;
                $result[$qd]['f']=0;
                $result[$qd]['z']=0;
            }
        }

        //print_r($result);
        





        $this->assign('area',$area);
        $this->assign('day',$date);
        $this->assign('result',$result);
        return $this->fetch();
    }
    public function daydetail()
    {
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
        
        $date='b='.$day.',e='.$day;
        $data = array('list_cjrq' => $date,'pageSize'=>1000);
        $rs=get_xs_data($data)['result'];
        $result='';
        foreach ($source as  $qd) {
            foreach ($rs as $value) {
                if ($qd==$value['source']) {
                    if (isset($result[$qd]['hq'])) {
                        $result[$qd]['hq']+=1;
                    }else{
                        $result[$qd]['hq']=1;
                    }
                    if ($value['status']=='转为客户') {
                        if (isset($result[$qd]['yx'])) {
                            $result[$qd]['yx']+=1;
                        }else{
                            $result[$qd]['yx']=1;
                        }
                    }
                    if ($value['status']=='无效') {
                        if (isset($result[$qd]['wx'])) {
                            $result[$qd]['wx']+=1;
                        }else{
                            $result[$qd]['wx']=1;
                        }
                    }
                }
            }
            if (!isset($result[$qd])) {
                $result[$qd]['hq']=0;
                $result[$qd]['yx']=0;
                $result[$qd]['wx']=0;
            }
        }


        
        $this->assign('area',$area);
        $this->assign('day',$day);
        $this->assign('result',$result);
        

        return $this->fetch();
    }

    public function source()
    {   
        //$date='b='.Request::get('b',date("Y-m-d")).',e='.Request::get('e',date("Y-m-d"));
        $date='b='.Request::get('day',date("Y-m-d")).',e='.Request::get('day',date("Y-m-d"));
        //$date='b=2018-07-26,e=2018-07-31';
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

        $source=modelChannel::where('status','可用')->column('code');
        $hq = array();
        $wx = array();
        if ($source) {
            $this->assign('source',$source);
            foreach ($source as $qd) {
                $datahq = array('list_cjrq' => $date, 'list_source'=> $qd);
                $datawx = array('list_cjrq' => $date, 'list_source'=> $qd, 'list_status'=>"无效");
                $hq[$qd]=get_xs_data($datahq)['total'];
                $wx[$qd]=get_xs_data($datawx)['total'];
            }
        }

        //$date='b='.date("Y-m-d").',e='.date("Y-m-d");
        $datakh = array('list_cjrq'=>$date,'pageSize'=>6000);
        $kh=get_kh_data($datakh);
        $num=$kh['total'];//转为客户的总数
        if ($num>6000) {
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
