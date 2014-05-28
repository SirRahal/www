<?php
/* @var $this TournamentController */
/* @var $model Tournament */

$this->breadcrumbs=array(
	'Tournaments'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Tournament', 'url'=>array('index')),
	array('label'=>'Create Tournament', 'url'=>array('create')),
	array('label'=>'Update Tournament', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Tournament', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tournament', 'url'=>array('admin')),
);
?>

<h1>View Tournament #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'year',
	),
)); ?>
