<?php
/* @var $this BtmImagesController */
/* @var $model BtmImages */

$this->breadcrumbs=array(
	'Btm Images'=>array('index'),
	$model->name=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List BtmImages', 'url'=>array('index')),
	array('label'=>'Create BtmImages', 'url'=>array('create')),
	array('label'=>'View BtmImages', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage BtmImages', 'url'=>array('admin')),
);
?>

<h1>Update BtmImages <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>