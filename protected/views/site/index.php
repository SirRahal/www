<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>


<!--round 2 left-->
<div class="roster">
    South
<?php echo $this->renderPartial('container/round_2_bracket', array('region' => 1)); ?>
    <br/>
    East
    <?php echo $this->renderPartial('container/round_2_bracket', array('region' => 3)); ?>
</div>
<!--round 3 left-->
<div class="roster" style="margin-left: 6px; margin-top: 10px;">
    Third Round

</div>
<!--round 2 right-->
<div class="roster float_right align_right">
    West
    <?php echo $this->renderPartial('container/round_2_bracket', array('region' => 2)); ?>
    <br/>
    Midwest
    <?php echo $this->renderPartial('container/round_2_bracket', array('region' => 4)); ?>
</div>
<!--round 3 right-->
<div class="roster float_right align_right">
</div>
<img src="/images/bracket.png" width="920"/>