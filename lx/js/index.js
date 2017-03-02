//轮播图
$(function(){
	var index = 0;
	var timer;
	var $lis = $('#tab li'),
			$imgs = $('#imgs img'),
			$next = $('#next');
	function changeImg(index){
		/*$('#tab li:eq('+index+')').addClass('selected').siblings().removeClass('selected');*/
		$lis.eq(index).addClass('selected').siblings().removeClass('selected');
		$imgs.eq(index).addClass('selected').siblings().removeClass('selected');
	}

	$lis.on('mouseover', function(){
		index = $(this).index();
		changeImg(index);
	});

	$('#prev').on('click', function(){
		changeImg(--index%$lis.length);
	});

	$next.on('click', function(){
		changeImg(++index%$lis.length);
	});

	function play(){
		timer = setInterval(function(){
			$next.trigger('click');
			//$next.animate({width:$imgs.width});
		}, 1000);
	}

	play();


	$('#container').hover(function(){
		clearInterval(timer);
	}, function(){
		play();
	});
});

























