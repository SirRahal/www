<?php
/* @var $this BtmimagesController */
/* @var $model Btmimages */

$this->breadcrumbs=array(
	'Btm Images'=>array('index'),
	$model->name=>array('view','id'=>$model->ID),
	'Update',
);


?>

<h1>Update Btm Images <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>