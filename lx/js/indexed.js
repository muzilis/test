/**
 * Created by snowlee on 16/3/16.
 */
//快速跳转
$(function(){
    $('#nav .dongzuo').on('click',function(){
        //alert(11);
        $(window).scrollTop($('.div2').offset().top);

    });
    $('#nav .xiju').on('click',function(){
        //alert(11);
        $(window).scrollTop($('.div3').offset().top);

    });
    $('#nav .aiqing').on('click',function(){
        //alert(11);
        $(window).scrollTop($('.div4').offset().top);

    });
    $('#nav .hanju').on('click',function(){
        //alert(11);
        $(window).scrollTop($('.div5').offset().top);

    });
    $('#nav .meiju').on('click',function(){
        //alert(11);
        $(window).scrollTop($('.div6').offset().top);

    });
    $('#nav .yingju').on('click',function(){
        //alert(11);
        $(window).scrollTop($('.div7').offset().top);

    });
    $('#nav .jiating').on('click',function(){
        //alert(11);
        $(window).scrollTop($('.div8').offset().top);

    });
    $('#nav .dushi').on('click',function(){
        //alert(11);
        $(window).scrollTop($('.div9').offset().top);

    });
    $('#nav .zongyi').on('click',function(){
        //alert(11);
        $(window).scrollTop($('.div10').offset().top);

    });
    $('#top').on('click',function(){
        $(window).scrollTop(-$('#top').offset().top);
    });

    //$('#bofang_img').on('mouseover',function(){
    //    var oBimg = document.getElementById('bofang_img');
    //    oBimg.style.display='block';
    //    alert(111);
    //});
});