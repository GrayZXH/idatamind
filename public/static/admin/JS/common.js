/**
 * 提交form表单操作
 */
$("#form-button-submit").click(function(){
    var data = $("#idata-form").serializeArray();
    postData = {};
    $(data).each(function(i){
       postData[this.name] = this.value;
    });
    console.log(postData);
    
});