<?php
/* @var $this BtmlistingsController */
/* @var $model Btmlistings */

$this->breadcrumbs=array(
	'Update',
);


?>

<h1>Update Btmlistings <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>