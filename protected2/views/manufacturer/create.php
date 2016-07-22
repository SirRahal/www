<?php
/* @var $this ManufacturerController */
/* @var $model Manufacturer */

$this->breadcrumbs=array(
	'Manufacturers'=>array('index'),
	'Create',
);


?>

<h1>Create Manufacturer</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>