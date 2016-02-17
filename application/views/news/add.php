<?php
/**
 * Created by PhpStorm.
 * User: wlz
 * Date: 2016/2/10
 * Time: 1:01
 */
?>
<h2><?php echo $title;?></h2>
<?php echo validation_errors();?>
<?php echo form_open('news/add');?>
    <label for="title">Title</label>
    <input  type="text" name="title" /><br/>

    <label for="text">Text</label>
    <textarea name="text" ></textarea><br/>

    <input type="submit" value="Create news item" />
</form>
