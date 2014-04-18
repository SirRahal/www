<?php
/* @var $this CustomersController */
/* @var $model Customers */

$this->breadcrumbs=array(
	'Customers'=>array('index'),
	$model->name=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Customers', 'url'=>array('index')),
	array('label'=>'Create Customers', 'url'=>array('create')),
	array('label'=>'View Customers', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Customers', 'url'=>array('admin')),
);
?>

<h1>Update Customers <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>