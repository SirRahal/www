<?php
/* @var $this ItemsController */
/* @var $model Items */

$this->breadcrumbs=array(
	'Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Items', 'url'=>array('index')),
	array('label'=>'Manage Items', 'url'=>array('admin')),
);
?>

<h1>Create Items</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>