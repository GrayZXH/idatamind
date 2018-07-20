<?php
namespace app\admin\controller;
use think\Controller;
use think\facade\Request;
use app\common\model\User as modelUser;

class User extends Common
{
    public function users()
    {	
        $users=modelUser::all();
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
