<?php
/* @var $this PlacementController */
/* @var $model Placement */

$this->breadcrumbs=array(
	'Placements'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Placement', 'url'=>array('index')),
	array('label'=>'Manage Placement', 'url'=>array('admin')),
);
?>

<h1>Create Placement</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>