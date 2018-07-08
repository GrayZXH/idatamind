var login={
	check:function(){
		var email=$("#email").val();
		var password=$("#password").val();
		var data={email:email,password:password}; 
		$.post(url,data,function(data){
			if (data.status=='1') {
				window.location.replace("/");
			}
			if (data.status=='0') {
				alert(data.message);
			}
		},'json'); 
	}
}