<?php
/* @var $this ListingsController */
/* @var $model Listings */

$this->breadcrumbs=array(
	'Listings'=>array('admin'),
	'Create',
);


?>

<h1>Create Listings</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>