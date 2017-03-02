//define(['jquery','widget'],function($,Widget){
//	function Window(options){
//		Widget.call(this);
//		this.cfg = $.extend({
//			// width: 285,
//			// height: 179,
//			// top: 50,
//			// left: 50,
//			closeBtn: false,
//			handler4Closebtn: null,
//			mask: true,
//			title: 'name'
//		},options);
//
//	}
//	Window.prototype = new Widget();
//	Window.prototype.constructor = Window;
//	Window.prototype.alert = function(options,handler){
//		$mask = null;
//		if(options.mask){
//			this.$mask = $('<div class="window-mask"></div>').css({
//				opacity:0
//			}).appendTo(document.body);
//
//		}
//		$('.window-mask').animate({
//			opacity:0.8
//		},1000);
//		this.$box = $('<div class="window-box"></div>').css({
//			width: this.cfg.width,
//			height: this.cfg.height,
//			left: this.cfg.left || ($(window).width()-this.cfg.width)/2 ,
//			top: this.cfg.top || ($(window).height()-this.cfg.height)/2 ,
//
//		}).appendTo(document.body);
//
//		this.$imgs = $('<img src="img/port-pic.jpg">').css({
//			width: this.cfg.width,
//			height: this.cfg.height
//		}).appendTo(this.$box);
//		if(options.closeBtn){
//				var that = this;
//				var $closeBtn = $('<span class="window-closeBtn">X</span>');
//				$closeBtn.appendTo(this.$box).on('click',function(){
//					that.handler4Closebtn && that.handler4Closebtn();
//					that.fire('close');//自定义事件
//					that.close();
//				});
//		}
//
//		var $title = $('<span class="window-title">'+this.cfg.title+'</span>').appendTo(this.$box);
//
//
//		if(options.handler4Closebtn){
//				this.on('close',options.handler4Closebtn);
//				// that.on('close');
//		}
//		return this;
//	};
//	Window.prototype.close = function(){
//		this.$box.remove();
//		this.$mask.remove();
//	};
//		return Window;
//});
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
