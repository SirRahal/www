<?php
/* @var $this BtmimagesController */
/* @var $model Btmimages */

$this->breadcrumbs=array(
	'Btm Images'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Btmimages', 'url'=>array('index')),
	array('label'=>'Create Btmimages', 'url'=>array('create')),
	array('label'=>'Update Btmimages', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Btmimages', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Btmimages', 'url'=>array('admin')),
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
