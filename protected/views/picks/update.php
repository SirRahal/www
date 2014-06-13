<?php
/* @var $this PicksController */
/* @var $model Picks */

$this->breadcrumbs=array(
	'Picks'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Picks', 'url'=>array('index')),
	array('label'=>'Create Picks', 'url'=>array('create')),
	array('label'=>'View Picks', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Picks', 'url'=>array('admin')),
);
?>

<h1>Update Picks <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>