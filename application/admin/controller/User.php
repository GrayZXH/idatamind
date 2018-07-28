<?php
namespace app\admin\controller;
use think\Controller;
use think\facade\Request;
use think\facade\Session;
use app\common\model\User as modelUser;
use app\common\model\Selectoptions;
use app\common\model\Channel;
use app\common\model\Channelowner;

class User extends Common
{
    public function users()
    {	
        $users=modelUser::where('id','>',1)->paginate(20);
        if ($users) {
            $this->assign('users',$users);
        }
        return $this->fetch();
    }

    public function add()
    {   
        $username=Request::post('username');
        $password=Request::post('password');
        $ugroup=Request::post('ugroup');
        $status=Request::post('status');
        $role=Request::post('role');

        //$data = array('username' => $username,'password'=>$password,'ugroup'=>$ugroup,'status'=>$status,'role'=>$role );
        //return json($data);
        if ($username && $password && $ugroup && $status && $role) {
            $user = modelUser::create([
                'username'  =>  "$username",
                'password' =>  "$password",
                'ugroup'  =>  "$ugroup",
                'role'  =>  "$role",
                'status'  =>  "$status"
            ]);

            $rs=$user->id; // 获取自增ID
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

        //return $this->fetch();
    }

    public function edit()
    {   
        $id=Request::get('id');
        if ($id) {
            $user=modelUser::where('id','=',$id)->find();
            if ($user) {
                $select['user_group']=Selectoptions::where('user_group','<>',null)->column('user_group');
                $select['user_status']=Selectoptions::where('user_status','<>',null)->column('user_status');
                $select['user_role']=Selectoptions::where('user_role','<>',null)->column('user_role');
                $owner = Channelowner::where('uid','=',$id)->column('code');//获取此用户拥有的所有渠道
                $this->assign('owner',$owner);
            }else{
                $this->redirect('admin/User/users');
                //$data = array('status' =>0, 'message'=>'用户不存在');
                //return json($data);
            }
        }else{
            $this->redirect('admin/User/users');
        }

        $action=Request::post('action');
        if ($action) {
            switch ($action) {
                case 'updateuser':
                    # code...
                    break;

                case 'editchannel':
                        $channelstr=implode(",",$_POST['channel'];);
                    }

                    break;

                default:
                    # code...
                    break;
            }
        }
        
        $channel=Channel::where('status','=','可用')->column('code');//获取系统中所有可用的渠道
        $this->assign('channel',$channel);
        $this->assign('select',$select);
        $this->assign('user',$user);
        return $this->fetch();
    }
    public function delete()
    {   
        $id=Request::get('id');
        if ($id) {
           $rs=modelUser::where('id','=',$id)->delete();
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

    public function one()
    {
        return $this->fetch();
    }
    
}
