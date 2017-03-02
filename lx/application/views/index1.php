<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登陆前</title>
    <base href="<?php echo site_url(); ?>">
    <link rel="stylesheet" href="css/styled.css">
    <link rel="stylesheet" href="css/indexed.css">


</head>
<body>
    <!--header开始-->
<!--    --><?php
//        $email=$this->session->userdata('user_email');
//        if(!$email){
//            redirect('user/index');
//    }
//
//    ?>
<!--    <div id="top">TOP</div>-->
    <div id="header">
        <div id="header-container">
            <div id="header-logo">
                <img src="img/1.jpg" alt="">

            </div>


<!--            //搜索-->

            <div id="con" style="position: absolute;left: 20%;top: 1%;">
                <div id="content">
                    <div class="first">
                        <input id="kw" name="sousuo_content" type='text' />

                    </div>
                    <div id="append"></div>
                </div>
                <input id="sbtn" type="button" value="搜索" style="position: absolute;top:10px;left 20px;width: 50px;height: 30px;margin-left: 20px;">

            </div>
            <div class="h-mulu">
                <ul class="h-gongneng">
                    <li class="denglu"><a href="user/login">登陆</a></li>
                    <li class="zhuce"><a href="user/zhuce">注册</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!--banner开始-->

    <div id="banner">
        <div id="container">
            <ul id="tab">
                <li class="selected">1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
            </ul>
            <div id="imgs">
                <img class="selected" src="img/4.jpg" alt="">
                <img src="img/3.jpg" alt="">
                <img src="img/4.jpg" alt="">
                <img src="img/5.jpg" alt="">
            </div>
            <div id="arrow">
                <span id="prev">&lt;</span>
                <span id="next">&gt;</span>
            </div>
        </div>

    </div>
    <!--nav 类别 开始-->
    <div id="nav">
        <div class="nav-container">
            <ul class="ul1">
                <li class="dongzuo" style="color: #f2f2f2;cursor: pointer;">动作片</li>


            </ul>
            <div class="sep"></div>
            <ul class="ul2">
                <li class="xiju" style="color: #f2f2f2;cursor: pointer;">喜剧片</li>

<!--                <li class="" style="color: #f2f2f2;cursor: pointer;">喜剧片</li>-->


            </ul>
            <div class="sep"></div>
            <ul class="ul3">
                <li class="aiqing" style="color: #f2f2f2;cursor: pointer;">爱情片</li>



            </ul>
            <div class="sep"></div>
            <ul class="ul1">
                <li class="hanju" style="color: #f2f2f2;cursor: pointer;">韩剧</li>

            </ul>
            <div class="sep"></div>
            <ul class="ul1">
                <li class="meiju" style="color: #f2f2f2;cursor: pointer;">美剧</li>


            </ul>
            <div class="sep"></div>
            <ul class="ul6">
                <li class="yingju" style="color: #f2f2f2;cursor: pointer;">英剧</li>


            </ul>
            <div class="sep"></div>
            <ul class="ul7">
                <li class="dushi" style="color: #f2f2f2;cursor: pointer;">都市剧</li>


            </ul>
            <div class="sep"></div>
            <ul class="ul8">
                <li class="jiating" style="color: #f2f2f2;cursor: pointer;">家庭伦理剧</li>



            </ul>
            <div class="sep"></div>
            <ul class="ul1">
                <li class="zongyi" style="color: #f2f2f2;cursor: pointer;">综艺</li>


            </ul>
            <!--<div class="sep"></div>-->

        </div>
    </div>

    <!--电影 div1 开始-->
     <div id="div1">
        <div class="rebo">
            <div class="rebo-header">
                <div class="zuijin">
                    <p class="zj">最近热播</p>
                </div>
                <p class="p1 pp"><a href="#">VIP电影榜</a></p>
                <p class="p2 pp"><a href="#">免费电影榜</a></p>
            </div>
            <div class="rebo-content">
                <ul class="ul1">
                    <?php foreach($movies as $movie) {
                        ?>

                        <li>
                            <a href="user/login">
                                 <img src="<?php echo $movie->movie_content?>" alt="<?php echo $movie->movie_name?>" >
                            </a>
                            <a href="user/login" style="color: #7c7c7c"><?php echo $movie->movie_name?></a>
                            <span style="color: #bababa;float: right"><?php echo $movie->movie_fenshu?></span>
                            <span style="color: #bababa;float: right; margin-right: 15px;" id="shoucang"><a href="user/login" id="sc" style="color: #a5d8a5;">收藏</a></span>
                        </li>
                        <?php
                    }
                    ?>

                </ul>

            </div>
        </div>
     </div>
    动作片 开始

    <div id="div1" class="div2">
        <div class="rebo">
            <div class="rebo-header">
                <div class="zuijin">
                    <p class="zj">动作片</p>
                </div>
