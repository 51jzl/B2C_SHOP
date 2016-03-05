function returnSuccess(info){//成功返回参数
	/*window.location.href=*/
	alert(info);
}
function returnError(info){//失败返回参数
	alert(info);
}
function validateForm(name,data){//验证表单数据
	if(name=='username'&&data.length==0){
		$(".errorUserName").html("请输入手机号码！");
		ErrorTotal++;
	}else if(name=='password'&&data.length==0){
		$(".errorPassword").html("请输入密码！");
		ErrorTotal++;
	}else if(name=='repassword'&&data.length==0){
		$(".errorRepass").html("请输入确认密码！");
		ErrorTotal++;
	}else if(name=='captcha'&&data.length==0){
		$(".errorCaptcha").html("请输入验证码！");
		ErrorTotal++;
	}
	return ErrorTotal;
}