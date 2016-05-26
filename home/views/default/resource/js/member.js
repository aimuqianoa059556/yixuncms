//页面平滑显示
$(window).bind('scroll',function(){
	if($(this).scrollTop() > 200){
		$('#one').fadeIn(500);
	}
	if($(this).scrollTop() > 400){
		$('.art').fadeIn(500);
	}
	if($(this).scrollTop() > 700){
		$('#two').fadeIn(500);
	}			
});
//左侧折叠菜单
$(function(){
	$(".tit").toggle(function(){
		$(this).next().slideUp(300);
		$(this).find("span").text("＋")
	},function(){
		$(this).next().slideDown(300);
		$(this).find("span").text("－")
	});
});
//左侧折叠菜单
$(function(){
	$(".leftcolumn").toggle(function(){
		$(this).next().slideUp(300);
		$(this).find("span").text("＋")
	},function(){
		$(this).next().slideDown(300);
		$(this).find("span").text("－")
	});
});
//一级导航下拉菜单
$(function(){
	$(".imenu li").hover(function(){
		$(this).find(".sonm").stop(true,true).slideDown(300);
	},function(){
	$(this).find(".sonm").stop(true,true).slideUp(100);
	});
});
//新闻列表滑过快速提示
$(function(){
	var x = 10;
	var y = 20;
	$("div.newsblock").mouseover(function(e){
		$(this).addClass("newsblockbg");
		this.myTitle = this.title;
		this.title = "";
		var tooltip="<div id='tooltip'>"+this.myTitle+"</div>";
		$("body").append(tooltip);
		$("#tooltip").css({"top":(e.pageY+y)+"px","left":(e.pageX)+x+"px"}).show("fast");
	}).mouseout(function(){
		this.title=this.myTitle;
		$("#tooltip").remove();
		$(this).removeClass("newsblockbg");
	}).mousemove(function(e){
		$("#tooltip").css({"top":(e.pageY+y)+"px","left":(e.pageX)+x+"px"});
	});
})
//焦点图
$(function(){
	var $imgrolls = $("#jnImageroll div a");
	$imgrolls.css("opacity","1");
    var len  = $imgrolls.length;
	var index = 0;
	var adTimer = null;
	$imgrolls.mouseover(function(){
		index = $imgrolls.index(this);
		showImg(index);
	}).eq(0).mouseover();	
	//滑入 停止动画，滑出开始动画.
	$('#jnImageroll').hover(function(){
			if(adTimer){ 
				clearInterval(adTimer);
			}
		 },function(){
			adTimer = setInterval(function(){
			    showImg(index);
				index++;
				if(index==len){index=0;}
			} , 5000);
	}).trigger("mouseleave");
})
/*显示不同的幻灯片*/
function showImg(index){
	var $rollobj = $("#jnImageroll");
	var $rolllist = $rollobj.find("div a");
	var newhref = $rolllist.eq(index).attr("href");
	$("#JS_imgWrap").attr("href",newhref)
			 .find("img").eq(index).stop(true,true).fadeIn().siblings().fadeOut();
	$rolllist.removeClass("chos").css("opacity","1")
			 .eq(index).addClass("chos").css("opacity","1"); 
}
//幻灯片
$(function(){
	var $imgrolls = $("#play div a");
	$imgrolls.css("opacity","0.7");
    var len  = $imgrolls.length;
	var index = 0;
	var adTimer = null;
	$imgrolls.mouseover(function(){
		index = $imgrolls.index(this);
		playimg(index);
	}).eq(0).mouseover();	
	//滑入 停止动画，滑出开始动画.
	$('#play').hover(function(){
			if(adTimer){ 
				clearInterval(adTimer);
			}
		 },function(){
			adTimer = setInterval(function(){
			    playimg(index);
				index++;
				if(index==len){index=0;}
			} , 5000);
	}).trigger("mouseleave");
})
/*显示不同的幻灯片*/
function playimg(index){
	var $rollobj = $("#play");
	var $rolllist = $rollobj.find("div a");
	var newhref = $rolllist.eq(index).attr("href");
	$("#js_play").attr("href",newhref)
			 .find("img").eq(index).stop(true,true).fadeIn().siblings().fadeOut();
	$rolllist.removeClass("chos").css("opacity","0.7")
			 .eq(index).addClass("chos").css("opacity","1"); 
}
//图集列表滑过
$(function(){
	$("ul.smallimg li img").hover(function(){
		$(this).toggleClass("imghover");
	})
})
//图集列表滑过
$(function(){
	$("ul.pro li img").hover(function(){
		$(this).toggleClass("imghover");
	})
})
//招聘
$(function(){
	$(".jobcontent").hover(function(){
		$(this).toggleClass("newsblockbg");
	})
})
//图片懒加载
$(function(){
	$("img.lazy").lazyload({
		container: window,
		event:'scroll',
		effect: 'fadeIn',
		effectArgs: 'slow',
		placeholder:res+'/images/loading.gif',
		load: null,
		offset: 0
	});	
})