<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<div>
    <!--round 2 left-->
    <div class="roster">
        <div class="reagion_title_div_south"><h1 class="reagion_title">South</h1></div>
        <p class="reagion_title">Second Round</p>
    <?php echo $this->renderPartial('container/round_2_bracket', array('region_ID' => 1)); ?>
        <div class="reagion_title_div_east"><h1 class="reagion_title">East</h1></div>
        <?php echo $this->renderPartial('container/round_2_bracket', array('region_ID' => 3)); ?>
    </div>
    <!--round 3 left-->
    <div class="roster" style="margin-left: 32px; margin-top: 10px;">
        <p class="reagion_title">Third Round</p>
        <?php echo $this->renderPartial('container/round_3_bracket', array('region_ID' => 1)); ?>
        <div style="padding-top: 5px;">
            <?php echo $this->renderPartial('container/round_3_bracket', array('region_ID' => 3)); ?>
        </div>

    </div>
    <!--round 4 left-->
    <div  class="roster" style="margin-left: 40px; margin-top: 40px;">
        <p class="reagion_title">Fourth Round</p>
        <?php echo $this->renderPartial('container/round_4_bracket', array('region_ID' => 1)); ?>
        <div style="margin-top: 105px;">
            <?php echo $this->renderPartial('container/round_4_bracket', array('region_ID' => 3)); ?>
        </div>
    </div>
    <!--round 5 left-->
    <div  class="roster" style="margin-left: -55px; margin-top: 100px;">
        <p class="reagion_title">Fith Round</p>
        <?php echo $this->renderPartial('container/round_5_bracket', array('region_ID' => 1)); ?>
        <div style="margin-top: 215px;">
            <?php echo $this->renderPartial('container/round_5_bracket', array('region_ID' => 3)); ?>
        </div>
    </div>
    <!--round 6 middle-->
    <div  class="final_four" style="margin-top: 200px;">
        <p class="reagion_title" style="margin-left: 50px;">Sixth Round</p>
        <?php echo $this->renderPartial('container/round_6_bracket', array('region_ID' => 1)); ?>

    </div>
    <!--round 2 right-->
    <div class="roster float_right align_right">
        <p class="reagion_title">Second Round</p>
        <div class="reagion_title_div_west"><h1 class="reagion_title">West</h1></div>
        <?php echo $this->renderPartial('container/round_2_bracket', array('region_ID' => 2)); ?>
        <div class="reagion_title_div_midwest"><h1 class="reagion_title">Midwest</h1></div>
        <?php echo $this->renderPartial('container/round_2_bracket', array('region_ID' => 4)); ?>
    </div>
    <!--round 3 right-->
    <div class="roster float_right align_right" style="margin-right: 32px; margin-top: 10px;">
        <p class="reagion_title">Third Round</p>
        <?php echo $this->renderPartial('container/round_3_bracket', array('region_ID' => 2)); ?>
        <div style="padding-top: 5px;">
            <?php echo $this->renderPartial('container/round_3_bracket', array('region_ID' => 4)); ?>
        </div>
    </div>
    <!--round 4 right-->
    <div class="roster float_right align_right" style="margin-right: 40px; margin-top: 40px;">
        <p class="reagion_title">Fourth Round</p>
        <?php echo $this->renderPartial('container/round_4_bracket', array('region_ID' => 2)); ?>
        <div style="margin-top: 105px;">
        <?php echo $this->renderPartial('container/round_4_bracket', array('region_ID' => 4)); ?>
        </div>
    </div>
    <!--round 5 right-->
    <div  class="roster float_right align_right" style="margin-right: -50px; margin-top: 100px;">
        <p class="reagion_title">Fith Round</p>
        <?php echo $this->renderPartial('container/round_5_bracket', array('region_ID' => 2)); ?>
        <div style="margin-top: 215px;">
            <?php echo $this->renderPartial('container/round_5_bracket', array('region_ID' => 4)); ?>
        </div>
    </div>
</div>
<div class="clear"></div>
