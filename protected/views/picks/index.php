<?php
/* @var $this PicksController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Picks',
);

//this is a temp array to see if the data is being passed correctly
$my_picks = array('TBA','TBA','TBA','TBA','TBA','TBA','TBA','TBA','TBA','TBA','TBA','TBA','TBA','TBA','TBA','TBA');
?>

<h1>Picks</h1>

<script src="/js/general.js"></script>

<p>Please fill out the following form with your login credentials:</p>
<!--centered info needs to be updated by the user table-->
<div class="centered_div text_center">
    <div class="boxed">
        <?php echo Yii::app()->user->ID; ?> <!--echo out user-->
    </div>
    <div class="boxed">
        Entry 002-0123 <!--echo out ticket number-->
    </div>
    <div class="boxed" style="margin-top: 10px;">
        Harrison HS Basketball <!--echo out school-->
    </div>
    <br/>
    <div>
        FROM EACH OF THE 4 REGIONS<br/>PICK ONE OF EACH SEED<br/>TO MAKE YOUR BRACKET
    </div>
    <br/>
    <br/>
    <div>
        <h3>My Picks</h3>
    </div>
    <!--this div should be updated whenever a button is clicked on the page-->
    <div class="regional_div regional_div_my_picks" id="my_picks" >
        <?php echo $this->renderPartial('container/my_picks_div', array('picks' => $my_picks));?>
    </div>
</div>

<div class="clear"></div>

<!--the 4 regions with the 16 radio buttons in each-->
<div style="float: left;  z-index: 100;">
    <!--south region-->
    <h3>South Region</h3>
    <div class="regional_div regional_div_south">
        <?php echo $this->renderPartial('container/region_buttons', array('region_ID' => 1)); ?>
    </div>
    <!--east region-->
    <h3>East Region</h3>
    <div class="regional_div regional_div_east" >
        <?php echo $this->renderPartial('container/region_buttons', array('region_ID' => 3)); ?>
    </div>
</div>
<div style="float: right; z-index: 100;">
    <!--west region-->
    <h3>West Region</h3>
    <div class="regional_div regional_div_west">
        <?php echo $this->renderPartial('container/region_buttons', array('region_ID' => 2)); ?>
    </div>
    <!--midwest region-->
    <h3>Midwest Region</h3>
    <div class="regional_div regional_div_midwest" >
        <?php echo $this->renderPartial('container/region_buttons', array('region_ID' => 4)); ?>
    </div>
</div>

<script>
    /*set the div class picks to jqueries radio button set for css*/
    $('.picks').buttonset();

</script>