<!--                <p class="p1 pp"><a href="#">VIP电影榜</a></p>-->
<!--                <p class="p2 pp"><a href="#">免费电影榜</a></p>-->
            </div>
            <div class="rebo-content">

                <ul class="ul1">
                    <?php foreach($dongzuos as $d) {
                        ?>
                        <!--                        <input type="hidden" value="--><?php //echo $movie->movie_id?><!--" name="mid">-->

                        <li><a href="user/login"><img
                                    src="<?php echo $d->movie_content?>" alt=""></a><a
                                href="user/login"
                                style="color: #7c7c7c"><?php echo $d->movie_name?></a>
                            <span style="color: #bababa;float: right"><?php echo $d->movie_fenshu?></span>
                            <span style="color: #bababa;float: right; margin-right: 15px;" id="shoucang"><a href="user/login" id="sc" style="color: #a5d8a5;">收藏</a></span>
                            <!--                            <input value="收藏" id="btn_comment" data-id="--><?php //echo $movie->movie_id?><!--" class="SUBMIT" type="button" >-->
                        </li>
                        <?php
                    }
                    ?>

                </ul>

            </div>
        </div>
    </div>
    <!--喜剧片 开始-->

    <div id="div1" class="div3">
        <div class="rebo">
            <div class="rebo-header">
                <div class="zuijin">
                    <p class="zj">喜剧片</p>
                </div>
<!--                <p class="p1 pp"><a href="#">VIP电影榜</a></p>-->
<!--                <p class="p2 pp"><a href="#">免费电影榜</a></p>-->
            </div>
            <div class="rebo-content">

                <ul class="ul1">
                    <?php foreach($xijus as $x) {
                        ?>
                        <!--                        <input type="hidden" value="--><?php //echo $movie->movie_id?><!--" name="mid">-->

                        <li><a href="user/login"><img
                                    src="<?php echo $x->movie_content?>" alt=""></a><a
                                href="user/login"
                                style="color: #7c7c7c"><?php echo $x->movie_name?></a>
                            <span style="color: #bababa;float: right"><?php echo $x->movie_fenshu?></span>
                            <span style="color: #bababa;float: right; margin-right: 15px;" id="shoucang"><a href="user/login" id="sc" style="color: #a5d8a5;">收藏</a></span>
                            <!--                            <input value="收藏" id="btn_comment" data-id="--><?php //echo $movie->movie_id?><!--" class="SUBMIT" type="button" >-->
                        </li>
                        <?php
                    }
                    ?>

                </ul>

            </div>
        </div>
    </div>

    <!--爱情片 开始-->

    <div id="div1" class="div4">
        <div class="rebo">
            <div class="rebo-header">
                <div class="zuijin">
                    <p class="zj">爱情片</p>
                </div>
<!--                <p class="p1 pp"><a href="#">VIP电影榜</a></p>-->
<!--                <p class="p2 pp"><a href="#">免费电影榜</a></p>-->
            </div>
            <div class="rebo-content">

                <ul class="ul1">
                    <?php foreach($aiqings as $a) {
                        ?>
                        <!--                        <input type="hidden" value="--><?php //echo $movie->movie_id?><!--" name="mid">-->

                        <li><a href="user/login"><img
                                    src="<?php echo $a->movie_content?>" alt=""></a><a
                                href="user/login"
                                style="color: #7c7c7c"><?php echo $a->movie_name?></a>
                            <span style="color: #bababa;float: right"><?php echo $a->movie_fenshu?></span>
                            <span style="color: #bababa;float: right; margin-right: 15px;" id="shoucang"><a href="user/login" id="sc" style="color: #a5d8a5;">收藏</a></span>
                            <!--                            <input value="收藏" id="btn_comment" data-id="--><?php //echo $movie->movie_id?><!--" class="SUBMIT" type="button" >-->
                        </li>
                        <?php
                    }
                    ?>

                </ul>

            </div>
        </div>
    </div>

    <!--韩剧 开始-->

    <div id="div1" class="div5">
        <div class="rebo">
            <div class="rebo-header">
                <div class="zuijin">
                    <p class="zj">韩剧</p>
                </div>
