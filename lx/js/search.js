    ////
    //var data = [
    //    "你好，我是Michael",
    //    "你是谁",
    //    "你最好啦",
    //    "你最珍贵",
    //    "你是我最好的朋友",
    //    "你画我猜",
    //    "你是笨蛋",
    //    "你懂得",
    //    "你为我着迷",
    //    "你是我的眼"
    //];
    //function getContent(obj){
    //    var kw = $.trim($(obj).val());
    //    if(kw == ''){
    //        $('#append').hide().html('');
    //        return false;
    //
    //    }
    //    var html = '';
    //    for(var i=0;i<data.length;i++){
    //        if(data[i].indexOf(kw)>=0){
    //            html = html +"<div class='item' onmouseenter='getFocus(this)' onClick='getCon(this);'>"+data[i]+"</div>";
    //        }
    //    }
    //    if(html!=''){
    //        $('#append').show().html(html);
    //    }else{
    //        $('#append').hide().html('');
    //    }
    //}
    //function getFocus(obj){
    //    $(".item").removeClass("addbg");
    //    $(obj).addClass("addbg");
    //}
    //function getCon(obj){
    //    var value = $(obj).text();
    //    $("#kw").val(value);
    //    $("#append").hide().html("");
    //}
    //
    //$(document).ready(function(){
    //    $(document).keydown(function(e){
    //        e = e||window.event;
    //        var keycode = e.which ? e.which : e.keyCode;
    //        if(keycode==38){
    //            if($.trim($('#append').html())==''){
    //                return;
    //            }//去掉收尾空格之后是否为空
    //            else{
    //                $("#kw").blur();
    //                var index = $('.addbg').prevAll().length;
    //                if(index == 0){
    //                    $('.item').removeClass('addbg').eq($(".item").length-1).addClass('addbg');
    //                }else{
    //                    $('.item').removeClass('addbg').eq(index-1).addClass('addbg');
    //                }
    //            }
    //        }else if(keycode==40){
    //            if($.trim($('#append').html())==''){
    //                return;
    //            }//去掉收尾空格之后是否为空
    //            $('#kw').blur();
    //            if($('.item').hasClass('addbg')){
    //                var index = $('.addbg').prevAll().length;
    //                if(index == $('.item').length-1){
    //                    $('.item').removeClass('addbg').eq(0).addClass('addbg');
    //
    //                }else{
    //                    $('.item').removeClass('addbg').eq(index+1).addClass('addbg');
    //                }
    //            }
    //        }else if(keycode==13){
    //            $('#kw').blur();
    //            var value = $('.addbg').text();
    //            $('#kw').val(value);
    //            $('#append').hide().html('');
    //        }
    //
    //    });
    //
    //});


//$(document).ready(function(){
//
//});



















