<?php
/* @var $this PicksController */
/* @var $model Picks */

$this->breadcrumbs=array(
	'Picks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Picks', 'url'=>array('index')),
	array('label'=>'Manage Picks', 'url'=>array('admin')),
);
?>

<h1>Create Picks</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>