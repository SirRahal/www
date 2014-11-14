<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div style="padding-bottom:20px;">
    <a href="/site/fall_winter_special">
        <img src="/images/fall_winter_speciall_banner1.jpg" width="910"/>
    </a>
</div>
<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<div class="main_container"><!--left Col-->
    <?php
        echo $this->renderPartial('container/home');?> <br/><?php
    ?>
</div>
<div class="right_side"><!--right Col-->
    <div class="clear"></div>
    <div class="right_ads">
        <?php
            echo $this->renderPartial('container/right_ads', array('type' => 'normal','amount' => 6));
        ?>
    </div>
</div>
<div class="ad" url="http://www.cia-auction.com/home/upcoming_auctions.html">
    <a href="http://www.cia-auction.com/home/upcoming_auctions.html" target="_blank">
        <img src="/images/ad_images/east_tech_ind_banner.jpg" width="920" />
    </a>
</div>




