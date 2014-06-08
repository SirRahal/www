<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 6/6/14
 * Time: 9:29 AM
 */
$this->pageTitle=Yii::app()->name . ' - My Picks';
$this->breadcrumbs=array(
    'My Picks',
);
?>

<h1>My Picks</h1>

<p>Please fill out the following form with your login credentials:</p>
<div style="position: absolute; width: 200px;z-index: 50; margin-left: 450px;">
    <?php echo $this->renderPartial('container/my_picks_div', array('picks' => array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16)));?>
</div>
<div class="clear"></div>
<div style="float: left;  z-index: 100;">
    <h3>South</h3>
    <div class="regional_div" style="background: #fffd6b;">
        <?php echo $this->renderPartial('container/region_buttons', array('region_ID' => 1)); ?>
    </div>
    <h3>East</h3>
    <div class="regional_div" style="background: #7eb9ef;">
        <?php echo $this->renderPartial('container/region_buttons', array('region_ID' => 3)); ?>
    </div>
</div>
<div style="float: right; z-index: 100;">
    <h3>West</h3>
    <div class="regional_div" style="background: #c57d7a;">
        <?php echo $this->renderPartial('container/region_buttons', array('region_ID' => 2)); ?>
    </div>
    <h3>Midwest</h3>
    <div class="regional_div" style="background: #60ff6a;">
        <?php echo $this->renderPartial('container/region_buttons', array('region_ID' => 4)); ?>
    </div>
</div>

<script>
    $('.picks').buttonset();


</script>