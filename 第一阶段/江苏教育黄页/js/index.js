/*
* @Author: Administrator
* @Date:   2018-08-29 09:25:31
* @Last Modified by:   Administrator
* @Last Modified time: 2018-08-29 10:47:49
*/
'use strict';
       $(function(){
      	fun1(0);
      	$(".center3 .nav1 a").click(function(){
            fun1($(this).index());
      	});
      	function fun1(num){
            $(".center3 .nav1 a").removeClass('current');
            $(".center3 .nav1 a").eq(num).addClass('current');
            $(".center3 .leftbox1 ul").hide();
            $(".center3 .leftbox1 ul").eq(num).show();
      	}
      	fun2(0);
      	$(".center3 .nav2 a").click(function(){
            fun2($(this).index());
      	});
      	function fun2(num){
            $(".center3 .nav2 a").removeClass('current');
            $(".center3 .nav2 a").eq(num).addClass('current');
            $(".center3 .leftbox2 ul").hide();
            $(".center3 .leftbox2 ul").eq(num).show();
      	}
      	function getToday(){
      	  var today = new Date();
      	  var year = today.getFullYear();
          var month = today.getMonth();
          var day = today.getDate();
          var H = today.getHours();
          var M = today.getMinutes();
          var S = today.getSeconds();
          if(H<10){H='0'+H;}
          if(M<10){M='0'+M;}
          if(S<10){S='0'+S;}
          var now = year+'年'+(month+1)+'月'+day+'日'+' '+H+':'+M+':'+S;
          // console.log(now);
          $(".header .con .today").html(now);
      }
      getToday();
      setInterval(getToday,1000);
      function moveUp(){
       	 $(".list").animate({
       	 	marginTop: "-18px"},
       	 	2000, function() {
       	 	//把第一个人放到队伍后面
       	 	$(".list li:first").insertAfter($(".list li:last"));
       	 	//把队伍的位置归为0
       	 	$(".list").css('margin-top', '0');
       	 });
     }  
        moveUp();
        setInterval(moveUp,2200);
         
       
        changePic(0);
    	$(".banner .point img").click(function(){
    		changePic($(this).index());
    	});
    	function changePic(num){
    		$(".picBox img").hide();
    	    $(".picBox img").eq(num).show();
    	    $(".banner .point img").attr("src","images/1_03_13.png");
    	    $(".banner .point img").eq(num).attr("src","images/1_03_10.png");
        }  
        var num = 0;
       
        $(".btns .next").click(function(){
        	num<2?num++:num=0;
        	changePic(num);        	
        });
    
        $(".btns .prev").click(function(){
        	num>0?num--:num=2;
        	changePic(num);       	
        });
        // fun3();
        setInterval('$(".btns .next").click()',2000); 
        function changeText(num){
        	$(".baokao .box_1").hide();
        	$(".baokao .box_1").eq(num).show();
        	$(".baokao .point img").attr("src","images/3_03.png");
        	$(".baokao .point img").eq(num).attr("src","images/3_07.png");
        }
        changeText(0);
        $(".baokao .point img").click(function(){
        	changeText($(this).index());
        });       
});