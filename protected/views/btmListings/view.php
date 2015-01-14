<?php
/* @var $this BtmListingsController */
/* @var $model BtmListings */

$this->breadcrumbs=array(
	'Btm Listings'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List BtmListings', 'url'=>array('index')),
	array('label'=>'Create BtmListings', 'url'=>array('create')),
	array('label'=>'Update BtmListings', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete BtmListings', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BtmListings', 'url'=>array('admin')),
);
?>

<h1>View BtmListings #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'auction_ID',
		'lot',
		'description',
		'manufacturer',
		'model',
		'more_info',
		'condition',
	),
)); ?>
