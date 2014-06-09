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

$my_picks = array('TBA','TBA','TBA','TBA','TBA','TBA','TBA','TBA','TBA','TBA','TBA','TBA','TBA','TBA','TBA','TBA');
?>


<ul id="nav">
    <li><a href="/index.php/site/index">test</a> </li>
</ul>

<div id="content"></div>
<script src="/js/general.js"></script>


<h1>My Picks</h1>

<p>Please fill out the following form with your login credentials:</p>
<div class="my_picks_div" id="my_picks" >
    <?php echo $this->renderPartial('container/my_picks_div', array('picks' => $my_picks));?>
</div>
<div class="clear"></div>
<div style="float: left;  z-index: 100;">
    <h3>South</h3>
    <div class="regional_div regional_div_south">
        <?php echo $this->renderPartial('container/region_buttons', array('region_ID' => 1)); ?>
    </div>
    <h3>East</h3>
    <div class="regional_div regional_div_east" >
        <?php echo $this->renderPartial('container/region_buttons', array('region_ID' => 3)); ?>
    </div>
</div>
<div style="float: right; z-index: 100;">
    <h3>West</h3>
    <div class="regional_div regional_div_west">
        <?php echo $this->renderPartial('container/region_buttons', array('region_ID' => 2)); ?>
    </div>
    <h3>Midwest</h3>
    <div class="regional_div regional_div_midwest" >
        <?php echo $this->renderPartial('container/region_buttons', array('region_ID' => 4)); ?>
    </div>
</div>

<script>
    $('.picks').buttonset();
</script>