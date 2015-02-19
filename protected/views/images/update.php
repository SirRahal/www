<?php
/* @var $this ImagesController */
/* @var $model Images */

$this->breadcrumbs=array(
	'Images'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Images', 'url'=>array('index')),
	array('label'=>'Create Images', 'url'=>array('create')),
	array('label'=>'View Images', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Images', 'url'=>array('admin')),
);
?>

<h1>Update Images <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>