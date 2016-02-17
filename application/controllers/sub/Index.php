<?php

/**
 * Created by PhpStorm.
 * User: wlz
 * Date: 2016/2/13
 * Time: 1:12
 */
class Index extends CI_Controller
{
    public function index(){
        parent::__construct();
        echo 'hi';
        log_message('debug','我在使用log_message函数进行日志的写入文件操作');
    }
}