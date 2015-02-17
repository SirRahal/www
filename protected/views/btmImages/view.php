<?php
/* @var $this BtmimagesController */
/* @var $model Btmimages */

$this->breadcrumbs=array(
	'Btm Images'=>array('index'),
	$model->name,
);


?>

<h1>View Btmimages #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'btm_listing_ID',
		'name',
	),
)); ?>
