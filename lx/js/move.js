//$(function(){
//	function loadData(){
//		$('#loading').show();
//			setTimeout(function(){
//				for(var i=0; i<data.length; i++){
//					var blog = data[i];
//					var $minUl = getMinUl();
//					$minUl.append('<li><img src="img/'+blog.blog_img+'" alt=""><a href="#" class="blog-title">'+blog.blog_title+'</a><span>'+blog.blog_h3+'<a href="#">'+blog.blog_a+'</a></span><p>'+blog.blog_content+'</p><div class="blogbtn"><a class="btn" href="#">'+blog.blog_btn+'</a></div></li>');
//				}
//				$('#loading').hide();
//			}, 1000);
//		});
//	}
//	loadData();
//
//	$(window).on('scroll', function(){
//		var $minUl = getMinUl();
//		var scrollTop = $(window).scrollTop();
//		if(scrollTop + $(window).height() >= $minUl.height()){
//			//loadData();
//		}
//	});
//
//	function getMinUl(){
//		var $minUl = $('.col').eq(0);
//		for(var i=1; i<3; i++){
//			if($minUl.height() > $('.col').eq(i).height()){
//				$minUl = $('.col').eq(i);
//			}
//		}
//		return $minUl;
//	}
//});
