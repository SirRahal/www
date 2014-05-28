<?php
/* @var $this PlacementController */
/* @var $model Placement */

$this->breadcrumbs=array(
	'Placements'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Placement', 'url'=>array('index')),
	array('label'=>'Create Placement', 'url'=>array('create')),
	array('label'=>'View Placement', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Placement', 'url'=>array('admin')),
);
?>

<h1>Update Placement <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>