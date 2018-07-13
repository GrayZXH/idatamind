var channel={
	add:function(){
    var data = $("#idata-form").serializeArray();
    var url='/admin/Channel/add'
    var postData = {};
    $(data).each(function(){
       postData[this.name] = this.value;
    });
    $.post( url, postData, function(data){
    	if(data.status==0) {
                    $("#msgAlert .modal-title").html('错误提示');
                    $("#msgAlert .modal-body").html(data.message);
                    $("#msgAlert").modal();
                }
                if(data.status==1) {
                   location.reload();
                } 
    }, "json");
	}
}