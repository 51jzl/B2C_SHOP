function RegCheck(RegForm){
    if(RegForm.userName.value == ""){
        alert("用户名不能为空");
        RegForm.userName.focus;
        return(false);
    }
    if (RegForm.password.value == ""){
        alert("密码不能为空");
        return (false);
    }
    if (RegForm.repass.value != RegForm.password.value){
        alert("两次密码不一致");
        return(false);
    }
}

function ajaxRegCheck(RegForm) {
    var xmlhttp;
    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    }
    else {// code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

}

function getFocus(obj) {
    obj.focus();
}
function getobj(ids) {
    return document.getElementById(ids);
}
function getobjs(name) {
    return document.getElementsByName(name);
}
function getobjn(name, j) {
    return document.getElementsByName(name)[j];
}
function addTextClass(n, o, text) {
    var textName = "text" + o.name;
    getobj(textName).className = n + ' ' + getobj(textName).className;
    getobj(textName).innerHTML = text;
    getFocus(o);
}
function ajaxUserName(o, path) {
    var un = o.value;
    if (un.length == 0) {
        addTextClass('red_a', o, "�û�������Ϊ��!");
        return false;
    }
    else {

        var reg = new RegExp("^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$");
        if (!reg.test(un)) {
            addTextClass('red_a', o, "����д��ЧEMAIL��Ϊ�û�");
            return false;
        }
        else {

            var boo = true;
            var url = path + "?xmls=lib/register.xmls&roodm=" + Math.random();
            var _data = {userName: un, method: 'username'};
            $.ajax({
                type: "GET", url: url, data: _data, async: false, success: function (response) {
                    if (response != "1") {
                        addTextClass('red_a', o, '���û����ѱ�ע��');
                        boo = false;
                    }
                    else {
                        addTextClass('', o, '');
                        boo = true;
                    }
                }
            });
            return boo;
        }
    }
}


function checkUserName(o) {
    var un = o.value;
    if (un.length == 0) {
        addTextClass('red_a', o, "�û�������Ϊ��!");
        return false;
    }
    if (un.indexOf('@') > 0) {
        var reg = new RegExp("^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$");
        if (!reg.test(un)) {
            addTextClass('red_a', o, "E-mail��ʽ����ȷ!");
            return false;
        }
    }
    else {
        var reg = /(^(13[3-9]|15[0|1|3|6|7|8|9]|18[5|6|8|9])\d{8}$)/;
        if (un.length != 11 || un.match(/^(-|\+)?\d+$/) == null) {
            addTextClass('red_a', o, "�ֻ���ʽ����ȷ!");
            return false;
        }
    }
    return true;
}


function checkPassWord(o) {
    var un = o.value;
    if (un.length == 0) {
        addTextClass('red_a', o, "���벻��Ϊ��!");
        return false;
    }
    else if (un.length < 6 || un.length > 15) {
        addTextClass('red_a', o, "�������Ϊ��λ��ʮ��λ�ַ�!");
        return false;
    }
    else {
        addTextClass('', o, "");
        return true;
    }
}

function checkAffirmPwd(o) {
    var un = o.value;
    if (un.length == 0) {
        addTextClass('red_a', o, "ȷ�����벻��Ϊ��!");
        return false;
    }
    else {
        if (un != getobj("Password").value) {
            addTextClass('red_a', o, "�����������벻һ��!");
            return false;
        }
        else {
            addTextClass('', o, "");
            return true;
        }

    }
}
function checkEmail(o) {
    var reg = new RegExp("^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$");
    var un = o.value;
    if (un.length == 0) {
        addTextClass('red_a', o, "EMAIL����Ϊ��!");
        getFocus(o);
        return false;
    }
    else {
        if (!reg.test(un)) {
            addTextClass('red_a', o, "����д��ЧEMAIL��Ϊ�û�!");
            getFocus(o);
            return false;
        }
        else {
            addTextClass('', o, "");
            return true;
        }
    }
}

function checkProvince(o, txt) {
    var un = o.value;
    if (un == "0|0") {
        addTextClass('red_a', o, txt);
        getFocus(o);
        return false;
    }
    else {
        addTextClass('red_a', o, "");
        return true;
    }

}
function checkAddress(o) {
    var un = o.value;
    if (un.length == 0) {
        addTextClass('red_a', o, "����д�ֵ���ַ!");
        getFocus(o);
        return false;
    }
    else {
        addTextClass('red_a', o, "");
        return true;
    }
}

function notEmpty(o, txt) {
    var un = o.value;
    if (un.length == 0) {
        addTextClass('red_a', o, txt);
        getFocus(o);
        return false;
    }
    else {
        addTextClass('red_a', o, "");
        return true;
    }
}
function notEmpty0(o, txt) {
    var un = o.value;
    if (un.length == 0 || un == 0) {
        addTextClass('red_a', o, txt);
        getFocus(o);
        return false;
    }
    else {
        addTextClass('red_a', o, "");
        return true;
    }
}
function checkTorM(i, o) {
    var un = o.value;
    var un2 = i.value;
    if (un.length == 0 && un2.length == 0) {
        addTextClass('red_a', i, "�ֻ��͵绰������дһ��!");
        getFocus(i);
        return false;
    }
    else {
        addTextClass('red_a', i, "");
        return true;
    }
}

function checkTel(o) {
    var un = o.value;
    if (un.length == 0) {
        addTextClass('red_a', o, "�ֻ�����Ϊ��!");
        return false;
    }

    var reg = /(^(13[3-9]|15[0|1|3|6|7|8|9]|18[5|6|8|9])\d{8}$)/;
    if (un.length != 11 || un.match(/^(-|\+)?\d+$/) == null) {
        addTextClass('red_a', o, "�ֻ���ʽ����ȷ!");
        return false;
    }

    return true;
}

function checkChecked(o) {
    return $(o).is(':checked');
}

function checkRegister(form, path) {
    var end = true;
    end = checkChecked(form.Clause) ? end : false;
    end = checkAffirmPwd(form.AffirmPwd) ? end : false;
    end = checkPassWord(form.Password) ? end : false;
    end = ajaxUserName(form.UserName, path) ? end : false;

    return end;
}

function checkLogin(form) {
    var end = true;
    end = checkPassWord(form.Password) ? end : false;
    end = checkUserName(form.UserName) ? end : false;
    return end;
}


function checkInfo(form) {

    var end = true;
    end = checkEmail(form.Email) ? end : false;
    end = checkTorM(form.Mobile, form.Tel) ? end : false;
    end = notEmpty0(getobj("CityID"), "����дʡ(��)����!") ? end : false;
    end = notEmpty(form.Address, '��ϸ��ַ����Ϊ��!') ? end : false;
    return end;

}


function checkInfor2(form) {
    var end = true;
    end = checkEmail(form.Mail) ? end : false;
    end = checkTel(form.Mobile) ? end : false;
    end = notEmpty(form.Fullname, '��������Ϊ��!') ? end : false;
    return end;

}


function checkPW(form) {
    var end = true;
    end = checkAffirmPwd(form.AffirmPwd) ? end : false;
    end = checkPassWord(form.Password) ? end : false;
    end = checkPassWord(form.ysPassword) ? end : false;
    return end;

}

