<?php
/* @var $this ListingsController */
/* @var $model Listings */

$this->breadcrumbs=array(
	'Listings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Listings', 'url'=>array('index')),
	array('label'=>'Manage Listings', 'url'=>array('admin')),
);
?>

<h1>Create Listings</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>