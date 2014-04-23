<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<div class="main_container"><!--left Col-->
    <?php
        echo $this->renderPartial('container/home');?> <br/><?php
        echo $this->renderPartial('container/auctions');
    ?>
</div>
<div class="right_ads"><!--right Col-->
    <?php
        echo $this->renderPartial('container/right_ads', array('type' => 'normal','amount' => 5));
    ?>
</div>
