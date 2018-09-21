 $().ready(function(e) {
		  
/*图片隐藏切换*/		  
        $(".tubiao a .hide").hide();
	    $(".tubiao a").hover(function(){
		   	$(this).children("img").eq(0).hide();
		   	$(this).children("img").eq(1).show();
		   
		   },function(){
			$(this).children("img").eq(1).hide();
		   	$(this).children("img").eq(0).show();     
			   
		});
		

/*图片轮播*/
	var n = 0;//图片
	var time;//计时器
	var n = 0;
	var num = $(".backgroundimg img").length - 1;
	var rs = true;	
	var a;
	function face(n){
		$(".backgroundimg img").hide();
		$(".backgroundimg img").eq(n).show();
		$(".point span").css("backgroundColor","#ccc");
		$(".point span").eq(n).css("backgroundColor","black");
		 
	}
	//右箭头
	$(".right").click(function(){
		if(n == num){
			n = 0;
			}else{
		 	n++;}
		face(n);
		rs = false;
		a = n;
		});
	//左箭头
	$(".left").click(function(){
		if(n == 0){
			n = num;
			}else{
		 	n--;
			}
		face(n);
		rs = false;
		a = n;
		
		});
	//焦点
	$(".point span").click(function(){
		var i =$(this).index();
		face(i);
		rs = false;
		a = i;
	  });
		
	//自动切换	
	function changeImg(){
		clearTimeout(time);
		if(rs == false){
			n = a;
			rs = true;
			}else{
			n = $(".backgroundimg img:visible").index();
			if( n == num){ n = 0}else{ n++;}
			}
		
		face(n);
		time = setInterval(changeImg,3000);
		//document.title = n + "----" +time;
	
		}
	//document.title = n;
	face(0);
	setInterval(changeImg,3000)
	//setInterval(changeImg,2000);
	//changeImg();




	  
	/*$(".serxna img").eq(1).hide();
	$(".serxna").mouseenter(function(){
		$(".serxna img").eq(0).hide();
		$(".serxna img").eq(1).show();
	})
		
	$(".serxna").mouseleave(function(){
		$(".serxna img").eq(1).hide();
		$(".serxna img").eq(0).show();
	})

	
		$(".serxna1 img").eq(1).hide();
		$(".serxna1").mouseenter(function(){
			$(".serxna1 img").eq(0).hide();
			$(".serxna1 img").eq(1).show();
		})
			
		$(".serxna1").mouseleave(function(){
			$(".serxna1 img").eq(1).hide();
			$(".serxna1 img").eq(0).show();
		})

	$(".serxna2 img").eq(1).hide();
	$(".serxna2").mouseenter(function(){
		$(".serxna2 img").eq(0).hide();
		$(".serxna2 img").eq(1).show();
	})
		
	$(".serxna2").mouseleave(function(){
		$(".serxna2 img").eq(1).hide();
		$(".serxna2 img").eq(0).show();
	})
	
		$(".serxna3 img").eq(1).hide();
		$(".serxna3").mouseenter(function(){
			$(".serxna3 img").eq(0).hide();
			$(".serxna3 img").eq(1).show();
		})
			
		$(".serxna3").mouseleave(function(){
			$(".serxna3 img").eq(1).hide();
			$(".serxna3 img").eq(0).show();
		})
		
			
		$(".serxna4 img").eq(1).hide();
		$(".serxna4").mouseenter(function(){
			$(".serxna4 img").eq(0).hide();
			$(".serxna4 img").eq(1).show();
		})
			
		$(".serxna4").mouseleave(function(){
			$(".serxna4 img").eq(1).hide();
			$(".serxna4 img").eq(0).show();
		})
	
			
		$(".serxna5 img").eq(1).hide();
		$(".serxna5").mouseenter(function(){
			$(".serxna5 img").eq(0).hide();
			$(".serxna5 img").eq(1).show();
		})
			
		$(".serxna5").mouseleave(function(){
			$(".serxna5 img").eq(1).hide();
			$(".serxna5 img").eq(0).show();
		})
*/

		
 });
		