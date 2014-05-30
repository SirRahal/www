<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>


<!--round 2 left-->
<div class="roster">
    <div class="reagion_title_div_south"><h1 class="reagion_title">South</h1></div>
    <p class="reagion_title">Second Round</p>
<?php echo $this->renderPartial('container/round_2_bracket', array('region' => 1)); ?>
    <div class="reagion_title_div_east"><h1 class="reagion_title">East</h1></div>
    <?php echo $this->renderPartial('container/round_2_bracket', array('region' => 3)); ?>
</div>
<!--round 3 left-->
<div class="roster" style="margin-left: 32px; margin-top: 10px;">
    <p class="reagion_title">Third Round</p>
    <?php echo $this->renderPartial('container/round_3_bracket', array('region' => 1)); ?>
</div>
<!--round 2 right-->
<div class="roster float_right align_right">
    <p class="reagion_title">Second Round</p>
    <div class="reagion_title_div_west"><h1 class="reagion_title">West</h1></div>
    <?php echo $this->renderPartial('container/round_2_bracket', array('region' => 2)); ?>
    <div class="reagion_title_div_midwest"><h1 class="reagion_title">Midwest</h1></div>
    <?php echo $this->renderPartial('container/round_2_bracket', array('region' => 4)); ?>
</div>
<!--round 3 right-->
<div class="roster float_right align_right" style="margin-right: 32px; margin-top: 10px;">
    <p class="reagion_title">Third Round</p>
</div>
<div class="clear"></div>
<img src="/images/bracket.png" width="920"/>