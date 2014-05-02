<?php
/* @var $this AdvertisersController */
/* @var $model Advertisers */

$this->breadcrumbs=array(
	'Advertisers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Advertisers', 'url'=>array('index')),
	array('label'=>'Manage Advertisers', 'url'=>array('admin')),
);
?>

<h1>Create Advertisers</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>