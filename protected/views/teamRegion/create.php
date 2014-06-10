<?php
/* @var $this TeamRegionController */
/* @var $model TeamRegion */

$this->breadcrumbs=array(
	'Team Regions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TeamRegion', 'url'=>array('index')),
	array('label'=>'Manage TeamRegion', 'url'=>array('admin')),
);
?>

<h1>Create TeamRegion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>