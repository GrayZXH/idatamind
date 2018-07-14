<?php
namespace app\admin\controller;
use think\Controller;
use think\facade\Request;

class Test extends Controller
{
    public function index()
    {	
    	$id=Request::get('id');
        echo "$id";
    }
    
}