<!--                <p class="p1 pp"><a href="#">VIP电影榜</a></p>-->
<!--                <p class="p2 pp"><a href="#">免费电影榜</a></p>-->
            </div>
            <div class="rebo-content">

                <ul class="ul1">
                    <?php foreach($hanjus as $h) {
                        ?>
                        <!--                        <input type="hidden" value="--><?php //echo $movie->movie_id?><!--" name="mid">-->

                        <li><a href="user/login"><img
                                    src="<?php echo $h->movie_content?>" alt=""></a><a
                                href="user/login"
                                style="color: #7c7c7c"><?php echo $h->movie_name?></a>
                            <span style="color: #bababa;float: right"><?php echo $h->movie_fenshu?></span>
                            <span style="color: #bababa;float: right; margin-right: 15px;" id="shoucang"><a href="user/login" id="sc" style="color: #a5d8a5;">收藏</a></span>
                            <!--                            <input value="收藏" id="btn_comment" data-id="--><?php //echo $movie->movie_id?><!--" class="SUBMIT" type="button" >-->
                        </li>
                        <?php
                    }
                    ?>

                </ul>

            </div>
        </div>
    </div>

    <!--美剧 开始-->

    <div id="div1" class="div6">
        <div class="rebo">
            <div class="rebo-header">
                <div class="zuijin">
                    <p class="zj">美剧</p>
                </div>
                <!--                <p class="p1 pp"><a href="#">VIP电影榜</a></p>-->
                <!--                <p class="p2 pp"><a href="#">免费电影榜</a></p>-->
            </div>
            <div class="rebo-content">

                <ul class="ul1">
                    <?php foreach($meijus as $m) {
                        ?>
                        <!--                        <input type="hidden" value="--><?php //echo $movie->movie_id?><!--" name="mid">-->

                        <li><a href="user/login"><img
                                    src="<?php echo $m->movie_content?>" alt=""></a><a
                                href="user/login"
                                style="color: #7c7c7c"><?php echo $m->movie_name?></a>
                            <span style="color: #bababa;float: right"><?php echo $m->movie_fenshu?></span>
                            <span style="color: #bababa;float: right; margin-right: 15px;" id="shoucang"><a href="user/login" id="sc" style="color: #a5d8a5;">收藏</a></span>
                            <!--                            <input value="收藏" id="btn_comment" data-id="--><?php //echo $movie->movie_id?><!--" class="SUBMIT" type="button" >-->
                        </li>
                        <?php
                    }
                    ?>

                </ul>

            </div>
        </div>
    </div>

    <!--英剧 开始-->

    <div id="div1" class="div7">
        <div class="rebo">
            <div class="rebo-header">
                <div class="zuijin">
                    <p class="zj">英剧</p>
                </div>
                <!--                <p class="p1 pp"><a href="#">VIP电影榜</a></p>-->
                <!--                <p class="p2 pp"><a href="#">免费电影榜</a></p>-->
            </div>
            <div class="rebo-content">

                <ul class="ul1">
                    <?php foreach($yingjus as $y) {
                        ?>
                        <!--                        <input type="hidden" value="--><?php //echo $movie->movie_id?><!--" name="mid">-->

                        <li><a href="user/login"><img
                                    src="<?php echo $y->movie_content?>" alt=""></a><a
                                href="user/login"
                                style="color: #7c7c7c"><?php echo $y->movie_name?></a>
                            <span style="color: #bababa;float: right"><?php echo $y->movie_fenshu?></span>
                            <span style="color: #bababa;float: right; margin-right: 15px;" id="shoucang"><a href="user/login" id="sc" style="color: #a5d8a5;">收藏</a></span>
                            <!--                            <input value="收藏" id="btn_comment" data-id="--><?php //echo $movie->movie_id?><!--" class="SUBMIT" type="button" >-->
                        </li>
                        <?php
                    }
                    ?>

                </ul>

            </div>
        </div>
    </div>
    <!--家庭伦理剧 开始-->

    <div id="div1" class="div8">
        <div class="rebo">
            <div class="rebo-header">
                <div class="zuijin">
                    <p class="zj">古装剧</p>
                </div>
                <!--                <p class="p1 pp"><a href="#">VIP电影榜</a></p>-->
                <!--                <p class="p2 pp"><a href="#">免费电影榜</a></p>-->
            </div>
            <div class="rebo-content">

                <ul class="ul1">
                    <?php foreach($jiatings as $j) {
                        ?>
                        <!--                        <input type="hidden" value="--><?php //echo $movie->movie_id?><!--" name="mid">-->

                        <li><a href="user/login"><img
                                    src="<?php echo $j->movie_content?>" alt=""></a><a
                                href="user/login"
                                style="color: #7c7c7c"><?php echo $j->movie_name?></a>
                            <span style="color: #bababa;float: right"><?php echo $j->movie_fenshu?></span>
                            <span style="color: #bababa;float: right; margin-right: 15px;" id="shoucang"><a href="user/login" id="sc" style="color: #a5d8a5;">收藏</a></span>
                            <!--                            <input value="收藏" id="btn_comment" data-id="--><?php //echo $movie->movie_id?><!--" class="SUBMIT" type="button" >-->
                        </li>
                        <?php
                    }
                    ?>

                </ul>

            </div>
        </div>
    </div>
    <!--都市剧 开始-->

    <div id="div1" class="div9">
        <div class="rebo">
            <div class="rebo-header">
                <div class="zuijin">
                    <p class="zj">都市剧</p>
                </div>
                <!--                <p class="p1 pp"><a href="#">VIP电影榜</a></p>-->
                <!--                <p class="p2 pp"><a href="#">免费电影榜</a></p>-->
            </div>
            <div class="rebo-content">

                <ul class="ul1">
                    <?php foreach($dushis as $d) {
                        ?>
                        <!--                        <input type="hidden" value="--><?php //echo $movie->movie_id?><!--" name="mid">-->

                        <li><a href="user/login"><img
                                    src="<?php echo $d->movie_content?>" alt=""></a><a
                                href="user/login"
                                style="color: #7c7c7c"><?php echo $d->movie_name?></a>
                            <span style="color: #bababa;float: right"><?php echo $d->movie_fenshu?></span>
                            <span style="color: #bababa;float: right; margin-right: 15px;" id="shoucang"><a href="user/login" id="sc" style="color: #a5d8a5;">收藏</a></span>
                            <!--                            <input value="收藏" id="btn_comment" data-id="--><?php //echo $movie->movie_id?><!--" class="SUBMIT" type="button" >-->
                        </li>
                        <?php
                    }
                    ?>

                </ul>

            </div>
        </div>
    </div>
    <!--综艺 开始-->

    <div id="div1" class="div10">
        <div class="rebo">
            <div class="rebo-header">
                <div class="zuijin">
                    <p class="zj">综艺</p>
                </div>
                <!--                <p class="p1 pp"><a href="#">VIP电影榜</a></p>-->
                <!--                <p class="p2 pp"><a href="#">免费电影榜</a></p>-->
            </div>
            <div class="rebo-content">

                <ul class="ul1">
                    <?php foreach($zongyis as $z) {
                        ?>
                        <!--                        <input type="hidden" value="--><?php //echo $movie->movie_id?><!--" name="mid">-->

                        <li><a href="user/login"><img
                                    src="<?php echo $z->movie_content?>" alt=""></a><a
                                href="user/login"
                                style="color: #7c7c7c"><?php echo $z->movie_name?></a>
                            <span style="color: #bababa;float: right"><?php echo $z->movie_fenshu?></span>
                            <span style="color: #bababa;float: right; margin-right: 15px;" id="shoucang"><a href="user/login" id="sc" style="color: #a5d8a5;">收藏</a></span>
                            <!--                            <input value="收藏" id="btn_comment" data-id="--><?php //echo $movie->movie_id?><!--" class="SUBMIT" type="button" >-->
                        </li>
                        <?php
                    }
                    ?>

                </ul>

            </div>
        </div>
    </div>




    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.js"></script>

    <script src="js/index.js"></script>
    <script src="js/indexed.js"></script>

    <script src="js/search.js"></script>


    <script>
        $(function(){

            $('#sbtn').on('click',function(){
//                alert(123);
                var $sousuo_content = $('[name="sousuo_content"]');
//                console.log($sousuo_content.val());

                $.post('user/search',{sousuo_content:$sousuo_content.val()},function(data){
                    if(data){
//                        alert('您搜索的内容不存在,请输入正确信息!');
//                        console.log(data);
                        location.href='user/login';
                    }else if(data==''){
                         alert('您搜索的内容不存在,请输入正确信息!');

                    }
                },'json');
            });
        });


    </script>























</body>
</html>



