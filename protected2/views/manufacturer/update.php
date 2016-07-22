<?php
/* @var $this ManufacturerController */
/* @var $model Manufacturer */

$this->breadcrumbs=array(
	'Manufacturers'=>array('index'),
	$model->name=>array('view','id'=>$model->ID),
	'Update',
);


?>

<h1>Update Manufacturer <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>