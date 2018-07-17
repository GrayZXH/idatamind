<?php
namespace app\admin\controller;

use think\Controller;
use think\facade\Request;
use app\common\model\Channel as modelChannel;


class Channel extends Common
{
    public function index()
    {	
        $list = modelChannel::all();
        if ($list) {
            $this->assign('list',$list);
        }
        //print_r($list);
        return $this->fetch();
    }
    public function add()
    {	
        $code=Request::post('code');
        $cname=Request::post('cname');
        $cgroup=Request::post('cgroup');
        $store=Request::post('store');
        $status=Request::post('status');
        if ($code && $cname && $cgroup && $store && $status) {
            $channel = modelChannel::create([
                'code'  =>  "$code",
                'cname' =>  "$cname",
                'cgroup'  =>  "$cgroup",
                'store'  =>  "$store",
                'status'  =>  "$status"
            ]);

            $rs=$channel->id; // 获取自增ID
            if ($rs) {
                $data = array('status' =>1, 'message'=>'添加成功');
                return json($data);
            }else{
                $data = array('status' =>0, 'message'=>'添加失败');
                return json($data);
            }
        }else{
            $data = array('status' =>0, 'message'=>'信息填写不全');
            return json($data);
        }
        
    }
    public function edit()
    {	
        return $this->fetch();
    }
    public function delete()
    {	
        $id=Request::get('id');
        if ($id) {
           $rs=modelChannel::where('id','=',$id)->delete();
           if ($rs) {
                $data = array('status' =>1, 'message'=>'删除成功');
                return json($data);
            }else{
                $data = array('status' =>0, 'message'=>'删除失败');
                return json($data);
            }
        }else{
            $data = array('status' =>0, 'message'=>'发生错误');
            return json($data);
        }
    }
}
