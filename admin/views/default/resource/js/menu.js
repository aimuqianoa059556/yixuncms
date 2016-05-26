//点击时收缩菜单
function domenu(menuTitleobj, menuListId){
	var listObj=document.getElementById(menuListId);
	if(listObj.style.display=="none"){
		listObj.style.display="";
		menuTitleobj.className=" ul_down";
	}else{ 
		listObj.style.display="none";
		menuTitleobj.className=" ul_up";
	}
}
	//设置分类隐藏和显示
	function dis(obj,id){
		var aj=Ajax();
		if(ieff(obj)=="显示"){
			aj.get(url+"/dis/con/0/id/"+id);
			ieff(obj,"隐藏");
			obj.style.backgroundColor="#ccc";
		}else if(ieff(obj)=="隐藏"){
			aj.get(url+"/dis/con/1/id/"+id);
			ieff(obj,"显示");
			obj.style.backgroundColor="";
		}
	}
	
//IE和FF判定
function ieff(obj,value){
	if(document.all){
		if(typeof(value)=="undefined")
			return obj.innerText;
		else
			obj.innerText=value;
	}else{
		if(typeof(value)=="undefined")
			return obj.textContent;
		else
			obj.textContent=value;
	}
}
	//获取父标记为li的列表
	function getParent(obj){
		while(true){
			if(obj.parentNode.nodeName=="LI"){
				return obj.parentNode;
			}else{
				obj=obj.parentNode;
			}
		}
	}
//多选框处理，全选、反选、全不选
var checkall=document.getElementsByName("id[]");
	function setBg(){
		for(var i=0; i<checkall.length; i++)
		{
			if(checkall[i].checked)
			{
				getParent(checkall[i]).style.backgroundColor="#D3EDFA";
			}else
			{
				getParent(checkall[i]).style.backgroundColor="";
			}
		}
	}
onload=function(){
	if(checkall.length > 0) {
		for(var i=0; i<checkall.length; i++)
		{
			checkall[i].onclick=function(){
				setBg();		
			}
		}
	}
}
	function select(){
		for(var i=0; i<checkall.length; i++)
		{
			checkall[i].checked=true;
		}
		setBg();
	}

	function fanselect(){
		for(var i=0; i<checkall.length; i++)
		{
			if(checkall[i].checked)
			{
				checkall[i].checked=false;
			}else
			{
				checkall[i].checked=true;
			}
		}
		setBg();
	}
	function noselect(){
		for(var i=0; i<checkall.length; i++)
		{
			checkall[i].checked=false;
		}
		setBg();
	}
//更换与取消
var ntu=null;
var up=null;
function changeup(obj){
	var nt=document.getElementById("newwater");	
	if(obj.value=="更 换"){
		obj.value="取 消";
		ntu=document.getElementById("wtu");
		up=document.createElement("input");
		up.type="file";
		up.name="water";
		nt.removeChild(ntu);
		nt.appendChild(up);
	}else{
		obj.value="更 换";
		nt.removeChild(up);
		nt.appendChild(ntu);
	}
}
		var win=null;
	//弹出图片选择框
	function showWin(url){
		//弹出一个窗体
		
		if(win==null){
			win=document.createElement("div");
			win.className="open";
			document.body.appendChild(win);
			var aj=Ajax();
			aj.get(url, function(data){
				win.innerHTML=data;
			});	
		}
		document.body.onscroll=function(){
			if(win!==null) {
				win.style.left=100+document.body.scrollLeft;
				win.style.top=100+document.body.scrollTop;
			}
		}
	}
	
	var cache=new Array();
	//弹出图片选择框
	function setPage(url){
		//弹出一个窗体
		var win=document.getElementById("glist");

		if(typeof(cache[url])=="undefined") {
			Ajax().get(url, function(data){
				win.innerHTML=data;
				cache[url]=data;
			});
		}else{
			win.innerHTML=cache[url];
		}	
	}
	var cache2=new Array();
	//弹出图片选择框
	function imglist(url){
		//弹出一个窗体
		var win=document.getElementById("glist");

		if(typeof(cache2[url])=="undefined") {
			Ajax().get(url, function(data){
				win.innerHTML=data;
				cache2[url]=data;
			});
		}else{
			win.innerHTML=cache2[url];
		}	
	}
	
		//关闭弹出窗口
	function closewin(){
		if(win!=null){
			document.body.removeChild(win);
			win=null;
		}
	}
	
	//设置图片
	function setImage(picId, picName){
		var pic=document.getElementById("pic");
		var picbid=document.getElementById("picId");
		picbid.value=picId;
		pic.src=picName; 
		closewin();
	}

//等比例显示图片
function DrawImage(thisp,w,h){
var a=new Image();   
a.src=thisp.src; 
if (a.width<w && a.height<h) {
thisp.width=a.width;/*使用原始图片大小*/ 
thisp.height=a.height;   
}else{
if(a.width/a.height>w/h){
   thisp.height=w*a.height/a.width; /*不对图片拉伸*/ 
   thisp.width=w;
}else{
   thisp.width=h*a.width/a.height; 
   thisp.height=h;
}
}
}