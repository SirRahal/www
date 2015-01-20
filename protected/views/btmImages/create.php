<?php
/* @var $this BtmimagesController */
/* @var $model Btmimages */

$this->breadcrumbs=array(
	'Btm Images'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Btmimages', 'url'=>array('index')),
	array('label'=>'Manage Btmimages', 'url'=>array('admin')),
);
?>

<h1>Create Btm Images</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>