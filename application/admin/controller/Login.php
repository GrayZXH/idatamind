<?php
namespace app\admin\controller;

use think\Controller;
use think\facade\Request;
use app\common\model\User;
use think\facade\Session;


class Login extends Controller
{
    public function index()
    {	
        $session=Session::get('name');
        if ($session) {
            return redirect('admin/Index/index');
        }
        return $this->fetch();
    }
    public function check(){
    	$email=Request::post('email','',FILTER_VALIDATE_EMAIL);
    	$password=Request::post('password');
        if (!$email || !$password) {
            $data = array('status' => 0, 'message'=>'信息填写不完整,请重新输入');
            return json($data);
        }
    	$user = User::where('email', $email)->find();
        $data_passwor=$user->password;
        if ($data_passwor==$password) {
            Session::set('name',$email);
            $jsessionid=get_cookie();
            Session::set('jsessionid',$jsessionid);
            $data = array('status' => 1, 'message'=>'登录成功');
            return json($data);
        }else{
            $data = array('status' => 0, 'message'=>'登录失败');
            return json($data);
        }
    }
}
