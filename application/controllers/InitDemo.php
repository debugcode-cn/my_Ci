<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: wlz
 * Date: 2016/2/9
 * Time: 20:28
 */

class InitDemo extends CI_Controller
{

    public function __construct(){
        parent::__construct();
        echo 'every function in this controller to run ,
         i will be run before';
        echo PHP_EOL.'init ...';
    }

    public function index($var1='',$var2=''){
        if(!empty($var1)&&!empty($var2)){

            $arr_var=[$var1,$var2];
            print_r($arr_var);

            $type_arr=array_map('getType',$arr_var);
            print_r($type_arr);

        }else{
            echo '参数为空';
        }
    }

    //获得一个给定参数的类型
    public function getType($value){
        return gettype($value);
    }

    public function __remap($method){
        if($method === 'some_method'){
//            $this->the_method();
            echo $method;
        }else{
//            $this->default_method();
            echo 'no thing';
        }
    }
/*
 * 控制器中通过定义这个方法来重映射方法,;uri中的第二段作为第一个参数，
 * 后面的所有其他段将作为第二个参数
    public function __remap($method,$params = array()){
        if($method === 'some_method'){
            $this->the_method();
        }else{
            $this->default_method();
        }
    }*/

}