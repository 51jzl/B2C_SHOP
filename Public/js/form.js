﻿var ErrorTotal=0;//默认返回0
//将form转为AJAX提交
function ajaxSubmit(form, result) {
	var data = getFormJson(form);//调用方法函数
	if(ErrorTotal>0){//返回多少个错误
		ErrorTotal=0;//默认赋值0
		return false;
	}//验证表单数据
	    $.ajax({
	        type: form.method,//类型
	        url: form.action,//路径地址
	        data: data,//参数值
	        async: true,//false表示同步true标识异步
	        dataType: "json",//返回类型
	        success: result,//返回结果
	        error:function(e){//报错返回机制
	        	alert('加载失败!');
	        }
	    })
}
//将form中的文本转换为键值对。
function getFormJson(form) {
	var o = {};
	var a = $(form).serializeArray();
	$.each(a, function () {
		if (o[this.name] !== undefined) {
			if (!o[this.name].push	) {
				o[this.name] = [o[this.name]];
			}
			o[this.name].push(this.value || '');
		} else {
			o[this.name] = this.value || '';
		}
		ErrorTotal=validateForm(this.name,this.value);//定义方法前端判断数据
	});
	return o;
}
//调用form表单执行
$(function(){
	$('.form').bind('submit', function(){
		ajaxSubmit(this, function(data){
			if(data.status=='ok'){
				returnSuccess(data.info);//成功返回参数
			}else{
				returnError(data.info);//失败返回参数
			}
		});
		return false;
	});
})