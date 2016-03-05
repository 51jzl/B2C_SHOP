function returnSuccess(info){//成功返回参数
	/*window.location.href=successUrl;*/
    alert(info);
}
function returnError(info){//失败返回参数
    $(".errorLogin").html(info);
}
function validateForm(name,data){//验证表单数据
	var reg = new RegExp("[\\u4E00-\\u9FFF]+","g");
	//验证表单数据

	if(name=='username'&&data.length==0){
		$(".errorLogin").html("帐号不能为空！").show(500);
		ErrorTotal++;
	}else if(name=='username'&&data.length>0){
		if(name=='username'&&reg.test(data)){
			$(".errorLogin").html("帐号输入错误！").show(500);
			ErrorTotal++;
		}else{
			$(".errorLogin").hide();
		}
	}
	if(name=='password'&&data.length==0){
		$(".errorLogin").html("请输入密码！").show(500);
		ErrorTotal++;
	}else{
		$(".errorLogin").hide();
	}
	return ErrorTotal;
}