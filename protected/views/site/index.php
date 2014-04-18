<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>



<div><!--left Col-->
    <?php
        echo $this->renderPartial('container/home');?>

</div>
<div><!--right Col-->
    <?php
    echo $this->renderPartial('container/right_ads');
    ?>
</div>
