<?php
/* @var $this RegionController */
/* @var $model Region */

$this->breadcrumbs=array(
	'Regions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Region', 'url'=>array('index')),
	array('label'=>'Manage Region', 'url'=>array('admin')),
);
?>

<h1>Create Region</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>