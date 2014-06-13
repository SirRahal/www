<?php
/* @var $this PicksController */
/* @var $model Picks */

$this->breadcrumbs=array(
	'Picks'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Picks', 'url'=>array('index')),
	array('label'=>'Create Picks', 'url'=>array('create')),
	array('label'=>'Update Picks', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Picks', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Picks', 'url'=>array('admin')),
);
?>

<h1>View Picks #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'ticket_ID',
		'team_ID',
	),
)); ?>



