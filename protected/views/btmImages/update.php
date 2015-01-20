<?php
/* @var $this BtmimagesController */
/* @var $model Btmimages */

$this->breadcrumbs=array(
	'Btm Images'=>array('index'),
	$model->name=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Btmimages', 'url'=>array('index')),
	array('label'=>'Create Btmimages', 'url'=>array('create')),
	array('label'=>'View Btmimages', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Btmimages', 'url'=>array('admin')),
);
?>

<h1>Update Btm Images <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>