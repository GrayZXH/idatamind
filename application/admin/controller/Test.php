<?php
namespace app\admin\controller;
use think\Controller;
use think\facade\Request;
use think\facade\Session;
use app\common\model\Channel as modelChannel;

class Test extends Controller
{
    public function day()
    {
        $jsessionid=get_cookie();
        Session::set('jsessionid',$jsessionid);
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
    public function abc(){
        $jsessionid=get_cookie();
        Session::set('jsessionid',$jsessionid);
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
}
