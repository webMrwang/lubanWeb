function image_run(num){
	var clName=".co-list"+num;
	
	if($(clName+" li").length>=8){
		var copy_html=$(clName+" ul").clone();
		$(".co-list"+num+"-copy").html(copy_html);
		var len=$(".co-list"+num+"-copy li").length;
		var list_width=138*len*3/2;
		$(clName+" ul").css({
			"width":list_width,
			"left":-(list_width/3)
		});

		$(".co-left"+num).click(function(){
			var ul_left=Math.abs(parseInt($(clName+" ul").css("left")));
			var left_limit=(len-1)*138;
			if(!$(clName+" ul").is(":animated")){
				$(clName+" ul").animate({
					"left":"-=138px"
				},500,function(){
					if(ul_left>=left_limit){
						$(clName+" ul").css("left",-(list_width/3)+"px");
					}
				});
			}
			


			
		});
		$(".co-right"+num).click(function(){
			
			var ul_right=Math.abs(parseInt($(clName+" ul").css("left")));
			if(!$(clName+" ul").is(":animated")){
				$(clName+" ul").animate({
					"left":"+=138px"
				},500,function(){
					if(ul_right<276){
						$(clName+" ul").css("left",-(list_width/3)+"px");
					}
				});
			}
			

		});
		
	}
	
}


/*
if($(".co-list-copy li").length>8){
	var copy_html=$(".co-list-tech ul").clone();
	$(".co-list-copy").html(copy_html);
	var len=$(".co-list-copy li").length;
	var list_width=138*len*3/2;
	$(".co-list-tech ul").css({
		"width":list_width,
		"left":-(list_width/3)
	});

	$(".co-left").click(function(e){
		e.stopPropagation();
		var ul_left=Math.abs(parseInt($(".co-list-tech ul").css("left")));
		var left_limit=(len-1)*138;
		if(!$(".co-list-tech ul").is(":animated")){
			$(".co-list-tech ul").animate({
				"left":"-=138px"
			},500,function(){
				if(ul_left>=left_limit){
					$(".co-list-tech ul").css("left",-(list_width/3)+"px");
				}
			});
		}
		


		
	});
	$(".co-right").click(function(){
		
		var ul_right=Math.abs(parseInt($(".co-list-tech ul").css("left")));
		$(".co-list-tech ul").animate({
			"left":"+=138px"
		},500,function(){
			if(ul_right<276){
				$(".co-list-tech ul").css("left",-(list_width/3)+"px");
			}
		});

	});
}

*/