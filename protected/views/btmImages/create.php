<?php
/* @var $this BtmImagesController */
/* @var $model BtmImages */

$this->breadcrumbs=array(
	'Btm Images'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BtmImages', 'url'=>array('index')),
	array('label'=>'Manage BtmImages', 'url'=>array('admin')),
);
?>

<h1>Create BtmImages</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>