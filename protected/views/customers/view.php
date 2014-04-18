<?php
/* @var $this CustomersController */
/* @var $model Customers */

$this->breadcrumbs=array(
	'Customers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Customers', 'url'=>array('index')),
	array('label'=>'Create Customers', 'url'=>array('create')),
	array('label'=>'Update Customers', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Customers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Customers', 'url'=>array('admin')),
);
?>

<h1>View Customers #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'name',
		'l_name',
		'email',
		'company',
		'address',
		'city',
		'state',
		'zip',
		'phone',
		'signed_up',
		'checked_in',
		'customer',
		'subscribed',
	),
)); ?>
