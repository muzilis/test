<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {


    //搜索

    public function get_search(){
        $kw = $this->input->post('value');

        $data = [
            "你好我是Michael",
            "是谁",
            "你最好啦",
            "你最珍贵",
            "是我最好的朋友",
            "你画我猜",
            "笨蛋",
            "你懂得",
            "你为我着迷",
            "你是我的眼"
        ];
        if($kw){
            echo  $data;
        }


    }








}



















