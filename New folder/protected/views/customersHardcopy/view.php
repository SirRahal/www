<?php
/* @var $this CustomersHardcopyController */
/* @var $model CustomersHardcopy */

$this->breadcrumbs=array(
	'Customers Hardcopies'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List CustomersHardcopy', 'url'=>array('index')),
	array('label'=>'Create CustomersHardcopy', 'url'=>array('create')),
	array('label'=>'Update CustomersHardcopy', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete CustomersHardcopy', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CustomersHardcopy', 'url'=>array('admin')),
);
?>

<h1>View CustomersHardcopy #<?php echo $model->ID; ?></h1>

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
		'terms',
	),
)); ?>
