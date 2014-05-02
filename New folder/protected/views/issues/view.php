<?php
/* @var $this IssuesController */
/* @var $model Issues */

$this->breadcrumbs=array(
	'Issues'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Issues', 'url'=>array('index')),
	array('label'=>'Create Issues', 'url'=>array('create')),
	array('label'=>'Update Issues', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Issues', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Issues', 'url'=>array('admin')),
);
?>

<h1>View Issues #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'date',
		'info',
		'img',
		'url',
		'clicks',
	),
)); ?>
