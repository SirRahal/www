<?php
/* @var $this BtmImagesController */
/* @var $model BtmImages */

$this->breadcrumbs=array(
	'Btm Images'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List BtmImages', 'url'=>array('index')),
	array('label'=>'Create BtmImages', 'url'=>array('create')),
	array('label'=>'Update BtmImages', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete BtmImages', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BtmImages', 'url'=>array('admin')),
);
?>

<h1>View BtmImages #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'btm_listing_ID',
		'name',
	),
)); ?>
