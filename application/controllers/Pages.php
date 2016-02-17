<?php

/**
* 页面类
*/
class Pages extends CI_Controller
{
	public function index($page='home'){

//		读取静态资源
		if(! file_exists(APPPATH.'/views/pages/'.$page.'.php')){
			//we don't have a page for that!
			show_404();
		}
		$data['title']=ucfirst($page);
		$this->load->view('templates/header',$data);
		$this->load->view('pages/'.$page,$data);
		$this->load->view('templates/footer',$data);

	}

	public function addCache(){
		$this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));

		if ( ! $foo = $this->cache->get('foo'))
		{
			echo 'Saving to the cache!<br />';
			$foo = 'foobarbaz!';
			$key = 'mykey';
			// Save into the cache for 5 minutes
			$this->cache->save('foo', $foo, 60);
			$this->cache->save('key',$key,60);
		}

		echo $foo;
		echo PHP_EOL,$key;
	}

	public function deleteCache(){
		$this->load->driver('cache', array('adapter' => 'apc', 'backup' => 'file'));
		$this->cache->delete('foo');
	}
}