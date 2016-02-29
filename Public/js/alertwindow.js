var Alerts = new Map(); 
//关闭窗口
 function closeAlert(name,value)
{
var winAlert=getAlert(name);
if(winAlert!=null)
{
winAlert.Tag=value;
winAlert.Close();
}  

}
function setAlertTag(name,value)
{
var winAlert=getAlert(name);
if(winAlert!=null)
{
winAlert.Tag=value;
}  
}
function setAlertLock(name,value)
{
var winAlert=getAlert(name);
if(winAlert!=null)
{
winAlert.Lock=value;
}  
}
function setAlertSize(name,w,h)
{
var iWidth = document.documentElement.clientWidth;  
var iHeight = document.documentElement.clientHeight;  
var winAlert=getAlert(name);
if(winAlert.Lock)
{
return;
}
if(winAlert!=null)
{
if(w!=0){
winAlert.msg.style.width=w+"px";
winAlert.msg.style.left=((iWidth-w)/2)+"px";

document.getElementById("alertWindow"+winAlert.Index).style.width=(w)+"px";
}
if(h!=0)
{
winAlert.msg.style.top=getTopPos((iHeight-h)/2)+"px";
winAlert.msg.style.height=h+"px";
document.getElementById("alertWindow"+winAlert.Index).style.height=(h-24)+"px";
}
}  
}
function setAlertTitle(name,title)
{
var winAlert=getAlert(name);
if(winAlert!=null)
{
document.getElementById("alertWindowTitle"+winAlert.Index).innerHTML = title; 
}  
}
function getAlert(name)
{
if(name!=null)
{
return Alerts.get(name);  
}
else
{
return Alerts.getLast();  
}
}
function AlertWindow() 
{ 

} 
//显示窗口
 AlertWindow.prototype.ShowWindow = function(name,title,fileUrl, w, h)
 {
 var  str="<iframe id=\"alertWindow"+Alerts.size()+"\" src=\""+fileUrl+"\"  name=\"alertWindow"+Alerts.size()+"\"   width=\""+w+"\" height=\""+(h-24)+"\"  marginwidth=\"0\" marginheight=\"0\" frameborder=\"0\" style=\" filter:alpha(opacity=100);  -moz-opacity:1.0;opacity:1;background-color:transparent;\" allowtransparency=\"true\" ></iframe>";
    this.Show(name,title, str, w, h);
 };
 
AlertWindow.prototype.Close= function(){
   this.OnClose();
   document.body.removeChild(this.msg);  
   document.body.removeChild(this.bg);
   Alerts.remove(this.Name);    
};

AlertWindow.prototype.Tag;
AlertWindow.prototype.Name;
AlertWindow.prototype.Index;
AlertWindow.prototype.Lock=false;
AlertWindow.prototype.OnClose= function(){};
AlertWindow.prototype.Show=function(name,title, msg, w, h){  
 this.Name=name;
this.Index=Alerts.size();
Alerts.put(name,this);
 
    var titleheight = "22px"; // 提示窗口标题高度  
    var bordercolor = "none"; // 提示窗口的边框颜色  
    var titlecolor = "#000000"; // 提示窗口的标题颜色  
    var titlebgcolor = "#DBDBDB"; // 提示窗口的标题背景色 
    var bgcolor = "none"; // 提示内容的背景色 
     
    var iWidth = document.documentElement.clientWidth;  
    var iHeight = document.documentElement.clientHeight;   
    var bgObj = document.createElement("div");  
    bgObj.style.cssText = "position:absolute;left:0px;top:0px;width:"+iWidth+"px;height:"+Math.max(document.body.clientHeight, iHeight)+"px;filter:Alpha(Opacity=30);opacity:0.3;background-color:#000000;z-index:101;"; 
    document.body.appendChild(bgObj);  
    this.bg=bgObj;
    
   
    var msgObj=document.createElement("div"); 
    msgObj.style.cssText = "position:absolute;font:11px '宋体';top:"+getTopPos((iHeight-h)/2)+"px;left:"+(iWidth-w)/2+"px;width:"+w+"px;height:"+h+"px;text-align:center;border:1px solid "+bordercolor+";background-color:"+bgcolor+";padding:1px;line-height:22px;z-index:102;"; 
    document.body.appendChild(msgObj); 
      this.msg=msgObj;
    var table = document.createElement("table"); 
    msgObj.appendChild(table); 
    table.style.cssText = "margin:0px;border:0px;padding:0px;"; 
    table.cellSpacing = 0; 
    var tr = table.insertRow(-1); 
    var titleBar = tr.insertCell(-1); 
    titleBar.style.cssText = "display:none;width:70%;height:20px;text-align:left;font:bold 12px '宋体';color:"+titlecolor+";cursor:move;background-color:" + titlebgcolor; 
    titleBar.style.paddingLeft = "10px"; 
    titleBar.setAttribute("id","alertWindowTitle"+this.Index);
    titleBar.innerHTML = title; 
    var moveX = 0; 
    var moveY = 0; 
    var moveTop = 0; 
    var moveLeft = 0; 
    var moveable = false; 
    var docMouseMoveEvent = document.onmousemove; 
    var docMouseUpEvent = document.onmouseup; 
    titleBar.onmousedown = function() { 
        var evt = getEvent(); 
        moveable = true;  
        moveX = evt.clientX; 
        moveY = evt.clientY; 
        moveTop = parseInt(msgObj.style.top); 
        moveLeft = parseInt(msgObj.style.left); 
         
        document.onmousemove = function() { 
            if (moveable) { 
                var evt = getEvent(); 
                var x = moveLeft + evt.clientX - moveX; 
                var y = moveTop + evt.clientY - moveY; 
                if ( x > 0 &&( x + w < iWidth) && y > 0 && (y + h < iHeight) ) { 
                    msgObj.style.left = x + "px"; 
                    msgObj.style.top = y + "px"; 
                } 
            }     
        }; 
        document.onmouseup = function () {  
            if (moveable) {  
                document.onmousemove = docMouseMoveEvent; 
                document.onmouseup = docMouseUpEvent; 
                moveable = false;  
                moveX = 0; 
                moveY = 0; 
                moveTop = 0; 
                moveLeft = 0; 
            }  
        }; 
    } 
  
    var closeBtn = tr.insertCell(-1); 
    closeBtn.style.cssText = "display:none;cursor:pointer; width:30%;height:20px;text-align:right;background-color:" + titlebgcolor; 
    closeBtn.innerHTML = "<span style='font-size:15pt; color:"+titlecolor+";'>×</span>"; 
    closeBtn.onclick = function(){  
   var winAlert=getAlert(name);
if(winAlert!=null)
{
winAlert.Close();
}  
    }  
    var msgBox = table.insertRow(-1).insertCell(-1); 
    msgBox.style.cssText = "font:10pt '宋体';margin:0px;border:0px;padding:0px;"; 
   msgBox.colSpan  = 2; 
   // msgBox.rowSpan  = 0;
    msgBox.innerHTML = msg; 
     
    // 获得事件Event对象，用于兼容IE和FireFox 
    function getEvent() { 
        return window.event || arguments.callee.caller.arguments[0]; 
    } 
} ; 

function getTopPos(h) {
if (window.innerHeight) {
pos = window.pageYOffset
}
else if (document.documentElement && document.documentElement.scrollTop) {
pos = document.documentElement.scrollTop
}
else if (document.body) {
pos = document.body.scrollTop;
}
return pos+h;
}