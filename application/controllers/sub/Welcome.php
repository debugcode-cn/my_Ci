<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: wlz
 * Date: 2016/2/13
 * Time: 1:00
 */
class Welcome extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        echo basename(__FILE__);
    }

    public function index(){
        echo 'index';
    }

}