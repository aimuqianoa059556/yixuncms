$(function(){
	$('.aboutcloum').toggle(function(){
		$(this).next().slideDown(300);
		$(this).removeClass('j-right');
		$(this).addClass('j-bottom');
	},function(){
		$(this).next().slideUp(300);
		$(this).removeClass('j-bottom');
		$(this).addClass('j-right');
	})
})

$(function(){
	$(".menu-btn").toggle(function(){
		$("#pane1").animate({width:"150px"},300)
	},function(){
		$("#pane1").animate({width:"0px"},300)
	})
})

$(function(){
	$(".member-btn-2").toggle(function(){
		$("#pane1").animate({width:"150px"},300)
	},function(){
		$("#pane1").animate({width:"0px"},300)
	})
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
			} , 3000);
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

//购物车数量价格
$(function(){
	$(".add").click(function(){
		var t=$(this).parent().find('input[class*=text_box]');
		var id=$(this).parent().find('input[class*=proid]');//商品ID
		$.get(url+"/update",{
			id:id.val(),
			num:1
		});//更新购物车(SESSION)
		t.val(parseInt(t.val())+1)
		setTotal();
		$u = parseInt($(this).prev().val())*parseFloat($(this).parent().find(".dj").text());
		$xj = $(this).parent().find(".xj");
		$xj.html($u.toFixed(2));
	})
	$(".min").click(function(){
		var t=$(this).parent().find('input[class*=text_box]');
		var id=$(this).parent().find('input[class*=proid]');//商品ID
		$.get(url+"/update",{
			id:id.val(),
			num:-1
		});//更新购物车(SESSION)		
		t.val(parseInt(t.val())-1)
		if(parseInt(t.val())<1){
		t.val(1);
		}
		$u = parseInt($(this).next().val())*parseFloat($(this).parent().find(".dj").text());
		$xj = $(this).parent().find(".xj");
		$xj.html($u.toFixed(2));
		setTotal();
		
	})
function setTotal(){
	var s=0;
	$("#tab .shoplist").each(function(){
		s+=parseInt($(this).find('input[class*=text_box]').val())*parseFloat($(this).find('label[class*=dj]').text());
	});
	$("#total").html(s.toFixed(2));
}
	setTotal();
})