function returnSuccess(info){//成功返回参数
	Showbo.Msg.alert('注册成功!跳转登录页面...');
    setTimeout(function() {
        window.location.href = loginUrl;
    }, 3000);
}
function returnError(info){//失败返回参数
    //判断返回值
    if(info=="用户名不能为空！"){
        $(".errorUserName").html(info).show(500);
    }else if(info=="该用户名已被注册！"){
        $(".errorUserName").html(info).show(500);
    }else if(info=="密码格式不正确,请重新输入！"){
        $(".errorPassword").html(info).show(500);
    }else if(info=="确认密码不正确！"){
        $(".errorRepassword").html(info).show(500);
    }else if(info=="请填写验证码！"){
        $(".errorCaptcha").html(info).show(500);
    }else if(info=="验证码错误！"){
        $(".errorCaptcha").html(info).show(500);
    }else{
        alert("注册失败，请稍后再试！");
    }
}
function validateForm(name,data){
    //判断中文正则表达式
    var reg = new RegExp("[\\u4E00-\\u9FFF]+","g");
    //验证表单数据

	if(name=='username'&&data.length==0){
		$(".errorUserName").html("注册帐号不能为空！").show(500);
		ErrorTotal++;
	}else if(name=='username'&&data.length>0){
        if(name=='username'&&reg.test(data)){
            $(".errorUserName").html("注册帐号不能为中文！").show(500);
            ErrorTotal++;
        }else{
            $(".errorUserName").hide();
        }
    }
    if(name=='password'&&data.length==0){
		$(".errorPassword").html("请输入密码!").show(500);
		ErrorTotal++;
	}else if(name=='password'&&data.length>0){
        if(name=='password'&&data.length>30){
            $(".errorPassword").html("密码长度不正确").show(500);
            ErrorTotal++;
        }else{
            $(".errorPassword").hide();
        }
    }

    if(name=='repassword'&&data.length==0){
		$(".errorRepassword").html("请输入确认密码！").show(500);
		ErrorTotal++;
	}else if(name=='repassword'&&data.length>0){
        if(name=='repassword'&&data!=$("input[name='password']").val()){
            $(".errorRepassword").html("确认密码不正确！").show(500)
        }else{
            $(".errorRepassword").hide();
        }
    }
    if(name=='captcha'&&data.length==0){
		$(".errorCaptcha").html("请输入验证码！").show(500);
		ErrorTotal++;
	}else{
        $(".errorCaptcha").hide();
    }

	return ErrorTotal;
}