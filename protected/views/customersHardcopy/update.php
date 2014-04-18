<?php
/* @var $this CustomersHardcopyController */
/* @var $model CustomersHardcopy */

$this->breadcrumbs=array(
	'Customers Hardcopies'=>array('index'),
	$model->name=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List CustomersHardcopy', 'url'=>array('index')),
	array('label'=>'Create CustomersHardcopy', 'url'=>array('create')),
	array('label'=>'View CustomersHardcopy', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage CustomersHardcopy', 'url'=>array('admin')),
);
?>

<h1>Update CustomersHardcopy <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>