<?php
/* @var $this AdsController */
/* @var $model Ads */

$this->breadcrumbs=array(
	'Ads'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ads', 'url'=>array('index')),
	array('label'=>'Create Ads', 'url'=>array('create')),
	array('label'=>'View Ads', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Ads', 'url'=>array('admin')),
);
?>

<h1>Update Ads <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>