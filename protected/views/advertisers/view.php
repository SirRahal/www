<?php
/* @var $this AdvertisersController */
/* @var $model Advertisers */

$this->breadcrumbs=array(
	'Advertisers'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Advertisers', 'url'=>array('index')),
	array('label'=>'Create Advertisers', 'url'=>array('create')),
	array('label'=>'Update Advertisers', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Advertisers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Advertisers', 'url'=>array('admin')),
);
?>

<h1>View Advertisers #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'company',
		'state',
		'zip',
		'email',
		'category',
		'first',
		'last',
		'phone1',
		'phone2',
		'phone3',
		'url',
	),
)); ?>
