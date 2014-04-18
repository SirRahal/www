<?php
/* @var $this IssuesController */
/* @var $model Issues */

$this->breadcrumbs=array(
	'Issues'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Issues', 'url'=>array('index')),
	array('label'=>'Create Issues', 'url'=>array('create')),
	array('label'=>'View Issues', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Issues', 'url'=>array('admin')),
);
?>

<h1>Update Issues <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>