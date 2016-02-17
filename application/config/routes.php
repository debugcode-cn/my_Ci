<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
|provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|这里亮了啊++++++++++++++++++++++++++++++++++++++++++++++++++++++）））））））））））
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Welcome';
$route['404_override'] = '';//已经又默认的了，浏览器端的就是视图文件夹下面的errors/html/error_404.thml
$route['translate_uri_dashes'] = true;//默认的为假的，这个是可以将横线改成下划线的作用。



/*DIY部分,下面的已经验证了，可以实践了
 * 当我在地址栏中输入http://www.devci.com/wel-come/index 的时候
 * 同样会访问到http://www.devci.com/welcome/index，但地址栏中显示上还是上面的url
 *目前我只用了简单的的字符串，还没使用字符匹配模式啊，这算有点儿难度吧。。。
 * */
//$route['wel-come/index'] = 'welcome/index';


