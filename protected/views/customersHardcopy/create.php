<?php
/* @var $this CustomersHardcopyController */
/* @var $model CustomersHardcopy */

$this->breadcrumbs=array(
	'Customers Hardcopies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CustomersHardcopy', 'url'=>array('index')),
	array('label'=>'Manage CustomersHardcopy', 'url'=>array('admin')),
);
?>

<h1>Create CustomersHardcopy</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>