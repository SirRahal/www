<?php
/* @var $this AdsController */
/* @var $model Ads */

$this->breadcrumbs=array(
	'Ads'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Ads', 'url'=>array('index')),
	array('label'=>'Create Ads', 'url'=>array('create')),
	array('label'=>'Update Ads', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Ads', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ads', 'url'=>array('admin')),
);
?>

<h1>View Ads #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'url',
		'img_name',
		'clicks',
		'end_date',
		'ad_type',
	),
)); ?>
