<?php
/* @var $this ListingsController */
/* @var $model Listings */

$this->breadcrumbs=array(
	'Listings'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Listings', 'url'=>array('index')),
	array('label'=>'Create Listings', 'url'=>array('create')),
	array('label'=>'View Listings', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Listings', 'url'=>array('admin')),
);
?>

<h1>Update Listings <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>