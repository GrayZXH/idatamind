<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件


/**/

function get_cookie()
{	
	$post = array('online:'=>'pc',
              'account'=>'超级管理员',
              'password'=>'CDjfr2017');
	$url = 'http://www.crmak.com/sp/sys/login';
	// 初始化CURL 
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, $url); 
	// 获取头部信息 
	curl_setopt($ch, CURLOPT_HEADER, 1); 
	// 返回原生的（Raw）输出 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
	//以POST方式提交
	curl_setopt($ch, CURLOPT_POST, 1); 
	//要执行的信息
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
	// 执行并获取返回结果 
	$content = curl_exec($ch); 
	// 关闭CURL 
	curl_close($ch);

	list($header, $body) = explode("\r\n\r\n", $content); 
	preg_match('/\bCookie:.{40}/i', $header, $matches);
	$cookie = $matches[0];
	return $cookie;
}

function get_xs_data($data){

	$pageSize='1';
	$list_dh='';
	$list_status='';
	$list_area='';
	$list_fzrbm='';
	$list_cjrq='';
	$list_keydate='';
	$list_cjrbm='';
	$list_source='';
	$list_type='';
	$list_sex='';
	$searchKey='';
	$name='';
	$tel='';
	$qq='';
	$weixin='';
	$source='';
	$type='';
	$remark='';
	$list_cjr='';
	$page='1';
  	$cookie=Session::get('jsessionid');

  	extract($data);

	$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => "http://www.crmak.com/sp/xs/data",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"pageSize\"\r\n\r\n$pageSize\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"list_dh\"\r\n\r\n$list_dh\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"list_status\"\r\n\r\n$list_status\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"list_area\"\r\n\r\n$list_area\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"list_fzrbm\"\r\n\r\n$list_fzrbm\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"list_cjrq\"\r\n\r\n$list_cjrq\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"list_keydate\"\r\n\r\n$list_keydate\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"list_cjrbm\"\r\n\r\n$list_cjrbm\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"list_source\"\r\n\r\n$list_source\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"list_type\"\r\n\r\n$list_type\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"list_sex\"\r\n\r\n$list_sex\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"searchKey\"\r\n\r\n$searchKey\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"name\"\r\n\r\n$name\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"tel\"\r\n\r\n$tel\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"qq\"\r\n\r\n$qq\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"weixin\"\r\n\r\n$weixin\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"source\"\r\n\r\n$source\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"type\"\r\n\r\n$type\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"remark\"\r\n\r\n$remark\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"list_cjr\"\r\n\r\n$list_cjr\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"page\"\r\n\r\n$page\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
	  CURLOPT_HTTPHEADER => array(
	    "Cache-Control: no-cache",
	    "$cookie",
	    "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW"
	  ),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
	  return "cURL Error #:" . $err;
	} else {
	  $result=json_decode($response,true);
 	  return ($result["total"]);
 	  //return ($result);
	}
}

function get_kh_data($data){
	$pageSize='';
	$list_fl='';
	$list_dh='';
	$list_grade='';
	$list_paidang='';
	$list_lg='';
	$list_lxcs='';
	$list_jdzt='';
	$list_cjrq='';
	$list_yxrq='';
	$list_keydate='';
	$list_xlx='';
	$list_yjjd='';
	$list_cjrbm='';
	$list_wlx='';
	$list_fzrbm='';
	$list_source='';
	$list_type='';
	$list_area='';
	$list_sex='';
	$list_pinyin='';
	$searchKey='';
	$name='';
	$tel='';
	$qq='';
	$weixin='';
	$source='';
	$type='';
	$remark='';
	$list_cjr='';
	$page='';
	$cookie='';

	extract($data);

	$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => "http://www.crmak.com/sp/kh/data",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"pageSize\"\r\n\r\n$pageSize\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"list_fl\"\r\n\r\n$list_fl\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"list_dh\"\r\n\r\n$list_dh\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"list_grade\"\r\n\r\n$list_grade\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"list_paidang\"\r\n\r\n$list_paidang\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"list_lg\"\r\n\r\n$list_lg\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"list_lxcs\"\r\n\r\n$list_lxcs\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"list_jdzt\"\r\n\r\n$list_jdzt\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"list_cjrq\"\r\n\r\n$list_cjrq\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"list_yxrq\"\r\n\r\n$list_yxrq\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"list_keydate\"\r\n\r\n$list_keydate\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"list_xlx\"\r\n\r\n$list_xlx\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"list_yjjd\"\r\n\r\n$list_yjjd\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"list_cjrbm\"\r\n\r\n$list_cjrbm\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"list_wlx\"\r\n\r\n$list_wlx\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"list_fzrbm\"\r\n\r\n$list_fzrbm\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"list_source\"\r\n\r\n$list_source\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"list_type\"\r\n\r\n$list_type\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"list_area\"\r\n\r\n$list_area\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"list_sex\"\r\n\r\n$list_sex\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"list_pinyin\"\r\n\r\n$list_pinyin\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"searchKey\"\r\n\r\n$searchKey\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"name\"\r\n\r\n$name\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"tel\"\r\n\r\n$tel\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"qq\"\r\n\r\n$qq\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"weixin\"\r\n\r\n$weixin\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"source\"\r\n\r\n$source\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"type\"\r\n\r\n$type\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"remark\"\r\n\r\n$remark\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"list_cjr\"\r\n\r\n$list_cjr\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"page\"\r\n\r\n$page\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
	  CURLOPT_HTTPHEADER => array(
	    "Cache-Control: no-cache",
	    "$cookie",
	    "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW"
	  ),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
	  echo "cURL Error #:" . $err;
	} else {
	  return ($result["total"]);
	}


}