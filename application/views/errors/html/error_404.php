<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
<title>404 Page Not Found</title>
<!--<style type="text/css">

::selection { background-color: #E13300; color: white; }
::-moz-selection { background-color: #E13300; color: white; }

body {
	background-color: #fff;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#container {
	margin: 10px;
	border: 1px solid #D0D0D0;
	box-shadow: 0 0 8px #D0D0D0;
}

p {
	margin: 12px 15px 12px 15px;
}
</style>-->
	<style type="text/css">
		#content{
			margin: 100px auto;
		}
		#img{
			margin:0 auto;
			/*border: 1px solid red;*/
		}
		#img >img{
			width: 30%;
			margin: 0 35%;
		}
		#action{
			border: 1px solid red;
			height: auto;
			width: 200px;
			border-radius: 3px;
			font-weight: bold;
			font-size: 20px;
			font-style: inherit;
			text-align: center;
			margin: 50px auto;
			cursor: pointer;
		}
		#action >span:last-child{
			margin-left:30px;

		}
	</style>



</head>

<body>
	<div id="container">
		<h1><?php echo $heading; ?></h1>
		<?php echo $message; ?>
		<?php echo '我在',__DIR__;?>
	</div>
<div>
<!--	加载自定义404页面去-->
	<?php include_once('page404.html') ?>
</div>
</body>
</html>