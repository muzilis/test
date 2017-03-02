
        //$.post("user/方法名",{email:$email},function(data){
        //    if(!data){
        //
        //    }else{
        //
        //    }
        //},"text");
$(document).ready(function(){
    var $pwd1 = $('#pwd1'),
        $pwd2 = $('#pwd2'),
        $pwdValue=0, $pwdValue2=0;
        $('#mask  input').each(function(){
        }).blur(function() {
            //邮箱
            if ($(this).is("#email")) {
                $eValue = this.value;
                $that = $(this);
                if (this.value == '' || (this.value != "" && !/.+@.+\.[a-zA-Z]{2,4}$/.test(this.value))) {
                    var errMsg = '请输入正确的Email地址!';
                    $(this).after('<span class="high">' + errMsg + '</span>');

                } else {
                    var errMsg1 = '您的邮箱已经注册过!';
                    var errMsg2 = '您的邮箱可以注册!';

                    $.post("user/getEmail",{email:$eValue},function(data){
                        if(data =='success'){
                            $that.after('<span class="email">'+errMsg1+'</span>');
                        }else{
                            $that.after('<span class="yeah">'+errMsg2+'</span>');
                        }
                    },"text");
                }
            }
            //密码

            if($(this).is("#pwd1")){
                $pwdValue = this.value;
                if($pwdValue.length<6||$pwdValue.length>20){
                    var errMsg3 = "密码范围6-20位!";
                    $(this).after('<span class="key">'+errMsg3+'</span>');

                }

            }
            if($(this).is("#pwd2")){
                $pwdValue2 = this.value;
                if($pwdValue2.length<6||$pwdValue2.length>20){
                    var errMsg4 = "密码范围6-20位!";
                    $(this).after('<span class="key1">'+errMsg4+'</span>');

                }
            }
            //console.log($pwdValue);

            if($pwdValue.length>=6&&$pwdValue.length<=20 || ($pwdValue2.length>=6 && $pwdValue2.length<=20)) {
                //console.log($pwdValue2);
                if($pwdValue != $pwdValue2){
                    //console.log($pwdValue+$pwdValue2);
                    var errMsg5 = "两次密码不同请重新输入!";
                    $pwd1.after('<span class="keys">'+errMsg5+'</span>');
                    $pwd2.after('<span class="keys">'+errMsg5+'</span>');
                    //alert(12345);
                }
                //alert(123);
            }
            if($pwdValue == $pwdValue2) {

                if (($pwdValue != "" && $pwdValue2 != "")&&($pwdValue.length>=6&&$pwdValue.length<=20)&&($pwdValue2.length>=6&&$pwdValue2.length<=20)&&($("#email").next().attr('class')!="email")) {

                    $("#submit").prop("disabled",false);

                }
            }
        }).keyup(function(){
            var $that = $(this);
            if($that.next().is('high')){
                $that.next().remove();
            }
            if($that.next().is(".yeah")){
                $that.next().remove();
            }
            if($that.next().is(".email")){
                $that.next().remove();
            }

            if($that.next().is(".key")){
                $that.next().remove();
            }
            if($that.next().is(".key1")){
                $that.next().remove();
            }
        }).focus(function(){
            var $that = $(this);
            if($that.next().is('high')){
                $that.next().remove();
            }
            if($that.next().is(".yeah")){
                $that.next().remove();
            }
            if($that.next().is(".email")){
                $that.next().remove();
            }

            if($that.next().is(".key")){
                $that.next().remove();
            }
            if($that.next().is(".key1")){
                $that.next().remove();
            }
            if($that.is('#pwd1')){
                if($that.next().attr('class')=='keys'&&$pwd2.next().attr('class')=='keys'){
                    $that.next().remove();

                }else{
                    if($that.next().attr('class')=="keys"){
                        $that.next().remove();
                    }
                }
            }
            if($that.is('#pwd2')){
                if($that.next().attr('class')=='keys'&&$pwd1.next().attr('class')=='keys'){
                    $that.next().remove();

                }else{
                    if($that.next().attr('class')=="keys"){
                        $that.next().remove();
                    }
                }
            }
        });
    });














