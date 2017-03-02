;(function($){
    $.fn.extend({
        lifhtbox:function(){

            this.on('click',function(){

                var iWidth = this.getAttribute('data-width')>=600?600:this.getAttribute('data-width');
                $div = $('<div class="lightbox-img"></div>').css({
                width:iWidth,
                height:this.getAttribute('data-height'),
                left:($(window).width()-iWidth)/2,
                top:($(window).height()-this.getAttribute('data-height'))/2

            }).appendTo(document.body);
                var oImg = new Image();
                oImg.onload = function(){
                    this.width = iWidth;
                    $div.append(oImg);
                };
                oImg.src = this.getAttribute('data-src');
                $mask = $('<div class="window-mask"></div>').css({
                    opacity:0
                }).appendTo(document.body);

                $('.window-mask').animate({
                    opacity:0.8
                },1000);
                $close = $('<span class="close-btn">[X]</span>').appendTo($div);
                $('.close-btn').on('click',function(){
                    $div.remove();
                    $mask.remove();
                });
            });

        }
    });
})(jQuery);
