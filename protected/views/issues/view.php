<?php
/* @var $this IssuesController */
/* @var $model Issues */

$this->breadcrumbs=array(
	'Issues'=>array('index'),
	$model->ID,
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
