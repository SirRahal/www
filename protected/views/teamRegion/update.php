<?php
/* @var $this TeamRegionController */
/* @var $model TeamRegion */

$this->breadcrumbs=array(
	'Team Regions'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List TeamRegion', 'url'=>array('index')),
	array('label'=>'Create TeamRegion', 'url'=>array('create')),
	array('label'=>'View TeamRegion', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage TeamRegion', 'url'=>array('admin')),
);
?>

<h1>Update TeamRegion <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>