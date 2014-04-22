<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 4/18/14
 * Time: 12:10 PM
 */

?>
<html>
<style>
    .covers{
        float: left;
        width: 500px;
    }
    .cover_info{
        float: left;
        width: 170px;
    }
</style>
<body>
<div class="main_container">
    <div class="covers">
        <a href="<?php echo $this->url;?>">
            <img src="<?php echo $this->img;?>"/>
            <img src="<?php echo $this->back_img;?>"/>
        </a>
    </div>
    <div class="cover_info">
        <b>Date: </b><?php echo date("M Y", strtotime($this->date));?>
        <br/>
        <b>Description: </b><?php echo $this->info;?>

    </div>
    <div class="clear"></div>
    <div>
        <div class="header">
            <p>Upcoming events</p>
        </div>
    </div>
</div>

</body>
</html>