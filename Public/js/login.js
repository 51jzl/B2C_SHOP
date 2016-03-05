function returnSuccess(info){//成功返回参数
	window.location.href=successUrl;
}
function returnError(info){//失败返回参数
	showAlert(info)
}
function validateForm(name,data){//验证表单数据
	if(name=='username'&&data.length==0){
		showAlert('请输入手机号码');
		ErrorTotal++;
	}else if(name=='password'&&data.length==0){
		showAlert('请输入密码');
		ErrorTotal++;
	}
	return ErrorTotal;
}