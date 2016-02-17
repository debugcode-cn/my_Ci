<?php
/**
 * Created by PhpStorm.
 * User: wlz
 * Date: 2016/2/8
 * Time: 16:36
 */
?>
<!doctype html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title?></title>
    <link rel="stylesheet" href="../static/myci.css">
    <script style="text/javascript" src="../static/jquery-2.1.4.min.js"></script>
</head>
<body>
<script style="text/javascript">
    $(document).ready(function(){
        alert('hi')
    })
</script>
<h1>
    <?php
    echo $title;
//    echo base_url();
    ?>
</h1>