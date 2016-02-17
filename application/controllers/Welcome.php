<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 *
	 * now i have removed the 'index.php' from url...
	 */


	public function __construct(){
		parent::__construct();//如果这行代码不使用的话就报错：没有父类，（当然仅是在控制器中）
								//导致没有产生本类实例对象，
								//然后其他方法中通过本类对象调用的方法就不会存在
		//解决方法一是不显示的定义这个构造方法。另一个方法当然就是添加这行实例化父类的代码
		echo 'init..';
	}

	public function index()
	{

		$this->load->view('const_var');
		$this->output->cache(1);

		/*$string=$this->load->view('const_var','',true);//第三个参数指定将视图中本该被浏览器展现的内容以字符串的方式返回
		echo $string;
		echo strpos($string,'D:');*/

	}

	public function my_sess(){
		session_start();
		echo session_id();
		echo session_name();
		$_SESSION['test']='demo test';
		echo '<br/>';
		session_write_close();
		print_r($_COOKIE);
	}

	public function dir(){

		echo 'BASEPATH=>',BASEPATH,PHP_EOL;
		echo 'VIEWPATH=>',VIEWPATH,PHP_EOL;
		echo 'APPPATH=>',APPPATH,PHP_EOL;
	}
}
