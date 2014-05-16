<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<div class="main_container"><!--left Col-->
    <?php
        echo $this->renderPartial('container/home');?> <br/><?php
    ?>
    <?php echo $this->renderPartial('container/sign_up');?>
</div>
<div class="right_side"><!--right Col-->
    <div>
        <?php echo $this->renderPartial('container/sign_up_buttons');?>
    </div>
    <div class="clear"></div>
    <div class="right_ads">
        <?php
            echo $this->renderPartial('container/right_ads', array('type' => 'normal','amount' => 5));
        ?>
    </div>
</div>
<div class="ad" url="http://www.usaindustrialscrap.com/">
    <a href="http://www.usaindustrialscrap.com/" target="_blank">
        <img src="/images/ad_images/web_banner_home.jpg" width="920" />
    </a>
</div>
