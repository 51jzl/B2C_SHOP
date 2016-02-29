function getFocus(obj)  
{
obj.focus();
}
function getobj(ids) {
return document.getElementById(ids);
}
function getobjs(name) {
return document.getElementsByName(name);
}
function getobjn(name,j) {
return document.getElementsByName(name)[j];
}
function addTextClass(n,o,text){
var textName="text"+o.name;
getobj(textName).className=n+' '+getobj(textName).className;
getobj(textName).innerHTML = text;
getFocus(o);
}
function ajaxUserName(o,path){
var un=o.value;
if (un.length == 0) {
addTextClass('red_a',o,"用户名不能为空!");
return false;
}
else{

var reg = new RegExp("^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$");
if (!reg.test(un)) {
addTextClass('red_a',o,"请填写有效EMAIL作为用户");
return false;
}
else{

var boo=true;
var url = path + "?xmls=lib/register.xmls&roodm=" + Math.random();
    var _data = {userName: un,method: 'username'};
    $.ajax({
        type: "GET", url: url, data: _data, async: false, success: function(response) {
        if(response!="1"){
        addTextClass('red_a',o,'此用户名已被注册');
        boo= false;
        }
        else{
        addTextClass('',o,'');
        boo= true;
        }
        }
    });
    return boo;
    }
}
}


function checkUserName(o){
var un=o.value;
if (un.length == 0) {
addTextClass('red_a',o,"用户名不能为空!");
return false;
}
if(un.indexOf('@')>0){
var reg = new RegExp("^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$");
if (!reg.test(un)) {
addTextClass('red_a',o,"E-mail格式不正确!");
return false;
}
}
else{
var reg = /(^(13[3-9]|15[0|1|3|6|7|8|9]|18[5|6|8|9])\d{8}$)/;
    if(un.length != 11 || un.match(/^(-|\+)?\d+$/) == null){
    addTextClass('red_a',o,"手机格式不正确!");
    return false;
    }
}
return true;
}


function checkPassWord(o){
var un=o.value;
if (un.length == 0) {
addTextClass('red_a',o,"密码不能为空!");
return false;
}
else if(un.length<6 || un.length>15){
addTextClass('red_a',o,"密码必须为六位至十五位字符!");
return false;
}
else{
addTextClass('',o,"");
return true;
}
}

function checkAffirmPwd(o){
var un=o.value;
if (un.length == 0) {
addTextClass('red_a',o,"确认密码不能为空!");
return false;
}
else {
    if (un != getobj("Password").value) {
    addTextClass('red_a',o,"两次输入密码不一致!");
    return false;
    }
    else {
    addTextClass('',o,"");
    return true;
    }

}
}
function checkEmail(o){
var reg = new RegExp("^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$");
var un=o.value;
if (un.length == 0) {
    addTextClass('red_a',o,"EMAIL不能为空!");
    getFocus(o);
    return false;
}
else {
    if (!reg.test(un)) {
    addTextClass('red_a',o,"请填写有效EMAIL作为用户!");
    getFocus(o);
    return false;
    }
    else {
    addTextClass('',o,"");
    return true;
    }
}
}

function checkProvince(o,txt){
var un=o.value;
if (un == "0|0") {
    addTextClass('red_a',o,txt);
    getFocus(o);
    return false;
}
else{
addTextClass('red_a',o,"");
return true;
}

}
function checkAddress(o){
var un=o.value;
if (un.length == 0) {
    addTextClass('red_a',o,"请填写街道地址!");
    getFocus(o);
    return false;
}
else{
addTextClass('red_a',o,"");
return true;
}
}

function notEmpty(o,txt){
var un=o.value;
if (un.length == 0) {
    addTextClass('red_a',o,txt);
    getFocus(o);
    return false;
}
else{
addTextClass('red_a',o,"");
return true;
}
}
function notEmpty0(o,txt){
var un=o.value;
if (un.length == 0 ||un==0) {
    addTextClass('red_a',o,txt);
    getFocus(o);
    return false;
}
else{
addTextClass('red_a',o,"");
return true;
}
}
function checkTorM(i,o){
var un=o.value;
var un2=i.value;
if (un.length == 0 && un2.length == 0) {
    addTextClass('red_a',i,"手机和电话至少填写一个!");
    getFocus(i);
    return false;
}
else{
addTextClass('red_a',i,"");
return true;
}
}

function checkTel(o){
var un=o.value;
if (un.length == 0) {
addTextClass('red_a',o,"手机不能为空!");
return false;
}

var reg = /(^(13[3-9]|15[0|1|3|6|7|8|9]|18[5|6|8|9])\d{8}$)/;
    if(un.length != 11 || un.match(/^(-|\+)?\d+$/) == null){
    addTextClass('red_a',o,"手机格式不正确!");
    return false;
    }

return true;
}

function checkChecked(o){
return $(o).is(':checked');
}

function checkRegister(form,path){
var end=true;
end=checkChecked(form.Clause)? end:false;
end=checkAffirmPwd(form.AffirmPwd)? end:false;
end=checkPassWord(form.Password)? end:false;
end=ajaxUserName(form.UserName,path)? end:false;

return end;
}

function checkLogin(form){
var end=true;
end=checkPassWord(form.Password)? end:false;
end=checkUserName(form.UserName)? end:false;
return end;
}




function checkInfo(form){

var end=true;
end=checkEmail(form.Email)? end:false;
end=checkTorM(form.Mobile,form.Tel)? end:false;
end=notEmpty0(getobj("CityID"),"请填写省(市)、区!")? end:false;
end=notEmpty(form.Address,'详细地址不能为空!')? end:false;
return end;

}



function checkInfor2(form){
var end=true;
end=checkEmail(form.Mail)? end:false;
end=checkTel(form.Mobile)? end:false;
end=notEmpty(form.Fullname,'姓名不能为空!')? end:false;
return end;

}


function checkPW(form){
var end=true;
end=checkAffirmPwd(form.AffirmPwd)? end:false;
end=checkPassWord(form.Password)? end:false;
end=checkPassWord(form.ysPassword)? end:false;
return end;

}

